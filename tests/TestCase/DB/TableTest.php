<?php
namespace Potatobase\Test\TestCase\DB;

use Cake\TestSuite\TestCase;
use Phinx\Db\Adapter\MysqlAdapter;
use Potatobase\DB\Table;

class PotatobaseTableTest extends TestCase
{
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
