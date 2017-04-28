<?php
namespace Modules\Harmony\Plane\Controllers;
use Modules\Harmony\Libs\Foundation\Controller;
use Illuminate\Http\Request;
use Modules\Harmony\Index\Service\IndexService;
use Illuminate\Support\Facades\Validator;

class PlaneController extends Controller
{
	public function index()
    {
        return _view('Harmony.Plane.index');
    }
}