<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Medical Abbreviations</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.png" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style>

.footer-custom-main{
  background-color: #000000d1;
}


</style>



</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
      <div class="navbar-brand-wrapper d-flex justify-content-center" >
        <br>
        <div style="padding-top: 10px;">
        <h4>Logo</h4>
        </div>

      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" >
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search w-100">
              <form action="/search" method="POST">
                @csrf
                <div class="input-group">
                  <input type="text" id="tags" class="form-control" placeholder="Search abbreviations here.." aria-label="Recipient's username">
                  <div class="input-group-append" style="position:relative;left:20px;">
                    <button class="btn btn-sm btn-primary" type="submit">Search</button>
                  </div>
                </div>
                </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile ">
              <a href="\" style="font-size: 40px;"><i class="mdi mdi-home"></a></i>
            </li>
        </ul>
        {{-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button> --}}
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
      <div class="main-panel" style="width: 100% !important;">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          @foreach(range('A', 'Z') as $char)
                            <th style="padding: 0.0rem 0.9375rem !important;"><a href="/starting_by/{{$char}}">{{$char}}</a></th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
            </div>

          </div>
                @yield('content')

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer footer-custom-main">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="/vendors/chart.js/Chart.min.js"></script>
  <script src="/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/js/dashboard.js"></script>
  <script src="/js/data-table.js"></script>
  <script src="/js/jquery.dataTables.js"></script>
  <script src="/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>




    // let availableTags = [];

    // $(document).ready(()=>{
    //     $( "#tags" ).keyup();


    //     // $('#tags').on('change',function(){
    //     //     console.log($(this).val())
    //     // })
    // })

 $( function() {
    
    $( "#tags" ).autocomplete({
      source: function(request, response) { 
            $.ajax({
                method:'GET',
                url: `/live_search/${request.term}`,
                success: function(data, status){
                    data = JSON.parse(data).map(d => d.abbreviation)
                    response(data);
                }
            })
        }
    });


  } );
</script>



</body>

</html>

