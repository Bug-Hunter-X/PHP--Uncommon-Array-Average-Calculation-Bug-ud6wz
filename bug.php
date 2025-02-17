```php
<?php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }
  return array_sum($numbers) / count($numbers);
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Average: 15

$numbers = [10,20,30];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Average: 20

$numbers = [];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Average: 0
?>
```