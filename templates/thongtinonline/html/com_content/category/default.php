<?php
/**
 * @version		$Id: default.php 22359 2011-11-07 16:31:03Z github_bot $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

?>

<div class = "span-19">
	<div class="item-page">
		<?php echo $this->loadTemplate('articles'); ?>
	</div>
</div>

<div class="span-5 last space-top-10">
	<?php if (!empty($this->children[$this->category->id])&& $this->maxLevel != 0) : ?>
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