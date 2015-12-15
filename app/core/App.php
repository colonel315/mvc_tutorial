<?php
/**
 * Created by PhpStorm.
 * User: Trey
 * Date: 12/14/2015
 * Time: 3:47 PM
 */

class App {

    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];

    /**
     * php constructor, takes the parsed url, checks to see if the url has a controller and a method specified
     * and redirects them to the correct page. (handles routing)
     */
    public function __construct() {
        $url = $this->parseUrl();

        if(file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this-> controller = new $this->controller;

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        /**
         * if(!isEmpty($url)) {
         *     $this->params = array_values($url);
         * }
         * else {
         *     $this->params = [];
         * }
         */
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);


    }

    /**
     * takes the url, separates it at the '/', sanitizes the url, then trims off any white space and '/'.
     * @return array - url parts
     */
    public function parseUrl() {
        if(isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}

