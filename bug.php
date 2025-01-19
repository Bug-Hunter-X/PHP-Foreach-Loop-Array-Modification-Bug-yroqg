In PHP, a common yet subtle error arises when dealing with array keys.  Consider this scenario:

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

You might expect the output to exclude the element with key 'b'. However, modifying an array during iteration can lead to unexpected behavior.  Once 'b' is unset, the internal pointer of the foreach loop is shifted, potentially skipping elements.