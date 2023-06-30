<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $crud, $data;
    public function index()
    {
        return view('home.index');
    }
    public function add()
    {
        return view('home.add');
    }

    public function create(Request $request)
    {
        Crud::newCrud($request);
        return back()->with('message','Data Save successfully');
    }
    public function manage()
    {
        $this->data=Crud::all();
        return view('home.manage', ['datas'=>$this->data]);
    }
    public function edit($id)
    {
        $this->crud= Crud::find($id);

        return view('home.edit',['crud'=>$this->crud]);
    }

    public function update(Request $request ,$id)
    {
        Crud::updateCrud($request ,$id);
        return redirect('/manage')->with('message','Data update successfully');
    }
    public function delete(Request $request)
    {
        Crud::deleteData($request);
        return redirect('/manage')->with('message','Data Save successfully');
    }

}
