<?php

require_once __DIR__.'/SerialActivationStatusEnum.php';

class SerialActivationOutputDTO
{
    public $sign;

    public $key;

    public $serial;

    public $userName;

    public $status;

    public $serialPeriod;

    public $serialActivatedAt;

    public $pcHash;

    public $productName;

    public function __construct(
        string $status,
        string $userName = "",
        string $serial = "",
        string $sign = "",
        string $publicKey = "",
        int    $serialPeriod = 0,
        string $serialActivatedAt = "",
        string $productName = "",
        string $pcHash = ""
    ) {
        $this->sign = $sign;
        $this->key = $publicKey;
        $this->status = $status;
        $this->userName = $userName;
        $this->serial = $serial;
        $this->serialPeriod = $serialPeriod;
        $this->serialActivatedAt=$serialActivatedAt;
        $this->productName = $productName;
        $this->pcHash = $pcHash;
    }

    public static function ofStatus($status)
    {
        return new SerialActivationOutputDTO($status);
    }

    public function getSerial(): string
    {
        return $this->serial;
    }

    public function getSign(): string
    {
        return $this->sign;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getSerialPeriod()
    {
        return $this->serialPeriod;
    }

    public function getSerialActivatedAt(): string
    {
        return $this->serialActivatedAt;
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function getPcHash(): string
    {
        return $this->pcHash;
    }
}