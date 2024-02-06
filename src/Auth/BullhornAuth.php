<?php
namespace Auth;

use Exceptions\BadCredentials;
use Exceptions\PropertyNotSet;

class BullhornAuth
{
    private string $requestUrl;
    private string $clientId;
    private string $clientSecret;
    private string $userName;
    private string $password;

    private string $redirectUrl;

    private AuthType $authType;

    public function __construct(string $clientId, string $clientSecret)
    {
        $this->setClientId($clientId);
        $this->setClientSecret($clientSecret);
    }

    public function determineUrl(): string
    {
        $username = $this->getUserName();


    }

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId): void
    {
        if (empty($clientId)) {
            throw new BadCredentials('Client Id is empty');
        }
        $this->clientId = $clientId;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret(string $clientSecret): void
    {
        if (empty($clientSecret)) {
            throw new BadCredentials('Client Secret is empty');
        }
        $this->clientSecret = $clientSecret;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        if (empty($userName)) {
            throw new BadCredentials('Username is empty');
        }
        $this->userName = $userName;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        if (empty($password)) {
            throw new BadCredentials('Username is empty');
        }
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        if (!isset($this->userName)) {
            throw new PropertyNotSet('Username is not set');
        }
        return $this->userName;
    }
}