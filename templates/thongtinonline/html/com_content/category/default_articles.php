<?php
/**
 * @version		$Id: default_articles.php 22287 2011-10-26 05:32:17Z github_bot $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
//JHtml::core();
JHtml::_('behavior.framework');

// Create some shortcuts.
$params		= &$this->item->params;
$n			= count($this->items);
?>

<ul class="category-items">
	<?php foreach ($this->items as $i => $article) : ?>
		<?php if (in_array($article->access, $this->user->getAuthorisedViewLevels())) : ?>
		<li>
			<?php if ($article->intro_images): ?>
			<img src="<?php echo $article->intro_images; ?>" />
			<?php endif; ?>
			<div>
				<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid)); ?>">
					<?php echo $this->escape($article->title); ?>
				</a>
				<div>
					<?php echo strip_tags($article->introtext); ?>
				</div>
				
			</div>
			<div class="clr"></div>
		</li>
		<?php endif; ?>
	<?php endforeach; ?>
</ul>

<?php // Add pagination links ?>
<?php if (!empty($this->items)) : ?>
	<?php if (($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
	<div class="pagination">
		<?php echo $this->pagination->getPagesLinks(); ?>
	</div>
	<?php endif; ?>
</form>
<?php  endif; ?>
