<?php
/**
*
* @package External Links Open in New Window
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rmcgirr83\elonw\migrations\v1x;

class release_1_0_1_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['elonw_version']) && version_compare($this->config['elonw_version'], '1.0.1', '>=');
	}

	static public function depends_on()
	{
		return array('\rmcgirr83\elonw\migrations\v1x\release_1_0_0_data');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('elonw_version', '1.0.1')),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('elonw_version')),
		);
	}
}
