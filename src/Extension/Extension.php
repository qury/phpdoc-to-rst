<?php
/**
 * @copyright Copyright (c) 2017 Julius Härtl <jus@bitgrid.net>
 * @author    Julius Härtl <jus@bitgrid.net>
 * @license   GNU AGPL version 3 or any later version
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace JuliusHaertl\PHPDocToRst\Extension;

use JuliusHaertl\PHPDocToRst\Builder\ExtensionBuilder;
use phpDocumentor\Reflection\Element;
use phpDocumentor\Reflection\Php\Project;

abstract class Extension
{
    /** @var Project */
    protected $project;

    /** @var array */
    protected $arguments;

    public function __construct(Project $project, $arguments = [])
    {
        $this->project = $project;
        $this->arguments = $arguments;
    }

    /**
     * Method that will be ran before generating any documentation files
     * This is useful for preparing own data structures
     * to be used in the output documentation.
     */
    public function prepare()
    {
    }

    /**
     * Implement custom rendering functionality here.
     * It will be executed by Builder classes depending on the given type.
     *
     * Currently supported types:
     *
     *  - PhpDomainBuilder::SECTION_BEFORE_DESCRIPTION
     *  - PhpDomainBuilder::SECTION_AFTER_DESCRIPTION
     *
     * @param string           $type
     * @param ExtensionBuilder $builder
     * @param Element          $element context for the render type
     */
    public function render($type, &$builder, $element)
    {
    }

    /**
     * This method will be called to check if a certain element should
     * be rendered in the documentation.
     *
     * An example extension that makes use of it is PublicOnlyExtension
     *
     * @param Element $element
     *
     * @return bool
     */
    public function shouldRenderElement(Element $element)
    {
        return true;
    }

    public function shouldRenderIndex($type, $element)
    {
        return true;
    }
}
