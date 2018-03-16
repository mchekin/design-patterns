<?php

namespace Patterns\Structural\Proxy;


class Account implements AccountInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * GitHubProxy constructor.
     * @param FileSystemMock $filesystem
     * @param string $username
     */
    public function __construct(FileSystemMock $filesystem, string $username)
    {
        $this->data = $filesystem->getData($username);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->data['firstName'] ?? '';
    }
}