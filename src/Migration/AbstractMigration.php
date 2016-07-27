<?php
/**
 * Potatobase (https://github.com/PotatoPowered/potatobase)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 * @copyright   Copyright (c) Potato Powered Software
 * @link        http://potatopowered.net
 * @author      Blake Sutton <blake@potatopowered.net>
 * @since       0.0.1
 * @version     0.0.2
 */
namespace Potatobase\Migration;

use Migrations\AbstractMigration as BaseAbstractMigration;
use Potatobase\DB\Table;

/**
 * Class AbstractMigration
 *
 * This class is an extension to the CakePHP AbstractMigration class that allows us to specify our own Table Class so
 * that we can use the new functionality that we have added.
 *
 * @package Potatobase\Migrations
 */
class AbstractMigration extends BaseAbstractMigration
{
    /**
     * Returns an instance of the <code>\Table</code> class.
     *
     * You can use this class to create and manipulate tables.
     *
     * @param string $tableName Table Name
     * @param array $options Options
     * @return Table
     */
    public function table($tableName, $options = [])
    {
        return new Table($tableName, $options, $this->getAdapter());
    }
}
