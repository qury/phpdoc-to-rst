.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


ApiDocBuilder
=============


.. php:namespace:: JuliusHaertl\PHPDocToRst

.. rst-class::  final

.. php:class:: ApiDocBuilder


	.. rst-class:: phpdoc-description
	
		| This class is used to parse a project tree and generate rst files
		| for all of the containing PHP structures\.
		
		| Example usage is documented in examples/example\.php
		
	
	:Source:
		`../../src/ApiDocBuilder.php#49 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/ApiDocBuilder.php#L49>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($srcDir, $dstDir\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::\_\_construct\(\)>`
* :php:meth:`public build\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::build\(\)>`
* :php:meth:`private setupReflection\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::setupReflection\(\)>`
* :php:meth:`public log\($message\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::log\(\)>`
* :php:meth:`private createDirectoryStructure\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::createDirectoryStructure\(\)>`
* :php:meth:`private parseFiles\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseFiles\(\)>`
* :php:meth:`public debug\($message\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::debug\(\)>`
* :php:meth:`private buildIndexes\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::buildIndexes\(\)>`
* :php:meth:`public setVerboseOutput\($v\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::setVerboseOutput\(\)>`
* :php:meth:`public setDebugOutput\($v\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::setDebugOutput\(\)>`
* :php:meth:`public addExtension\($class, $arguments\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::addExtension\(\)>`
* :php:meth:`private parseInterfaces\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseInterfaces\(\)>`
* :php:meth:`private parseClasses\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseClasses\(\)>`
* :php:meth:`private parseTraits\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseTraits\(\)>`
* :php:meth:`private parseFunctions\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseFunctions\(\)>`
* :php:meth:`private parseConstants\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseConstants\(\)>`


Properties
----------

Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $srcDir, $dstDir)
	
		.. rst-class:: phpdoc-description
		
			| ApiDocBuilder constructor\.
			
		
		:Source:
			`../../src/ApiDocBuilder.php#90 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/ApiDocBuilder.php#L90>`_
		
		
		:Parameters:
			* **$srcDir** (string[])  array of paths that should be analysed
			* **$dstDir** (string)  path where the output documentation should be stored

		
	
	

.. rst-class:: public

	.. php:method:: public build()
	
		.. rst-class:: phpdoc-description
		
			| Run this to build the documentation\.
			
		
		:Source:
			`../../src/ApiDocBuilder.php#99 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/ApiDocBuilder.php#L99>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public log( $message)
	
		.. rst-class:: phpdoc-description
		
			| Log a message\.
			
		
		:Source:
			`../../src/ApiDocBuilder.php#166 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/ApiDocBuilder.php#L166>`_
		
		
		:Parameters:
			* **$message** (string)  Message to be logged

		
	
	

.. rst-class:: public

	.. php:method:: public debug( $message)
	
		.. rst-class:: phpdoc-description
		
			| Log a debug message\.
			
		
		:Source:
			`../../src/ApiDocBuilder.php#218 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/ApiDocBuilder.php#L218>`_
		
		
		:Parameters:
			* **$message** (string)  Message to be logged

		
	
	

.. rst-class:: public

	.. php:method:: public setVerboseOutput( $v)
	
		.. rst-class:: phpdoc-description
		
			| Enable verbose logging output\.
			
		
		:Source:
			`../../src/ApiDocBuilder.php#263 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/ApiDocBuilder.php#L263>`_
		
		
		:Parameters:
			* **$v** (bool)  Set to true to enable

		
	
	

.. rst-class:: public

	.. php:method:: public setDebugOutput( $v)
	
		.. rst-class:: phpdoc-description
		
			| Enable debug logging output\.
			
		
		:Source:
			`../../src/ApiDocBuilder.php#273 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/ApiDocBuilder.php#L273>`_
		
		
		:Parameters:
			* **$v** (bool)  Set to true to enable

		
	
	

.. rst-class:: public

	.. php:method:: public addExtension( $class, $arguments=\[\])
	
		:Source:
			`../../src/ApiDocBuilder.php#283 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/ApiDocBuilder.php#L283>`_
		
		
		:Parameters:
			* **$class** (string)  name of the extension class

		
		:Throws: :any:`\\Exception <Exception>` 
	
	

