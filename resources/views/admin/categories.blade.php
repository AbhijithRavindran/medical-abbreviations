@extends('admin.admin_layout')
@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="d-flex justify-content-between flex-wrap">
      <div class="d-flex align-items-end flex-wrap">
        <div class="mr-md-3 mr-xl-5">
          <h2>Categories</h2>
          <p class="mb-md-0">You can add main-categories here.</p>
        </div>
      </div>
      {{-- <div class="d-flex justify-content-between align-items-end flex-wrap">
        <button class="btn btn-primary mt-2 mt-xl-0">Create Main Category</button>
      </div> --}}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add new Main-category</h4>
        <p class="card-description">
          Add a new main category here.
        </p>
        <form action="/admin/categories/create" method="POST"  class="forms-sample">
          @csrf
        <div class="form-group">
          <div class="input-group">
              <input type="text" name="name" class="form-control" placeholder="Main - category name" aria-label="">
              <div class="input-group-append">
                <button class="btn btn-sm btn-success" type="submit">Add</button>
              </div>
            
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<br>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Main Categories List</p>
        <div class="table-responsive">
          <table id="recent-purchases-listing" class="table">
            <thead>
              <tr>
                  <th>Name</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $main_category)
                <tr>
                    <td>{{$main_category->name}}</td>
                    <td>
                      <a href="/admin/sub_categories/{{$main_category->id}}" class="btn btn-primary btn-rounded btn-fw">Show Sub-categories</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {!! $categories->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection