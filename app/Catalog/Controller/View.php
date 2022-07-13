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
        echo ' We are inside catalog View';
    }
}