.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


PhpDomainBuilder
================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. php:class:: PhpDomainBuilder


	.. rst-class:: phpdoc-description
	
		| Class to build reStructuredText file with sphinxcontrib\-phpdomain syntax\.
		
	
	:Source:
		`../../src/Builder/PhpDomainBuilder.php#44 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L44>`_
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder`
	
	:Used traits:
		:php:trait:`JuliusHaertl\\PHPDocToRst\\Builder\\ExtensionBuilder` 
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($extensions\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::\_\_construct\(\)>`
* :php:meth:`protected addPageHeader\($element\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addPageHeader\(\)>`
* :php:meth:`public static getNamespace\($element\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::getNamespace\(\)>`
* :php:meth:`public beginPhpDomain\($type, $name, $indent\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::beginPhpDomain\(\)>`
* :php:meth:`private getTypeForClass\($element\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::getTypeForClass\(\)>`
* :php:meth:`protected addAfterIntroduction\($element\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addAfterIntroduction\(\)>`
* :php:meth:`protected addConstants\($constants\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addConstants\(\)>`
* :php:meth:`public shouldRenderElement\($element\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::shouldRenderElement\(\)>`
* :php:meth:`private addConstant\($constant\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addConstant\(\)>`
* :php:meth:`public addDocBlockDescription\($element\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addDocBlockDescription\(\)>`
* :php:meth:`protected addDocblockTag\($tagName, $docBlock\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addDocblockTag\(\)>`
* :php:meth:`public static typesToRst\($typesString\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::typesToRst\(\)>`
* :php:meth:`public endPhpDomain\($type\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::endPhpDomain\(\)>`
* :php:meth:`protected addProperties\($properties\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addProperties\(\)>`
* :php:meth:`private addProperty\($property\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addProperty\(\)>`
* :php:meth:`protected addParent\($element\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addParent\(\)>`
* :php:meth:`public static getLink\($type, $fqsen, $description\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::getLink\(\)>`
* :php:meth:`protected addUsedTraits\($element\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addUsedTraits\(\)>`
* :php:meth:`protected addMethods\($methods\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addMethods\(\)>`
* :php:meth:`private addMethod\($method\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::addMethod\(\)>`
* :php:meth:`private processMethodArgumentDocs\($method, $params\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::processMethodArgumentDocs\(\)>`
* :php:meth:`private processMethodArgumentTypes\($method\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::processMethodArgumentTypes\(\)>`
* :php:meth:`private processMethodArgumentType\($argument, $args\)<JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder::processMethodArgumentType\(\)>`


Constants
---------

.. php:const:: SECTION_BEFORE_DESCRIPTION = self::class \. ::SECTION\_BEFORE\_DESCRIPTION

	:Source:
		`../../src/Builder/PhpDomainBuilder.php#46 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L46>`_
	


.. php:const:: SECTION_AFTER_DESCRIPTION = self::class \. ::SECTION\_AFTER\_DESCRIPTION

	:Source:
		`../../src/Builder/PhpDomainBuilder.php#47 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L47>`_
	


.. php:const:: SECTION_AFTER_TITLE = self::class \. ::SECTION\_AFTER\_TITLE

	:Source:
		`../../src/Builder/PhpDomainBuilder.php#48 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L48>`_
	


.. php:const:: SECTION_AFTER_INTRODUCTION = self::class \. ::SECTION\_AFTER\_INTRODUCTION

	:Source:
		`../../src/Builder/PhpDomainBuilder.php#49 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L49>`_
	


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $extensions)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#55 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L55>`_
		
		
	
	

.. rst-class:: protected

	.. php:method:: protected addPageHeader( $element)
	
		.. rst-class:: phpdoc-description
		
			| Add namespace\.
			
		
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#67 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L67>`_
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
	
	

