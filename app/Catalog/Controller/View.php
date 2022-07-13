<?php

namespace Ecommerce\Catalog\Controller;

use Ecommerce\Core\Controller\ControllerInterface;

class View implements ControllerInterface
{
    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader);
        $twig->display('products.tpl');
    }
}