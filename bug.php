```php
<?php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value)) {
      // Process string values
    } else if (is_numeric($value)) {
      // Process numeric values
    }
  }
  return $data;
}

$data = [1, 2, [3, 4, [5,6]]];
$result = processData($data);
print_r($result);
?>
```