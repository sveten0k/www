<?php

class Favorites
{
    private $plugins = [];

    function __construct()
    {
        $isExists = false;
        foreach (glob("classes/*/*.class.php") as $item) {
            if (is_file($item)) {
                include_once($item);
                $isExists = true;
            }
        }
        if ($isExists) $this->findPlugins();
    }

    private function findPlugins()
    {
        foreach (get_declared_classes() as $class) {
            $rc = new ReflectionClass($class);
            if ($rc->implementsInterface("IPlugin"))
                $this->plugins[] = $rc;
        }
    }

    function getFavorites($methodName)
    {
        $list = [];
        $items = [];
        foreach ($this->plugins as $rc):
            if ($rc->hasMethod($methodName)):
                $rm = $rc->getMethod($methodName);
                if ($rm->isStatic())
                    $items = $rm->invoke(null);
                else
                    $items = $rm->invoke($rc->newInstance());
                $list[]=$items;
            endif;
        endforeach;
        return $list;
    }
}
