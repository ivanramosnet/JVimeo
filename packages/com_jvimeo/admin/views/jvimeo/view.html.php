<?php
/**
 * JVimeo
 * 
 * Vimeo for Joomla
 * 
 * @package     Joomla.Administrator
 * @subpackage  com_jvimeo
 * @author      Iván Ramos Jiménez <info@ivan.ramos.name>
 * @copyright   Copyright (C) 2011-2012 Iván Ramos Jiménez. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');
jimport('joomla.application.module.helper');

/**
 * View class for the JVimeo component
 *
 * @static
 * @package     Joomla.Administrator
 * @subpackage  com_jvimeo
 * @since       1.0
 */
class JVimeoViewJVimeo extends JView
{
	/**
	 * Display the view
	 * 
	 * @param   array  $tpl  template
	 * 
	 * @return null
	 */
	public function display($tpl = null)
	{
		// Set toolbar items for the page
		$this->addToolbar();
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @since	1.0
	 * @return null
	 */
	protected function addToolbar()
	{
		JToolBarHelper::title(JText::_('COM_JVIMEO_JVIMEO_TITLE'), 'jvimeo');
		JToolBarHelper::preferences('com_jvimeo');
		JToolBarHelper::divider();
		JToolBarHelper::help('JHELP_COMPONENTS_JVIMEO', true);
	}
}
