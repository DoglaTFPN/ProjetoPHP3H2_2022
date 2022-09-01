<?php 

	class Biblioteca{
		const nome = "GTX";
	}

	class Aplication extends Biblioteca{

		const Ambiente = "Gnome Desktop";
		const Versao = "3.8";

		function __construct($nome){
			echo parent::Nome . self::Ambiente . self::Versao . $Nome . "<br>";
		}
	}

	echo Biblioteca::Nome . Aplication::Ambiente . Aplication::Versao . "<br>";

	new Aplication('Dia');
	new Aplication('Gimp');


?>