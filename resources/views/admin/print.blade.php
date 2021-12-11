<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body onload="window.print();">
    {{-- <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card" style="width: 40rem;">
            <div class="card-header text-center">Data mahasiswa</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">ANjAI:</div>
                    <div class="col-md-6">TAPI</div>
                </div>
              
                  <p class="card-text">NIM : {{ $data->nim }}</p>
                  <p class="card-text">Nama : {{ $data->nama_lengkap }}</p>
                  <p class="card-text">Prodi : {{ $data->prodi }}</p>
                  <p class="card-text">Angkatan : {{ $data->angkatan }}</p>
      
          
            </div>
        </div>
        <div class="col-md-4"></div>
      </div> --}}
<div class="container">
    <h2 class="text-center">Data Mahasiswa</h2>
    <table class="table table-default table-striped">
        <thead>
            <tr class="text-center">
                <th scope="col" colspan="1"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td colspan="1">NIM </td>
              <td>{{ $data->nim }}</td>
            </tr>
            <tr>
                <td colspan="1">Nama </td>
                <td> {{ $data->nama_lengkap }}</td>
            </tr>
            <tr>
                <td colspan="1">Prodi </td>
                <td>{{ $data->prodi }}</td>
            </tr>
            <tr>
                <td colspan="1">Angkatan </td>
                <td>{{ $data->angkatan }}</td>
            </tr>
            
          </tbody>
    </table>
</div>
      
</body>



















{{-- @extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <div class="card" style="width: 40rem;">
      <div class="card-header text-center">Data mahasiswa</div>
      <div class="card-body">
        
            <p class="card-text">NIM : {{ $data->nim }}</p>
            <p class="card-text">Nama : {{ $data->nama_lengkap }}</p>
            <p class="card-text">Prodi : {{ $data->prodi }}</p>
            <p class="card-text">Angkatan : {{ $data->angkatan }}</p>

            <center><a href="{{ url('admin') }}"><div class="btn btn-primary" style="padding: 15px">Kembali</div></a></center>
    
      </div>
  </div>
  <div class="col-md-4"></div>
</div>


      
    </hr>
  
  </div>
</div>
    
@endsection --}}