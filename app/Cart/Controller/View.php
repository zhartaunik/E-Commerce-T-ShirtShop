<?php

namespace Ecommerce\Cart\Controller;

use Ecommerce\Cart\View\Output;

class View implements \Ecommerce\Core\Controller\ControllerInterface
{

    /**
     * Loading the Cart template
     *
     * @inheritDoc
     */
    public function execute(): void
    {
        $view = new Output();
        $view->execute();
    }
}