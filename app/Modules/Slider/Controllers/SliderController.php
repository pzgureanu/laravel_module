<?php namespace App\Modules\Slider\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Slider\Models\SliderModel;

/**
 * IndexController
 *
 * Controller to house all the functionality directly
 * related to the ModuleOne.
 */
class SliderController extends Controller
{
	protected $model;

	function __construct( SliderModel $model )
	{
		$this->model = $model;
	}

	public function index()
	{
		// ModuleOne is the module name and dummy is the blade file
		// you can specify ModuleOne::someFolder.file if your file exists
		// inside a folder. Also the blade will use the same syntax i.e.
		// ModuleName::viewName
		return view('Slider::index');
	}

	public function modelTest()
	{
		
	}
}
