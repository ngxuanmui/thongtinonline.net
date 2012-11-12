<?php
/**
 * @version                $Id: index.php 22427 2011-12-02 15:04:17Z github_bot $
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/position.css" type="text/css" media="screen,projection" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/screen.css" type="text/css" media="screen, projection">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/print.css" type="text/css" media="print">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css" media="screen, projection">
		<!--[if IE 6]>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie.css" type="text/css" media="screen, projection">
		<![endif]-->
		<!--[if IE 7]>
			<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
		<![endif]-->
	</head>
	<body>
		<div class = "container">
			<div class = "topBanner">
				<a href="<?php echo JURI::root(); ?>" class = "imgLogo"></a>
				<div class = "topContainer">
					<form name="frm-search" class="search" action="<?php echo JRoute::_('index.php?option=com_ttol_home&Itemid=140'); ?>">
	        			<input type="text" name="q" id="q" value="<?php echo JRequest::getVar('q'); ?>" />
	        			<input type="submit" id="btn-search" value="Tìm kiếm" />
	        		</form>
				</div>
			</div>
			
			<div class="topMenu">
				<jdoc:include type="modules" name="top-menu" />
			</div>
			
			<div class="clr"></div>
        	
        	<div class = "lineTop">
        		<div id="breadcrumbs">
	        		<jdoc:include type="modules" name="position-2" />
	        	</div>
	        	
	        	<jdoc:include type="message" />
	        	<jdoc:include type="component" />
	        </div>
        	
        	<div class="clr"></div>
        	<div class = "footer">
				<strong>ThongtinOnline - <?php echo date('Y'); ?>. Email: <a href="mailto: contact@thongtinonline.net">contact@thongtinonline.net</a></strong>
			</div>
			
			<script type="text/javascript">
				var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
				document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			
			<script type="text/javascript">
				try {
					var pageTracker = _gat._getTracker("UA-1985237-3");
					pageTracker._trackPageview();
				}
				catch(err)
				{}
			</script>
			<jdoc:include type="modules" name="debug" />
		</div>
	</body>
</html>
