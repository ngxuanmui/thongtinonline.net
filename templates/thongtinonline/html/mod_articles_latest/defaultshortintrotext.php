<?php
/**
 * @version		$Id: defaultwithintrotext.php 22338 2011-11-04 17:24:53Z github_bot $
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
	<li>
		<?php if ($item->intro_images): ?>
			<img src="<?php echo $item->intro_images; ?>" width="100" />
		<?php endif; ?>
		<div>
			<a href="<?php echo $item->link; ?>">
				<?php echo $item->title; ?>
			</a>
			<div>
				<?php echo JHtml::_('string.truncate',strip_tags($item->introtext), 70); ?>
			</div>
		</div>
	</li>
<?php endforeach; ?>
</ul>
