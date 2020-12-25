<?php

namespace Modules\Api\Transformers;

use Illuminate\Http\Request;

/**
 * @OA\Schema(
 *     properties={
 *          @OA\Property(
 *              property="meta",
 *              ref="#/components/schemas/MetaResource"
 *          ),
 *          @OA\Property(
 *              property="data",
 *              type="array",
 *              @OA\Items(
 *                  @OA\Property(property="token", type="string")
 *              )
 *          )
 *     }
 * )
 */
class AuthResource extends SuccessResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
