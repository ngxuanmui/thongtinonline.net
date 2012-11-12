<?php
/**
 * @package JComments
 * @version 2.3.0
 * @author Sergey M. Litvinov (smart@joomlatune.ru)
 * @copyright (C) 2006-2012 by Sergey M. Litvinov (http://www.joomlatune.ru)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
*/

(defined('_VALID_MOS') OR defined('_JEXEC')) or die;
?>

Changelog
------------

2.3.0.1
# Wrong values for links_position parameter (Content - JComments)
# yvComments import fixed (Joomla 2.5)
# JSite not found in CommunityPolls plugin
# Deleted comments still available in RSS
# Incorrect path to email icon (backend)
# {jcomments on} tag displayed in article blog
+ Added support of JoomFish 2.2.3
# Incorrect deletion mode processing in backend
$ Fixed typo in Russian translation for Content - JComments
# CAPTCHA refresh do not work when SEF Suffix is active
# Wrong anchor for Add comment (#addcomment instead #addcomments)
+ Added plugin for CommunityBuilder profiles support
# If object has no title we store only RE:
# Incorrect {jcomments} tag processing (Joomla 2.5)
# Fixed bug with Refresh objects in Import section
+ Added import comments from EasyBlog
+ Added plugin for EasyBlog extension
^ Updated plugin for DatsoGallery 1.9.5
+ Added plugins for JoomLeague (thanks to Hermann Herz)
# Division by zero in backend
$ Updated German frontend translation (thanks to Hermann Herz)
$ Updated Persian frontend translation (thanks to Mahdi Ahazan)
# {jcomments off} shows in article's text
$ Added Estonian frontend translation (thanks to Rivo Zangov)
# Class 'JParameter' not found in /plugins/content/jcomments/jcomments.php

2.3.0 RC11
^ RTL icons for RSS and blog links
# Fixed bug in fixLongWords function
$ Added Bengali (Bangladesh) frontend translation (thanks to Nasir Khan Saika)
$ Added Finnish (Finland) frontend translation (thanks to Sami Haaranen	(aka Mortti))
^ Corrected styles for CODE element in emails

2.3.0 RC10
^ Code cleanup and optimization
^ If user has been deleted - we should delete his reports
- Removed 'datetime' property from $comment (affects templates)

2.3.0 RC9
# Fixed cookie clearing (backend)
# Fixed bug in report comments feature
^ Code cleanup and optimization
- Removed class 'usertype-xxx' (where xxx - user group name)
^ If comment had marked as deleted it's content does not cleared - so we will be able to restore it (in future versions)
^ Deleted (marked as deleted) comments will not be shown in backend

2.3.0 RC8
+ Added plugin for Akeeba Release System
# Fixed bug with toolbar publish/unpublish button

