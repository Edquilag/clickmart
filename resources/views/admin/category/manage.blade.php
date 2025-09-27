@extends('admin.layouts.layout')
@section('admin_page_title')
Manage Category - Admin Panel
@endsection
@section('admin_layout')
<h3>Create Category Page</h3>
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">All Category</h5>
                </div>
                <div class="card-body">	
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->category_name}}</td>
                                    <td>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table> 

            </div>
        </div>
    </div>
</div>
	

@endsection