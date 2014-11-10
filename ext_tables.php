<?php

$TCA['tt_content']['columns']['CType']['config']['items'][] = array('Image-Teaser', 'imageTeaser');
$TCA['tt_content']['types']['imageTeaser'] = array(
	'showitem' =>
	// Tab:General
		'--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.general;general,' .
		'header,' .
		//'bodytext,' .
		'bodytext;Text;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],' .
		// RTE-Deaktivieren
		'rte_enabled;LLL:EXT:cms/locallang_ttc.xlf:rte_enabled_formlabel,' .
		// Tab:Image
		'--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.images,' .
		'image,' .
		'--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.imagelinks;imagelinks,' .
		'--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.image_settings;image_settings,' .
		// Tab:Visibility
		'--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.appearance,' .
		'--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.visibility;visibility,' .
		'layout,' .
		'tx_themes_variants,' .
		'tx_themes_responsive,' .
		'tx_themes_behaviour,' .
		// Tab:Access
		'--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,' .
		'--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.access;access'
);
