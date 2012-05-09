<?php
/**
 * JVimeo
 *
 * Vimeo for Joomla
 *
 * @package     Joomla.Administrator
 * @subpackage  com_jvimeo
 * @author      Iván Ramos <info@ivan.ramos.name>
 * @copyright   Copyright (C) 2011-2012 Iván Ramos Jiménez. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

/**
 * Methods supporting a list of videos records.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_jvimeo
 * @since       1.0
 */
class JVimeoModelVideos extends JModelList
{

	/**
	 * Build an SQL query to load the list data.
	 *
	 * @return	JDatabaseQuery
	 * @since	1.6
	 */
	protected function getVideos()
	{
		$params = &JComponentHelper::getParams('com_jvimeo');
		$vimeo = new VimeoHelper(
				$params->get('consumer_key'),
				$params->get('consumer_secret'),
				$params->get('access_token'),
				$params->get('access_token_secret')
		);
		$videos = $vimeo->call('vimeo.videos.getUploaded', array('user_id' => 'ivanramosnet'));
		return $videos;
	}
}
