<?php

namespace <%= project.namespace %>\App\Controllers;

use <%= project.namespace %>\Core\View;
use <%= project.namespace %>\Core\Controller;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class HomeController extends Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function index($request, $response, $service)
    {
        View::renderTemplate('Home/index.html', [
            'name'    => $request->name
        ]);
    }
}
