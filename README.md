# think-response

## 安装
```bash
composer require reaway/think-response
```

## 用法
```php
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$response = html('html');
//$response = json(['key' => 'value']);
//$response = jsonp(['key' => 'value']);
//$response = redirect('http://www.baidu.com');
//$response = xml(['key' => 'value']);

$response->send();
```