<?php

function SeculoAno($ano)
{
	//se ano informado é até 100, o século é 1
	if($ano<=100)
		$seculo = 1;
	else
	{
		//descobrindo século
		$seculo = $ano / 100;
		
		
		//se não for uma divisão inteira, adiciona + 1 ao século
		if ($ano % 100 >=1)
		{
			$seculo = $seculo +1;
			
			//remove casas decimais
			$seculo = intVal($seculo);
		}
	}
		
	//exibe o século
	echo $seculo;
}

//teste
SeculoAno(1701);

?>