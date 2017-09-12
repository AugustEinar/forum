<?php

Auth::routes();

route::get('/threads', function() {
	return view('threads.index');
});

route::get('/threads/create', function() {
	return view('threads.create');
});

route::get('/greeting/{id}/{count}', function($id, $count) {
	return view('greeting', ['id' => $id], ['count' => $count]);
})->where(['id' => '[0-9+]', 'count' => '[0-9]+']);
