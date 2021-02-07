<?php

namespace Modules\Api\Clients;

use App\Exceptions\ApiException;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Modules\Api\Contracts\Clients\StorageClient;

/**
 * Represents methods interacting with the StorageClient service.
 */
class StorageClientImpl implements StorageClient
{
    /**
     * @var StorageClient
     */
    private $storageClient;

    /**
     * StorageClientImpl constructor.
     */
    public function __construct()
    {
        $this->setStorageClient(config('filesystems.default'));
    }

    /**
     * Set config StorageClient.
     *
     * @param string $disk Filesystem disk.
     * @return ApiException|void
     */
    private function setStorageClient(string $disk): void
    {
        $disks = config('filesystems.disks');
        if (empty($disks[$disk])) {
            throw ApiException::serviceUnavailable();
        }

        $this->storageClient = Storage::disk($disk);
    }

    /**
     * Get image url.
     *
     * @param string $path Storage path.
     * @param string $name File name.
     * @return string
     */
    public function getImageUrl(string $path, string $name): string
    {
        $key = $this->generateFileName($path, $name);

        return $this->storageClient->url($key);
    }

    /**
     * Get temporary url of image on AWS S3.
     *
     * @param string $path Storage path.
     * @param string $name File name.
     * @return string
     */
    public function getS3TemporaryUrl(string $path, string $name): string
    {
        return $this->storageClient->temporaryUrl(
            $this->generateFileName($path, $name),
            Carbon::now()->addMinutes(30)
        );
    }

    /**
     * Generate file name from path and end name.
     *
     * @param string $path Storage path.
     * @param string $name File name.
     * @return string
     */
    private function generateFileName(string $path, string $name): string
    {
        return sprintf('%s/%s', $path, $name);
    }

    /**
     * Upload file.
     *
     * @param object $file File object.
     * @param string $path Storage path.
     * @param boolean $isRename Is rename file.
     * @return array
     */
    public function uploadFile(object $file, string $path, bool $isRename = true): array
    {
        try {
            $dataInfo = $this->getFileInfo($file);
            $dataInfo['path'] = $path;
            $dataInfo['name'] = $this->getFileName($file, $isRename);
            $key = $this->generateFileName($path, $dataInfo['name']);
            $this->storageClient->put($key, file_get_contents($file), 'public');

            return $dataInfo;
        } catch (\Exception $e) {
            \Log::error('[ERROR_UPLOAD_FILE] =>' . $e->getMessage());

            return [];
        }//end try
    }

    /**
     * Get file name.
     *
     * @param object $file File object.
     * @param boolean $isRename Is rename file.
     * @return string
     */
    private function getFileName(object $file, bool $isRename = true): string
    {
        $fileName = $file->getClientOriginalName();
        if ($isRename) {
            $fileName = encryptFileName(randomString(), $file->getClientOriginalExtension());
        }
        
        return $fileName;
    }

    /**
     * Get file info.
     *
     * @param object $file File object.
     * @return array
     */
    private function getFileInfo(object $file): array
    {
        $imageSize = getimagesize($file);
        $size = null;
        if ($imageSize) {
            $size = $imageSize[0] . 'x' . $imageSize[1];
        }
        
        return [
            'size' => $size,
            'type' => $file->getClientOriginalExtension()
        ];
    }

    /**
     * Delete file.
     *
     * @param string $name File name.
     * @param string $path Storage path.
     * @return bool
     */
    public function deleteFile(string $name, string $path): bool
    {
        try {
            $key = $this->generateFileName($path, $name);

            return $this->storageClient->delete($key);
        } catch (\Exception $e) {
            \Log::error('[ERROR_DELETE_FILE] =>' . $e->getMessage());

            return false;
        }
    }
}
