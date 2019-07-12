.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


RstBuilder
==========


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. php:class:: RstBuilder


	.. rst-class:: phpdoc-description
	
		| Helper class to build reStructuredText files\.
		
	
	:Source:
		`../../src/Builder/RstBuilder.php#26 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L26>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public getContent\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::getContent\(\)>`
* :php:meth:`public addFieldList\($key, $value\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addFieldList\(\)>`
* :php:meth:`public addLine\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addLine\(\)>`
* :php:meth:`public add\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::add\(\)>`
* :php:meth:`public static escape\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::escape\(\)>`
* :php:meth:`public unindent\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::unindent\(\)>`
* :php:meth:`public addMultiline\($text, $blockIndent\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addMultiline\(\)>`
* :php:meth:`public indent\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::indent\(\)>`
* :php:meth:`public addH1\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addH1\(\)>`
* :php:meth:`public addH2\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addH2\(\)>`
* :php:meth:`public addH3\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addH3\(\)>`
* :php:meth:`public addMultilineWithoutRendering\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addMultilineWithoutRendering\(\)>`


Properties
----------

.. php:attr:: protected static content

	:Source:
		`../../src/Builder/RstBuilder.php#29 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L29>`_
	
	:Type: string 


Methods
-------

.. rst-class:: public

	.. php:method:: public getContent()
	
		:Source:
			`../../src/Builder/RstBuilder.php#32 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L32>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addFieldList( $key, $value)
	
		:Source:
			`../../src/Builder/RstBuilder.php#37 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L37>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addLine( $text="")
	
		:Source:
			`../../src/Builder/RstBuilder.php#45 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L45>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public add( $text)
	
		:Source:
			`../../src/Builder/RstBuilder.php#52 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L52>`_
		
		
	
	

.. rst-class:: public static

	.. php:method:: public static escape( $text)
	
		:Source:
			`../../src/Builder/RstBuilder.php#59 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L59>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public unindent()
	
		:Source:
			`../../src/Builder/RstBuilder.php#67 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L67>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addMultiline( $text="", $blockIndent=false)
	
		:Source:
			`../../src/Builder/RstBuilder.php#75 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L75>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public indent()
	
		:Source:
			`../../src/Builder/RstBuilder.php#92 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L92>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addH1( $text)
	
		:Source:
			`../../src/Builder/RstBuilder.php#104 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L104>`_
		
		
		:Parameters:
			* **$text** (string)  

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public addH2( $text)
	
		:Source:
			`../../src/Builder/RstBuilder.php#112 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L112>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addH3( $text)
	
		:Source:
			`../../src/Builder/RstBuilder.php#120 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L120>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addMultilineWithoutRendering( $text)
	
		:Source:
			`../../src/Builder/RstBuilder.php#128 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/RstBuilder.php#L128>`_
		
		
	
	

