<?php
/**
 * Created by PhpStorm.
 * User: varik
 * Date: 04.07.2018
 * Time: 23:06
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\View;

class UserController extends BaseController
{
    public function index($id = null)
    {
        return View('index', compact('id'));
    }
}