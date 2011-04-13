<?php
/**
 * Packman
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://github.com/padraic/packman/blob/master/LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to padraic@php.net so we can send you a copy immediately.
 *
 * @category   Packman
 * @package    Packman
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/packman/blob/master/LICENSE New BSD License
 */

use \Packman\Parser;

class Packman_SpecParsingTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->phpParsableFilename = __DIR__ . '/_files/parsable/.package';
    }

    /**
     * Closure Parsing Tests
     */

    /**
     * @expectedException \Packman\Exception
     */
    public function testThrowsExceptionIfParsableFileDoesNotExist()
    {
        $parser = new Parser\Closure('/path/to/worlds/end/.package');
    }

}
