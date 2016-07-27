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
namespace Potatobase\DB;

use Phinx\Db\Table as BaseTable;

/**
 * Class Table
 *
 * This class is an extension to the default migration tools Table object. The goal of this object is to extend the base
 * table so that we can provide some default column builders and other tools.
 *
 * @package Potatobase\DB
 */
class Table extends BaseTable
{
    /**
     * Add a Created Timestamp Column
     *
     * This function is a simple accessor to allow a universal design for the created timestamp.
     *
     * @return BaseTable The table object with a created column added.
     */
    public function addCreated()
    {
        return $this->addColumn(
            'created',
            'datetime',
            [
                'default' => null,
                'limit' => null,
                'null' => true,
            ]
        );
    }

    /**
     * Add a Modified Timestamp Column
     *
     * This function is a simple accessor to allow a universal design for the modified timestamp.
     *
     * @return BaseTable The table object with a modified column added.
     */
    public function addModified()
    {
        return $this->addColumn(
            'modified',
            'datetime',
            [
                'default' => null,
                'limit' => null,
                'null' => true,
            ]
        );
    }
}
