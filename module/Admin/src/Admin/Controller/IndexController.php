<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {

    	if($this->identity())
    	{   	
    		return new ViewModel();
    	}    	
    	return $this->redirect()->toRoute('ingresar');
    	
    }    
    
}
