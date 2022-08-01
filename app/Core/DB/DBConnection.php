<?php

declare(strict_types=1);

namespace Ecommerce\Core\DB;

use mysqli;

class DBConnection
{
    private $connection = null;


    /**
     * @inheritDoc
     */
    public function getConnection(): mysqli
    {
        if ($this->connection === null) {
            try {
                $connection = mysqli_connect('localhost', 'root', 'root');
            } catch (\Throwable $e) {
                echo $e->getMessage();
                $connection = false;
            }
            if ($connection === false) {
                echo 'False DB connection';
            }
            $this->connection = $connection;
        }

        return $this->connection;

    }
}