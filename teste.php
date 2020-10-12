<?php
class teste{
	public function verifica(){
		$retorno = '';
		for ($i =1; $i<=100;$i++){
			$restoTres =  $i % 3;
			$restoCinco =  $i % 5;

			switch (true) {
				case ($restoTres == 0):
					$retorno .= 'Three\n';
				break;
				case ($restoCinco == 0):
					$retorno .= 'Five\n';
				break;
				case ($restoCinco == 0 && $restoTres == 0):
					$retorno .= 'ThreeAndFive\n';
				break;
				default:
					$retorno .= $i . '\n';
				break;
			}
		}
		return $retorno;
	}
}
?>