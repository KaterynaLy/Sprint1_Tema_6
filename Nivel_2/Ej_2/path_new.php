<?php
class Path
{
    private $path;
    public function __construct()
    {
        $this->path = $path;
    }
    public function getFile()
    {
        return pathinfo($this->path, PATHINFO_FILENAME);
    }
    public function getDirection()
    {
        return pathinfo($this->path, PATHINFO_EXTENSION);
    }
}