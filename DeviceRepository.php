<?php
class DeviceRepository implements IDeviceRepository
{
    private $repositories = [];

    public function create($device)
    {
        array_push($this->repositories, $device);
    }

    public function findById($deviceId)
    {
        foreach ($this->repositories as $key => $value) {
            if ($value->getId() == $deviceId) {
                return $value;
            }
        }
    }
}