2.3.0 RC7
# Incorrect files for ar-AA language in manifest
$ In frontend language files _QQ_ replaced with &quot;
^ Refactored install script (Joomla 1.7-2.5)
# Fixed bug in subcription manager
# Fixed some bugs in RTL styles
^ Default template huge update
# Fixed bug in PhocaGallery plugins
# Fixed bug in PhocaDownload plugins
+ Added import from PhocaGallery (image's comments)
^ Cosmetic changes in comments import section

2.3.0 RC6
- Removed Content Category plugin
^ Updated index.html files
^ Small fix in emails templates

2.3.0 RC5
# Fixed bug in VideoFlow plugin
$ Updated Russian backend translation
$ Added Spanish (Argentina) frontend translation
$ Corrected languages list in Joomla 1.0 manifest
^ Updated plugin for JVideo
^ Updated plugin for BeeHeard
^ Updated plugin for AdsManager
^ Updated plugin for Mosets Tree
^ Uppdated translators list
# Fixed bug in Search plugin (Joomla 1.5-2.5)

2.3.0 RC4
^ Updated plugin for VideoFlow
# Fixed ACL issue 
# Fixed small bug in RTL styles

2.3.0 RC3
^ Increased performance in Comments manager
^ Delete unused files from previous version
^ Optimized ACL update during update from previous version

2.3.0 RC2
+ Added import from sliComments
# Fixed bug in comments manager (backend)
^ JCommentsDB renamed to JCommentsTableComment
^ JCommentsSubscriptionsDB renamed to JCommentsTableSubscription
^ JCommentsSubscriptionManager::getHash moved to JCommentsTableSubscription
# Incorrect task value when editing comments (backend)

2.3.0 RC1
^ Version number changed from 2.2.x to 2.3.x
# Incorect value in character counter (JavaScript)

2.2.0.148
^ Event onBeforeCommentAdded renamed to onJCommentsCommentBeforeAdd
^ Event onAfterCommentAdded renamed to onJCommentsCommentAfterAdd
^ Event onBeforeCommentDeleted renamed to onJCommentsCommentBeforeDelete
^ Event onAfterCommentDeleted renamed to onJCommentsCommentAfterDelete
^ Event onBeforeCommentPublished renamed to onJCommentsCommentBeforePublish
^ Event onAfterCommentPublished renamed to onJCommentsCommentAfterPublish
^ Event onBeforeCommentChanged renamed to onJCommentsCommentBeforeChange
^ Event onAfterCommentChanged renamed to onJCommentsCommentAfterChange
^ Event onCommentVote renamed to onJCommentsCommentBeforeVote
^ Event onAfterCommentVoted renamed to onJCommentsCommentAfterVote
^ Event onReportComment renamed to onJCommentsCommentBeforeReport
^ Event onAfterCommentReported renamed to onJCommentsCommentAfterReport
^ Event onBeforeUserBanned renamed to onJCommentsUserBeforeBan
^ Event onAfterUserBanned renamed to onJCommentsUserAfterBan
^ Event onAfterPrepareComment renamed to onJCommentsCommentAfterPrepare
^ Event onBeforeCommentChanged renamed to onJCommentsCommentBeforeChange
^ Event onJCommentsBeforeFormDisplayed renamed to onJCommentsFormBeforeDisplay
^ Event onJCommentsAfterFormDisplayed renamed to onJCommentsFormAfterFormDisplay
^ Event onBeforeDisplayCommentsList renamed to onJCommentsCommentsPrepare
+ Added event onJCommentsCommentBeforePrepare
- Removed event onBeforeDisplayComment (use onJCommentsCommentBeforePrepare or onJCommentsCommentAfterPrepare)
^ From events like onJCommentsCommentBeforeXXX args removed $allowed and $response

2.2.0.147
# Fixed bug in VirtueMart plugin
# Fixed bug in Content Category plugin
^ Plugins refactoring and optimization

2.2.0.146
# Fixed bug in Subscription Manager
# Fixed bug in Blacklist Manager
# Incorrect header in Subscription Manager

2.2.0.145
^ Removed unused variables from JavaScript

2.2.0.144
# Fixed another bug in QUOTE tag processing
^ Refactoring Custom BBCode manager (backend)
^ Small fixes and optimization (backend)

2.2.0.143
# Incorrect ACL update in Joomla 1.0/Joomla 1.5
# Fixed bug in QUOTE tag processing
# Fixed bug in protection emails from spambots

2.2.0.142
^ Huge backend refactoring
# Missed error message in subscription manager (backend)
# Missed error message in comments manager (backend)
^ Reorder toolbar buttons (backend)
                                            
2.2.0.141
$ Removed unused constatants from backend
# Fixed small bug in blacklist manager
- Removed unused methods rebuildTree, updateCommentsLevel and updateCommentsPath
^ Refactoring of JCommentsInstallerDatabaseHelper

2.2.0.140
^ Refactoring and optimizations backend settings
^ Updated usergroup names in default settings

2.2.0.139
# Fixed bug in [b] tag processing
^ Added default values for messages when user has no rights or comments are closed

2.2.0.138
^ Code cleanup & reformat
# Fixed bug in JFormFieldJCommentsObjectGroup element

2.2.0.137
$ Updated English backend translation
$ Updated Russian backend translation
# ACL bug for guests in Joomla 2.5

2.2.0.136
^ Updated AdsManager plugin
# Clean updates cache after successful extension update

2.2.0.135
# Fixed bug in [quote] tag processing

2.2.0.134
^ Optimizations in JCommentsInstallerLanguageHelper

2.2.0.133
^ Refactoring and optimizations of plugins
^ Updated LyftenBloggie plugin

2.2.0.132
# Fix warnings, notices, update PHPDoc

2.2.0.131
$ French, German, Italian, Portuguese, Spanish and Turkish backend translations are removed from package

2.2.0.130
^ Since now code is not compatible with PHP4
^ Fixed huge number of warnings (Strict Standarts)
^ Removed some old plugins for 3rd party extensions

2.2.0.129
# Fixed bug in CustomBBCode ACL 
$ Updated Spanish translation for Content JComments plugin

2.2.0.128
# Fixed bug with ACL in Joomla 2.5

2.2.0.127
$ Backend language files are converted to Joomla 1.7 format
# Fixed bug with editor buttons' localization

2.2.0.126
$ Renaming some constants (backend)
$ New constants A_CUSTOM_BBCODE_ADVANCED_PATTERN_PCRE and A_CUSTOM_BBCODE_ADVANCED_PATTERN_PCRE_LINK

2.2.0.125
# Fixed bug with ACL in Joomla 2.5
^ Added settings update during install (replace groups' names with ids)
^ Removed notices and warnings

2.2.0.124
$ Renaming some constants and removing unused constants (backend)
$ Updated French backend translation for plugons (thanks to Solid_Orphan)
$ Updated Turkish backend translation for plugons (thanks to cumla)

2.2.0.123
$ Updated German backend translation for plugins (thanks to maxschm)

2.2.0.122
+ Added plugin for AllEvents extension (thanks to Christophe Avonture)

2.2.0.121
# Fixed JavaScript error 'Joomla is not defined' (thanks to Christophe Avonture)

2.2.0.120
$ Italian backend translation complete (thanks to Guido Romano)

2.2.0.119
# Another improvement of processing \n in messages

2.2.0.118
$ English backend translation was updated
$ Russian backend translation was updated
$ Renaming some constants and removing unused constants
# Additional fix for extra BR in messages

2.2.0.117
$ Added Japanese frontend transaltion (thanks to spursmusasi)
^ Updated year in copyright
# Fixed form template 'Enter text' replaced with BBCODE_HINT_ENTER_TEXT
# Fixed warning on PHP 5.3
# Fixed bug with extra BR in comments policy (when using HTML)

2.2.0.116
- Removed unused code from JComments installer
- Removed check for required parameters from previous version
$ Correction of backend language files
^ Small changes in installer CSS
- Removed unused images in backend

2.2.0.115
$ Correction of backend language files

2.2.0.114
$ NOTIFICATION_COMMENT_UNSUBSCRIBE renamed to NOTIFICATION_COMMENT_UNSUBSCRIBE_MESSAGE
$ Added NOTIFICATION_COMMENT_UNSUBSCRIBE_LINK (by default it equal to BUTTON_UNSUBSCRIBE)
^ Replaced A_STATE with A_PUBLISHING in Subscriptions (backend)

2.2.0.113
# Fixed bug in email protection function
- Removed unused code

2.2.0.112
# Fixed bug in Ban IP  (Quick Moderation)
^ Added Ban IP action in e-mails with reports to moderator

2.2.0.111
# Fixed bug in JComments router
^ Added displaying messages for ban via Quick Moderation function
^ Prefix 'RE:' now added only once (it will prevent RE: RE: RE: ...)
$ Updated Catalan frontend translation (thanks to migueliyo17)

2.2.0.110
$ Updated Bulgarian frontend translation (thanks to Ivo Apostolov)
$ Updated Croatian frontend translation (thanks to Tomislav Kikic)

2.2.0.109
+ Added JFormField (Joomla 1.7) and JElement (Joomla 1.5) for Object Group
^ Folder 'model' renamed to 'models'
^ Comments view uses one XML for Joomla 1.5 and Joomla 1.7

2.2.0.108
$ Updated Norwegian frontend translation (thanks to osonder)
$ Updated Kmer frontend translation (thanks to Sovann Heng)


2.2.0.107
$ Updated Danish frontend translation (thanks to Mads)
$ Added Chinese frontend translation (thanks to Yusuf Wang and moiska)
^ Refresh object button added to Import section
^ Search plugin uses the frontend language file
$ Added Italian backend translation for plugins (thanks to Guido Romano)
$ Updated Slovenian frontend translation (thanks to Chico)


2.2.0.106
$ Updated Latvian translation (thanks to Dmitrijs Rekuns)
# Fixed bug with processing URLs

2.2.0.105
$ Removed all backend translations except (English, French, German, Italian, Portuguese, Russian, Spanish, Turkish)
$ Added Arabic translation (thanks to Ashraf Damra)
^ Updated XML-manifests for Joomla! 1.5
$ Translations for all backend plugins are converted to Joomla 1.7 format
^ Backend constants review
^ Updated code for language files conversion (Joomla 1.0, Joomla 1.5)
- Removed database updates for versions earlier than 2.2.0.0


2.2.0.104
^ Updated Joomla! version detection
^ Updated XML-manifests for Joomla! 1.5

2.2.0.103
^ Code review and fixes
$ Updated French translation (thanks to Solid_Orphan)
$ Updated Portuguese Brazilian translation (thanks to iikozen)
$ Updated Spanish translation (thanks to Selim)
$ Updated Turkish translation (thanks to cumla)
$ Updated Thai translation (thanks to ariesanywhere)
$ Updated Italian translation (thanks to Solir)
$ Added Lithuanian translation (thanks to Andrewas and abc123)
$ Added Persian translation (thanks to hostkaran and ULTIMATE)
$ Updated Dutch translation (thanks to RedBull)
$ Updated Swedish translation (thanks to dansve)
$ Updated German translation (thanks _ib_)
$ Updated Portuguese translation (thanks to Paulo Izidoro)
$ Updated Byelorussian translation (thanks to Prywid)
$ Updated Hungarian translation (thanks to gabore)

2.2.0.102
$ Frontend language files converted to Joomla 1.7 format
$ Updated German translation
$ Backend language files were corrected
^ New convertation functions for language files (Joomla 1.0 and Joomla 1.5)
^ Updated translators list
^ Updated JComments installer
$ Added Hebrew translation for frontend (thanks to vollachr)

2.2.0.101
^ New rules for JomSocial

2.2.0.100
$ Danish translation has been updated (thanks to ot2sen)
^ New field thread_id added to jos_jcomments table

2.2.0.99
# Extra redirect after update (Joomla 1.7)

2.2.0.98
# JButtonRefreshObjects is incompatible with Joomla 1.5
+ New tag {jcomments} in article's text allows to set position of comments block

2.2.0.97
# Fixed bug in getItemid
# Fixed bug in com_content plugin (were errors if article is missing)

2.2.0.96
# Fixed bug in JComments import (Joomla 1.0)
# Fixed bug with JDocument call (Joomla 1.0)
# Fixed bug in com_content plugin (Joomla 1.0)
^ Changed interface of refresh objects window
^ Added list reload after refreshing objects

2.2.0.95
# Language parameter not used during comments import

2.2.0.94
# Fixed bug in fixLongWords function

2.2.0.93
^ Disable JComments links in modules

2.2.0.92
# Fixed few notices in backend
# Updated Zoo plugin
^ Changed JComments update server url
# Fixed CSS style for vote button

2.2.0.90
# Fixed bug in Zoo plugin

2.2.0.89
$ Romanian translation has been updated (thanks to Razvan Ciule)
$ Turkish translation has been updated (thanks to aytugakar)
$ Hungarian translation has been updated (thanks to George Kostopoulos)
$ Thai translation has been updated (thanks to Thammatorn Kraikokit)
$ Greek translation has been updated (thanks to Ariskos)

2.2.0.88
$ Polish translation has been updated (thanks to codis)
$ Italian translation has been updated (thanks to Giuse Covino)
$ Serbian translation has been updated (thanks to Woutan)
$ French translation has been updated (thanks to jmchauvel and Sable)
$ Portuguese translation has been updated (thanks to Pedro Jesus)
$ Added Bosnian translation for frontend (thanks to Amicus)
+ Added plugin for JEvents extension
^ Updated plugin for Zoo 2.4
^ Updated plugin for EasyGallery
^ Updated plugin for Poll
# Infinite loop in refresh objects cache function


2.2.0.87
$ Czech translation has been updated (thanks to Jiri Karger)
# Incorrect path to styles in backend (Joomla 1.7)
^ Corrected CSS style for backend (Joomla 1.7)
+ Added comments import from UdjaComments (comments and subscriptions)

2.2.0.86
# Do not call getLink for RSS if RSS is disabled
$ Polish translation has been updated (thanks to codis)

2.2.0.85
# Fixed bug in JCommentsForm.prototype.error (thanks to Denis Ryabov)

2.2.0.84
# Fixed bug in OI refresh when multilanguage is disabled
^ Changed toolbar icon for OI refresh

2.2.0.83
^ Objects' information (OI) refresh optimization and multilanguage support

2.2.0.82
# Fixed bug in manifest file (missed wait.gif)
# Fixed bug in manifest file (missed backend ukrainian language file)
# Fixed bug in SOBI Review import (thanks to Nex)
+ Added first implementation of objects' information (OI) refresh

2.2.0.80
# Fixed bug with jomsocial_rule.xml permissions
# The comments view language constants were copied to administrator's language file (Joomla 1.5)

2.2.0.79
+ Added plugin for HekimaBlog user profiles
^ Updated comments import from HekimaBlog

2.2.0.78
+ Added comments' subscriptions import from HekimaBlog

2.2.0.77
^ Updated plugin for com_hekimablog
^ Updated comments import from HekimaBlog

2.2.0.75
# Fixed bug in getItemid method (thanks to sherza)
$ Fixed typo in russian language file (thanks to sherza)

2.2.0.74
# Incorrect extract path for plugins

2.2.0.73
+ Added filter by object's access level in RSS and search plugin
# JCommentsObjectHelper should not store empty object's info

2.2.0.72
# Fixed bug with root usergroup name (Joomla 1.7)
+ Added settings update after usergroup renaming (Joomla 1.7)

2.2.0.71
# Incorrect usergroups processing in settings

2.2.0.70
# Incorrect checking max_comments_per_object parameter
# Incorrect syndicationURL in user's comment feed

2.2.0.69
+ Added comments import from HekimaBlog
^ Updated plugin for com_hekimablog
^ Updated plugin for com_flexicontent
^ Updated plugin for com_k2
^ Updated plugin for com_listbingo
^ Updated plugin for com_jdownloads
^ Updated plugin for com_jomtube
^ Updated plugin for com_seyret
^ Updated plugin for com_marketplace
^ Added plugin for com_djcatalog
^ Added plugin for com_djclassifieds

2.2.0.68
^ Updated plugin for com_jcomments

2.2.0.67
^ JCommentsPlugin::getItemid method was extended with additional parameter
^ Updated plugin for com_apoll
^ Updated plugin for com_beeheard
^ Updated plugin for com_jdownloads
# Fixed bug with ACL check

2.2.0.66
$ Fixed typo in russian language file
# Fixed warning after comment publishing

2.2.0.65
# Fixed bug with ACL (incorrect user group detection) (Joomla 1.6)
# Fixed bug in backend subscription manager
# Disable storing objects info from backend
^ Updated plugin for com_flexicontent
^ Updated plugin for com_tienda
^ Updated plugin for com_k2
^ Updated plugin for com_sobi2
^ Updated plugin for com_sobipro

2.2.0.64
# The language file for the search plugin was not loaded (Joomla 1.5, Joomla 1.6)
^ Search plugin now uses obejcts table

2.2.0.63
# Error with JPagination (Joomla 1.5, Joomla 1.6)

2.2.0.62
# Fixed bug with object info caching
^ Updated plugin for com_tienda

2.2.0.61
^ Code review, optimization and refactoring
# Fixed multilanguage support for RSS 
# Comments with long urls broke backend comments list

2.2.0.60
+ Two new events in system plugin onJCommentsShow and onJCommentsCount (Joomla 1.5, Joomla 1.6)
+ New plugin for com_content categories (Joomla 1.5, Joomla 1.6)

2.2.0.59
^ Two new fields in objects table - expired and modified
# Removed extra decoding in prepareValues (Joomla 1.6)

2.2.0.58
^ Huge refactoring for JCommentsModel
^ Code optimization for RSS generator
+ Added user's comments RSS feed

2.2.0.57
^ Object info will not saved if it empty (in case if we do not have appropriate plugin for this)
^ Code optimization for RSS generator

2.2.0.56
+ Added plugin for Sobi Pro
^ Updated plugin for com_listbingo
^ Updated plugin for com_jdownloads
^ Updated plugin for com_flexicontent

2.2.0.55
^ Disable updating object's link from backend
+ Article information will be stored after and article's edit on frontend (Joomla 1.6)

2.2.0.54
^ Improved object's information caching
^ SQL queries quantity was reduced (full RSS feed's creation)
+ Added caching for isSubscribed method
^ Method sendToSubscribers now uses cached information about object's link and title
# Notice in router for full rss feed
^ Updated plugin for com_content
^ Updated plugin for com_k2
^ Updated plugin for com_sobi2
^ Updated plugin for com_hekimablog

2.2.0.53
# Report to moderator feature did not work when report's reason is not required

2.2.0.52
^ Small fix 

2.2.0.51
^ Code review and optimization
+ Added legacy implementation of JDocument for Joomla 1.0 sites
# Fixed bug with mosCache (Joomla 1.0)
# Fixed bug in legacy JCache implementation (Joomla 1.0)
# Fixed error in legacy JText::plural function (Joomla 1.0)
# Error in xml manifest file for Joomla 1.0
^ In comments form field captcha-refid renamed to captcha_refid

2.2.0.50
# Javascript not setting error classes correctly (thanks to harikaram)
# Deprecated HTML tags in BBCode - bold, italic (thanks to harikaram)
# Non-escaped html code in HTML tags/attributes (readmore link's title)
+ Added message when user has been unsubscribed
# Some kinds of links could not be shortended

2.2.0.49
# Removed notice in JComments settings (Joomla 1.0, Joomla 1.6)

2.2.0.48
^ Small fix to allow correct extension update (Joomla 1.6)

2.2.0.47
# Removed notice in getCache method

2.2.0.46
# After upgrade smiles_path variable could be empty 
^ Reverted removing JCommentsPluginHelper

2.2.0.45
^ Improved caching in JCommentsObjectHelper
^ Performance optimization in JCommentsModel

2.2.0.44
- Removed JCommentsCache class
+ Added legacy implementation of JCache for Joomla 1.0 sites
^ JCommentsSubscriptionDB renamed to JCommentsTableSubscription

2.2.0.43
# Removed warning during notification sending (backend)

2.2.0.42
# Missed constant COMMENTS_FOR replaced with NOTIFICATION_DISCUSSION
# Removed warning during notification sending (backend)

2.2.0.41
$ Updated belorussian localization (thanks to prywid)
# Missed translation in notifications when comment has been published from backend 

2.2.0.40
$ Missed strings in backend localization (subscriptions)
$ Filter button renamed from Go to Search
$ Updated german localization (thanks _ib_)
# Incorrect title in new subscription dialog
$ Added missed constant FORM_NAME_REQUIRED

2.2.0.39
# Incorrect language constant name (A_SUBSCRIPTIONS_EDIT)
# Incorrect language constant name (BUTTON_REPORT_TO_ADMINISTRATOR)
^ Corrected styles in Custom BBCode editor
$ Updated ukranian frontend language file (thanks Dutch)
$ Updated spanish frontend language file (thanks Selim)

2.2.0.38
# Broken CAPTCHA refresh
$ Fixed typo in russian language file
- Removed JCommentsPluginHelper
- Removed support of parameters for Joomla 1.0 plugins
$ Added language strings for rss feeds
^ Missed titles for links on frontend
$ Updated frontend language files

2.2.0.37
^ Reworked code for support plural forms for 'comments' link
$ A number of frontend language strings are changed

2.2.0.36
^ Search plugin has been updated (changed search area constant)

2.2.0.35
^ Update server's definition has been moved to manifest file (Joomla 1.6)

2.2.0.34
^ Imporved extension name fix (Joomla 1.6)
# Fixed undefined method subscriptions_new_menu()

2.2.0.33
# Warning when using date function without date_default_timezone_set

2.2.0.32
$ Updated english language files (thanks to 7th rider)
$ Added translation for layout's title and description

2.2.0.31
# Incorrect timezone in comment's date (Joomla 1.6)
^ CSS styles adjusted in Custom BBCode and Settings sections (Joomla 1.6)

2.2.0.30
+ Added support for updates (Joomla 1.6)

2.2.0.29
$ Fixed errors in russian language file
$ Added missing strings
$ Added language files for plugins (Joomla 1.6)
# Incorrect ordering for editor-xtd plugins

2.2.0.28
$ Added missing strings
# Removed debug output in plgSearchJComments

2.2.0.27
# Fixed error with unknown table jos_templates_menu (Joomla 1.6)
# Added plugin for JPhoto (thanks to Hari Karam Singh)
# Fixed bug in K2 plugin

2.2.0.26
^ Changed multilanguage detection (Joomla 1.6 or JoomFish)

2.2.0.25
+ Added multilanguage support for Joomla 1.6
# Fixed CSS style for comments form button (Joomla 1.6)
# Fixed issue with CAPTCHA in Google Chrome (Joomla 1.6)
# Fixed installation error (Joomla 1.0)

2.2.0.24
+ Added plugin for HekimaBlog support (thanks to Irina Popova)
# Fixed bug in SOBI2 plugin (http://www.joomlatune.com/forum/index.php/topic,797.0.html)
# Article title with quotes breaks W3C on RSS link (http://www.joomlatune.com/forum/index.php/topic,2543.0.html)

2.2.0.23
# Bug with comments publishing in backend
$ Updated english language file (AP_CAN_REPORT)
+ The report to administrator settings are hidden until feature is disabled

2.2.0.22
$ Fixed error in Portugese language file
# Untranslated strings during uninstall (Joomla 1.6)
# Fixed CSS styles in install/uninstall screens (Joomla 1.6)

2.2.0.21
# Stopped using deprecated functions (split, eregi)
^ Improved XTML strict compatibility for comments form

2.2.0.20
# Missed CSS classes in Custom BBCode manager
^ Usergroups are dispayed as tree in Custom BBCode manager (Joomla 1.6)
$ New language constants ERROR_SESSION_EXPIRED and ERROR_EMAIL_EXISTS

2.2.0.19
+ Added xml files for comments view (Joomla 1.5, Joomla 1.6)
+ Added fix for Joomla 1.6 (incorrect component's name)
# Fixed menu item params loading (Joomla 1.6)
$ New constants for view constants translation (english only yet) (Joomla 1.6)
# Use Joomla.submitbuttin instead submitbutton in Joomla 1.6
^ Added id="adminFrom" for all forms in backend

2.2.0.18
# Some CSS and HTML improvements in backend

2.2.0.17
# Increased category box size 
# Corrected some JComments backend CSS style to look more accurate in Joomla 1.6
# Fixed incorrect constant usage in comment edit (backend)
$ Fixed typo in language files (stpped -> stopped)

2.2.0.16
# Fixed datetime format in comment edit form (backend) (Joomla 1.6)
# Custom BBCode couldn't be enabled
# Removed notice in categoris view (Joomla 1.6)
# Added replacing &quote; to "_QQ_" in language files (Joomla 1.6)

2.2.0.15
# Fixed usergroups names during restore default settings (Joomla 1.6)
# Fixed ACL check for Public (Joomla 1.6)
# Fixed custom bbcode ordering issue

2.2.0.14
^ Categories are dispayed as tree (Joomla 1.6)
^ Usergroups are dispayed as tree (Joomla 1.6)
^ Settings are saved using AJAX (Joomla 1.6)
$ Frontend language constants are adjusted to be compatible with Joomla 1.6
$ Backend language constants are adjusted to be compatible with Joomla 1.6
+ Added backend menu items correction (Joomla 1.6)
# Fixed duplicate unistall results message (Joomla 1.6)
+ Added datetime format correction in language files (Joomla 1.6)
# PHP5.3 compatibility fix (removed call-time pass-by-reference, return by reference etc)
# Incorrect links to com_content articles (Joomla 1.6)
# Missed Publish/Unpublish buttons in backend (Joomla 1.6)

2.2.0.13
+ New parameter: Form position (Before comments list / After comments list)
^ Updated plugin for JoomGallery (thanks to Chraneco)
# Fixed bug Class 'JoomlaTuneAjaxResponse' not found in /.../components/com_jcomments/jcomments.class.php
# Users are still able to post comments even when you insert {jcomments lock} into the article (using Reply feature)
^ Code review
# Fatal error during uninstall in Joostina 1.3
# Added compatibility with Multicategories component
+ Added plugin for JVideoClip support (thanks to mazao)
# Fixed error in VM plugin (thanks to era)
# Fixed error in RSS feed generator
+ Added plugin for HikaShop support (thanks to Hikari Team)
# Fixed bug with Maximum number of reports per comment parameter

2.2.0.12
+ New parameter: Tree order (allow set comment's ordering for tree view)
# Incorrect magic_quotes_gpc processing in save settings function
# Invalid token error in About JComments section
# Missing icon for CustomBBCodes manager

2.2.0.11
# The events onBeforeCommentPublished and onAfterCommentPublished are called from backend too
# Fixed XSS vulnerability through URL and IMG tags (thanks to Jeff Channell)
+ New parameter: Max. comments per object (auto lock article's commenting if comments count more than allowed)
# When somebody use ipv6 and write a comment, the ip will not save correct (http://www.joomlatune.com/forum/index.php/topic,2053.0.html)
+ New parameter: Feed limit (items count in comments feed)
# Fixed small bugs in JComments backend

2.2.0.10
$ Backend language files updated (removed spaces from constants)
+ Added convertation language files (backend + menu) to Joomla! 1.6 format during installation process
+ Added JCommentsObjectGroup element (for JComments Latest module and etc).
+ New events: onAfterCommentVoted, onAfterCommentReported, onBeforeUserBanned, onAfterUserBanned
# Fixed IE inherited margin bug for comments form (http://www.joomlatune.com/forum/index.php/topic,1534.0.html)
# Removed nofollow from local links was inserted by [url] tag
+ Added ability to add the comment author's homepage in backend
# Comments were not loaded if Joomla cache is activated
# Changed data type of isgood and ispoor fields (http://www.joomlatune.com/forum/index.php/topic,1634.0.html)
# Fixed error with URL tag processing
+ Added plugin for Marketplace 2.0 support

2.2.0.9
$ Language file was splitted into 2 parts - frontend and backend

2.2.0.8
^ Created separate plugins for Joomla 1.5 and Joomla 1.0
# Small bug with comments deletion mode processing
+ Added Joomla 1.6 support (experimental)

2.2.0.7
# Small bug in JComments installer
+ Smiles location could be changed via smiles_path variable (in jos_jcomments_settings)

2.2.0.6
+ New parameter: enable reports (allows to enable/disable report to administrator feature
+ New parameter: reports per comment (maximum reports count per comment)
+ New parameter: reports before unpublish (allows to unpublish comment after N reports)
+ New parameter: report reason disabled (allows to not require report reason)
+ New option for homepage field: unrequired for guests, disabled for users
+ New parameter: always embed comments into page source (includes comments list in page source when Joomla cache is enabled)
# Incorrect warning message about missing afterDisplayContent for some JA or TemplatePlazza templates
# Incorrect Itemid in MyBlog plugin
+ New parameter: field 'Name' appearence in comment form (disabled, enabled, required for guests)
^ Optimized SQL-query with default settings
$ Language string FORM_NAME now means 'Name' instead 'Name (required)'. Also FORM_NAME_REQUIRED language string was added.

2.2.0.5
^ Global code refactoring
^ Added file with JComments version information
# Fixed error in comments import function

2.2.0.4
+ Added blacklist (IP-ban feature)
# System plugin inserts styles to RSS
- Removed depricated class JCommentsPluginLoader
^ Updated JComments default template RTL-styles (thanks to hostkaran)
^ Updated plugin for APoll component (to support APoll 2.0)

2.2.0.3
^ Import function now supports huge number of comments to import
# E-mail templates doesn't use settings of displaying user name
+ Added error message if user session has expired 
+ New permission options (edit/publish/remove comments for own content)
+ Added plugin for Listbingo component
+ Added caching in JCommentsObjectHelper (will reduce sql queries count)
# Missing alt attribute for Gravatar image

2.2.0.2
+ Added reports list in JComments' backend (reports are shown in comment's edit section)
+ Added possibilty to filter reported comments
^ If notification settings are changed - all settings page will be reloaded during save
+ New parameter: Delete mode (how to delete comment - remove it with all replies 
  or just clear title/comment and mark item as deleted
# Bad words filter didn't applied to comment's title
+ New parameter: Merge time
$ Removed BOM from Swedish, Turkish and Thai language files
+ Added comments import from rsiComments
+ Added plugin for JomTube component (thanks to July07)
$ Updated Thai translation (thanks to Thammatorn Kraikokit)
+ New option for homepage field: required for guests, disabled for users
^ Improved JComments security 
# Fixed error in JXtended JXComments import (thanks to Rajoz)
+ Added subscriptions import from JoomlaComment
+ Added subscriptions import from JomComment
# Fixed error in subscription manager (backend)
$ Updated Turkish translation (thanks to Enes)
# Fixed bug with quotes strip
+ Added optional removing JComments tags (like {jcomments on}) from RSS feeds
# Fixed comments availability for archived articles
# Fixed forcing a break after a certain amount of characters
# Notifications were not sent if comment published from backend or quick moderation
# Forcing a break after a certain amount of characters not applied in search results
+ Added new method JCommentsModel::getUserCommentsCount
+ Added plugin for Tienda component
+ Added plugin for VideoFlow component (thanks to Kirungi Fred Fideri)
# Fixed bug in Custom BBCode's save function (close tag wasn't saved)

2.2.0.1
# Fixed issue with style and scripts loading in JComments backend on Windows server
# Removed warning during import comments
# Fixed bug in comments pagination
^ If object_group isn't set - don't show anything and don't accept new comments 
^ Fixed bug with empty page after removing last comment
^ Updated plugin for DatsoGallery

* -> Security Fix
# -> Bug Fix
$ -> Language fix or change
+ -> Addition
^ -> Change
- -> Removed
! -> Note