<?php

namespace Patterns\Structural\Proxy\SmartReference;

use Patterns\Structural\Proxy\Account;
use Patterns\Structural\Proxy\AccountInterface;
use Patterns\Structural\Proxy\Cache;

class AccountCachingProxy implements AccountInterface
{
    /**
     * @var Account
     */
    private $account;
    /**
     * @var Cache
     */
    private $cache;

    /**
     * GitHubProxy constructor.
     * @param Account $account
     * @param Cache $cache
     */
    public function __construct(Account $account, Cache $cache)
    {
        $this->account = $account;
        $this->cache = $cache;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        if ($cached = $this->cache->get('firstName'))
        {
            return $cached;
        }

        $firstName = $this->account->getFirstName();

        $this->cache->set('firstName', $firstName);

        return $firstName;
    }
}