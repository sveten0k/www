<?php

/*class Pet
{
    public $name;
    public $type = "unknown";

    function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    function __destruct()
    {
        echo "Object deleted\n";
        // TODO: Implement __destruct() method.
    }

    function say($word)
    {
        echo $this->name . " said $word\n";
        $this->drawLine();
    }

    function drawLine()
    {
        echo "<hr>";
    }
}

$cat = new Pet("Murzik", "cat");
$dog = new Pet("Tuzik", "dog");

$cat->say("Myau");
$dog->say("Gav");*/

class ParentClass
{
    public $public = 1;
    protected $protected = 2;
    private $private = 3;

    function getProtected()
    {
        return $this->protected;
    }

    function getPrivate()
    {
        return $this->private;

    }
}

/*$parent = new ParentClass();
echo $parent->public;
echo $parent->getProtected();
echo $parent->getPrivate();*/

class ChildClass{
    function getParentProtected(){
        return $this->protected;
    }
    function getParentPrivate(){
        return $this->private;
    }
    function getRealParentPrivate(){
        return $this->getPrivate();
    }
}
$child = new ChildClass();
echo $child->getParentProtected();
echo $child->getRealParentPrivate();