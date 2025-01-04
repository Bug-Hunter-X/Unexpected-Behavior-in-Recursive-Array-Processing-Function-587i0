```php
<?php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value)) {
      $data[$key] = strtolower($value); // Example string processing
    } else if (is_numeric($value)) {
      $data[$key] = $value * 2; // Example numeric processing
    } else if ($value === null) {
        $data[$key] = 'NULL'; //Handle Null values
    } else {
      // Handle other data types or throw an exception
      trigger_error('Unsupported data type encountered in array: ' . gettype($value), E_USER_WARNING);
    }
  }
  return $data;
}

$data = [1, 2, [3, 4, [5,6, null]]];
$result = processData($data);
print_r($result);
?>
```