<?php
namespace Produto\Controller;

use Zend\View\Model\ViewModel;
class ProdutoController extends CrudController
{

    public function __construct(){
        $this->entity = "Produto\Entity\ProdutoEntity";
        $this->service = "Produto\Service\ProdutoService";
        $this->form = "Produto\Form\ProdutoForm";
        $this->controller = "ProdutoController";
        $this->route = "produto-admin/default";
    }

    public function newAction(){
        $form = $this->getServiceLocator()->get($this->form);
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $service = $this->getServiceLocator()->get($this->service);
                $service->insert($request->getPost()
                    ->toArray());
                
                return $this->redirect()->toRoute($this->route, array(
                    'controller' => $this->controller
                ));
            }
        }
        
        return new ViewModel(array(
            'form' => $form
        ));
    }
    
    public function editAction(){
    	$form = $this->getServiceLocator()->get($this->form);
    	$request = $this->getRequest();
    
    	$repository = $this->getEm()->getRepository($this->entity);
    	$entity = $repository->find($this->params()
    			->fromRoute('id', 0));
    
    	if ($this->params()->fromRoute('id', 0))
    		$form->setData($entity->toArray());
    
    	if ($request->isPost()) {
    		$form->setData($request->getPost());
    		if ($form->isValid()) {
    			$service = $this->getServiceLocator()->get($this->service);
    			$service->update($request->getPost()
    					->toArray());
    
    			return $this->redirect()->toRoute($this->route, array(
    					'controller' => $this->controller
    			));
    		}
    	}
    
    	return new ViewModel(array(
    			'form' => $form
    	));
    }
    
    public function deleteAction()
    {
    	$service = $this->getServiceLocator()->get($this->service);
    	if ($service->delete($this->params()
    			->fromRoute('id', 0)))
    		return $this->redirect()->toRoute($this->route, array(
    				'controller' => $this->controller
    		));
    }
}
