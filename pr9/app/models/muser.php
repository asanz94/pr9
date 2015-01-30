<?php 
	class mUser{

		public function show($valor){
			$tamany = strlen($valor);
			return array(
				'tamany'=> $tamany,
				'usuari'=>$valor
			);
		}
	}