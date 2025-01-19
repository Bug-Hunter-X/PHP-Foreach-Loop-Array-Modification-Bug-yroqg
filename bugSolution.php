The solution is to iterate over a copy of the array or use a `for` loop for more direct control:

**Solution 1: Using a copy**

```php
<?php
$myArray = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($myArray as $key => $value) {
if ($key === 'b') {
  unset($myArray[$key]);
}
}

print_r($myArray);
?>
```

**Solution 2: Using a `for` loop**

```php
<?php
$myArray = ['a' => 1, 'b' => 2, 'c' => 3];

for ($i = count($myArray) -1; $i >= 0; $i--) {
  if (key($myArray) === 'b') {
    unset($myArray[key($myArray)]);
  }
  next($myArray);
}

print_r($myArray);
?>
```
The `for` loop provides more control over the iteration process, preventing the unexpected skipping of elements.  The decrementing loop avoids issues with the array index changing during iteration.