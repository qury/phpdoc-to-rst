.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


NamespaceIndexBuilder
=====================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. php:class:: NamespaceIndexBuilder


	.. rst-class:: phpdoc-description
	
		| This class will build an index for each namespace\.
		
		| It contains a toc for child namespaces, classes, traits, interfaces and functions
		
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder`
	

Constants
---------

.. php:const:: RENDER_INDEX_NAMESPACE = 0



.. php:const:: RENDER_INDEX_CLASSES = 1



.. php:const:: RENDER_INDEX_TRAITS = 2



.. php:const:: RENDER_INDEX_INTERFACES = 3



.. php:const:: RENDER_INDEX_FUNCTIONS = 4



.. php:const:: RENDER_INDEX_CONSTANTS = 5



Properties
----------

.. php:attr:: private static currentNamespace

	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Namespace\_ <phpDocumentor\\Reflection\\Php\\Namespace\_>` 


.. php:attr:: private static namespaces

	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Namespace\_\[\] <phpDocumentor\\Reflection\\Php\\Namespace\_>` 


.. php:attr:: private static childNamespaces

	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Namespace\_\[\] <phpDocumentor\\Reflection\\Php\\Namespace\_>` 


.. php:attr:: private static functions

	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Function\_\[\] <phpDocumentor\\Reflection\\Php\\Function\_>` 


.. php:attr:: private static constants

	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Constant\[\] <phpDocumentor\\Reflection\\Php\\Constant>` 


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $extensions, $namespaces, $current, $functions, $constants)
	
		
	
	

.. rst-class:: private

	.. php:method:: private findChildNamespaces()
	
		.. rst-class:: phpdoc-description
		
			| Find child namespaces for current namespace
			
		
		
	
	

.. rst-class:: public

	.. php:method:: public render()
	
		
	
	

.. rst-class:: protected

	.. php:method:: protected addIndex( $type)
	
		
	
	

.. rst-class:: private

	.. php:method:: private shouldRenderIndex( $type, $element=NULL)
	
		
	
	

.. rst-class:: private

	.. php:method:: private getElementList( $type)
	
		
		:Parameters:
			* **$type** (int)  

		
		:Returns: array 
	
	

.. rst-class:: private

	.. php:method:: private getHeaderForType( $type)
	
		
	
	

.. rst-class:: private

	.. php:method:: private addElementTocEntry( $entry)
	
		
	
	

.. rst-class:: private

	.. php:method:: private addFunctions()
	
		
	
	

