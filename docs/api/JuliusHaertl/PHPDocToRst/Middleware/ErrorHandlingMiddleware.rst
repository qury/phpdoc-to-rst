.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


ErrorHandlingMiddleware
=======================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Middleware

.. rst-class::  final

.. php:class:: ErrorHandlingMiddleware


	.. rst-class:: phpdoc-description
	
		| Class ErrorHandlingMiddleware
		
	
	:Implements:
		:php:interface:`phpDocumentor\\Reflection\\Middleware\\Middleware` 
	

Properties
----------

.. php:attr:: private static apiDocBuilder



Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $apiDocBuilder)
	
		
	
	

.. rst-class:: public

	.. php:method:: public execute( $command, $next)
	
		.. rst-class:: phpdoc-description
		
			| Executes this middleware class\.
			
		
		
		:Parameters:
			* **$command** (:any:`phpDocumentor\\Reflection\\Php\\Factory\\File\\CreateCommand <phpDocumentor\\Reflection\\Php\\Factory\\File\\CreateCommand>`)  
			* **$next** (callable)  

		
		:Returns: object 
	
	

