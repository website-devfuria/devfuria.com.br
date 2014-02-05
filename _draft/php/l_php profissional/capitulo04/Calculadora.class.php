<?php
/**
 * Código-fonte do livro "PHP Profissional"
 * Autores: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - todos os direitos reservados
 *
 * LICENÇA: Este arquivo-fonte está sujeito a Atribuição 2.5 Brasil, da licença Creative Commons, 
 * que encontra-se disponível no seguinte endereço URI: http://creativecommons.org/licenses/by/2.5/br/
 * Se você não recebeu uma cópia desta licença, e não conseguiu obtê-la pela internet, por favor, 
 * envie uma notificação aos seus autores para que eles possam enviá-la para você imediatamente.
 *
 *
 * Source-code of "PHP Profissional" book
 * Authors: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - all rights reserved
 *
 * LICENSE: This source file is subject to Attibution version 2.5 Brazil of the Creative Commons 
 * license that is available through the following URI:  http://creativecommons.org/licenses/by/2.5/br/
 * If you did not receive a copy of this license and are unable to obtain it through the web, please 
 * send a note to the authors so they can mail you a copy immediately.
 *
 */
 
class Calculadora {

	//operações permitidas
	const ADICAO        = 1,
				SUBTRACAO     = 2,
				MULTIPLICACAO = 3,
				DIVISAO       = 4;

	private $operandos,    //operandos utilizados
	        $resultado,    //último resultado calculado
					$memoria;      //último resultado armazenado na memória
	
	// Métodos Públicos
	
	public function somar($num1, $num2) {
		$this->validar($num1, $num2);
		$this->operacao(self::ADICAO);
		return $this->resultado;
	}
	
	public function subtrair($num1, $num2) {
		$this->validar($num1, $num2);
		$this->operacao(self::SUBTRACAO);
		return $this->resultado;
	}
	
	public function multiplicar($num1, $num2) {
		$this->validar($num1, $num2);
		$this->operacao(self::MULTIPLICACAO);
		return $this->resultado;
	}
	
	public function dividir($num1, $num2) {
		//validação especial, $num2 não pode ser 0
		if (0 == $num2)
			throw new Exception('Divisão por zero');
		
		$this->validar($num1, $num2);
		$this->operacao(self::DIVISAO);
		return $this->resultado;
	}
	
	public function armazenar() {
		$this->validar($this->resultado);
		$this->memoria = $this->resultado;
		return true;
	}
	
	public function recuperar() {
		$this->validar($this->memoria);
		return $this->memoria;
	}
	
	
	// Métodos Privados
	
	private function validar() {
		//passagem de parâmetros variável
		$val = func_get_args();
		
		for ($i = 0; $i < count($val); $i++) {
			if (!is_numeric($val[$i]))
				throw new Exception(sprintf("Valor '%s' não é válido", $val[$i]));
		}
		
		//dados ok, registrar valores para operação
		$this->operandos = $val;
		return true;
	}
	
	private function operacao($operador) {

		switch($operador) {
			
			case self::ADICAO:
				$this->resultado = $this->operandos[0] + $this->operandos[1];
				break;
				
			case self::SUBTRACAO:
				$this->resultado = $this->operandos[0] - $this->operandos[1];
				break;
				
			case self::MULTIPLICACAO:
				$this->resultado = $this->operandos[0] * $this->operandos[1];
				break;
				
			case self::DIVISAO:
				$this->resultado = $this->operandos[0] / $this->operandos[1];
				break;
				
			default:
			  throw new Exception('Operação não permitida');
				break;
		}
	}
}
?>
