<?php
/**
 * @version		$Id: controller.php 22355 2011-11-07 05:11:58Z github_bot $
 * @package		Joomla.Site
 * @subpackage	com_search
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

/**
 * Search Component Controller
 *
 * @package		Joomla.Site
 * @subpackage	com_search
 * @since 1.5
 */
class TTOL_HomeController extends JControllerLegacy
{
	public function display($cachable = false, $urlparams = false)
	{
		$cachable = true;
		
		$safeurlparams = array('catid'=>'INT','id'=>'INT','cid'=>'ARRAY','year'=>'INT','month'=>'INT','limit'=>'INT','limitstart'=>'INT',
			'showall'=>'INT','return'=>'BASE64','filter'=>'STRING','filter_order'=>'CMD','filter_order_Dir'=>'CMD','filter-search'=>'STRING','print'=>'BOOLEAN','lang'=>'CMD');

		parent::display($cachable, $safeurlparams);

		return $this;
	}
	
	public function go()
	{
		die('a');
	}
}
