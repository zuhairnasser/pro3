<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Client;
use App\Models\Manufacture;
use App\Models\Repository;
use App\Models\Section;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    }
}
