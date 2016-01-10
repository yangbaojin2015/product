<?php
Route::get('products', function() {
	$products = DB::select('SELECT * FROM products');
	return view('product::product')->with('products', $products);
});
