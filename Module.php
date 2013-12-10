<?php
/*
 * This file is part of the codeliner/ginger-wfms package.
 * (c) Alexander Miertsch <kontakt@codeliner.ws>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace GingerWfConfigFrontend;

/**
 * Module class for Ginger\WorkflowConfiguration\Backend
 * 
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            //autoloading is defined in composer.json
        );
    }
}
