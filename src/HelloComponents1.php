<?php
namespace Weatherpi\component1;

class HelloComponents1
{
    protected $name = "components1";

    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = '$name';
    }
}
