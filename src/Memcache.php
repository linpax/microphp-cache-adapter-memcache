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
        return $this->driver->has($key);
    }

    public function get($key, $default = null)
    {
        return $this->driver->get($key) ?: $default;
    }

    public function set($key, $value, $ttl = null)
    {
        return $this->driver->set($key, $value, $ttl);
    }

    public function delete($key)
    {
        return $this->driver->delete($key);
    }

    public function clear()
    {
        $this->driver->clean();
    }
}