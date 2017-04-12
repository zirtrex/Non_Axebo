<?php

namespace Users\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\AuthenticationService;

 
class AuthController extends AbstractActionController
{
    protected $authService;
     
    //inyectaremos authService via factory
    public function __construct(AuthenticationService $authService)
    {
        $this->authService = $authService;
    }
     
    public function indexAction()
    {
        if ($this->authService->getStorage()->getSessionManager()->getSaveHandler()->read($this->authService->getStorage()->getSessionId()))
        {
            //redirige al SuccessController...
            //return $this->redirect()->toRoute('success');
            
        	\Zend\Debug\Debug::dump(\Zend\Json\Json::decode($this->authService->getStorage()->getSessionManager()->getSaveHandler()->read($this->authService->getStorage()->getSessionId())));
        	return ;
        } 
        
        $form = new \Users\Form\LoginForm();
        $form->get('session_token')->setAttribute('value', $this->authService->getStorage()->getSessionId());
          
    	$request = $this->getRequest();
        
        if ($request->isPost())
        {
        	$form->setInputFilter(new \Users\Form\Filter\LoginFilter());        	
        	$form->setData($request->getPost());
            
            if ($form->isValid())
            {
                if($form->get('session_token')->getValue() == $this->authService->getStorage()->getSessionId())
                {
            	
	            	$formData = $form->getData();
	                 
	                $this->authService->getAdapter()->setIdentity($formData['usuario']);
	                $this->authService->getAdapter()->setCredential(md5($formData['clave']));
	                
	                $result = $this->authService->authenticate();
	                
	                if ($result->isValid())
	                {
	                    $resultRow = $this->authService->getAdapter()->getResultRowObject();
	                    
	                    $this->authService->getStorage()->write(
	                         array(
	                    			'codUsuario'	=> $resultRow->codUsuario,
	                                'usuario'   	=> $formData['usuario'],
	                         		'rol'   		=> $resultRow->rol,
	                         		'estado'   		=> $resultRow->estado,
	                                'ip_address' 	=> $this->getRequest()->getServer('REMOTE_ADDR'),
	                                'user_agent'	=> $request->getServer('HTTP_USER_AGENT'),
	                    	)
	                    );
	                     
	                    return $this->redirect()->toRoute('home');;
	                    
	                }
	                else
	                {
	                    $this->flashMessenger()->addErrorMessage('¡Nombre de usuario o clave incorrecta!');
	                    return $this->redirect()->toRoute('ingresar');
	                }
                
                }
                else
                {
               		throw new \Exception("La sesión no se pudo completar, intentelo de nuevo."); 	
                }
            }
        }
        
        $this->layout('layout/login');
        
        return new ViewModel(
        		array(
        				'form' => $form,
        				'messages' => $this->flashmessenger()->getMessages(),
        				'errorMessages' => $this->flashmessenger()->getErrorMessages(),
        		)
        );
        
    }
     
    public function salirAction()
    {
        $this->authService->getStorage()->clear();
        if($this->flashmessenger()->getMessages())
        {
        	foreach ($this->flashmessenger()->getMessages() as $msg)
        	{
				$this->flashmessenger()->addMessage($msg);
        	}
        }
        
        $this->flashmessenger()->addErrorMessage("Has salido del sistema!");
        
        return $this->redirect()->toRoute('ingresar');
    }
}









