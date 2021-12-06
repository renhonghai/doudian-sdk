<?php

namespace AK\DoudianSDK\Entities;

class DoudianOpResponse extends BaseEntity
{
    private $code;

    private $msg;

    private $message;

    private $sub_code;

    private $sub_msg;

    private $err_no;

    private $log_id;

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
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg($msg): void
    {
        $this->msg = $msg;
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
     * @return mixed
     */
    public function getSubCode()
    {
        return $this->sub_code;
    }

    /**
     * @param mixed $sub_code
     */
    public function setSubCode($sub_code): void
    {
        $this->sub_code = $sub_code;
    }

    /**
     * @return mixed
     */
    public function getSubMsg()
    {
        return $this->sub_msg;
    }

    /**
     * @param mixed $sub_msg
     */
    public function setSubMsg($sub_msg): void
    {
        $this->sub_msg = $sub_msg;
    }

    /**
     * @return mixed
     */
    public function getErrNo()
    {
        return $this->err_no;
    }

    /**
     * @param mixed $err_no
     */
    public function setErrNo($err_no): void
    {
        $this->err_no = $err_no;
    }

    /**
     * @return mixed
     */
    public function getLogId()
    {
        return $this->log_id;
    }

    /**
     * @param mixed $log_id
     */
    public function setLogId($log_id): void
    {
        $this->log_id = $log_id;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

}