<?php
declare(strict_types=1);

namespace Ecommerce\Index\Controller;

use Ecommerce\Core\Controller\ControllerInterface;
use Ecommerce\Index\View\Output;

class Index implements ControllerInterface
{
    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        $view = new Output();
        $view->execute();
    }
}