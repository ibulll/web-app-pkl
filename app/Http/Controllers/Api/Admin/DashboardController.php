<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        echo "hallo selamat datang";
        echo "<a href='logout'>Logout</a>";
    }
}
