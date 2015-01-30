<?php

	Class mHome{

		public function Info(){
			return array(
					'nom' => 'Andreu sanz',
					'missatge'=> "funciona correctament",
					'fi'=>"home"
				);
		}
	


		public function suma($a, $b, $valor, $valor1){
			return array(
				'total'=>$valor + $valor1,
				'valor'=>$valor,
				'valor1'=>$valor1
			);
		}


	}
