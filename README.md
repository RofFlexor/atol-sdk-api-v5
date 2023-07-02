Platron Atol SDK
===============
## Install

The project involves installation using composer
<pre><code>composer require telegins/atol-sdk-api-v5</pre></code>

## Tests
PHPUnit is required for the tests to work, to install it, you need to run the command
```
composer require phpunit/phpunit
```
In order to run the integration tests, you need to copy the file `tests/integration/MerchantSettings.php.sample` as
`tests/integration/MerchantSettings.php` Execute the command from the root of the project
```
vendor/bin/phpunit vendor/payprocessing/atol-online/tests/integration
```

## Examples

You can find examples here `tests/integration`
