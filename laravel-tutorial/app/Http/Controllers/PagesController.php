<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class PagesController extends Controller {

        public function index()
        {
            return view('Pages.index', [ 'names' => [
                "Philip Windridge",
                "Robin Oldham",
                "Fiona Knight",
                "Jan Lawton",
                "Graham Mansfield"
            ]]);
        }
        public function __construct()
        {
            if (! session()->exists('names')) {
                session(['names' => [
                    "Philip Windridge",
                    "Robin Oldham",
                    "Fiona Knight",
                    "Jan Lawton",
                    "Graham Mansfield"
                ]]);
            }
        }
        public function addName(){
            return view('Pages.add-name');
        }
        public function store(Request $request)
        {
            $names = session()->get('names');

            array_push($names, $request->input('name'));

            session(['names' => $names]);

            return redirect('/Pages');
        }
    }
