<?php

function temPost()
{
    if (count($_POST) > 0) {
        return true;
    }

    return false;
}

function validarEmail($email)
{
	$padrao = '/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/';
	$resultado = preg_match($padrao, $email);

	if (! $resultado) {
		return false;
	}

	return true;
}