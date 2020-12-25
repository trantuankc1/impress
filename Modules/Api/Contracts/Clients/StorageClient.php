<?php

namespace Modules\Api\Contracts\Clients;

interface StorageClient
{
    /**
     * @param string $filePath
     * @param string $fileName
     * @return string
     */
    public function uploadPublicFile(string $filePath, string $fileName): string;

    /**
     * @param string $fileUrl
     * @param string $fileName
     * @return string
     */
    public function uploadPublicFileFromUrl(string $fileUrl, string $fileName): string;
}
