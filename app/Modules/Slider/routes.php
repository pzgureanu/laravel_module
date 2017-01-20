<?php 

/*
|--------------------------------------------------------------------------
| ModuleOne Module Routes
|--------------------------------------------------------------------------
|
| All the routes related to the ModuleOne module have to go in here. Make sure
| to change the namespace in case you decide to change the 
| namespace/structure of controllers.
|
*/
Route::group(['prefix' => 'slider', 'namespace' => 'App\Modules\Slider\Controllers'], function () {
	Route::get('/', ['as' => 'slider.index', 'uses' => 'SliderController@index']);
	Route::get('model-test', ['as' => 'module-one.modelTest', 'uses' => 'SliderController@modelTest']);
});