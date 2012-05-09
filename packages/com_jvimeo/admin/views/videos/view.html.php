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

jimport('joomla.application.component.view');

/**
 * View class for a list of videos
 *
 * @package     Joomla.Administrator
 * @subpackage  com_jvimeo
 * @since       1.0
 */
class JVimeoViewVideos extends JView
{
	protected $items;

	/**
	 * Display the view
	 * 
	 * @param   array  $tpl  template
	 * 
	 * @return null
	 */
	public function display($tpl = null)
	{
		$model = &$this->getModel();
		$videos		= $model->getVideos();
		$this->videos = $videos->videos->video;

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

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
