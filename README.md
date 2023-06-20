# raita
Algoritm Match String Raita

## install
```composer
composer require rinaldi/raita
```

## Example
```php
require 'vendor/autoload.php';
use Rinaldi\Raita\Raita;
use Rinaldi\Raita\ShiftTable;

$string = "Hello Word";
$patterm = "ello";

$shitfTabel = ShiftTable::shifting($patterm);

$result = Raita::search($patterm,$shitfTabel,$string);

if($result >0){
    echo "Pola ditemukan";
}else{
    echo 'Pola tidak ditemukan';
}
```