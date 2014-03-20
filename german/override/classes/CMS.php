<?php

class CMS extends CMSCore
{

	public static function getContentFromId($id_cms, $id_lang = null) {
		
		/*
		| GC German 1.5.6.0 | 20131022
		| Eigene Funktion: Liefert Inhalt anhand CMS ID
		*/
		
		if(!Validate::isUnsignedInt($id_cms))
			return null;
		
		if(empty($id_lang))
			$id_lang = Context::getContext()->cookie->id_lang;
		
		$cms = new CMS((int)$id_cms, (int)$id_lang);
		
		if(Validate::isLoadedObject($cms)) {
			return $cms->content;
		}
		else
			return '';
		
	}
	
}

