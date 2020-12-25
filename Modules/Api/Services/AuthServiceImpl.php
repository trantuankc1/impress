<?php

namespace Modules\Api\Services;

use App\Exceptions\ApiException;
use Modules\Api\Constants\UserStatus;
use Modules\Api\Contracts\Repositories\Mysql\UserRepository;
use Modules\Api\Contracts\Securities\AuthenticationManager;
use Modules\Api\Contracts\Services\AuthService;
use Modules\Api\Repositories\Auth;
use Modules\Api\Repositories\Parameters\AuthLoginParam;
use Modules\Api\Securities\Authentications\BasicAuthentication;

class AuthServiceImpl implements AuthService
{
    /** @var AuthenticationManager */
    private $authenticationManager;

    /** @var UserRepository */
    private $userRepository;

    public function __construct(AuthenticationManager $authenticationManager, UserRepository $userRepository)
    {
        $this->authenticationManager = $authenticationManager;
        $this->userRepository = $userRepository;
    }

    /**
     * Login service
     *
     * @param AuthLoginParam $param
     * @return Auth
     */
    public function login(AuthLoginParam $param): Auth
    {
        $basicAuth = new BasicAuthentication("api", $param->email, $param->password);
        $authenticatedObject = $this->authenticationManager->authenticate($basicAuth);
        if ($authenticatedObject->getUserDetails()->status === UserStatus::INACTIVE) {
            throw ApiException::forbidden('Your account has been disabled');
        }

        /** @var Auth $authToken */
        $authToken = $authenticatedObject->getAuthenticatedCertificates();

        return $authToken;
    }
}
