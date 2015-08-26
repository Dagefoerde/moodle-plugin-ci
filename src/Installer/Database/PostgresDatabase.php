<?php

/*
 * This file is part of the Moodle Plugin CI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace Moodlerooms\MoodlePluginCI\Installer\Database;

/**
 * Postgres Database.
 *
 * @copyright Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class PostgresDatabase extends AbstractDatabase
{
    public $user = 'postgres';
    public $type = 'pgsql';

    public function getCreateDatabaseCommand()
    {
        return sprintf('psql -c %s -U %s', escapeshellarg("CREATE DATABASE $this->name;"), $this->user);
    }
}