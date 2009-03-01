<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
$tempColumns = Array (
	"tx_individualpagetitle_titletag" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:individualpagetitle/locallang_db.xml:pages.tx_individualpagetitle_titletag",		
		"config" => Array (
			"type" => "input",	
			"size" => "30",
		)
	),
);


t3lib_div::loadTCA("pages");
t3lib_extMgm::addTCAcolumns("pages",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes("pages","tx_individualpagetitle_titletag;;;;1-1-1",'','after:title');

$tempColumns = Array (
	"tx_individualpagetitle_titletag" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:individualpagetitle/locallang_db.xml:pages_language_overlay.tx_individualpagetitle_titletag",		
		"config" => Array (
			"type" => "input",	
			"size" => "30",
		)
	),
);


t3lib_div::loadTCA("pages_language_overlay");
t3lib_extMgm::addTCAcolumns("pages_language_overlay",$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes("pages_language_overlay","tx_individualpagetitle_titletag;;;;1-1-1",'','after:title');

t3lib_extMgm::addStaticFile($_EXTKEY,'static/Individual_Pagetitle/', 'Individual Pagetitle');


t3lib_extMgm::addLLrefForTCAdescr('pages','EXT:individualpagetitle/locallang_csh_pages.xml');
t3lib_extMgm::addLLrefForTCAdescr('pages_language_overlay','EXT:individualpagetitle/locallang_csh_lang_overl.xml');
?>