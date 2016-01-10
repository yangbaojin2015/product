# Prduct

## Install
``` bash
"sunnyday/product": "dev-master"
```
```
composer update
```

在config/app.php 的 providers 数组加入一条
```
Sunnyday\Product\ProductServiceProvider::class,
```

## Usage
``` php
php artisan vendor:publish
php artisan migrate
```
