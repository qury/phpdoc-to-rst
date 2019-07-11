.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


FileBuilder
===========


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. rst-class::  abstract

.. php:class:: FileBuilder


	.. rst-class:: phpdoc-description
	
		| Abstract building class to build sphinxcontrib\-phpdomain from a php file
		
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder`
	

Properties
----------

.. php:attr:: protected static file

	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>` 


.. php:attr:: protected static element

	:Type: :any:`\\phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>` 


.. php:attr:: protected static extensions

	:Type: :any:`\\JuliusHaertl\\PHPDocToRst\\Extension\\Extension\[\] <JuliusHaertl\\PHPDocToRst\\Extension\\Extension>` 


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $file, $element, $extensions)
	
		
	
	

.. rst-class:: protected abstract

	.. php:method:: protected abstract render()
	
		
	
	

.. rst-class:: public

	.. php:method:: public getElement()
	
		
		:Returns: :any:`\\phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>` that is used to build the rst file
	
	

.. rst-class:: public

	.. php:method:: public getFile()
	
		
		:Returns: :any:`\\phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>` 
	
	

