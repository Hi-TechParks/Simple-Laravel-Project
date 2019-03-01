<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Home Routes */
/*Route::get('/', function () {
    return view('index');
});

Route::get('/home', function(){
	return view('index');
});*/

Route::get('/', 'ViewHomeController@index');



/* Services Routes */
/*Route::get('/services', function(){
	return view('services');
});

Route::get('/service/interior', function(){
	return view('interior-details');
});

Route::get('/service/exterior', function(){
	return view('exterior-details');
});

Route::get('/service/building', function(){
	return view('building-details');
});

Route::get('/design/details', function(){
	return view('design-details');
});

Route::get('/service/details', function(){
	return view('service-details');
});*/

Route::get('/services', 'ViewServiceController@index')->name('service.index');
Route::get('/services/single/{id}', 'ViewServiceController@show')->name('service.show');





/* Book Routes */
Route::get('/books', function(){
	return view('books');
});

Route::get('/book/details', function(){
	return view('book-details');
});



/* Blog Routes */
/*Route::get('/blogs', function(){
	return view('blog');
});

Route::get('/blog/details', function(){
	return view('blog-details');
});*/

Route::get('/blogs', 'ViewBlogController@index');
Route::get('/blogs/category/{cat_id}', 'ViewBlogController@category');
Route::get('/blog/single/{id}', 'ViewBlogController@show');



/* News & Event Routes */
/*Route::get('/news', function(){
	return view('news');
});

Route::get('/news/details', function(){
	return view('news-details');
});*/

Route::get('/news', 'ViewNewsController@index');
Route::get('/news/single/{id}', 'ViewNewsController@show');



/* Client Routes */
Route::get('/clients', function(){
	return view('client');
});

Route::get('/client/details', function(){
	return view('client-details');
});



/* Other Page Routes */
Route::get('/about', function(){
	return view('about');
});

Route::get('/contact', function(){
	return view('contact');
});


// Admin Dashboard
Route::get('/dashboard','AdminDashboardController@index')->name('admin.index');

// Admin Blog Category
Route::get('/admin/blogcate','BlogCategoryController@index')->name('blogcate.index');
Route::get('/admin/blogcate/create','BlogCategoryController@create')->name('blogcate.create');
Route::post('/admin/blogcate/store','BlogCategoryController@store')->name('blogcate.store');
Route::get('/admin/blogcate/edit/{id}','BlogCategoryController@edit')->name('blogcate.edit');
Route::post('/admin/blogcate/update/{id}','BlogCategoryController@update')->name('blogcate.update');
Route::get('/admin/blogcate/status/{id}','BlogCategoryController@status')->name('blogcate.status');


// Admin Blog
Route::get('/admin/blog','BlogController@index')->name('blog.index');
Route::get('/admin/blog/create','BlogController@create')->name('blog.create');
Route::post('/admin/blog/store','BlogController@store')->name('blog.store');
Route::get('/admin/blog/show/{id}','BlogController@show')->name('blog.show');
Route::get('/admin/blog/edit/{id}','BlogController@edit')->name('blog.edit');
Route::post('/admin/blog/update/{id}','BlogController@update')->name('blog.update');
Route::get('/admin/blog/status/{id}','BlogController@status')->name('blog.status');


// Admin News & Event
Route::get('/admin/news','NewsController@index')->name('news.index');
Route::get('/admin/news/create','NewsController@create')->name('news.create');
Route::post('/admin/news/store','NewsController@store')->name('news.store');
Route::get('/admin/news/show/{id}','NewsController@show')->name('news.show');
Route::get('/admin/news/edit/{id}','NewsController@edit')->name('news.edit');
Route::post('/admin/news/update/{id}','NewsController@update')->name('news.update');
Route::get('/admin/news/status/{id}','NewsController@status')->name('news.status');


// Admin Service
Route::get('/admin/service','ServiceController@index')->name('service.index');
Route::get('/admin/service/create','ServiceController@create')->name('service.create');
Route::post('/admin/service/store','ServiceController@store')->name('service.store');
Route::get('/admin/service/show/{id}','ServiceController@show')->name('service.show');
Route::get('/admin/service/edit/{id}','ServiceController@edit')->name('service.edit');
Route::post('/admin/service/update/{id}','ServiceController@update')->name('service.update');
Route::get('/admin/service/status/{id}','ServiceController@status')->name('service.status');


// Admin Service Images
Route::get('/admin/image','ServiceImageController@index')->name('image.index');
Route::get('/admin/image/create','ServiceImageController@create')->name('image.create');
Route::post('/admin/image/store','ServiceImageController@store')->name('image.store');
Route::get('/admin/image/show/{id}','ServiceImageController@show')->name('image.show');
Route::get('/admin/image/edit/{id}','ServiceImageController@edit')->name('image.edit');
Route::post('/admin/image/update/{id}','ServiceImageController@update')->name('image.update');
Route::get('/admin/image/status/{id}','ServiceImageController@status')->name('image.status');



// Admin Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
