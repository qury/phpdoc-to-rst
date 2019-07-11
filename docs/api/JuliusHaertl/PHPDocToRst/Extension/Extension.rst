.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


Extension
=========


.. php:namespace:: JuliusHaertl\PHPDocToRst\Extension

.. rst-class::  abstract

.. php:class:: Extension



Properties
----------

.. php:attr:: protected static project

	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Project <phpDocumentor\\Reflection\\Php\\Project>` 


.. php:attr:: protected static arguments

	:Type: array 


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $project, $arguments=\[\])
	
		
	
	

.. rst-class:: public

	.. php:method:: public prepare()
	
		.. rst-class:: phpdoc-description
		
			| Method that will be ran before generating any documentation files
			| This is useful for preparing own data structures
			| to be used in the output documentation
			
		
		
	
	

.. rst-class:: public

	.. php:method:: public render( $type, &$builder, $element)
	
		.. rst-class:: phpdoc-description
		
			| Implement custom rendering functionality here\.
			
			| It will be executed by Builder classes depending on the given type\.
			| 
			| Currently supported types:
			| 
			|  \- PhpDomainBuilder::SECTION\_BEFORE\_DESCRIPTION
			|  \- PhpDomainBuilder::SECTION\_AFTER\_DESCRIPTION
			
		
		
		:Parameters:
			* **$type** (string)  
			* **$builder** (:any:`JuliusHaertl\\PHPDocToRst\\Builder\\ExtensionBuilder <JuliusHaertl\\PHPDocToRst\\Builder\\ExtensionBuilder>`)  
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  context for the render type

		
	
	

.. rst-class:: public

	.. php:method:: public shouldRenderElement( $element)
	
		.. rst-class:: phpdoc-description
		
			| This method will be called to check if a certain element should
			| be rendered in the documentation\.
			
			| An example extension that makes use of it is PublicOnlyExtension
			
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
		:Returns: bool 
	
	

.. rst-class:: public

	.. php:method:: public shouldRenderIndex( $type, $element)
	
		
	
	

