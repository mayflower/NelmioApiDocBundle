<?php

/*
 * This file is part of the NelmioApiDocBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\ApiDocBundle\Parser;

/**
 * This is the interface parsers must implement in order to be registered in the ApiDocExtractor.
 */
interface ParserInterface
{
    /**
     * Return true/false whether this class supports parsing the given class.
     *
     * @param string $item  The string name of the class to parse.
     * @return boolean
     */
	public function supportsClass($className);
    
    /**
     * Returns an array of class property metadata where each item is a key (the property name) and
     * an array of data with the following keys:
     *  - dataType          string
     *  - required          boolean
     *  - description       string
     *  - readonly          boolean
     *
     * @param  string $class The string name of the class to parse.
     * @return array
     */
    public function parse($className);
    
}