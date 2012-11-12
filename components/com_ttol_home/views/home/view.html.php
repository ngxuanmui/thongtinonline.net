<?php
/**
 * @version		$Id: view.html.php $
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * HTML Article View class for the Content component
 *
 * @package		Joomla.Site
 * @subpackage	com_ttol_home
 * @since		1.5
 */
class TTOL_HomeViewHome extends JViewLegacy
{
	protected $items;

	function display($tpl = null)
	{
		parent::display($tpl);
	}
}
