<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_search
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>

<div class = "span-19">
	<?php 
	$modules = JModuleHelper::getModules('latest-articles'); 
	foreach($modules as $module)
		echo JModuleHelper::renderModule($module);
	?>
</div>
<div class="span-5 last space-top-10">
	<?php 
	$modules = JModuleHelper::getModules('latest-featured-articles'); 
	foreach($modules as $module)
		echo JModuleHelper::renderModule($module);
	?>
</div>