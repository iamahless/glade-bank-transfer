# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/iamahless/glade-bank-transfer.svg?style=flat-square)](https://packagist.org/packages/iamahless/glade-bank-transfer)
[![Total Downloads](https://img.shields.io/packagist/dt/iamahless/glade-bank-transfer.svg?style=flat-square)](https://packagist.org/packages/iamahless/glade-bank-transfer)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require iamahless/glade-bank-transfer
```

## Usage
Initiate Class:
```php
$glade_pay = new Ahless\GladeBankTransfer("MERCHANT-ID", "MERCHANT-KEY", "https://demo.api.gladepay.com");
```

Initiate Bank transfer
```php
$bank_transfer = $glade_pay->bankTransfer('5000', null);
```

Verify Payment
```php
$bank_transfer = $glade_pay->verifyPayment('GP56315504420210605Q');
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email alexandergaruba96@gmail.com instead of using the issue tracker.

## Credits

- [Alexander Garuba](https://github.com/iamahless)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
