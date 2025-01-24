The provided example shows two ways to avoid the "Undefined index" error:

1. Using `array_key_exists()`:
   This function checks if a key exists in an array before attempting to access it.  This prevents the notice from being generated.

2. Using the null coalescing operator (`??`):
   This operator provides a concise way to handle cases where a key might not exist.  If the key exists, its value is returned; otherwise, a default value (specified after `??`) is returned.

```php
<?php
$myArray = ['a' => 1, 'b' => 2];

//Using array_key_exists
if (array_key_exists('c', $myArray)) {
  echo $myArray['c'];
} else {
  echo 'Key not found';
}

//Using Null Coalescing Operator
echo $myArray['c'] ?? 'Key not found';
?>
```
By using either of these methods, you can write more robust PHP code that gracefully handles situations where array keys might be missing, preventing unexpected errors.