<?php

namespace Peugeot;

class Car
{
    private $portes;
    private $make;
    
    public function __construct($data)
    {
        $this->hydrate($data);
    }

    private function hydrate($data)
    {
        foreach($data as $key => $value){
            $setter = 'set' . ucfirst($key);

            if(method_exists($this, $setter)){
                $this->$setter($value);
            }
        }
    }

    public function setPortes($portes)
    {
        $this->portes = $portes;
        return $this;
    }

    public function getPortes()
    {
        return $this->portes;
    }

    public function setMalke($make)
    {
        $this->make = $make;
        return $this;
    }

    public function getMake()
    {
        return $this->make;
    }
}