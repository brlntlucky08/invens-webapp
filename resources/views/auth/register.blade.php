@extends('dashboard.authBase')

@section('content')

    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="card-group">
            <div class="card p-4"  style="background-image: url('/assets/bg.jpeg');  background-repeat: no-repeat;
            background-size: 100% 100%;">
              <div class="card-body py-5">
                  <div class="d-flex">
                    <div style="width : 40%;">

                    </div>
                    <div class="content" style="width: 60%">
                        <h1 class="text-center">Register</h1>
                        <div class="py-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <div style="height: 50px" class="input-group mb-4 mr-4">
                                        <input class="form-control" style="height: 100%" type="text" placeholder="{{ __('First Name') }}" name="email" value="{{ old('email') }}" required autofocus>
                                        </div>

                                        <div style="height: 50px"  style="width: 45%" class="input-group mb-4">
                                            <input class="form-control" style="height: 100%" type="text" placeholder="{{ __('Last Name') }}" name="email" value="{{ old('email') }}" required autofocus>
                                            </div>
                                </div>
                                <div style="height: 50px" class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <svg class="c-icon">
                                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                    </svg>
                                  </span>
                                </div>
                                <input class="form-control" style="height: 100%" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>
                                </div>

                                <div style="height: 50px" class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <svg class="c-icon">
                                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                                    </svg>
                                  </span>
                                </div>
                                <input
                                class="form-control"  style="height: 100%" type="password" placeholder="{{ __('Password') }}" name="password" required>
                                </div>

                                <div style="height: 50px" class="input-group mb-4">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <svg class="c-icon">
                                          <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-phone"></use>
                                        </svg>
                                      </span>
                                    </div>
                                    <input class="form-control" style="height: 100%" type="text" placeholder="{{ __('No Telepon') }}" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>

                                <div class="row">
                                <div class="col-5">
                                    <button class="btn btn-light px-4 border border-light" type="submit">{{ __('Register') }}</button>
                                </div>
                                </form>
                                <div class="col-6 text-right text-info">
                                    <a href="{{ route('password.request') }}" class="btn btn-link px-0 text-light">{{ __('Sign In') }}</a>
                                </div>
                        </div>
                    </div>
                  </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('javascript')

@endsection
