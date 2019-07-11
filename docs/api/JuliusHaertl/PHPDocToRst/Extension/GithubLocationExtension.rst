.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


GithubLocationExtension
=======================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Extension

.. php:class:: GithubLocationExtension


	.. rst-class:: phpdoc-description
	
		| This extension adds a link to the source at github to all elements
		
		| Arguments
		| 0 =\> Url to the github repo \(required\)
		| 1 =\> Path to the git repository \(required\)
		| 2 =\> Branch to link to \(default=master\)
		
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Extension\\Extension`
	

Properties
----------

.. php:attr:: protected static basePath



.. php:attr:: protected static githubRepo



.. php:attr:: protected static branch



Methods
-------

.. rst-class:: public

	.. php:method:: public prepare()
	
		
	
	

.. rst-class:: public

	.. php:method:: public render( $type, &$builder, $element)
	
		
		:Parameters:
			* **$type** (string)  
			* **$builder** (:any:`JuliusHaertl\\PHPDocToRst\\Builder\\FileBuilder <JuliusHaertl\\PHPDocToRst\\Builder\\FileBuilder>`)  
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
	
	

.. rst-class:: private

	.. php:method:: private getGithubLink( $file, $line=1, $branch=master)
	
		
	
	

