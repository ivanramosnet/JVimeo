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

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_jvimeo')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('JVimeo');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();