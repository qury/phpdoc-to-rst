.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


RstBuilder
==========


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. php:class:: RstBuilder


	.. rst-class:: phpdoc-description
	
		| Helper class to build reStructuredText files
		
	

Properties
----------

.. php:attr:: protected static content

	:Type: string 


.. php:attr:: private static indentLevel



Methods
-------

.. rst-class:: public

	.. php:method:: public getContent()
	
		
	
	

.. rst-class:: public

	.. php:method:: public addFieldList( $key, $value)
	
		
	
	

.. rst-class:: public

	.. php:method:: public addLine( $text="")
	
		
	
	

.. rst-class:: public

	.. php:method:: public add( $text)
	
		
	
	

.. rst-class:: public static

	.. php:method:: public static escape( $text)
	
		
	
	

.. rst-class:: public

	.. php:method:: public unindent()
	
		
	
	

.. rst-class:: public

	.. php:method:: public addMultiline( $text="", $blockIndent=false)
	
		
	
	

.. rst-class:: public

	.. php:method:: public indent()
	
		
	
	

.. rst-class:: public

	.. php:method:: public addH1( $text)
	
		
		:Parameters:
			* **$text** (string)  

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public addH2( $text)
	
		
	
	

.. rst-class:: public

	.. php:method:: public addH3( $text)
	
		
	
	

.. rst-class:: public

	.. php:method:: public addMultilineWithoutRendering( $text)
	
		
	
	

