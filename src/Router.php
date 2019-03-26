<?php

namespace SON;

class Router implements \ArrayAccess {

    private $routes = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function offsetExists($offset)
    {
        return isset($this->routes[$offset]);
    }


    public function offsetGet($offset)
    {
        return $this->routes[$offset];
    }


    public function offsetSet($offset, $value)
    {
        $this->routes[$offset] = $value;
    }


    public function offsetUnset($offset)
    {
        unset($this->routes[$offset]);
    }
}

























