<div align = "center">
 <h1>Swoole Cache</h1>
 🚀 A High speed , PSR-16 compatible cache library based on swoole-tables 🚀 <br>
  🇮🇳 Made in India 🇮🇳
</div>
<br><br>

## 💻 Installation 

Swoole cache requires open-swoole extension to be installed follow this [guide](https://openswoole.com/docs/get-started/installation) to install open-swoole,

You can install Swoole cache via Composer. If you don't have composer installed , you can download composer from [here](https://getcomposer.org/download/)

```sh
composer install scrawler/swoole-cache
```
<br>

## 🏁  Usage 

This is a fully compatible [PSR-16 cache](https://www.php-fig.org/psr/psr-16/) and uses all the PSR 16 methods

```php
include __DIR__.'/../vendor/autoload.php';

//Setup (parameter $size is optional)
$cache = new SwooleCache(10);

$key = "name";
$value = "Pranjal";

// set key value pair in in cache
$cache->set($key, $value);

// get value from key
$cache->get($key);

// delete value using key
cache->delete($key);

// Set multiples values
$datas = [
  "user_one" => "Pranjal",
  "user_two" => "Raj"     
 ];
 
$cache->setMultiple($datas);

// Set multiple values
$cache->setMultiple($datas);

// Get multiple values
$cache->getMultiple(["user_one", "user_two"])

// Clear complete cache
$cache->clear();
```
<br>

## 📄 License
Swoole Cache is created by [Pranjal Pandey](https://www.github.com/ipranjal) and released under the [Apache 2.0 License](https://github.com/scrawler-labs/swoole-cache/blob/main/LICENSE).
