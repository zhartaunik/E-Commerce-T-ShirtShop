<?php

namespace Ecommerce\Index\View;

use Ecommerce\Core\Controller\ControllerInterface;

class Output implements ControllerInterface
{

    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        echo " We are inside Index. Hello!";
    }
}