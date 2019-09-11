# xtrim

Split a string and return an array of segments with whitspace stripped from the beginning and end of each segment.

Version : 1.0.0  
Since : 1.0.0  

---

```php
xtrim(string $delimiter, string $string[, int $limit = PHP_INT_MAX]): array
```


## Parameters

- **delimiter**  
String separator

- **string**  
Initial string

- **limit**


## Return Values

The array of trimmed segments string.


## Examples

```php
$string = "Bananas,    Apples     ,    Coconuts";
xtrim(",", $string);

// Array
// (
//     [0] => Bananas
//     [1] => Apples
//     [2] => Coconuts
// )
```