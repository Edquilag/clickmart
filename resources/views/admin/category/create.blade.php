@extends('admin.layouts.layout')
@section('admin_page_title')
Create Category - Admin Panel
@endsection
@section('admin_layout')
<h3>Create Category Page</h3>
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Create Category</h5>
                </div>
                <div class="card-body">
				 <form action="{{ route ('store.cat') }}" method="POST">

                    @csrf
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control mb-3" name="category_name" placeholder="Enter Category Name"> 

                    <button type="submit" class="btn btn-primary">Create Category</button> 
                  </form>
            </div>
        </div>
    </div>
</div>
	

@endsection