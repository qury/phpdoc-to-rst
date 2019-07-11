.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


PhpDomainBuilder
================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. php:class:: PhpDomainBuilder


	.. rst-class:: phpdoc-description
	
		| Class to build reStructuredText file with sphinxcontrib\-phpdomain syntax
		
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder`
	
	:Used traits:
		:php:trait:`JuliusHaertl\\PHPDocToRst\\Builder\\ExtensionBuilder` 
	

Constants
---------

.. php:const:: SECTION_BEFORE_DESCRIPTION = self::class \. ::SECTION\_BEFORE\_DESCRIPTION



.. php:const:: SECTION_AFTER_DESCRIPTION = self::class \. ::SECTION\_AFTER\_DESCRIPTION



.. php:const:: SECTION_AFTER_TITLE = self::class \. ::SECTION\_AFTER\_TITLE



.. php:const:: SECTION_AFTER_INTRODUCTION = self::class \. ::SECTION\_AFTER\_INTRODUCTION



Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $extensions)
	
		
	
	

.. rst-class:: protected

	.. php:method:: protected addPageHeader( $element)
	
		.. rst-class:: phpdoc-description
		
			| Add namespace
			
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
	
	

.. rst-class:: public static

	.. php:method:: public static getNamespace( $element)
	
		.. rst-class:: phpdoc-description
		
			| Strip element name from Fqsen to return the namespace only
			
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
		:Returns: mixed 
	
	

.. rst-class:: public

	.. php:method:: public beginPhpDomain( $type, $name, $indent=true)
	
		
		:Parameters:
			* **$type**  string
			* **$name**  string
			* **$indent**  bool Should indent after the section started

		
	
	

.. rst-class:: private

	.. php:method:: private getTypeForClass( $element)
	
		
	
	

.. rst-class:: protected

	.. php:method:: protected addAfterIntroduction( $element)
	
		
	
	

.. rst-class:: protected

	.. php:method:: protected addConstants( $constants)
	
		
	
	

.. rst-class:: public

	.. php:method:: public shouldRenderElement( $element)
	
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
		:Returns: bool 
	
	

.. rst-class:: private

	.. php:method:: private addConstant( $constant)
	
		
		:Parameters:
			* **$constant** (:any:`phpDocumentor\\Reflection\\Php\\Constant <phpDocumentor\\Reflection\\Php\\Constant>`)  

		
	
	

.. rst-class:: public

	.. php:method:: public addDocBlockDescription( $element)
	
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Php\\Class\_ <phpDocumentor\\Reflection\\Php\\Class\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Interface\_ <phpDocumentor\\Reflection\\Php\\Interface\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Trait\_ <phpDocumentor\\Reflection\\Php\\Trait\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Property <phpDocumentor\\Reflection\\Php\\Property>` | :any:`\\phpDocumentor\\Reflection\\Php\\Method <phpDocumentor\\Reflection\\Php\\Method>` | :any:`\\phpDocumentor\\Reflection\\Php\\Constant <phpDocumentor\\Reflection\\Php\\Constant>`)  

		
		:Returns: $this 
	
	

.. rst-class:: protected

	.. php:method:: protected addDocblockTag( $tagName, $docBlock)
	
		
		:Parameters:
			* **$tagName** (string)  Name of the tag to parse
			* **$docBlock** (:any:`phpDocumentor\\Reflection\\DocBlock <phpDocumentor\\Reflection\\DocBlock>`)  

		
	
	

.. rst-class:: public static

	.. php:method:: public static typesToRst( $typesString)
	
		
		:Parameters:
			* **$typesString** (string)  

		
		:Returns: bool | string 
	
	

.. rst-class:: public

	.. php:method:: public endPhpDomain( $type="")
	
		
		:Parameters:
			* **$type** (string)  

		
		:Returns: $this 
	
	

.. rst-class:: protected

	.. php:method:: protected addProperties( $properties)
	
		
		:Parameters:
			* **$properties** (:any:`phpDocumentor\\Reflection\\Php\\Property\[\] <phpDocumentor\\Reflection\\Php\\Property>`)  

		
	
	

.. rst-class:: private

	.. php:method:: private addProperty( $property)
	
		
		:Parameters:
			* **$property** (:any:`phpDocumentor\\Reflection\\Php\\Property <phpDocumentor\\Reflection\\Php\\Property>`)  

		
	
	

.. rst-class:: protected

	.. php:method:: protected addParent( $element)
	
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Php\\Interface\_ <phpDocumentor\\Reflection\\Php\\Interface\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Class\_ <phpDocumentor\\Reflection\\Php\\Class\_>`)  

		
	
	

.. rst-class:: public static

	.. php:method:: public static getLink( $type, $fqsen, $description="")
	
		
		:Parameters:
			* **$type**  string
			* **$fqsen**  string

		
		:Returns: string 
	
	

.. rst-class:: protected

	.. php:method:: protected addUsedTraits( $element)
	
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Php\\Class\_ <phpDocumentor\\Reflection\\Php\\Class\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Trait\_ <phpDocumentor\\Reflection\\Php\\Trait\_>`)  

		
	
	

.. rst-class:: protected

	.. php:method:: protected addMethods( $methods)
	
		
		:Parameters:
			* **$methods**  

		
	
	

.. rst-class:: private

	.. php:method:: private addMethod( $method)
	
		
	
	

.. rst-class:: private

	.. php:method:: private processMethodArgumentDocs( $method, $params)
	
		
		:Parameters:
			* **$method** (:any:`phpDocumentor\\Reflection\\Php\\Method <phpDocumentor\\Reflection\\Php\\Method>`)  
			* **$params** (array)  

		
		:Returns: string 
	
	

.. rst-class:: private

	.. php:method:: private processMethodArgumentTypes( $method)
	
		
		:Parameters:
			* **$method** (:any:`phpDocumentor\\Reflection\\Php\\Method <phpDocumentor\\Reflection\\Php\\Method>`)  

		
		:Returns: string 
	
	

.. rst-class:: private

	.. php:method:: private processMethodArgumentType( $argument, $args)
	
		
		:Parameters:
			* **$argument** (:any:`phpDocumentor\\Reflection\\Php\\Argument <phpDocumentor\\Reflection\\Php\\Argument>`)  
			* **$args** (string)  

		
		:Returns: string 
	
	

