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
        $className = sprintf('\Ecommerce\%s\Controller\%s', $controllerName[0], $controllerName[1]);
        if (class_exists($className)) {
            $controller = new $className();
            $controller->execute();
        } else {
            echo '404 Class not found';
        }

    }

    /**
     * @return string[]
     */
    private function retrieveControllerName(): array
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestArray = explode('/', $requestUri);
        $urlKeys = [];
        foreach ($requestArray as $element) {
            if ($element) {
                $urlKeys[] = ucfirst($element);
            }
        }
//        $controllerName = trim($requestUri, '/');
        return $urlKeys;


    }
}