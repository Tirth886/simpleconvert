# SimpleConvert

SimpleConvert is a library written in pure PHP and providing a set of functions that allow you to export your data into EXCEL ***(.xls)***. This library providing you to download ***(.xls)*** file and view data in the browser.  

## Installation

Use the package manager [composer](https://packagist.org/packages/codebreaker/simpleconvert) to install foobar.

```bash
composer require codebreaker/simpleconvert
```

## Usage

```php
require_once './vendor/autoload.php';
$var = (object) [
  "header" => $header, # Columns In Array (numeric)
  "result" => $response, # Fetch Object e.g., $response = $con->query($query); 
];
$convert = new \SimpleConvert\SimpleConvert($var); # Pass Argument Must Be Object

$convert->xls('fd.xls',true); # filename and download

print_r($convert->xls('fd.xls',false)); # filename and view
```

## License
[MIT](https://choosealicense.com/licenses/mit/)