<?php

namespace Contao;

/*
/Klasse zum Editieren des Beginns der Head-Sektion von fe_page
*/
class CookieAcceptBanner {
	public function blockAllCookies($strBuffer, $strTemplate) {

		\Controller::loadDataContainer('TL_CONFIG');
		if('fe_page'===$strTemplate) {
			$returnBuffer = str_replace(
				"<head>",
				 '<head><script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="'.$GLOBALS['TL_CONFIG']['cookiebotApiNumber'].'" type="text/javascript". data-blockingmode="auto"></script>',
				"$strBuffer"
			);
		}
	return $returnBuffer;
	}
}