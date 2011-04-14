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
 
namespace Packman\Container;
use Packman;

class PackageData implements Processable
{
    
    public $name = null;

    public $authors = null;

    public $version = null;

    public $api_version = null;

    public $summary = null;

    public $description = null;

    public $homepage = null;

    public $license = null;

    public $include_path = null;

    public $changelog = null;

    public $dependencies = array();

    public $optional_dependencies = array();

    public $files = array(
        'php' => array(),
        'data' => array(),
        'bin' => array(),
        'ignore' => array(),
        'tests' => array()
    );

    protected $dataMap = array();

    public function process()
    {
        $this->processName();
        $this->processAuthors();
        $this->processVersion();
        $this->processApiVersion();
        $this->processSummary();
        $this->processDescription();
        $this->processHomepage();
        $this->processLicense();
        $this->processIncludePath();
        $this->processChangelog();
        $this->processDependencies();
        $this->processOptionalDependencies();
        $this->processFiles();
    }

    public function validate()
    {
        
    }

    public function getDataMap()
    {
        return $this->dataMap;
    }

    protected function processName()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processAuthors()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processVersion()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processApiVersion()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processSummary()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processDescription()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processHomepage()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processLicense()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processIncludePath()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processChangelog()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processDependencies()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processOptionalDependencies()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

    protected function processFiles()
    {
        if (!preg_match("/^$/", $this->name)) {
            throw new Packman\Exception('You were bad!');
        }
        $this->dataMap['name'] = $this->name;
    }

}