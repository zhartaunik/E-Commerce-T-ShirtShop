<?php

declare(strict_types=1);

namespace Ecommerce\Catalog\Setup;

use Ecommerce\Core\DB\ConnectionInterface;

class CreateCatalogTables implements ConnectionInterface
{
    /**
     * @var ConnectionInterface
     */
    private ConnectionInterface $connection;

    /**
     * @param ConnectionInterface $connection
     */
    public function __construct(ConnectionInterface $connection)
    {

        $this->connection = $connection;
    }

    public function install(): void
    {
        $sql = <<<SQL
CREATE TABLE catalog_product
id INT(10) AUTO_INCREMENT,
product_name VARCHAR(255) NOT NULL
SQL;

        $connection =  $this->connection->getConnection();
        $connection->query($sql);
    }
}