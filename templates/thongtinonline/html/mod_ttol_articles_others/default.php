<?php
/**
 * @version		$Id: default.php 20974 2011-03-16 14:14:03Z chdemko $
 * @package		Joomla.Site
 * @subpackage	mod_ttol_articles_others
 * @copyright	Copyright (C) 2012 TTOL. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if(isset($list['newer'])): ?>
<h3>Bài viết mới hơn</h3>

<ul class="other-articles newer">
	<?php foreach ($list['newer'] as $item):	?>
	<li>
		<a href="<?php echo $item->route; ?>">
			<?php echo $item->title; ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>

<?php if(isset($list['older'])): ?>
<h3>Bài viết cũ hơn</h3>

<ul class="other-articles older">
	<?php foreach ($list['older'] as $item):	?>
	<li>
		<a href="<?php echo $item->route; ?>">
			<?php echo $item->title; ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>