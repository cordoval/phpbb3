<?php
/**
*
* @package testing
* @copyright (c) 2010 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

class phpbb_ext_testext_cron_dummy_task extends phpbb_cron_task_base
{
	public static $was_run = 0;

	public function run()
	{
		self::$was_run++;
	}

	public function should_run()
	{
		return true;
	}
}
