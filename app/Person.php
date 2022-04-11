<?php

namespace M2I\Person;

trait Timestampable
{
    private $created_at;
    
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
}
interface MakeSoundInterface
{
    public function makeSound();
}

abstract class AbstractAction
{
    public function walk()
    {
        echo 'walking';

        return $this;
    }
}

class Animal extends AbstractAction implements MakeSoundInterface
{
    private $pattes = 0;

    public function makeSound()
    {
        echo 'Bark bark';
        return $this;
    }
}

class Person extends AbstractAction implements MakeSoundInterface
{
    use Timestampable;

    private $name = 'Yazid';
    private $age = 25;
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function makeSound()
    {
        echo 'Hello';
        return $this;
    }
}

$someone = new Person;


var_dump(get_class($someone));



