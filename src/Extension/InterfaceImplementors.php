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

use JuliusHaertl\PHPDocToRst\Builder\FileBuilder;
use JuliusHaertl\PHPDocToRst\Builder\PhpDomainBuilder;
use JuliusHaertl\PHPDocToRst\Builder\RstBuilder;
use phpDocumentor\Reflection\Element;
use phpDocumentor\Reflection\Php\Interface_;

/**
 * Class InterfaceImplementors.
 */
class InterfaceImplementors extends Extension
{
    private $implementors = [];

    public function prepare()
    {
        foreach ($this->project->getFiles() as $file) {
            foreach ($file->getClasses() as $class) {
                foreach ($class->getInterfaces() as $interface) {
                    if (!array_key_exists((string) $interface, $this->implementors)) {
                        $this->implementors[(string) $interface] = [];
                    }
                    $this->implementors[(string) $interface][] = $class->getFqsen();
                }
            }
        }
    }

    /**
     * @param string      $type
     * @param FileBuilder $builder
     * @param Element     $element
     */
    public function render($type, &$builder, $element)
    {
        if (!$builder instanceof FileBuilder || !$element instanceof Interface_) {
            return;
        }
        if ($type === PhpDomainBuilder::SECTION_AFTER_DESCRIPTION && $builder->getElement() instanceof Interface_) {
            /** @var Interface_ $interface */
            $interface = $builder->getElement();
            $content = '';
            if (!array_key_exists((string) $interface->getFqsen(), $this->implementors)) {
                return;
            }
            $implementors = $this->implementors[(string) $interface->getFqsen()];
            if (count($implementors) === 0) {
                return;
            }
            foreach ($implementors as $implementor) {
                $content .= ':php:class:`'.RstBuilder::escape(substr($implementor, 1)).'` ';
            }
            $builder->addFieldList('Implemented by', $content);
            $builder->addLine();
        }
    }
}
