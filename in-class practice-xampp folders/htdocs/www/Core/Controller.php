<?php

namespace Core;

/**
 * Base controller
 */
abstract class Controller {
    /**
     * parameters from the matched route
     * @var array
     */
    protected $route_params = [];

    /**
     * class constructor
     * @param array $route_params Parameters from the route
     * @return void
     */
    public function __construct($route_params) {
        $this->route_params = $route_params;
    }
    
    /**
     *
     * @param string $name Method name
     * @param array $args Arguments passed to the method
     * 
     * @return void
     */
    // test in Home.php
    public function __call($name, $args) {
        $method = $name . 'Action';
        if (method_exists($this, $method)) {
            if ($this ->before() !== false) {
                call_user_func_array([$this, $method], $args);
                $this->after();
            }
        } else {
            echo "Method $method not found in controller " . get_class($this);
        }
    }

    /**
     * before filter - called before an action method
     * @return void
     */
    protected function before() {
    }

    /**
     * after filter - called after an action method
     * @return void
     */
    protected function after() {
    }

}