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
namespace Potatobase\Test\TestCase\DB;

use Cake\TestSuite\TestCase;
use Phinx\Db\Adapter\MysqlAdapter;
use Potatobase\DB\Table;

/**
 * Class PotatobaseTableTest
 *
 * Tests for the Potatobase\DB\Table class
 *
 * @package Potatobase\Test\TestCase\DB
 */
class PotatobaseTableTest extends TestCase
{
    /**
     * Test created column type
     */
    public function testAddCreationColumnType()
    {
        $adapter = new MysqlAdapter([]);
        $table = new Table('ntable', [], $adapter);
        $table->addCreated();
        $columns = $table->getPendingColumns();

        $this->assertEquals('created', $columns[0]->getName());
        $this->assertEquals('datetime', $columns[0]->getType());
        $this->assertEquals(null, $columns[0]->getDefault());
        $this->assertEquals(null, $columns[0]->getLimit());
        $this->assertEquals(true, $columns[0]->getNull());
    }

    /**
     * Test modified column type
     */
    public function testAddModifiedColumnType()
    {
        $adapter = new MysqlAdapter([]);
        $table = new Table('ntable', [], $adapter);
        $table->addModified();
        $columns = $table->getPendingColumns();

        $this->assertEquals('modified', $columns[0]->getName());
        $this->assertEquals('datetime', $columns[0]->getType());
        $this->assertEquals(null, $columns[0]->getDefault());
        $this->assertEquals(null, $columns[0]->getLimit());
        $this->assertEquals(true, $columns[0]->getNull());
    }
}
