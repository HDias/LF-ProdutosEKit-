<?php
namespace Venda\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

abstract class CrudController extends AbstractActionController{

    protected $em;
    protected $entity;
    protected $service;
    protected $form;
    protected $controller;
    protected $route;

    public function indexAction(){
        $list = $this->getEm()
            ->getRepository($this->entity)
            ->findAll();
        return new ViewModel(array(
            'lista' => $list
        ));
        
    }    
    
    public function newAction()
    {
        $form = new $this->form();
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
        $form = new $this->form();
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

    /**
     *
     * @return EntityManager
     */
    protected function getEm()
    {
        $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        
        return $em;
    }
}