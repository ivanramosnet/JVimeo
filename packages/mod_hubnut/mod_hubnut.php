<?php
/**
 * Hubnut module
 *
 * Hubnut enables you to show multiple Vimeo videos consecutively, so people can keep watching.
 *
 * @package     Joomla.site
 * @subpackage  mod_hubnut
 * @author      Iván Ramos <info@ivan.ramos.name>
 * @copyright   Copyright (C) 2012 Iván Ramos Jiménez. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// No direct access
defined('_JEXEC') or die;

$user = $params->get('user');
$stream = $params->get('stream', 'uploaded_videos');
$slideshow = $params->get('slideshow', 0);
$video_title = $params->get('video_title', 1);
$video_byline = $params->get('video_byline', 1);
$color = $params->get('color', '#44bbff');
$background = $params->get('background', '#ff9933');
$width = $params->get('width', 400);
$height = $params->get('height', 300);

if (!$user)
{
	return;
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_hubnut', $params->get('layout', 'default'));
