<?php

namespace Patterns\Structural\Proxy\ProtectionProxy;

use Patterns\Structural\Proxy\Account;
use Patterns\Structural\Proxy\AccountInterface;

class AccountProtectionProxy implements AccountInterface
{
    /**
     * @var Account
     */
    private $account;
    /**
     * @var int
     */
    private $accessLimit;
    /**
     * @var int
     */
    private $accessCount = 0;

    /**
     * GitHubProxy constructor.
     * @param Account $account
     * @param int $accessLimit
     */
    public function __construct(Account $account, int $accessLimit)
    {
        $this->account = $account;
        $this->accessLimit = $accessLimit;
    }

    /**
     * @return string
     * @throws AccessLimitReachedException
     */
    public function getFirstName(): string
    {
        $this->checkLimit();

        return $this->account->getFirstName();
    }

    /**
     * @throws AccessLimitReachedException
     */
    protected function checkLimit(): void
    {
        if (++$this->accessCount > $this->accessLimit) {
            throw new AccessLimitReachedException("Account data access limit reached!");
        }
    }
}