<?php

    /** Router */
    class Router {
        protected $routes = [];
        protected $params = [];

        public function add($route, $params = []) {
            //Convert the route to a regular expression: escape forward slashes
            $route = preg_replace('/\//', '\\/', $route);

            //Convert variables e.g {controller}
            $route = preg_replace('/\{([a-z]+)\}/', '(?<\1>[a-z-]+)', $route);

            //Convert variables with custom regular expression e.g {id:\id+}
            $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);

            //Add start and end delimiteres, and case intensive flag
            $route = '/^' . $route . '$/i';
            $this->routes[$route] = $params;
        }

        public function getRoutes() {
            return $this->routes;
        }

        public function match($url) {
            // Match to the fixed URL fixed URL format /controller/action
            //$reg_exp="/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";
            foreach ($this->routes as $route => $params) {
                if (preg_match($route, $url, $matches)) {
                    //Get named capture groups values
                    //$params=[]
                    foreach ($matches as $key => $match) {
                        if (is_string($key)) {
                            $params[$key] = $match;
                        }
                    }
                    $this->params = $params;
                    return true;
                }
            }
            return false;
        }

        public function getParams() {
            return $this->params;
        }

        public function dispatch($url) {
            $url = $this->removeQueryStringVariables($url);
            if ($this->match($url)) {
                $controller = $this->params['controller'];
                $controller = $this->convertToStudlyCaps($controller);
                $controller="App\Controller\\$controller";
                if (class_exists($controller)) {
                    $controller_object = new $controller();
                    $action = $this->params['action'];
                    $action = $this->convertToCamelCase($action);
                    if (is_callable([$controller_object, $action])) {
                        $controller_object->$action();
                    } else {
                        echo "Method $action (in controller $controller) not found";
                    }
                } else {
                    echo "Controller class $controller not found";
                }
            }
        }

        /**
         * Convert the string with hyphens to StudlyCaps,
         * e.g. post-authors => PostAuthors
         *
         * @param string $string The string to convert
         *
         * @return string
         */
        protected function convertToStudlyCaps($string) {
            return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
        }
        /**
         *  * Convert the string with hyphens to camelCase,
         * * e.g. add-new => addNew
         *  *
         *  * @param string $string The string to convert
         *  *
         *  * @return string
         *  */
        protected function convertToCamelCase($string) {
            return lcfirst($this->convertToStudlyCaps($string));
        }

        protected function removeQueryStringVariables($url){
            if($url != ''){
                $parts = explode('&', $url, 2);
                if(strpos($parts[0], '=')===false){
                    $url=$parts[0];
                }
                else{
                    $url='';
                }
            }
            return $url;
        }

    }