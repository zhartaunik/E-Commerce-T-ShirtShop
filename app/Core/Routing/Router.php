<?php

namespace Ecommerce\Core\Routing;

class Router implements RouterInterface
{

    /**
     * @inheritDoc
     */
    public function match(): void
        /**
         *
         */
    {
        $controllerName = $this->retrieveControllerName();
        $className = sprintf('\Ecommerce\Catalog\Controller\%s', $controllerName);
        if (class_exists($className)) {
            $controller = new $className();
            $controller->execute();
        } else {
            echo '404 Class not found';
        }

    }

    private function retrieveControllerName(): string
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $controllerName = trim($requestUri, '/');
        return ucfirst($controllerName);


    }
}