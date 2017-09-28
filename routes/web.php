<?php

Auth::routes();

route::get('/threads', function() {
	return view('threads.index');
});

route::get('/threads/create', function() {
	return view('threads.create');
});

