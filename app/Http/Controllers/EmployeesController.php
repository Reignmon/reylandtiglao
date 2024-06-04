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

    public function showBSIT(){
        $employees =  Employees::get();

        return view('employe.bsit3a',compact('employees'));
    }

    public function dashboard(){
        return view('employe.dashboard');
    }

    public function add(){
        return view('employe.add');
    }

    public function store(Request $request){
        $request->validate(
            [
                'firstname'=>'required|regex:/^[a-zA-Z]+$/u|max:255',
                'lastname'=>'required|regex:/^[a-zA-Z]+$/u|max:255',
                'dateofbirth'=>'required|date|before:today',
                'phone'=>'required|regex:/^[0-9\-]+$/|max:11',
            ]
        );

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

    public function destroy(int $id){
        $employees = Employees::findOrFail($id);
        $employees->delete();
        return redirect('employe');
    }


}
