# SimpleConvert
<b>
SimpleConvert is a library written in pure PHP and providing a set of functions that allow you to export your data into EXCEL (.xls). This library providing you to download (.xls) file and view data in the browser.  
<hr>
</b>

## Installation
<hr>

Use the package manager [composer](https://packagist.org/packages/codebreaker/simpleconvert) to install SimpleConvert.
```bash
composer require codebreaker/simpleconvert
```


## Usage
<hr>

```php
require_once './vendor/autoload.php';
$var = (object) [
  "result" => $response, # Fetch Object e.g., $response = $con->query($query); 
];
$convert = new \SimpleConvert\SimpleConvert($var); # Pass Argument Must Be Object

$convert->xls('filename.xls',true); # filename and download

$convert->xls(); # view in browser
```
<hr>

## License
[MIT](https://choosealicense.com/licenses/mit/)