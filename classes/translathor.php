<?php 
/* 
=====================================================================
* Translathor Class
* Translate your app projects or websites easily just with php
* Author: Carlos Maldonado (@choquo), 2013
* www.bitecluster.com
* Released under GNU licence. (http://www.gnu.org/licenses/gpl.html)
=====================================================================

NOTE:
=====================================================================
In this example you can translate between two languages es (spanish), en (english).
This way of translating is oriented for small projects, if you need translate too much languages you should give a try to GETTEXT
(http://php.net/manual/en/book.gettext.php)
=====================================================================
*/

class Translathor {
	public function translate($es_text, $en_text, $lang_choosed){

		//ES (spanish default) $lang_choosed == '' determines the default language if $lang var is empty
		if($lang_choosed == 'es' or $lang_choosed == ''){
			return $es_text;
		}
		
		//EN (english)
		if($lang_choosed == 'en'){
			return $en_text;
		}
	}
}
?>