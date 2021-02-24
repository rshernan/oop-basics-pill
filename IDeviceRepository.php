<?php
interface IDeviceRepository
{
    public function create($device);
    public function findById($deviceId);
}
