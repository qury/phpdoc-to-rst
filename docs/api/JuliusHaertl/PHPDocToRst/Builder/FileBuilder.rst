.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


FileBuilder
===========


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. rst-class::  abstract

.. php:class:: FileBuilder


	.. rst-class:: phpdoc-description
	
		| Abstract building class to build sphinxcontrib\-phpdomain from a php file\.
		
	
	:Source:
		`../../src/Builder/FileBuilder.php#30 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/FileBuilder.php#L30>`_
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder`
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($file, $element, $extensions\)<JuliusHaertl\\PHPDocToRst\\Builder\\FileBuilder::\_\_construct\(\)>`
* :php:meth:`protected abstract render\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\FileBuilder::render\(\)>`
* :php:meth:`public getElement\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\FileBuilder::getElement\(\)>`
* :php:meth:`public getFile\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\FileBuilder::getFile\(\)>`


Properties
----------

.. php:attr:: protected static file

	:Source:
		`../../src/Builder/FileBuilder.php#33 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/FileBuilder.php#L33>`_
	
	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>` 


.. php:attr:: protected static element

	:Source:
		`../../src/Builder/FileBuilder.php#36 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/FileBuilder.php#L36>`_
	
	:Type: :any:`\\phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>` 


.. php:attr:: protected static extensions

	:Source:
		`../../src/Builder/FileBuilder.php#39 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/FileBuilder.php#L39>`_
	
	:Type: :any:`\\JuliusHaertl\\PHPDocToRst\\Extension\\Extension\[\] <JuliusHaertl\\PHPDocToRst\\Extension\\Extension>` 


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $file, $element, $extensions)
	
		:Source:
			`../../src/Builder/FileBuilder.php#41 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/FileBuilder.php#L41>`_
		
		
	
	

.. rst-class:: protected abstract

	.. php:method:: protected abstract render()
	
		:Source:
			`../../src/Builder/FileBuilder.php#49 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/FileBuilder.php#L49>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public getElement()
	
		:Source:
			`../../src/Builder/FileBuilder.php#54 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/FileBuilder.php#L54>`_
		
		
		:Returns: :any:`\\phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>` that is used to build the rst file
	
	

.. rst-class:: public

	.. php:method:: public getFile()
	
		:Source:
			`../../src/Builder/FileBuilder.php#62 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/FileBuilder.php#L62>`_
		
		
		:Returns: :any:`\\phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>` 
	
	

