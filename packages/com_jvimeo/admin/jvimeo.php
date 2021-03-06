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

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_jvimeo'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Register helper class
JLoader::register('VimeoHelper', dirname(__FILE__) . '/helpers/vimeo.php');

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('JVimeo');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
