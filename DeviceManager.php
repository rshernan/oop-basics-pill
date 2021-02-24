<?php
class DeviceManager
{

    public function addDevice($repository, $device)
    {
        $repository->crete($device);
    }

    public function getSerialNumber($device)
    {
        $device->getSerialNumber();
    }
}
