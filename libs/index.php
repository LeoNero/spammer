<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("Classes/Functions.php");
include "helper.php";

$func = new Functions();

$erros = false;

if(temPost()) {

	$spam = array();

	if(isset($_POST['quantidade']) && !empty($_POST['quantidade'])) {
		$spam['quantidade'] = $_POST['quantidade'];
	} else {
		$erros = true;
	}	

	if(isset($_POST['para']) && !empty($_POST['para'])) {
		if(validarEmail($_POST['para'])) {
			$spam['para'] = $_POST['para'];
		} else {
			$erros = true;
		}
	} else {
		$erros = true;
	}

	if(isset($_POST['assunto']) && !empty($_POST['assunto'])) {
		$spam['assunto'] = $_POST['assunto'];
	} else {
		$erros = true;
	}

	if(isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
		$spam['mensagem'] = $_POST['mensagem'];
	} else {
		$erros = true;
	}


	if(!$erros) {
		$func->sendEmail($spam['para'], $spam['assunto'], $spam['mensagem'], $spam['quantidade']);
		echo "Spam enviado!";
	}

}

$spam = array(
	'quantidade' 	=> isset($_POST['quantidade']) ? $_POST['quantidade'] : '',
	'para' 			=> isset($_POST['para']) ? $_POST['para'] : '',
	'assunto' 		=> isset($_POST['assunto']) ? $_POST['assunto'] : '',
	'mensagem' 		=> isset($_POST['mensagem']) ? $_POST['mensagem'] : ''
);

include "./views/index.php";