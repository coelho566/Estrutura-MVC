<?php
namespace Core;

class Core {
    
    public function run() {
        
        $url = '/'.( (isset($_GET['url']))?$_GET['url']:'');
        $params = array();
            
        
        if(!empty($url) && $url != '/') {
            
            $url = explode('/', $url);
            array_shift($url); // remove primeiro registro do array
            
            $currentController = $url[0].'Controller';
            array_shift($url); // remove primeiro registro do array
            
            if(isset($url[0]) && !empty($url[0])) {
                
                $currentAction = $url[0];
                array_shift($url);
                
            } else {
                
                $currentAction = 'index';
                
            }
            
            if(count($url) > 0) {
                
                $params = $url;
                
            }
                
        } else {
            
            $currentController = 'HomeController';
            $currentAction = 'index';
           
        }
        
        $currentController = ucfirst($currentController);

        $prefix ='\Controllers\\';

        if(!file_exists('Controllers/'.$currentController.'.php') || !method_exists($prefix.$currentController, $currentAction)) {
            $currentController = 'NotfoundController';
            $currentAction = 'index';
        }
        
        $newConroller = $prefix.$currentController;
        $c = new $newConroller();

        call_user_func_array(array($c, $currentAction), $params); // executa a action
        
    }
    
}

