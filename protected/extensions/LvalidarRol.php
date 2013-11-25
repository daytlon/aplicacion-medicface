<?php

class LvalidarRol extends CApplicationComponent
{
	public function init()
	{
		#echo "hola";
	}

	public function esAdmin()
	 { 
	    return 1;
	 }

	 public function esFamiliar()
	 { 
	    return 2;
	 }

	 public function esAmigo()
	 { 
	    return 3;
	 }

	 public function esPaciente()
	 { 
	    return 4;
	 }

	 public function esMedico()
	 { 
	    return 5;	    
	 }


}