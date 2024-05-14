<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index(){
        $employees =  Employees::get();

        return view('employe.index',compact('employees'));
    }

    public function store(Request $request){
        Employees::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'dateofbirth'=>$request->dateofbirth,
            'phone'=>$request->phone,
        ]);
        return redirect('employe');
    }

    public function edit(int $id){
        $employees = Employees::findOrFail($id);

        return view('employe.update', compact('employees'));
    }

    public function update(Request $request ,int $id){
        Employees::findOrFail($id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'dateofbirth'=>$request->dateofbirth,
            'phone'=>$request->phone,
        ]);
        return redirect('employe');
    }
}
