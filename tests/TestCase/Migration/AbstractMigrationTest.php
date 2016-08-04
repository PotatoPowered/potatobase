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
namespace Potatobase\Test\TestCase\Migration;

use Cake\TestSuite\TestCase;
use Potatobase\Migration\AbstractMigration;

/**
 * Class AbstractMigrationTest
 *
 * Tests for the Potatobase\Migration\AbstractMigration class
 *
 * @package Potatobase\Test\TestCase\Migration
 */
class AbstractMigrationTest extends TestCase
{
    /**
     * Test the table object returned by our abstract migration class
     */
    public function testTableCreateNew()
    {
        $version = 1;
        $tableName = "TestTable";
        $migration = new AbstractMigration($version);
        $migration->table($tableName);

        $this->assertEquals("Potatobase\\Migration\\AbstractMigration", $migration->getName());
        $this->assertEquals($version, $migration->getVersion());
    }
}
