<?php

declare(strict_types=1);

namespace Ecommerce\Catalog\Setup;

use Ecommerce\Core\DB\ConnectionInterface;
use Ecommerce\Core\Install\InstallInterface;

class CreateCatalogTables implements InstallInterface
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
CREATE TABLE catalog_product (
id INT AUTO_INCREMENT PRIMARY KEY,
product_name VARCHAR(255) NOT NULL                      
)
SQL;

        $connection = $this->connection->getConnection();
        $connection->query('DROP TABLE IF EXISTS catalog_product');
        $connection->query($sql);
    }
}