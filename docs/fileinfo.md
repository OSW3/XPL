# fileinfo

Retrieve some info about a file.

Version : 1.0.0  
Since : 1.2.0  

---

```php
fileinfo(string $file [, string|array $options = []]])
```


## Parameters

- **file**  
Adresse of fila you want to parse

- **options**  
Options you want to retrive


## Return Values

Return an array if none or more than one options are specified.  
Return a string or an array if only one option is specified, it depend to the result of the option.


## Examples

```php
fileinfo("./resources/unicorn.jpg", Fileinfo::INFO_MIMETYPE);
// image/jpeg

fileinfo("./resources/unicorn.jpg", [Fileinfo::INFO_MIMETYPE, Fileinfo::CONTENT_BASE64]);
// Array
// (
//     [mimetype] => image/jpeg
//     [base64] => /9j/4AAQSkZJRgABAQEASABIAAD/7QBoUGhv ... FcFcFRqH/x8f/Z
// )
```


## Parameters options

### General Info

```php
Fileinfo::INFO_ABSPATH  
// Relative Path

Fileinfo::INFO_RELPATH  
// Absoulte Path

Fileinfo::INFO_BASENAME  
// File base name

Fileinfo::INFO_FILENAME  
// File name

Fileinfo::INFO_EXTENSION  
// File extension

Fileinfo::INFO_MIMETYPE  
// Data mimetype

Fileinfo::INFO_MIMETYPE_EXTENSION  
// Recommended from mimetype

Fileinfo::INFO_FILETYPE  
// File / Media type

Fileinfo::INFO_SIZE  
// File size

Fileinfo::INFO_DESCRIPTION  
// File description
```

### File Content

```php
Fileinfo::CONTENT_HEADER  
// File Header

Fileinfo::CONTENT_DAT* 
// File content 

Fileinfo::CONTENT_BASE64  
// BASE64 of content

Fileinfo::CONTENT_DATA64  
// BASE64 of content with prefix (ready to use in img src attribut)

Fileinfo::CONTENT_MD5  
// MD5 of content

Fileinfo::CONTENT_SHA1  
// SHA1 of content

Fileinfo::CONTENT_ROWS  
// Rows of content
```

### Image Info

```php
Fileinfo::IMAGE_THUMBNAIL  
// Image Thumbnail (if is available)

Fileinfo::IMAGE_WIDTH  
// Image Width

Fileinfo::IMAGE_HEIGHT  
// Image Height

Fileinfo::IMAGE_ORIENTATION  
// Image orientation

Fileinfo::IMAGE_BITS  
// Bits

Fileinfo::IMAGE_CHANNELS  
// Channels

Fileinfo::IMAGE_EXIF  
// Image EXIF
```

### Audio Info

```php
Fileinfo::AUDIO_ID3TAGS  
// File ID3 Tags
```