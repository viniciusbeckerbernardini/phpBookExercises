<?php 
declare(strict_types=1);

function verificaSeETriCampeaoDaAmerica(bool $time){
	return  ($time === true? "\nEsse time é tri campeão" : "\nNão é tri");

}


$inter = 'true';
$gremio = true;

try {
	echo verificaSeETriCampeaoDaAmerica($inter);
} catch (TypeError $e) {
		echo ("Não adianta tentar se passar por verdadeiro, tu não é tri campeão!");
}


try {
	echo verificaSeETriCampeaoDaAmerica($gremio);
} catch (TypeError $e) {
		throw new TypeError("Não adianta tentar se passar por verdadeiro, tu não é tri campeão!");
}