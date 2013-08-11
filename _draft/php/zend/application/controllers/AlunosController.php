<?php
class AlunosController extends Zend_Controller_Action
{
/*
 Obs: todos os métodos que atendem requisições
 terminam com o sufixo "action"
*/
	
	public function indexAction(){
		$dmAlunos = new Application_Model_Alunos();
		$records = $dmAlunos->fetchAll();
		/*
		No método fetchAll é possível:
		a) passar  condições
		b) paginar
		c) passar objetos??????
		*/
		
		# passar para a view
		$this->view->partialLoop()->setObjectKey('record');
		$this->view->assign('linkIncluir', $this->view->url(
		  		array(
		  			'controller'=>'alunos',
		  			'action'=>'pre-edit'
		  		)
			)
		);
		
		$this->view->assign('records', $records);
		$this->view->placeholder('link')->linkEditar = $this->view->url(
			array(
				'controller' => 'alunos',
				'action' => 'pre-edit'
			)
		);
		
		$this->view->placeholder('link')->linkExcluir = $this->view->url(
			array(
				'controller' => 'alunos',
				'action' => 'delete'
			)
		);				
	}
	
	public function preEditAction(){
		# $matricula só vem quando for alteração
		$matricula = $this->_getParam('matricula', null);
		
		$form = new Application_Form_Alunos();
		$form->setAction(
			$this->view->url(
				array(
					'controller'=>'alunos',
					'action'=>'gravar'
				)
			)
		);
		$form->setMatricula($matricula);
		$this->view->assign('form', $form);		
	}
	
	public function gravarAction(){
		$matricula = $_POST['matricula'];
		$nome = $_POST['nome'];
		
		# dm = data mapper
		$dmAlunos = new Application_Model_Alunos();
		
		$aluno = $dmAlunos->find($matricula)->current();
		if ( empty($aluno) ){
			$aluno			  = $dmAlunos->createRow();
			$aluno->matricula = $matricula; 
		}
		$aluno->nome	  = $nome;
		$aluno->save();
		
		$this->_redirect('alunos');
	}
	
	
	public function deleteAction(){
		/*
		 * Nao adianta usar o get para pegar variável 
		 */
		$matricula = $this->_getParam('matricula', null);
		
		$dmAlunos = new Application_Model_Alunos();
		$where = $dmAlunos->getAdapter()->quoteInto('matricula = ?', $matricula);
		$dmAlunos->delete($where);
		
		# não utilizar esta forma...
		# $dmAlunos->delete("matricula = $matricula");
		
		$this->_redirect('alunos');
		
	}
	
}# end class
?>