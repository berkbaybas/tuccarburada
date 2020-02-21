<?php
use Spatie\Sitemap\SitemapGenerator;
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

Route::get('/', function () {
    return view('index');
});

Route::get('sitemap', function () {
    SitemapGenerator::create('https://www.tuccarburada.com/')->writeToFile('sitemap.xml');
    return 'sitemap created';
});

Route::get('/iletisim', [
    'uses' => 'ContactController@create'
]);
Route::post('/iletisim', [
    'uses' => 'ContactController@store',
    'as' => 'iletisim.store'
]);

Route::get('/paketler', function () {
    return view('packageDetail');
});
