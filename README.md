# PagerDuty

Lightweight PagerDuty API library. Mostly incomplete.

## Example Usage

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

$pd = \Slowbro\PagerDuty\Factory::create("mycompany", "api_key");
var_dump($pd->incident(false, ['status' => 'resolved']));
```
