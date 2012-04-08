<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Theme+
 * Copyright (C) 2010,2011 InfinitySoft <http://www.infinitysoft.de>
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  2010,2011 InfinitySoft <http://www.infinitysoft.de>
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    Theme+
 * @license    LGPL
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_theme_plus_file']['type']                     = array('Filetype', 'Please choose the file type.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['js_file']                  = array('JavaScript file', 'Please choose the javascript file.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['js_url']                   = array('JavaScript url', 'Please enter the javascript url.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['css_file']                 = array('CSS file', 'Please choose the css file.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['css_url']                  = array('CSS url', 'Please enter the css url.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['media']                    = array('Mediatype', 'Here you can add a mediatype query.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['cc']                       = array('Conditional Comment', 'Here you can add a conditional comment. Only the condition is required, for example "lte IE 7" or "IE 9". The prefix "&lt;!--[if" and suffix "]&gt;" automatically added.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['filter']                   = array('Apply filter', 'Here you can activate the server site filter logik. (Warning: This feature does not work with the page cache! A modification to make this possible is already requested.)');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['filterRule']               = array('Filter', 'Please choose the server side filters.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['filterInvert']             = array('Invert filter', 'Invert the filter logik.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['editor_integration']       = array('WYSIWYG editor integration', 'Add this file to the wysiwyg editor.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['force_editor_integration'] = array('Force WYSIWYG editor integration', 'Force adding this file to the wysiwyg editor.');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['position']                 = array('Position in the html', 'Choose if the javascript is added in the &lt;head&gt; or at the bottom of &ltbody&gt;');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_theme_plus_file']['source_legend']          = 'File';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['editor_legend']          = 'WYSIWYG editor integration';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['editors']['default']     = 'Standard editor';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['editors']['newsletter']  = 'Newsletter editor';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['editors']['flash']       = 'Flash editor';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['positions']['head']      = 'inside &lt;head&gt;';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['positions']['body']      = 'at bottom of &lt;body&gt;';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['aggregations']['global'] = 'With all other files';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['aggregations']['theme']  = 'With all files from the same theme';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['aggregations']['pages']  = 'With all files from the page and all inherited files from the parent pages';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['aggregations']['page']   = 'With all files from the page without inherited files';
$GLOBALS['TL_LANG']['tl_theme_plus_file']['aggregations']['never']  = 'Never';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_theme_plus_file']['new']         = array('New file', 'Add a new file');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['newJsUrl']    = array('New url', 'Add a new javascript url');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['newJsFile']   = array('New file', 'Add a new javascript file');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['newCssUrl']   = array('New url', 'Add a new css url');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['newCssFile']  = array('New file', 'Add a new css file');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['show']        = array('Details', 'Show the details of file ID %s');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['edit']        = array('Edit file', 'Edit file ID %s');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['delete']      = array('Delete file', 'Delete file ID %s');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['cut']         = array('Move file', 'Move file ID %s');
$GLOBALS['TL_LANG']['tl_theme_plus_file']['copy']        = array('Duplicate file', 'Duplicate file ID %s');