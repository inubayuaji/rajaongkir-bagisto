# RajaOngkir Bagisto
This extension allows your customers to collect their orders from your physical store.

## Requirements
- [Bagisto](https://github.com/bagisto/bagisto)

## Installation

### Install with composer
1. Run the following command
```php
composer require lunantu/rajaongkir-bagisto
```
2. Open config/app.php and add **Lunantu\RajaOngkir\Providers\RajaOngkirServiceProvider::class**.
3. Run the following command
```php
composer dump-autoload
```
4. Go to `https://<your-site>/admin/configuration/sales/carriers`.
5. Make sure that **RajaOngkir** is active and press save.

### Install with package folder
1. Unzip all the files to **packages/Lunantu/RajaOngkir**.
2. Open config/app.php and add **Lunantu\RajaOngkir\Providers\RajaOngkirServiceProvider::class**.
3. Go to `https://<your-site>/admin/configuration/sales/carriers`.
4. Make sure that **RajaOngkir** is active and press save.

Your customers are now able to select the new shipping method.