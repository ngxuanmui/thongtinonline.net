<?php
/**
 * @version		$Id: default.php 22568 2011-12-20 18:25:22Z github_bot $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
?>

<div class = "span-19">
	<div class="item-page">
		<h2>
			<?php echo $this->escape($this->item->title); ?>
		</h2>
		
		<div>
			<?php echo $this->item->fulltext; ?>
			<?php echo $this->item->event->afterDisplayContent; ?>
		</div>
			
		
		<div id="articles-related-articles">
			<?php 
			$modules = JModuleHelper::getModules('articles-related-articles'); 
			foreach($modules as $module)
				echo JModuleHelper::renderModule($module);
			?>
		</div>
		
		<div id="articles-other-articles">
			<?php 
			$modules = JModuleHelper::getModules('other-articles'); 
			foreach($modules as $module)
				echo JModuleHelper::renderModule($module);
			?>
		</div>
	</div>
</div>

<div class="span-5 last space-top-10">
	<?php if (!empty($this->categories)) : ?>
	<div class="cat-children">
		<?php echo $this->loadTemplate('children'); ?>
	</div>
	<?php endif; ?>
	
	<div>
		<?php 
		$modules = JModuleHelper::getModules('latest-featured-articles'); 
		foreach($modules as $module)
			echo JModuleHelper::renderModule($module);
		?>
	</div>
</div>