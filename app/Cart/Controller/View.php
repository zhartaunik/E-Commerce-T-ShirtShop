<?php
declare(strict_types=1);

namespace Ecommerce\Cart\Controller;

use Ecommerce\Cart\View\Output;
use Ecommerce\Core\Controller\ControllerInterface;

class View implements ControllerInterface
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