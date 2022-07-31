<?php

declare(strict_types=1);

namespace Ecommerce\Core\Controller;

use Ecommerce\Core\DB\DBConnection;

class Setup implements ControllerInterface
{

    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        echo 'Setup';
        $listOfScripts = glob('app/*/Setup/*.php');
        $connection = DBConnection::getConnection();

        foreach ($listOfScripts as $installFile) {
            $path = str_replace(['/','app'], ['\\', 'Ecommerce'], $installFile);
            $path = substr($path, 0, strcspn($path, '.'));
            $object = new $path($connection);
            $object->install();

        }
    }
}