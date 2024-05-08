@extends('layouts.home')

@section('content')
    <!-- sign in section start  -->
    <section class="sign-in-section pb-120 pt-120 mt-lg-0 mt-sm-15 mt-10">
        <div class="container pt-120">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="form-area">
                        <h1 class="tcn-1 text-center cursor-scale growUp mb-10">MASUK</h1>
                        <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                            @csrf

                            <div class="form-group mb-6">
                                <div class="single-input mb-2">
                                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                                        placeholder="Masukkan surelmu" required autocomplete="email" autofocus>
                                </div>
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-6">
                                <div class="single-input mb-2">
                                    <input id="password" type="password" name="password" placeholder="Masukkan kata sandimu"
                                        required autocomplete="current-password">
                                </div>
                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="bttn py-3 px-6 rounded bgp-1">Masuk</button>
                            </div>
                        </form>
                        <p class="tcn-4 text-center mt-lg-10 mt-6">Belum punya akun? <a href="{{ route('register') }}"
                                class="text-decoration-underline tcp-1">Daftar disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign in section end  -->
@endsection
