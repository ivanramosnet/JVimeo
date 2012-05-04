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

// No direct access
defined('_JEXEC') or die;

/**
 * JVimeo helper.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_jvimeo
 * @since       1.0
 */
class JVimeoHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param   string  $vName  The name of the active view.
	 * 
	 * @since	1.0
	 * 
	 * @return null
	 */
	public static function addSubmenu($vName = 'jvimeo')
	{
		JSubMenuHelper::addEntry(
				JText::_('COM_JVIMEO_SUBMENU_JVIMEO'),
				'index.php?option=com_jvimeo&view=jvimeo',
				$vName == 'jvimeo'
		);
		JSubMenuHelper::addEntry(
				JText::_('COM_JVIMEO_SUBMENU_VIDEOS'),
				'index.php?option=com_jvimeo&view=videos',
				$vName == 'videos'
		);
		JSubMenuHelper::addEntry(
				JText::_('COM_JVIMEO_SUBMENU_ALBUMS'),
				'index.php?option=com_jvimeo&view=albums',
				$vName == 'albums'
		);
		JSubMenuHelper::addEntry(
				JText::_('COM_JVIMEO_SUBMENU_GROUPS'),
				'index.php?option=com_jvimeo&view=groups',
				$vName == 'groups'
		);
		JSubMenuHelper::addEntry(
				JText::_('COM_JVIMEO_SUBMENU_CHANNELS'),
				'index.php?option=com_jvimeo&view=channels',
				$vName == 'channels'
		);
		if ($vName == 'jvimeo')
		{
			JToolBarHelper::title(
					JText::sprintf('COM_JVIMEO_JVIMEO_TITLE', JText::_('com_jvimeo')),
					'jvimeo'
			);
		}
	}

	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @param   int  $categoryId  The category ID.
	 * 
	 * @return  JObject
	 * 
	 * @since	1.0
	 */
	public static function getActions($categoryId = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		return $result;
	}
}
