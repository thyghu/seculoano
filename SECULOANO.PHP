<?php



function SeculoAno($ano)
{
	if($ano<=100)
		$seculo = 1;
	else
	{
		$seculo = $ano / 100;
		
		if ($ano % 100 >=1)
		{
			$seculo = $seculo +1;
			$seculo = intVal($seculo);
		}
	}
		
	
	echo $seculo;
}

SeculoAno(1701);

?>