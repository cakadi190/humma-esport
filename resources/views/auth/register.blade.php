@extends('layouts.home')

@section('content')
<section class="sign-up-section pb-120 pt-120 mt-lg-0 mt-sm-15 mt-10">
    <div class="container pt-120">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-area">
                    <h1 class="tcn-1 text-center cursor-scale growUp mb-10">MENDAFTAR</h1>
                    <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                        @csrf
                        <div class="form-group mb-6">
                            <div class="single-input mb-2">
                                <input id="fullname" type="text" class="@error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" placeholder="Masukkan nama lengkapmu" required autocomplete="fullname" autofocus>
                            </div>
                            @error('fullname')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-6">
                            <div class="single-input mb-2">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan surat elektronik kamu yang aktif" required autocomplete="email">
                            </div>
                            @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-6">
                            <div class="single-input mb-2">
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Masukkan kata sandimu" required autocomplete="new-password">
                            </div>
                            @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-6">
                            <div class="single-input mb-2">
                                <input id="password-confirm" type="password" class="" name="password_confirmation" placeholder="Konfirmasi kata sandimu" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="text-center d-flex justify-content-center gap-3">
                            <a href="{{ route('login') }}" class="bttn py-3 px-6 rounded bgp-1">Masuk</a>
                            <button type="submit" class="bttn py-3 px-6 rounded bgp-1">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
