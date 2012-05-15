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
?>
<div class="hubnut<?php echo $moduleclass_sfx; ?>">
<iframe src="http://player.vimeo.com/hubnut/user/<?php echo $user; ?>/<?php echo $stream; ?>?color=<?php echo $color; ?>&amp;background=<?php echo $background; ?>&amp;slideshow=<?php echo $slideshow; ?>&amp;video_title=<?php echo $video_title; ?>&amp;video_byline=<?php echo $video_byline; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
