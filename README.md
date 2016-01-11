# Prduct

## Install
1.在 composer.json 的 require里 加入
``` bash
"sunnyday/product": "dev-master"
```
2.执行 composer update
```
composer update
```
3.在config/app.php 的 providers 数组加入一条
```
Sunnyday\Product\ProductServiceProvider::class,
```

## Usage
``` php
php artisan vendor:publish
php artisan migrate
```
## 访问
xx.com/products
