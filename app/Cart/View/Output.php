<?php

namespace Ecommerce\Cart\View;

use Ecommerce\Core\Controller\ControllerInterface;

class Output implements ControllerInterface
{
    /**
     * Execute the Cart template
     */
    public function execute(): void
    {
        echo " We are inside Shopping cart. Hi";
    }
}