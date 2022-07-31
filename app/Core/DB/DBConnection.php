<?php

declare(strict_types=1);

namespace Ecommerce\Core\DB;

use mysqli;

class DBConnection implements ConnectionInterface
{
    /**
     * @var null
     */
    static private $connection = null;


    /**
     * @inheritDoc
     */
    static public function getConnection(): mysqli
    {
        if (self::$connection === null) {
            try {
                $connection = mysqli_connect('localhost', 'root', 'root');
            } catch (\Throwable $e) {
                echo $e->getMessage();
                $connection = false;
            }
            if ($connection === false) {
                echo 'False DB connection';
            }
            self::$connection = $connection;
        }

        return self::$connection;

    }
}