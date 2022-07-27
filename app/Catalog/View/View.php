<?php

namespace Ecommerce\Catalog\View;

use Ecommerce\Core\Controller\ControllerInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View implements ControllerInterface
{
    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        $loader = new FilesystemLoader(['templates', 'app/Catalog/View/templates/']);
        $twig = new Environment($loader);
        $twig->display('products.twig');
    }
}