.. rst-class:: public static

	.. php:method:: public static getNamespace( $element)
	
		.. rst-class:: phpdoc-description
		
			| Strip element name from Fqsen to return the namespace only\.
			
		
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#94 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L94>`_
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
		:Returns: mixed 
	
	

.. rst-class:: public

	.. php:method:: public beginPhpDomain( $type, $name, $indent=true)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#105 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L105>`_
		
		
		:Parameters:
			* **$type**  string
			* **$name**  string
			* **$indent**  bool Should indent after the section started

		
	
	

.. rst-class:: protected

	.. php:method:: protected addAfterIntroduction( $element)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#132 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L132>`_
		
		
	
	

.. rst-class:: protected

	.. php:method:: protected addConstants( $constants)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#137 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L137>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public shouldRenderElement( $element)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#154 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L154>`_
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
		:Returns: bool 
	
	

.. rst-class:: public

	.. php:method:: public addDocBlockDescription( $element)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#187 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L187>`_
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Php\\Class\_ <phpDocumentor\\Reflection\\Php\\Class\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Interface\_ <phpDocumentor\\Reflection\\Php\\Interface\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Trait\_ <phpDocumentor\\Reflection\\Php\\Trait\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Property <phpDocumentor\\Reflection\\Php\\Property>` | :any:`\\phpDocumentor\\Reflection\\Php\\Method <phpDocumentor\\Reflection\\Php\\Method>` | :any:`\\phpDocumentor\\Reflection\\Php\\Constant <phpDocumentor\\Reflection\\Php\\Constant>`)  

		
		:Returns: $this 
	
	

.. rst-class:: protected

	.. php:method:: protected addDocblockTag( $tagName, $docBlock)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#212 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L212>`_
		
		
		:Parameters:
			* **$tagName** (string)  Name of the tag to parse
			* **$docBlock** (:any:`phpDocumentor\\Reflection\\DocBlock <phpDocumentor\\Reflection\\DocBlock>`)  

		
	
	

.. rst-class:: public static

	.. php:method:: public static typesToRst( $typesString)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#281 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L281>`_
		
		
		:Parameters:
			* **$typesString** (string)  

		
		:Returns: bool | string 
	
	

.. rst-class:: public

	.. php:method:: public endPhpDomain( $type="")
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#327 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L327>`_
		
		
		:Parameters:
			* **$type** (string)  

		
		:Returns: $this 
	
	

.. rst-class:: protected

	.. php:method:: protected addProperties( $properties)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#336 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L336>`_
		
		
		:Parameters:
			* **$properties** (:any:`phpDocumentor\\Reflection\\Php\\Property\[\] <phpDocumentor\\Reflection\\Php\\Property>`)  

		
	
	

.. rst-class:: protected

	.. php:method:: protected addParent( $element)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#368 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L368>`_
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Php\\Interface\_ <phpDocumentor\\Reflection\\Php\\Interface\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Class\_ <phpDocumentor\\Reflection\\Php\\Class\_>`)  

		
	
	

.. rst-class:: public static

	.. php:method:: public static getLink( $type, $fqsen, $description="")
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#390 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L390>`_
		
		
		:Parameters:
			* **$type**  string
			* **$fqsen**  string

		
		:Returns: string 
	
	

.. rst-class:: protected

	.. php:method:: protected addUsedTraits( $element)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#403 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L403>`_
		
		
		:Parameters:
			* **$element** (:any:`phpDocumentor\\Reflection\\Php\\Class\_ <phpDocumentor\\Reflection\\Php\\Class\_>` | :any:`\\phpDocumentor\\Reflection\\Php\\Trait\_ <phpDocumentor\\Reflection\\Php\\Trait\_>`)  

		
	
	

.. rst-class:: protected

	.. php:method:: protected addMethods( $methods)
	
		:Source:
			`../../src/Builder/PhpDomainBuilder.php#417 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/../../src/Builder/PhpDomainBuilder.php#L417>`_
		
		
		:Parameters:
			* **$methods**  

		
	
	

