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
 * @copyright  Copyright (c) 2011 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/packman/blob/master/LICENSE New BSD License
 */
 
namespace Packman\Parser;
use Packman;

class Closure implements Parsable
{

    protected $parsableContent = null;
    
    public function __construct($filename) {
        if (!file_exists($filename)) {
            throw new Packman\Exception(
                'The file does not exist: ' . $filename
            );
        }
        if (!is_readable($filename)) {
            throw new Packman\Exception(
                'The file is not readable: ' . $filename
            );
        }
        $this->parsableContent = file_get_contents($filename);
    }

    public function parse(Packman\Container\DataContainer $data = null)
    {
        if (is_null($data)) {
            $data = new Packman\Container\PackageData;
        }
        include $filename;
        $package($data);
        $data->process();
        return $data;
    }

}