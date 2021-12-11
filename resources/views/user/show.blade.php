@extends('layouts.app')
@section('content')


<section id="container" class="">
     
      
  <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="{{ url('user') }}" class="logo">Nice <span class="lite">Admin</span></a>
        <!--logo end-->
        <div class="top-nav notification-row">                
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu"> 
                <!-- alert notification end-->
                <!-- user login dropdown start-->

                @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif
                      
                      @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif

                      @else
                      
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="profile-ava">
                                  <img alt="" src="{{ asset('backend/img/avatar1_small.jpg') }}">
                              </span>
                              <span class="username">{{ Auth::user()->name }}</span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                                  
                              <li>
                                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    
                                    <i class="icon_key_alt"></i> 
                                    {{ __('Logout') }}
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </li>
                              
                          </ul>
                      </li>







                          {{-- <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li> --}}
                      

                @endguest
               
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
  </header>      
  <!--header end-->

  <!--sidebar start-->
  <aside>
      <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">                
              <li class="active">
                  <a class="" href="{{ url('user') }}">
                      <i class="icon_house_alt"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              
              
          </ul>
          <!-- sidebar menu end-->
      </div>
  </aside>
  <!--sidebar end-->
  
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">            
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header text-secondary"><i class="fa fa-laptop"></i> Hai {{ Auth::user()->name }}, anda login sebagai {{ Auth::user()->role }} </h3> 
            </div>
        </div>
        <hr>
       {{-- here --}}
       <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-md-9">
                
                  <div class="card">
                      
                      <div class="card-body">
                        <table class="table">
                          <thead>
                            <tr>
                              
                             
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="active">
                              
                              <td>NIM</td>
                              <td>{{ $data->nim }}</td>
                            </tr>                              
                            <tr class="success">
                              <td>Nama</td>
                              <td>{{ $data->nama_lengkap }}</td>
                              
                              
                            </tr>                              
                            <tr class="warning">
                              <td>Prodi</td>
                              <td>{{ $data->prodi }}</td>
                              
                              
                            </tr>                              
                            <tr class="danger">
                              <td>Angkatan</td>
                              <td>{{ $data->angkatan }}</td>
                            </tr>

                           
                          </tbody>
                          
                        </table>
                        <center><a href="{{ url('user') }}"><div class="btn btn-primary" style="padding: 15px">Kembali</div></a></center>
                
            
                        
                      
                      </div>
                    </div>
      
              </div>
          </div>
      </div>
       {{-- here end --}}
    
          <!-- project team & activity end -->

      </section>
  </section>
  <!--main content end-->
</section>
<!-- container section start -->

{{-- {{ asset('backend/') }} --}}

<!-- javascripts -->
<script src="{{ asset('backend/js/jquery.js') }}"></script>
<script src="{{ asset('backend/js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{ asset('backend/assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ asset('backend/js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('backend/js/owl.carousel.js') }}" ></script>
<!-- jQuery full calendar -->
<<script src="{{ asset('backend/js/fullcalendar.min.js') }}"></script> <!-- Full Google Calendar - Calendar -->
<script src="{{ asset('backend/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ asset('backend/js/calendar-custom.js') }}"></script>
<script src="{{ asset('backend/js/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ asset('backend/js/jquery.customSelect.min.js') }}" ></script>
<script src="{{ asset('backend/assets/chart-master/Chart.js') }}"></script>

<!--custome script for all page-->
<script src="{{ asset('backend/js/scripts.js') }}"></script>
<!-- custom script for this page-->
<script src="{{ asset('backend/js/sparkline-chart.js') }}"></script>
<script src="{{ asset('backend/js/easy-pie-chart.js') }}"></script>
<script src="{{ asset('backend/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('backend/js/xcharts.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('backend/js/gdp-data.js') }}"></script>	
<script src="{{ asset('backend/js/morris.min.js') }}"></script>
<script src="{{ asset('backend/js/sparklines.js') }}"></script>	
<script src="{{ asset('backend/js/charts.js') }}"></script>
<script src="{{ asset('backend/js/jquery.slimscroll.min.js') }}"></script>
<script>

  //knob
  $(function() {
    $(".knob").knob({
      'draw' : function () { 
        $(this.i).val(this.cv + '%')
      }
    })
  });

  //carousel
  $(document).ready(function() {
      $("#owl-slider").owlCarousel({
          navigation : true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true

      });
  });

  //custom select box

  $(function(){
      $('select.styled').customSelect();
  });
  
  /* ---------- Map ---------- */
$(function(){
  $('#map').vectorMap({
    map: 'world_mill_en',
    series: {
      regions: [{
        values: gdpData,
        scale: ['#000', '#000'],
        normalizeFunction: 'polynomial'
      }]
    },
    backgroundColor: '#eef3f7',
    onLabelShow: function(e, el, code){
      el.html(el.html()+' (GDP - '+gdpData[code]+')');
    }
  });
});



</script>


{{-- <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <div class="card" style="width: 40rem;">
      <div class="card-header text-center">Detail Mahasiswa</div>
      <div class="card-body">
        
            <p class="card-text">NIM : {{ $data->nim }}</p>
            <p class="card-text">Nama : {{ $data->nama_lengkap }}</p>
            <p class="card-text">Prodi : {{ $data->prodi }}</p>
            <p class="card-text">Angkatan : {{ $data->angkatan }}</p>

            <center><a href="{{ url('user') }}"><div class="btn btn-primary" style="padding: 15px">Kembali</div></a></center>
    
      </div>
  </div>
  <div class="col-md-4"></div>
</div> --}}


      
    </hr>
  
  </div>
</div>
    
@endsection