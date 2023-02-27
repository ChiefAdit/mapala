<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mapala Admin</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="shortcut icon" href="../../assets/images/Logo_ag-removebg-preview.png" />
    @livewireStyles
</head>

<body>
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
                  <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../../assets/images/Logo_ag-removebg-preview.png"
                        alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="../../index.html"><img
                        src="../../assets/images/Logo_ag-removebg-preview.png" alt="logo" /></a>
                

            </div>
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">

                        <div class="nav-profile-text d-flex flex-column pr-3">

                            <span class="font-weight-medium mb-2">{{ Auth::user()->name }}</span>

                        </div>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        <span class="menu-title">Log Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                    </form>
                </li>
                <li class="nav-item">
                    @auth
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        <span class="menu-title">Resgister</span>
                    </a>
                    <form id="logout-form" action="{{ route('register') }}" method="POST" class="">
                        @csrf
                    </form>
                    @else
                    <a href="{{ route('login') }}">Login</a>
                    @endauth
                </li>
                    

            </ul>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles light"></div>
                    <div class="tiles dark"></div>
                </div>
            </div>
            <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                    <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="../../index.html"><img
                            src="../../assets/images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button"
                        data-toggle="minimize">
                        <i class="mdi mdi-menu"></i>
                    </button>


                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            @extends('layouts.app')

            @section('content')
            <div class="main-panel">
                <div class="content-wrapper">




                  <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form  class="form-sample" action="{{ route('login') }}">
                                <p class="card-description">Form Resgister</p>
                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            
                                            <label for="email" class="col-sm-3 col-form-label">{{ __('Email Address') }}</label>
                                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                          <label for="password" class="col-sm-3 col-form-label">{{ __('Password') }}</label>
                                            <div class="col-sm-9">
                                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                                              @error('password')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Tanggal Kembali</label>
                                            <div class="col-sm-9">
                                                <input type="date" wire:model="tanggal_kembali" data-date-format="YYYY-MMM-DD"
                                                    class="form-control" placeholder="dd/mm/yyyy" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                          <input class="form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                          <label class="col-sm-3 col-form-label" for="remember">
                                              {{ __('Remember Me') }}
                                          </label>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                  {{ __('Login') }}
                              </button>

                              @if (Route::has('password.request'))
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('Forgot Your Password?') }}
                                  </a>
                              @endif
                            </form>
                        </div>
                
                
                
                    </div>
                </div>
                


                
                
              </div>
              
              <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Chief
                    Adit</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a
                      href="https://github.com/ChiefAdit" target="_blank">Github @ChiefAdit</a></span>
                    </div>
                  </footer>
                </div>
                @endsection
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    @livewireScripts
</body>

</html>
