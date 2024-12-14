<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Person;

class MainController extends Controller
{
    /**
     * Displays the main page.
     *
     * @return View
     */
    public function index(): View
    {
        // Return the main page view
        return view('main.index');
    }

    public function about(): View
    {
        // Return the main page view
        return view('main.about');
    }

    public function hello(string $name='Laurent'): View
    {
        $name = Str::upper($name);
        return view('main.hello', compact('name'));
    }
}
