<?php

declare(strict_types=1);

namespace Ecommerce\Core\Controller;

class NoRoute implements ControllerInterface
{
    public function execute(): void
    {
        echo 'Page Not Found!';
    }
}
