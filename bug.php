```php
$date = new DateTime('2024-03-31');
$date->modify('+1 month');
echo $date->format('Y-m-d'); // Outputs 2024-04-30, not 2024-05-01 as expected
```