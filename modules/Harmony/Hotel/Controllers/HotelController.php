<?php
namespace Modules\Harmony\Hotel\Controllers;
use Modules\Harmony\Libs\Foundation\Controller;
use Illuminate\Http\Request;
use Modules\Harmony\Index\Service\IndexService;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
	public function index()
    {
        return _view('Harmony.Hotel.index');
    }


}