<?php

namespace AK\DoudianSDK\Exceptions;

use AK\DoudianSDK\Constants\ErrNoConstant;
use Exception;
use Throwable;

class DoudianSDKException extends Exception
{

    /**
     * @var string $detailMessage
     */
    private $detailMessage;

    /**
     * @var string $subCode;
     */
    private $subCode;

    public function __construct($code = 0, $subCode = '', $message = '', $detailMessage = '')
    {
        $this->subCode = $subCode;

        $message = $message ?: ErrNoConstant::getMessage($code);
        $this->detailMessage = $detailMessage ?: ErrNoConstant::getDetailMessage($code, $subCode);

        parent::__construct($message ?: $subCode, $code);
    }

    public function getDetailMessage(): string
    {
        return $this->detailMessage;
    }

    public function getSubCode(): string
    {
        return $this->subCode;
    }

}