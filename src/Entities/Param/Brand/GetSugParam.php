<?php

namespace AK\DoudianSDK\Entities\Param\Brand;

use AK\DoudianSDK\Entities\BaseEntity;


class GetSugParam extends BaseEntity
{

    public $query;

    public $user_id;

    public $filter_info;

    public $read_old;

    public $biz_types;

    public $enable_deduplicate;

    public $extra_config;

    /**
     * @return mixed
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param mixed $query
     */
    public function setQuery($query): void
    {
        $this->query = $query;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getFilterInfo()
    {
        return $this->filter_info;
    }

    /**
     * @param mixed $filter_info
     */
    public function setFilterInfo($filter_info): void
    {
        $this->filter_info = $filter_info;
    }

    /**
     * @return mixed
     */
    public function getReadOld()
    {
        return $this->read_old;
    }

    /**
     * @param mixed $read_old
     */
    public function setReadOld($read_old): void
    {
        $this->read_old = $read_old;
    }

    /**
     * @return mixed
     */
    public function getBizTypes()
    {
        return $this->biz_types;
    }

    /**
     * @param mixed $biz_types
     */
    public function setBizTypes($biz_types): void
    {
        $this->biz_types = $biz_types;
    }

    /**
     * @return mixed
     */
    public function getEnableDeduplicate()
    {
        return $this->enable_deduplicate;
    }

    /**
     * @param mixed $enable_deduplicate
     */
    public function setEnableDeduplicate($enable_deduplicate): void
    {
        $this->enable_deduplicate = $enable_deduplicate;
    }

    /**
     * @return mixed
     */
    public function getExtraConfig()
    {
        return $this->extra_config;
    }

    /**
     * @param mixed $extra_config
     */
    public function setExtraConfig($extra_config): void
    {
        $this->extra_config = $extra_config;
    }

}
