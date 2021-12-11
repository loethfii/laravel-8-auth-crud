@extends('layouts.app')

@section('content')

<body >
    <style>
         body {
        background-image: url("http://localhost/Remdial-web-lanjut/public/backend/img/bg-1.jpg");
        -moz-background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
       }

       .vertical center{
            min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
       }

       .bg-biru{
        background:rgba(221, 216, 219, 0.8);
            border-radius: 15px;
       }

       .oval{
            border-radius: 15px 30px;
       }
    </style>
   
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-4"></div>
            <div class="col-lg-4 bg-biru">
                <div class="card-header text-center " style="color: blue !important;"><h1>{{ __('REGISTER') }}</h1></div> <br>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                        
                        <div class="col-md-12">
                            <input id="name" type="text" class="oval form-control input-lg m-bot15 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama" required autocomplete="name" autofocus>

                            {{-- <input id="name" type="text" class="form-control input-lg m-bot15 @error('name') is-invalid @enderror"  placeholder="Nama" value="{{ old('Nama') }}" required autocomplete="name" autofocus> --}}
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        
                        <div class="col-md-12">
                            <input id="email" type="email" class="oval form-control input-lg m-bot15 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                            {{-- <input id="email" type="email" class="form-control input-lg m-bot15 @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email"> --}}
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    

                    <div class="form-group row">
                       
                        <div class="col-md-12">
                            <input id="password" type="password" class="oval form-control input-lg m-bot15 @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                            {{-- <input id="password" type="password" class="form-control input-lg m-bot15 @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="new-password"> --}}
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="oval form-control input-lg m-bot15" name="password_confirmation" placeholder="Konfirmasi Email" required autocomplete="new-password">
                            {{-- <input id="password-confirm" type="password" class="form-control input-lg m-bot15" placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password"> --}}
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-4">
                            <button type="submit" class="btn oval btn-primary btn-lg btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-4">
                            <a href="{{ url('login') }}"  class="btn oval btn-info btn-lg btn-block">
                                Login
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>



    {{-- misag --}}
    

</body>





{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                
            </div>
        </div>
    </div>
</div> --}}

@endsection

{{-- <div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div> --}}