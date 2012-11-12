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

$q = JRequest::getVar('q');
?>

<div class = "span-19">
		<?php if(!$q): ?>
	<div>
		Bạn chưa nhập từ khóa để tìm kiếm.
	</div>
	
	<?php else: ?>
	
	
	<div id="cse" style="width: 100%;">Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript"> 
	  function parseQueryFromUrl () {
	    var queryParamName = "q";
	    var search = window.location.search.substr(1);
	    var parts = search.split('&');
	    for (var i = 0; i < parts.length; i++) {
	      var keyvaluepair = parts[i].split('=');
	      if (decodeURIComponent(keyvaluepair[0]) == queryParamName) {
	        return decodeURIComponent(keyvaluepair[1].replace(/\+/g, ' '));
	      }
	    }
	    return '';
	  }
	
	  google.load('search', '1', {language : 'vi', style : google.loader.themes.MINIMALIST});
	  google.setOnLoadCallback(function() {
	    var customSearchOptions = {};
	  
	    var imageSearchOptions = {};
	    imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_CLASSIC;
	    customSearchOptions['enableImageSearch'] = true;
	    customSearchOptions['imageSearchOptions'] = imageSearchOptions;
	  
	    var customSearchControl = new google.search.CustomSearchControl(
	      '009401644940279006493:mhvrd3rizq0', customSearchOptions);
	
	    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	    var options = new google.search.DrawOptions();
	    options.enableSearchResultsOnly(); 
	    customSearchControl.draw('cse', options);
	    var queryFromUrl = parseQueryFromUrl();
	    if (queryFromUrl) {
	      customSearchControl.execute(queryFromUrl);
	    }
	  }, true);
	</script>
	 
	 <?php endif; ?>
</div>
<div class="span-5 last space-top-10">
	<?php 
	$modules = JModuleHelper::getModules('latest-featured-articles'); 
	foreach($modules as $module)
		echo JModuleHelper::renderModule($module);
	?>
</div>