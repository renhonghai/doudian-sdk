<?php

namespace AK\DoudianSDK\Entities\Param\Spi;

use AK\DoudianSDK\Entities\BaseEntity;

class NotifyAccountParam extends BaseEntity
{

    /**
     * @var string $account_name
     */
    private $account_name;

    /**
     * @var string $encrypt_account_val
     */
    private $encrypt_account_val;

    /**
     * @var string $account_type
     */
    private $account_type;

    /**
     * @return string
     */
    public function getAccountName(): string
    {
        return $this->account_name;
    }

    /**
     * @param string $account_name
     */
    public function setAccountName(string $account_name): void
    {
        $this->account_name = $account_name;
    }

    /**
     * @return string
     */
    public function getEncryptAccountVal(): string
    {
        return $this->encrypt_account_val;
    }

    /**
     * @param string $encrypt_account_val
     */
    public function setEncryptAccountVal(string $encrypt_account_val): void
    {
        $this->encrypt_account_val = $encrypt_account_val;
    }

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->account_type;
    }

    /**
     * @param string $account_type
     */
    public function setAccountType(string $account_type): void
    {
        $this->account_type = $account_type;
    }

}