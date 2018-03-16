<?php

namespace Patterns\Structural\Proxy\GhostObject;

use Patterns\Structural\Proxy\Account;
use Patterns\Structural\Proxy\FileSystemMock;

class AccountGhostObject extends Account
{
    /**
     * @var string
     */
    private $username;
    /**
     * @var Account
     */
    private $wrapped;
    /**
     * @var FileSystemMock
     */
    private $filesystem;

    /**
     * GitHubProxy constructor.
     * @param FileSystemMock $filesystem
     * @param string $username
     */
    public function __construct(FileSystemMock $filesystem, string $username)
    {
        $this->username = $username;
        $this->filesystem = $filesystem;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        $this->initialize();

        return parent::getFirstName();
    }

    protected function initialize(): void
    {
        if (is_null($this->wrapped)) {
            parent::__construct($this->filesystem, $this->username);
        }
    }
}