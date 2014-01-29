<?php
class Application_Form_Alunos extends Zend_Form
{
	public function init(){
		$element = new Zend_Form_Element_Text('matricula');
		$element->setLabel('Matrícula');
		$this->addElement($element);

		$element = new Zend_Form_Element_Text('nome');
		$element->setLabel('Nome');
		$this->addElement($element);
		
		$element = new Zend_Form_Element_Submit('gravar');
		$this->addElement($element);
		
	}
	
	public function setMatricula($matricula){
		if( is_null($matricula) ) return;
		$dmAlunos = new Application_Model_Alunos();
		# método find retorna vários registros
		# por isso usamos o método current a sequência
		$aluno = $dmAlunos->find($matricula)->current();
		
		$this->getElement('matricula')->setValue($aluno->matricula);
		
		# Os parâmetros no final é para evitar a alteração do registro
		# no momento de edição. hummmmmmmmm		
		$this->getElement('matricula')->setAttrib('readonly', 'readonly'); # forma 1		
		$this->getElement('nome')->setValue($aluno->nome);		
		
	}
	
}
?>