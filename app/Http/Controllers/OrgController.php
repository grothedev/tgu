<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Org;
use Auth;

class OrgController extends Controller
{

	public function create(){
        $auth = Auth::check();
		return view('orgs.create');
	}

    public function edit(){}

    public function index(){
    	$orgs = Org::all();
    	return view('orgs.index', compact('orgs'));
    }

    public function store(Request $input){
    	//$input = Request::all();

        $this->validate($input, [
            'name' => 'required|max:255|unique',
            'url' => 'max:255',
            'email' => 'required|max:255',
            'description' => 'required|max:4095',
            'pillars' => 'max:2083'
        ]);

    	Org::create($input);

    	return 'Thank you for adding your organization to the list.<br>' . redirect('orgs');
    }
}
