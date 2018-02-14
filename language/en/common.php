<?php
/**
*
* global language extension for the phpBB Forum Software package.
*
* @copyright (c) 2018 eunaumtenhoid <https://github.com/phpBBTraducoes>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'TYPE_UPLOAD' 			=> 'Version',
	'TOPIC_ICON' 			=> 'teste',
	'FORUM_INDEX'			=> 'Forum',
));
