```php
$date = new DateTime('2024-03-31');
$month = $date->format('m');
$year = $date->format('Y');
$nextMonth = ($month == 12) ? 1 : $month + 1;
$nextYear = ($month == 12) ? $year + 1 : $year;
$date->setDate($nextYear, $nextMonth, 1);
$date->modify('-1 day');
echo $date->format('Y-m-d'); // Outputs 2024-04-30
```