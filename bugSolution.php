```php
<?php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }
  $sum = array_sum($numbers);
  $count = count($numbers);
  if ($count == 0 || $sum == 0 && $count > 0 ) {
    return 0; // Handle all zeros or sum 0
  }
  return $sum / $count;
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

$numbers = [0,0,0];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Average: 0
?>
```