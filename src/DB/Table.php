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

    /**
     * Add a varchar column to the table
     *
     * This function will be used to add a different styles of varchar type columns to the table. It can be called
     * directly but it is recommended to use the specific column creation methods.
     *
     * @param string    $name       Name of the column to add
     * @param int       $size       Character limit of the new column
     * @param bool      $nullable   Is the field be nullable
     * @param string    $default    The default value for the field
     * @return BaseTable The table object with the varchar column added.
     */
    public function addVarChar($name, $size, $nullable = false, $default = null)
    {
        return $this->addColumn(
            $name,
            'string',
            [
                'default' => $default,
                'limit' => $size,
                'null' => $nullable
            ]
        );
    }

    /**
     * Add a tiny varchar column to the table
     *
     * This function adds a 25 character length varchar column to the table.
     *   + **Type:** varchar
     *   + **Size:** 25
     *   + **Nullable:** false
     *   + **Default:**  null
     *
     * @param string    $name       Name of the column to add
     * @param bool      $nullable   Is the field be nullable
     * @param string    $default    The default value for the field
     * @return BaseTable The table object with a 25 character varchar column added
     */
    public function addTinyText($name, $nullable = false, $default = null)
    {
        return $this->addVarChar($name, 25, $nullable, $default);
    }
}
