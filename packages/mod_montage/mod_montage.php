<?php
/**
 * Montage module
 *
 * Create a fun visual display of your latest videos
 *
 * @package     Joomla.site
 * @subpackage  mod_montage
 * @author      Iván Ramos <info@ivan.ramos.name>
 * @copyright   Copyright (C) 2012 Iván Ramos Jiménez. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// No direct access
defined('_JEXEC') or die;

$user = $params->get('user');
$badge_stream = $params->get('badge_stream', 'uploaded');
$badge_layout = $params->get('badge_layout', 'horizontal');
$badge_quantity = $params->get('badge_quantity', 6);
$show_titles = $params->get('show_titles', 'no');
$badge_size = $params->get('badge_size', 80);

if (!$user)
{
	return;
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_montage', $params->get('layout', 'default'));
