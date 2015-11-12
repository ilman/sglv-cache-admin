<?php

Route::group(
	array(
		'prefix' => 'admin',
		'namespace' => 'Scienceguard\SglvCacheAdmin\Controllers\Admin',
		'before' => 'auth|admin',
	),
	function(){
		Route::get('cache', 'CacheController@getCache');
		Route::post('cache', 'CacheController@postCache');
	}
);