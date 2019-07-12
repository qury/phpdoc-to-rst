.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


NamespaceIndexBuilder
=====================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. php:class:: NamespaceIndexBuilder


	.. rst-class:: phpdoc-description
	
		| This class will build an index for each namespace\.
		
		| It contains a toc for child namespaces, classes, traits, interfaces and functions\.
		
	
	:Source:
		`../../src/Builder/NamespaceIndexBuilder.php#34 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L34>`_
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder`
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($extensions, $namespaces, $current, $functions, $constants\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::\_\_construct\(\)>`
* :php:meth:`private findChildNamespaces\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::findChildNamespaces\(\)>`
* :php:meth:`public render\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::render\(\)>`
* :php:meth:`protected addIndex\($type\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::addIndex\(\)>`
* :php:meth:`private shouldRenderIndex\($type, $element\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::shouldRenderIndex\(\)>`
* :php:meth:`private getElementList\($type\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::getElementList\(\)>`
* :php:meth:`private getHeaderForType\($type\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::getHeaderForType\(\)>`
* :php:meth:`private addElementTocEntry\($entry\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::addElementTocEntry\(\)>`
* :php:meth:`private addFunctions\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::addFunctions\(\)>`


Constants
---------

.. php:const:: RENDER_INDEX_NAMESPACE = 0

	:Source:
		`../../src/Builder/NamespaceIndexBuilder.php#36 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L36>`_
	


.. php:const:: RENDER_INDEX_CLASSES = 1

	:Source:
		`../../src/Builder/NamespaceIndexBuilder.php#37 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L37>`_
	


.. php:const:: RENDER_INDEX_TRAITS = 2

	:Source:
		`../../src/Builder/NamespaceIndexBuilder.php#38 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L38>`_
	


.. php:const:: RENDER_INDEX_INTERFACES = 3

	:Source:
		`../../src/Builder/NamespaceIndexBuilder.php#39 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L39>`_
	


.. php:const:: RENDER_INDEX_FUNCTIONS = 4

	:Source:
		`../../src/Builder/NamespaceIndexBuilder.php#40 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L40>`_
	


.. php:const:: RENDER_INDEX_CONSTANTS = 5

	:Source:
		`../../src/Builder/NamespaceIndexBuilder.php#41 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L41>`_
	


Properties
----------

Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $extensions, $namespaces, $current, $functions, $constants)
	
		:Source:
			`../../src/Builder/NamespaceIndexBuilder.php#58 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L58>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public render()
	
		:Source:
			`../../src/Builder/NamespaceIndexBuilder.php#93 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L93>`_
		
		
	
	

.. rst-class:: protected

	.. php:method:: protected addIndex( $type)
	
		:Source:
			`../../src/Builder/NamespaceIndexBuilder.php#119 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/NamespaceIndexBuilder.php#L119>`_
		
		
	
	

