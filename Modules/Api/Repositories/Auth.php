<?php

namespace Modules\Api\Repositories;

class Auth
{
    /** @var string */
    public $token;

    /**
     * AuthModel constructor.
     *
     * @param string $token
     * @return void
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public static function guard(string $string)
    {

    }

    public function toArray(): array
    {
        return [
            'token' => $this->token
        ];
    }
}
