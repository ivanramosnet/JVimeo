<?php
/**
 * JVimeo
 * 
 * Vimeo for Joomla
 * 
 * @author		Iván Ramos Jiménez
 * @package		Joomla.Administrator
 * @subpackage	com_jvimeo
 * @copyright	Copyright (C) 2011-2012 Iván Ramos Jiménez. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

/**
 * JVimeo Controller.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_jvimeo
 * @since		1.0
 */
class JVimeoController extends JController
{
	/**
	 * Method to display a view.
	 *
	 * @param	boolean			$cachable	If true, the view output will be cached
	 * @param	array			$urlparams	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return	JController		This object to support chaining.
	 * @since	1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		require_once JPATH_COMPONENT.'/helpers/jvimeo.php';
	
		// Load the submenu.
		JVimeoHelper::addSubmenu(JRequest::getCmd('view', 'JVimeo'));
	
		parent::display();
	
		return $this;
	}
}