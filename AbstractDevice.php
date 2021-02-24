<?php
abstract class AbstractDevice
{
    private $id;
    private $serialNumber;

    public function __construct($id, $serialNumber)
    {
        $this->id = $id;
        $this->serialNumber = $serialNumber;
    }

    public abstract function getDetail($deviceId);

    public function getId()
    {
        return $this->id;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
}
