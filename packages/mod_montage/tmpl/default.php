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
?>
<style id="badge-styles">
	/* You can modify these CSS styles */
	.vimeoBadge { margin: 0; padding: 0; font: normal 11px verdana,sans-serif; }
	.vimeoBadge img { border: 0; }
	.vimeoBadge a, .vimeoBadge a:link, .vimeoBadge a:visited, .vimeoBadge a:active { color: #3A75C4; text-decoration: none; cursor: pointer; }
	.vimeoBadge a:hover { color:#00CCFF; }
	.vimeoBadge #vimeo_badge_logo { margin-top:10px; width: 57px; height: 16px; }
	.vimeoBadge .credit { font: normal 11px verdana,sans-serif; }
	.vimeoBadge .clip { padding:0; float:left; margin:0 10px 10px 0; line-height:0; }
	.vimeoBadge.vertical .clip { float: none; }
	.vimeoBadge .caption { font: normal 11px verdana,sans-serif; overflow:hidden; width: auto; height: 30px; }
	.vimeoBadge .clear { display: block; clear: both; visibility: hidden; }
	.vimeoBadge .s160 { width: 160px; } .vimeoBadge .s80 { width: 80px; } .vimeoBadge .s100 { width: 100px; } .vimeoBadge .s200 { width: 200px; }
</style>
<div id="badge" class="montage<?php echo $moduleclass_sfx; ?>">
	<div class="vimeoBadge <?php echo $badge_layout; ?>">
		<script src="https://vimeo.com/<?php echo $user; ?>/badgeo/?script=1&badge_layout=<?php echo $badge_layout; ?>&badge_quantity=<?php echo $badge_quantity; ?>&badge_size=<?php echo $badge_size; ?>&badge_stream=<?php echo $badge_stream; ?>&show_titles=<?php echo $show_titles; ?>">
		</script>
	</div>
</div>
