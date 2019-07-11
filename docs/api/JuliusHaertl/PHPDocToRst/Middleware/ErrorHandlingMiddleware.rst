.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


ErrorHandlingMiddleware
=======================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Middleware

.. rst-class::  final

.. php:class:: ErrorHandlingMiddleware


	.. rst-class:: phpdoc-description
	
		| Class ErrorHandlingMiddleware\.
		
	
	:Source:
		`/Middleware/ErrorHandlingMiddleware.php#33 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Middleware/ErrorHandlingMiddleware.php#L33>`_
	
	:Implements:
		:php:interface:`phpDocumentor\\Reflection\\Middleware\\Middleware` 
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($apiDocBuilder\)<JuliusHaertl\\PHPDocToRst\\Middleware\\ErrorHandlingMiddleware::\_\_construct\(\)>`
* :php:meth:`public execute\($command, $next\)<JuliusHaertl\\PHPDocToRst\\Middleware\\ErrorHandlingMiddleware::execute\(\)>`


Properties
----------

.. php:attr:: private static apiDocBuilder

	:Source:
		`/Middleware/ErrorHandlingMiddleware.php#35 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Middleware/ErrorHandlingMiddleware.php#L35>`_
	


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $apiDocBuilder)
	
		:Source:
			`/Middleware/ErrorHandlingMiddleware.php#37 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Middleware/ErrorHandlingMiddleware.php#L37>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public execute( $command, $next)
	
		.. rst-class:: phpdoc-description
		
			| Executes this middleware class\.
			
		
		:Source:
			`/Middleware/ErrorHandlingMiddleware.php#50 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Middleware/ErrorHandlingMiddleware.php#L50>`_
		
		
		:Parameters:
			* **$command** (:any:`phpDocumentor\\Reflection\\Php\\Factory\\File\\CreateCommand <phpDocumentor\\Reflection\\Php\\Factory\\File\\CreateCommand>`)  
			* **$next** (callable)  

		
		:Returns: object 
	
	

