<?php

declare(strict_types=1);

namespace Ecommerce\Core\Setup;

interface InstallInterface
{
    /**
     * Apply MySQL operations.
     *
     * @return void
     */
    public function install(): void;
}