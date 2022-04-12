<?php

namespace M2i\Poo\Entity;

class Contact
{
    private $name;
    private $email;

    public function getName()
    {   
        return $this->name; 
    }

    public function setName($name)
    {   
        $this->name = $name;
        return $this; 
    }

    public function getEmail()
    {   
        return $this->email; 
    }

    public function setEmail($email)
    {   
        $this->email = $email;
        return $this; 
    }

}