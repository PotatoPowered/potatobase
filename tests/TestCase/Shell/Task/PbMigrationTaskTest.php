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
 * @since       0.0.3
 * @version     0.0.1
 */
namespace Potatobase\Test\TestCase\Shell\Task;

use Cake\TestSuite\TestCase;
use Potatobase\Shell\Task\PbMigrationTask;

/**
 * Class PbMigrationTaskTest
 *
 * Tests for the Potatobase\Shell\Task\PbMigrationTask class
 *
 * @package Potatobase\Test\TestCase\Shell\Task
 */
class PbMigrationTaskTest extends TestCase
{
    /**
     * Test the migration task
     */
    public function testPbMigrationTask()
    {
        $task = new PbMigrationTask();
        $taskName = "pb_migration";
        $templateName = "Potatobase.config/skeleton";

        $this->assertEquals($taskName, $task->name());
        $this->assertEquals($templateName, $task->template());
    }
}
