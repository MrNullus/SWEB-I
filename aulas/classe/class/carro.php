<?php 

class Carro 
{
	//atributos privados - só serão acessados de dentro da classe
	private $modelo;
	private $motor;
	private $ano;

	// metodo publico para setar (definir) o valor de $modelo
	public function setModelo($modelo) {
		$this->modelo = $modelo;
	}
	// metodo publico para pegar (retornar) o valor de $modelo
	// $this => uma referencia ao prorpio objeto, seria o mesmo que usar o proprio objeto
	public function getModelo() {
		return $this->modelo;
	}

	public function setMotor($motor) {
		$this->motor = $motor;
	}

	public function getMotor() {
		return $this->motor;
	}

	public function setAno($ano) {
		$this->ano = $ano;
	}

	public function getAno() {
		return $this->ano;
	}

	public function exibir() {
		return array(
			"modelo" => $this->getModelo(),
			"motor"  => $this->getMotor(),
			"ano" 	 => $this->getAno()
		);
	}
}

?>