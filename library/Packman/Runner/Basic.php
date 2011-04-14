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

namespace Packman\Runner;
use Packman;

class Basic implements Runnable
{

    public function execute(array $options)
    {
        $parser = new Parser\Closure($options['spec']);
        $container = $parser->parse();
        $data = $container->process();
        if (!$container->validate()) {
            throw new Packman\Exception('You were bad!');
        }

        $packager = new Packman\Packager\Tgz($data);
    }
 
}