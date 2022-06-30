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
        $controller = new \Ecommerce\Catalog\Controller\View();
        $controller->execute();

    }

    private function retrieveControllerName(): string
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $controllerName = trim($requestUri, '/');
        return ucfirst($controllerName);


    }
}