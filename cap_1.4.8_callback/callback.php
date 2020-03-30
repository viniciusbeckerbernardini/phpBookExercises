<?php 

function oGremioVaiSair($substantivo,$repeticoes = 27){
	$i = 0;

	do{
		if($i % 3 == 0){
			echo "\n O GRÊMIO VAI SAIR $substantivo! \n";
			$i += 3;
		}
		if($i % 9 === 0){
		echo "\n VAI SAIR $substantivo!
			  \n VAI SAIR $substantivo!
			  \n VAI SAIR $substantivo!
		";
		}
	}while($i < $repeticoes);
}

echo 4 % 3;

//Só permite passar um parametro
call_user_func('oGremioVaiSair','CAMPEÃO');

//Permite diversos parametros
call_user_func_array('oGremioVaiSair', array('CAMPEÃO',99));