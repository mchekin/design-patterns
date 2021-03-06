<?php

namespace Patterns\Structural\Proxy\GhostObject;

use Patterns\Structural\Proxy\Account;
use Patterns\Structural\Proxy\AccountInterface;
use Patterns\Structural\Proxy\FileSystem;

class AccountGhostObject implements AccountInterface
{
    /**
     * @var string
     */
    private $username;
    /**
     * @var FileSystem
     */
    private $filesystem;
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
        $this->username = $username;
        $this->filesystem = $filesystem;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        $this->initialize();

        return $this->data['firstName'] ?? '';
    }

    /**
     *  The parent object is initialized on
     */
    protected function initialize(): void
    {
        if (is_null($this->data)) {
            $account = new Account($this->filesystem, $this->username);
            $this->data = $account->getData();
        }
    }
}