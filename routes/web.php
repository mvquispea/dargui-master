<?php

use App\Http\Controllers\LanguageController;

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::get('admin', 'AdminController@home')->name('admin'); // antes 'home'
    Route::get('articulos', 'ArticleController@index')->name('article.index');
    Route::get('articulos/nuevo', 'ArticleController@create')->name('article.create');
    Route::get('articulos/{article}/editar', 'ArticleController@edit')->name('article.edit');
    Route::post('articulos', 'ArticleController@store')->name('article.store');
    Route::post('articulos/{article}', 'ArticleController@update')->name('article.update');
    Route::delete('articulos/{article}', 'ArticleController@destroy')->name('article.destroy');
    Route::post('posts/image', 'ArticleController@storeImage');
    Route::post('consulta', 'ConsulteController@store');

    // Noticias
    Route::get('lista-noticias', 'NoticeController@list')->name('noticias.index');
    Route::get('noticias/nuevo', 'NoticeController@create')->name('noticias.create');
    Route::get('noticias/{notice}/editar', 'NoticeController@edit')->name('noticias.edit');
    Route::delete('noticias/{notice}', 'NoticeController@destroy')->name('noticias.destroy');
    Route::post('noticias', 'NoticeController@store')->name('noticias.store');
    Route::post('noticias/{notice}', 'NoticeController@update')->name('noticias.update');


    // Eventos
    Route::get('lista-eventos', 'EventController@list')->name('eventos.index');
    Route::get('eventos/nuevo', 'EventController@create')->name('eventos.create');
    Route::get('eventos/{event}/editar', 'EventController@edit')->name('eventos.edit');
    Route::delete('eventos/{event}', 'EventController@destroy')->name('eventos.destroy');
    Route::post('eventos', 'EventController@store')->name('eventos.store');
    Route::post('eventos/{event}', 'EventController@update')->name('eventos.update');



    // Videos
    Route::get('videos', 'VideoController@index')->name('video.index');
    Route::get('videos/nuevo', 'VideoController@create')->name('video.create');
    Route::post('videos', 'VideoController@store')->name('video.store');
    Route::get('videos/{video}/editar', 'VideoController@edit')->name('video.edit');
    Route::post('videos/{video}', 'VideoController@update')->name('video.update');
    Route::delete('videos/{video}', 'VideoController@destroy')->name('video.destroy');
    // Infografías
    Route::get('infografias', 'InfographicController@index')->name('infographics.index');
    Route::get('infografias/nuevo', 'InfographicController@create')->name('infographics.create');
    Route::get('infografias/{infographic}/editar', 'InfographicController@edit')->name('infographics.edit');
    Route::post('infografias', 'InfographicController@store')->name('infographics.store');
    Route::post('infografias/{infographic}', 'InfographicController@update')->name('infographics.update');
    Route::delete('infografias/{infographic}', 'InfographicController@destroy')->name('infographics.destroy');
    // Artículos científicos
    Route::get('cientificos', 'ScientificArticleController@index')->name('scientifics.index');
    Route::get('cientificos/nuevo', 'ScientificArticleController@create')->name('scientifics.create');
    Route::get('cientificos/{article}/editar', 'ScientificArticleController@edit')->name('scientifics.edit');
    Route::delete('cientificos/{article}', 'ScientificArticleController@destroy')->name('scientifics.destroy');
    Route::post('cientificos', 'ScientificArticleController@store')->name('scientifics.store');
    Route::post('cientificos/{article}', 'ScientificArticleController@update')->name('scientifics.update');

});




// Route Components
Route::get('layouts/collapsed-menu', 'StaterkitController@collapsed_menu')->name('collapsed-menu');
Route::get('layouts/boxed', 'StaterkitController@layout_boxed')->name('layout-boxed');
Route::get('layouts/without-menu', 'StaterkitController@without_menu')->name('without-menu');
Route::get('layouts/empty', 'StaterkitController@layout_empty')->name('layout-empty');
Route::get('layouts/blank', 'StaterkitController@layout_blank')->name('layout-blank');
// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// ----- ALERTAUSIL ----- //
// Landing
Route::get('categoria/{category}', 'CategoryController@index')->name('category');
Route::get('categoria/{category}/articulos', 'ArticleController@indexPublic')->name('article.indexPublic');
Route::get('categoria/{category}/articulos/{article}', 'ArticleController@showPublic')->name('article.showPublic');
Route::get('categoria/{category}/videos', 'VideoController@indexPublic')->name('videos.indexPublic');
Route::get('categoria/{category}/videos/{video}', 'VideoController@showPublic')->name('videos.showPublic');
Route::get('categoria/{category}/infografias', 'InfographicController@indexPublic')->name('infographics.indexPublic');
Route::get('categoria/{category}/infografias/{infographic}', 'InfographicController@showPublic')->name('infographics.showPublic');



// Route::get('categoria/{category}', 'CategoryController@index')->name('category');
// Route::get('categoria/{category}/{article}', 'ArticleController@showPublic')->name('article.showPublic');

Route::get('multimedia', 'InternaController@multimedia')->name('multimedia');
Route::get('multimedia/{multimedia}', 'InternaController@showMultimedia')->name('showMultimedia');
Route::get('multimedia/{multimedia}/{item}', 'MultimediaController@showItem')->name('multimedia.item.show');
Route::get('articulos-cientificos', 'InternaController@cientificos')->name('cientificos');
Route::get('articulos-cientificos/{article}', 'ScientificArticleController@showPublic')->name('cientificos.show');
Route::get('expertos', 'InternaController@expertos')->name('expertos');
Route::get('abc', 'InternaController@abc')->name('abc');
Route::get('noticias', 'NoticeController@index')->name('noticias');
Route::get('noticias/{notice}', 'NoticeController@show')->name('noticias.show');

Route::get('eventos', 'EventController@index')->name('eventos');
Route::get('eventos/{event}', 'EventController@show')->name('eventos.show');

Route::get('buscar/{busqueda}', 'InternaController@search')->name('search');
Route::get('test', 'TestController@test')->name('test');






