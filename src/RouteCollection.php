<?php

namespace Src;

class RouteCollection{
	
	protected $routes_post   = [];
	protected $routes_get    = [];
	protected $routes_put    = [];
	protected $routes_delete = [];
   
     public function add($request_type, $pattern, $callback){
		 switch($request_type){
			 case 'post':
			  return $this->addPost($pattern, $callback);
			   break;
			 case 'get':
			  return $this->addGet($pattern, $callback);
			   break;
			 case 'put':
			  return $this->addPut($pattern, $callback);
			   break;
			 case 'delete':
			  return $this->addDelete($pattern, $callback);
			   break;
			 default:
			   throw new \Exception('Type of requiriment not found !');
		 } 
	 }

}
//Not Done
https://alexandrebbarbosa.wordpress.com/2019/04/17/phpconstruir-um-sistema-de-rotas-para-mvc-primeira-parte/