@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->

    <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">BSIT3A EXAMINER</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    
        <div class="container-fluiid">
            <div class="row justify-content-center">
                <div class="col-md-9 mt-4">
                 <a class="btn btn-danger btn-sm" href="{{url('employe/add') }}">
                     <i class="fas fa-plus">
                     </i>
                     Add
                 </a>
                     <table class="table text-center">
                                <thead class="bg-gray">
                                    <tr>
                                        <th scope="col" >ID</th>
                                        <th scope="col" >Name</th>
                                        <th scope="col" >Email</th>
                                        <th scope="col" >Admin</th>
                                        <th scope="col" >Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-dark">
                                   
                                    
                                </tbody>
                    </table>
                    
                </div>
            </div>
        </div>


        
@endsection