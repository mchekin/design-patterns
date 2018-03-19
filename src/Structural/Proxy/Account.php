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
     * @param FileSystem $filesystem
     * @param string $username
     */
    public function __construct(FileSystem $filesystem, string $username)
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

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}