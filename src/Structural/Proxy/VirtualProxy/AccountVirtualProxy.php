<?php

namespace Patterns\Structural\Proxy\VirtualProxy;


use Patterns\Structural\Proxy\Account;
use Patterns\Structural\Proxy\AccountInterface;
use Patterns\Structural\Proxy\FileSystem;

class AccountVirtualProxy implements AccountInterface
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
     * @var FileSystem
     */
    private $filesystem;

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

        return $this->wrapped->getFirstName();
    }

    protected function initialize(): void
    {
        if (is_null($this->wrapped)) {
            $this->wrapped = new Account($this->filesystem, $this->username);
        }
    }
}