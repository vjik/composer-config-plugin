<?php
/**
 * Composer plugin for config assembling
 *
 * @link      https://github.com/hiqdev/composer-config-plugin
 * @package   composer-config-plugin
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\composer\config\configs;

/**
 * System class represents system configuration files:
 * __addition, __files.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class System extends Config
{
    public function setValues(array $values)
    {
        $this->values = $values;
    }

    protected function writeFile(string $path, array $data)
    {
        $this->writePhpFile($path, $data, false);
    }
}