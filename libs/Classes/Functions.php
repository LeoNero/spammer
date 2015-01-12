<?php 

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

class Functions
{

	public function sendEmail($para, $assunto, $mensagem, $quantidade) {
		$header = 'From: Muahaha dontreply@spam.com' . "\r\n" .
					'Content-type: text/html; charset=utf-8' . "\r\n";

		for ($i = 0; $i < $quantidade; $i++) {
			mail($para, $assunto, $mensagem, $header);
		}
	}
	
}