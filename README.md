# Glade Bank Transfer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/iamahless/glade-bank-transfer.svg?style=flat-square)](https://packagist.org/packages/iamahless/glade-bank-transfer)
[![Total Downloads](https://img.shields.io/packagist/dt/iamahless/glade-bank-transfer.svg?style=flat-square)](https://packagist.org/packages/iamahless/glade-bank-transfer)

GladePay is the leading digital payment provider with focus across African countries, dedicated to creating simple payment solution for African businesses. We are focused on building trust between buyers and sellers by providing simple solutions using the payment options (online or offline) preferred with complete security and efficiency.

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
