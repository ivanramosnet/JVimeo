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
?>

<form action="<?php echo JRoute::_('index.php?option=com_jvimeo&view=videos'); ?>" method="post" name="adminForm" id="adminForm">
	
	<div class="clr"> </div>

	<table class="adminlist">
		<thead>
			<tr>
				<th width="1%">
					<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
				</th>
				<th class="title">
					<?php echo JText::_('COM_JVIMEO_MANAGER_VIDEOS_TITLE'); ?>
				</th>
				<th width="5%">
					<?php echo JText::_('COM_JVIMEO_MANAGER_VIDEOS_ISHD'); ?>
				</th>
				<th width="20%">
					<?php echo JText::_('COM_JVIMEO_MANAGER_VIDEOS_OWNER'); ?>
				</th>
				<th width="5%">
					<?php echo JText::_('COM_JVIMEO_MANAGER_VIDEOS_PRIVACY'); ?>
				</th>
				<th width="10%">
					<?php echo JText::_('COM_JVIMEO_MANAGER_VIDEOS_UPLOAD_DATE'); ?>
				</th>
				<th width="1%" class="nowrap">
					<?php echo JText::_('COM_JVIMEO_MANAGER_VIDEOS_ID'); ?>
				</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="7">
					
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php foreach ($this->videos as $v => $video) : ?>
			<tr class="row<?php echo $v % 2; ?>">
				<td class="center">
					<?php echo JHtml::_('grid.id', $v, $video->id); ?>
				</td>
				<td>
					<?php echo $this->escape($video->title); ?>
				</td>
				<td class="center">
					<?php echo JHtml::_('jgrid.published', $video->is_hd, $v, 'videos.'); ?>
				</td>
				<td class="center">
					<?php echo $this->escape($video->owner); ?>
				</td>
				<td class="center">
					<?php echo $this->escape($video->privacy); ?>
				</td>
				<td class="center nowrap">
					<?php echo JHtml::_('date', $video->upload_date, JText::_('DATE_FORMAT_LC4')); ?>
				</td>
				<td class="center">
					<?php echo (int) $video->id; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
