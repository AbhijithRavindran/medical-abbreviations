@extends('admin.admin_layout')
@section('content')


<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="d-flex justify-content-between flex-wrap">
      <div class="d-flex align-items-end flex-wrap">
        <div class="mr-md-3 mr-xl-5">
          <h2>Abbreviations</h2>
          <p class="mb-md-0">You can add , edit and delete abbreviations here.</p>
        </div>
        {{-- <div class="d-flex">
          <i class="mdi mdi-home text-muted hover-cursor"></i>
          <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
          <p class="text-primary mb-0 hover-cursor">Analytics</p>
        </div> --}}
      </div>
      <div class="d-flex justify-content-between align-items-end flex-wrap">
        {{-- <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
          <i class="mdi mdi-download text-muted"></i>
        </button>
        <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
          <i class="mdi mdi-clock-outline text-muted"></i>
        </button>
        <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
          <i class="mdi mdi-plus text-muted"></i>
        </button> --}}
        <a href="/admin/abbreviation/new" class="btn btn-primary mt-2 mt-xl-0">Create Abbreviation</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Abbreviation List</p>
        <div class="table-responsive">
          <table id="recent-purchases-listing" class="table">
            <thead>
              <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($abbreviations as $abbreviation)
              <tr>
                  <td>{{ $abbreviation->abbreviation }}</td>
                  <td>{{ $abbreviation->description }}</td>
                  <td>
                      <a href="/admin/view_abbreviation/{{$abbreviation->id}}" class="btn btn-primary btn-rounded btn-fw">Show</a>

                  </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
          {!! $abbreviations->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>


@endsection