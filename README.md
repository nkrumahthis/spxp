# XML to Array Parser

A simple PHP library for parsing XML strings into associative arrays.

## Installation

You can install this package via Composer:

```bash
composer require nkrumahthis/xml-to-array
```

## Usage

```php
use Nkrumahthis\XMLToArray\XMLToArray;

$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
    <root>
        <name>John Doe</name>
        <age>30</age>
        <city>New York</city>
    </root>';

$array = XMLToArray::parse($xmlString);

print_r($array);
```

This will output

```php
Array
(
    [root] => Array
        (
            [name] => John Doe
            [age] => 30
            [city] => New York
        )
)
```

## Testing

To run PHPUnit tests, use:

```php
vendor/bin/phpunit
```

## Contributing

Contributions are welcome! Feel free to submit pull requests or open issues on GitHub: nkrumahthis/xml-to-array.

## License

This package is licensed under the MIT License. See the LICENSE file for details.
