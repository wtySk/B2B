<?php
namespace Modules\Harmony\Visa\Controllers;
use Modules\Harmony\Libs\Foundation\Controller;
use Illuminate\Http\Request;
use Modules\Harmony\Index\Service\IndexService;
use Illuminate\Support\Facades\Validator;

class VisaController extends Controller
{
	public function index()
    {
        return _view('Harmony.Visa.index');
    }

}