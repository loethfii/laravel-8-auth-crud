@extends('layouts.app')

@section('content')

{{-- <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div> --}}

<!-- container section start -->
<section id="container" class="">
     
      
    <header class="header dark-bg">
          <div class="toggle-nav">
              <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
          </div>

          <!--logo start-->
          <a href="{{ url('admin') }}" class="logo">Nice <span class="lite">Admin</span></a>
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
                    <a class="" href="{{ url('admin') }}">
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
                  <h3 class="page-header text-secondary"><i class="fa fa-laptop"></i> Hai, {{ $user->name }} anda login sebagai {{ $user->role }}</h3> 
              </div>
          </div>
          <hr>
         {{-- here --}}
         <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                       
                        <div class="card-body">
                            
                            <a type="button" href="{{ url('admin/create') }}" class="btn btn-primary btn-lg btn-block"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data Mahasiswa</a>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                               
                                <table class="table table-striped table-advance table-hover">
                                    <tbody>
                                       <tr>
                                          <th> NO </th>
                                          <th> NIM</th>
                                          <th> Nama Lengkap</th>
                                          <th> Prodi</th>
                                          <th> Angkatan</th>
                                          <th> Action</th>
                                       </tr>
                                       
                                       @foreach ($mahasiswas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->nama_lengkap }}</td>
                                            <td>{{ $item->prodi }}</td>
                                            <td>{{ $item->angkatan }}</td>
                                            <td>
                                                <a href="{{ url('admin/' . $item->id) }}" title="Lihat Detail"><button style="padding: 15px" class="btn btn-primary btn-md"><i class="fa fa-eye" aria-hidden="true"></i> Lihat Detail</button></a>
                                                <a href="{{ url('admin/' . $item->id . '/edit') }}" title="Edit Student"><button style="padding: 15px" class="btn btn-success btn-md"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <form method="POST" action="{{ url('/admin' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" style="padding: 15px" class="btn btn-danger btn-md" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                                {{-- <a href="invoice-print.html" target="_blank" class="btn btn-info" style="padding: 15px"><i class="fa fa-print"></i> Print</a> --}}
                                                <a href="{{ url('admin/' . $item->id .'/print' ) }}" target="_blank" title="Lihat Detail"><button style="padding: 15px" class="btn btn-warning btn-md"><i class="fa fa-eye" aria-hidden="true"></i> Print</button></a>
                                            </td>
                                        </tr>
                                       @endforeach
                                      
                                                                  
                                    </tbody>
                                 </table>


                            </div>
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
























{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard {{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Selamat datang {{ $user->name }}!</strong> Anda telah melakukan login sebagai {{ $user->role }}</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
