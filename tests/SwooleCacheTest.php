<?php

namespace Scrawler\Cache;

include __DIR__.'/../vendor/autoload.php';

use Swoole\Table;
use PHPUnit\Framework\TestCase;
use Scrawler\Cache\SwooleCache;

class SwooleCacheTest extends TestCase
{
    protected $cache;

    /**
     * Setup
     *
     * @return void
     */
    public function setUp():void
    {
        parent::setUp();

        $this->cache = new SwooleCache(10);
    }

    /**
     * Test Set function
     *
     * @return void
     */
    public function testSetAndGet()
    {
        $this->cache->set("name", "Pranjal");

        $this->assertEquals("Pranjal", $this->cache->get("name"));
    }

    /**
     * Test Delete function
     *
     * @return void
     */
    public function testDelete()
    {
        $result = $this->cache->delete("name");

        $this->assertEquals(false, $result);
    }

    /**
     * Test GetMultiple and SetMultiple function
     *
     * @return void
     */
    public function testGetMultipleAndSetMultiple()
    {
        $datas = [
            "user_one" => "Pranjal",
            "user_two" => "Raj"
        
        ];

        $this->cache->setMultiple($datas);

        $this->assertEquals($datas, $this->cache->getMultiple(["user_one", "user_two"]));
    }

    /**
     * Test Has function
     *
     * @return void
     */
    public function testHas()
    {
        $datas = [
            "user_one" => "Pranjal",
            "user_two" => "Raj"
        ];

        $this->cache->setMultiple($datas);

        $this->assertTrue($this->cache->has("user_one"));
        $this->assertTrue($this->cache->has("user_two"));
    }

    /**
     * Test clear function
     *
     * @return void
     */
    public function testClear()
    {
        $datas = [
            "user_one" => "Pranjal",
            "user_two" => "Raj"
            
        ];

        $this->cache->setMultiple($datas);

        $this->cache->clear();

        $this->assertFalse($this->cache->has("user_one"));
        $this->assertFalse($this->cache->has("user_two"));
    }
}
