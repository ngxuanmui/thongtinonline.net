<?php
defined('_JEXEC') or die;

class TTOL_HomeControllerUrl extends JController
{
	protected static $lookup;
	
	public function go()
	{
		$url = JRequest::getVar('url');
		$id = JRequest::getVar('id');
		
		if($url == 'category')
		{
			$link = 'index.php?option=com_content&view=category&id='.$id;
			
			//find item id
			$needles = array(
				'category' => array($id)
			);
			if ($item = self::_findItem($needles)) {
				$link .= '&Itemid='.$item;
			}
			elseif ($item = self::_findItem()) {
				$link .= '&Itemid='.$item;
			}
			
			$start = JRequest::getVar('start', null);
			
			if($start)
				$link .= '&start='.$start;			
		}
		else 
		{
			//find category id via article id
			$model 		= $this->getModel('Url', 'TTOL_HomeModel');
			$article 	= $model->getArticle($id);
			
			require_once JPATH_SITE.'/components/com_content/helpers/route.php';
			
			$article->slug = $article->id.':'.$article->alias;
			$article->catslug = $article->catid ? $article->catid .':'.$article->category_alias : $article->catid;
			
			$link = ContentHelperRoute::getArticleRoute($article->slug, $article->catslug);
		}
		
		$this->setRedirect(JRoute::_($link));
			
		return true;
	}
	
	protected static function _findItem($needles = null)
	{
		$app		= JFactory::getApplication();
		$menus		= $app->getMenu('site');

		// Prepare the reverse lookup array.
		if (self::$lookup === null)
		{
			self::$lookup = array();

			$component	= JComponentHelper::getComponent('com_content');
			$items		= $menus->getItems('component_id', $component->id);
			foreach ($items as $item)
			{
				if (isset($item->query) && isset($item->query['view']))
				{
					$view = $item->query['view'];
					if (!isset(self::$lookup[$view])) {
						self::$lookup[$view] = array();
					}
					if (isset($item->query['id'])) {
						self::$lookup[$view][$item->query['id']] = $item->id;
					}
				}
			}
		}

		if ($needles)
		{
			foreach ($needles as $view => $ids)
			{
				if (isset(self::$lookup[$view]))
				{
					foreach($ids as $id)
					{
						if (isset(self::$lookup[$view][(int)$id])) {
							return self::$lookup[$view][(int)$id];
						}
					}
				}
			}
		}
		else
		{
			$active = $menus->getActive();
			if ($active && $active->component == 'com_content') {
				return $active->id;
			}
		}

		return null;
	}
}