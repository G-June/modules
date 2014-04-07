<?php

class Mail extends MailCore {
    public static function Send($id_lang, $template, $subject, $template_vars, $to,
	$to_name = null, $from = null, $from_name = null, $file_attachment = null, $mode_smtp = null,
	$template_path = _PS_MAIL_DIR_, $die = false, $id_shop = null, $bcc = null)
    {
	if (Module::isInstalled('legal')) {
	    $params = array(
		'id_lang'         => $id_lang,
		'template'        => $template,
		'subject'         => $subject,
		'template_vars'   => $template_vars,
		'to'              => $to,
		'to_name'         => $to_name,
		'from'            => $from,
		'from_name'       => $from_name,
		'file_attachment' => $file_attachment,
		'mode_smtp'       => $mode_smtp,
		'template_path'   => $template_path,
		'die'             => $die,
		'id_shop'         => $id_shop,
		'bcc'             => $bcc
	    );
	    
	    Legal::overrideMailVars($params);
	    
	    extract($params);
	}
	
	return parent::Send($id_lang, $template, $subject, $template_vars, $to,
	$to_name, $from, $from_name, $file_attachment, $mode_smtp,
	$template_path, $die, $id_shop, $bcc);
    }
}

