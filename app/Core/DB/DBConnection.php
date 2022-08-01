<?php

declare(strict_types=1);

namespace Ecommerce\Core\DB;

use mysqli;
use Throwable;

class DBConnection implements ConnectionInterface
{
    /**
     * @var mysqli|null
     */
    private mysqli|null $connection = null;

    /**
     * @inheritDoc
     */
    public function getConnection(): mysqli
    {
        if ($this->connection === null) {
            try {
                $connection = mysqli_connect('localhost', 'root', 'root', 't_shirt_shop');
            } catch (Throwable $e) {
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