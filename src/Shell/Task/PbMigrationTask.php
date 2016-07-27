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
 * @since       0.0.2
 * @version     0.0.1
 */
namespace Potatobase\Shell\Task;

use Migrations\Shell\Task\MigrationTask as BaseMigrationTask;

/**
 * Class PbMigrationTask
 *
 * This class will be our own bake task that we will use to leverage all of the functionality we have created in
 * this extension. This simply uses our own skeleton template so that we can leverage our own abstract migration class
 * for all newly baked migrations.
 *
 * @package Potatobase\Shell\Task
 */
class PbMigrationTask extends BaseMigrationTask
{
    /**
     * @return string The name of this bake task
     */
    public function name()
    {
        return 'pb_migration';
    }

    /**
     * @return string The path to the skeleton template
     */
    public function template()
    {
        return 'Potatobase.config/skeleton';
    }
}
