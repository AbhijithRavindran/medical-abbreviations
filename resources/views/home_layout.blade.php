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
body { 
	max-width: 1000px; 
	margin: 0 auto !important; 
	float: none !important; 
  background-color: #e6e6e6;
}
.nav-custom{ 
	max-width: 1000px !important; 
    margin: 0 auto; 
}
.a-z-list{
  padding: 0.0rem 0.1rem !important; 
  font-size:12px ;
}
.custom-a-z-list{
  text-align: center;
  width:14%;
}
.home-btn{
  font-size: 25px; 
  margin-left:10px;
}
</style>



</head>
<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=917005428754249&autoLogAppEvents=1"></script>
  
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row nav-custom" >
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
              <a href="\" class="home-btn"><i class="mdi mdi-home"></a></i>
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
                          <th class="a-z-list custom-a-z-list">Search by words:</th>
                          @foreach(range('A', 'Z') as $char)
                            <th class="a-z-list"><a href="/starting_by/{{$char}}">{{$char}}</a></th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3 ">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">300 x 600</h4>
                  {{-- <p class="card-description">Add class <code>.list-star</code> to <code>&lt;ul&gt;</code></p> --}}
                  <ul class="list-star">
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                  </ul>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">300 x 250</h4>
                  {{-- <p class="card-description">Add class <code>.list-star</code> to <code>&lt;ul&gt;</code></p> --}}
                  <ul class="list-star">
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                    <li>DEMO</li>
                  </ul>
                </div>
              </div>
            </div>
                @yield('content')
          </div>
          <div class="row">
          
            <div class="col-md-12 offset-lg-3  ">
            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width=""></div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer footer-custom-main">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a href="/" target="_blank">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" target="_blank">About</a></span>
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

