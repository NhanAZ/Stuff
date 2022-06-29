# So sánh tương đối
```php
$pattern = '/abc/';
$subject = 'mabcdef';
if (preg_match($pattern, $subject)) {
	echo 'Chuỗi $subject có chứa chuỗi $pattern';
}
```
```shell
Chuỗi $subject có chứa chuỗi $pattern
```

# So sánh tuyệt đối
```php
$pattern = '/^framgia$/';
$subject = 'framgia';
if (preg_match($pattern, $subject)){
    echo 'So sánh trùng khớp hoàn toàn';
}
```
```shell
So sánh trùng khớp hoàn toàn
```
