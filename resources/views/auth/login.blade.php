@extends('layouts.app')

@php
    $title_page= "Se connecter";
@endphp

@section('content')
    <div class="col-sm-8 col-lg-4">
        <div class="row justify-content-center mb-3">
            <a class="navbar-brand">
            </a>
        </div>
        <div class="card shadow z-index-100 mb-0">
            <div class="card-body px-md-5 py-5">
                <div class="mb-5">
                    <h6 class="h3">{{__('Login to your account')}}</h6>
{{--                    <p class="text-muted mb-0">{{__("Don't have an account? Create your account, it takes less than a minute.")}}</p>--}}
                </div>
                <span class="clearfix"></span>
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-text">{{ session('error') }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-text">{{ session('success') }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
                <form method="POST" action="{{route('login')}}" role="form">
                    @csrf


                    <div class="form-group required">
                        <label class="form-control-label">{{__('Email')}}</label>
                        <div class="input-group input-group-merge input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                            </div>
                            <input id="email" type="email" placeholder="{{ __('E-Mail') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="form-control-label">{{__('Password')}}</label>
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password"  type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-12">
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                <label class="custom-control-label" for="customCheckRegister">
                                    <span class="text-muted"> {{ _('Ich stimme den AGB zu') }} {{--<a href="#!">{{ _('Privacy Policy') }}</a>--}}</span>
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="mt-4">
                        <button id="btn_register_firma" type="submit" class="btn btn-sm btn-primary btn-icon btn-register">{{ __('login') }}</button>
                    </div>
                </form>
            </div>
            <div class="card-footer px-md-5"><small style="font-size: 17px !important;">{{__('Sie haben bereits ein Konto?')}}</small>
                <a href="{{ route('register') }}" class="small font-weight-bold" style="font-size: 17px !important;">{{__('Register')}}</a>
            </div>
        </div>
    </div>
{{--@endsection--}}

{{--@endsection--}}
