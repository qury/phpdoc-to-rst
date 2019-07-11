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
		| for all of the containing PHP structures
		
		| Example usage is documented in examples/example\.php
		
	

Properties
----------

.. php:attr:: private static project

	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Project <phpDocumentor\\Reflection\\Php\\Project>` 


.. php:attr:: private static docFiles

	:Type: array 


.. php:attr:: private static constants

	:Type: array 


.. php:attr:: private static functions

	:Type: array 


.. php:attr:: private static extensions

	:Type: :any:`\\JuliusHaertl\\PHPDocToRst\\Extension\\Extension\[\] <JuliusHaertl\\PHPDocToRst\\Extension\\Extension>` 


.. php:attr:: private static extensionNames

	:Type: string[] 


.. php:attr:: private static extensionArguments

	:Type: array[] 


.. php:attr:: private static srcDir

	:Type: string[] 


.. php:attr:: private static dstDir

	:Type: string 


.. php:attr:: private static verboseOutput

	:Type: bool 


.. php:attr:: private static debugOutput

	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $srcDir, $dstDir)
	
		.. rst-class:: phpdoc-description
		
			| ApiDocBuilder constructor\.
			
		
		
		:Parameters:
			* **$srcDir** (string[])  array of paths that should be analysed
			* **$dstDir** (string)  path where the output documentation should be stored

		
	
	

.. rst-class:: public

	.. php:method:: public build()
	
		.. rst-class:: phpdoc-description
		
			| Run this to build the documentation
			
		
		
	
	

.. rst-class:: private

	.. php:method:: private setupReflection()
	
		
		:Throws: :any:`\\Exception <Exception>` 
	
	

.. rst-class:: public

	.. php:method:: public log( $message)
	
		.. rst-class:: phpdoc-description
		
			| Log a message
			
		
		
		:Parameters:
			* **$message** (string)  Message to be logged

		
	
	

.. rst-class:: private

	.. php:method:: private createDirectoryStructure()
	
		.. rst-class:: phpdoc-description
		
			| Create directory structure for the rst output
			
		
		
		:Throws: :any:`\\JuliusHaertl\\PHPDocToRst\\WriteException <JuliusHaertl\\PHPDocToRst\\WriteException>` 
	
	

.. rst-class:: private

	.. php:method:: private parseFiles()
	
		
	
	

.. rst-class:: public

	.. php:method:: public debug( $message)
	
		.. rst-class:: phpdoc-description
		
			| Log a debug message
			
		
		
		:Parameters:
			* **$message** (string)  Message to be logged

		
	
	

.. rst-class:: private

	.. php:method:: private buildIndexes()
	
		
	
	

.. rst-class:: public

	.. php:method:: public setVerboseOutput( $v)
	
		.. rst-class:: phpdoc-description
		
			| Enable verbose logging output
			
		
		
		:Parameters:
			* **$v** (bool)  Set to true to enable

		
	
	

.. rst-class:: public

	.. php:method:: public setDebugOutput( $v)
	
		.. rst-class:: phpdoc-description
		
			| Enable debug logging output
			
		
		
		:Parameters:
			* **$v** (bool)  Set to true to enable

		
	
	

.. rst-class:: public

	.. php:method:: public addExtension( $class, $arguments=\[\])
	
		
		:Parameters:
			* **$class** (string)  name of the extension class

		
		:Throws: :any:`\\Exception <Exception>` 
	
	

