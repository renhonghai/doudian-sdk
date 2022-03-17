<?php

namespace AK\DoudianSDK\Entities;

use AK\DoudianSDK\Constants\ResponseConstant;
use AK\DoudianSDK\Entities\Response\SpiDataResponse;

class DoudianOpSpiResponse extends BaseEntity
{

    public function __construct(?array $items = [])
    {
        parent::__construct($items ?: [
            'code' => ResponseConstant::CODE_SUCCESS,
            'message' => '请求成功',
            'data' => new SpiDataResponse()
        ]);
    }

    private $code;

    private $message;

    /**
     * @var SpiDataResponse | null $data
     */
    private $data;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return SpiDataResponse|null
     */
    public function getData(): ?SpiDataResponse
    {
        return $this->data;
    }

    /**
     * @param SpiDataResponse|null $data
     */
    public function setData(?SpiDataResponse $data): void
    {
        $this->data = $data;
    }

}
