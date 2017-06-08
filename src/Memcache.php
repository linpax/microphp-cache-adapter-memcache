<?php
/**
 * @link https://github.com/linpax/microphp-cache-adapter-memcache
 * @copyright Copyright &copy; 2017 Oleg Lunegov
 * @license https://github.com/linpax/microphp-cache-adapter-memcache/blob/master/LICENSE
 */

namespace Micro\Cache\Adapter\Memcache;

use Micro\Cache\AdapterInterface;


class Memcache implements AdapterInterface
{
    /** @var \Micro\Driver\Memcache\Memcache $driver */
    private $driver;

    public function __construct(\Micro\Driver\Memcache\Memcache $driver)
    {
        $this->driver = $driver;
    }

    public function has($key)
    {
        // TODO: Implement has() method.
    }

    public function get($key, $default = null)
    {
        // TODO: Implement get() method.
    }

    public function set($key, $value, $ttl = null)
    {
        // TODO: Implement set() method.
    }

    public function delete($key)
    {
        // TODO: Implement delete() method.
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }
}