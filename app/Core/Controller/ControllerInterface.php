<?php

declare(strict_types=1);

namespace Ecommerce\Core\Controller;

/**
 * This is a basic controller which render all the pages on the website.
 */
interface ControllerInterface
{
    /**
     * Interaction between models and view output comes here
     *
     * @return void
     */
    public function execute(): void;
}