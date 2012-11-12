<?php
/**
 * @version		$Id: default_children.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$class = 'first';
?>

<?php if (count($this->categories) > 0) : ?>
	<ul>
	<?php foreach($this->categories as $id => $child) : ?>
	<?php 
	$get = JRequest::get();
	$active = ($this->item->catid == $child->id) ? ' active' : null;
	?>
		<?php
		
			if (!isset($this->categories[$id + 1])) :
				$class = 'last';
			endif;
		?>

		<li class="<?php echo $class . $active; ?>">
			<?php $class = ''; ?>
			<span class="item-title"><a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute($child->id));?>">
				<?php echo $this->escape($child->title); ?></a>
			</span>
		</li>
		
	<?php endforeach; ?>
	</ul>
<?php endif; ?>
