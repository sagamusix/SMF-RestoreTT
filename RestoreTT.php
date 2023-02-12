<?php

if (!defined('SMF'))
	die('No direct access...');

function restore_tt()
{
	global $context;
	if (($key = array_search('tt', $context['legacy_bbc'])) !== false)
		unset($context['legacy_bbc'][$key]);
}

