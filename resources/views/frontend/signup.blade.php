@extends('user_layouts.master')

@section('title', 'Contact Us')

@section('content')

  <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="is-marked">
                                        <a href="{{ url('/signup') }}">Signup</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">
                                    <div class="l-f-o__pad-box">
                                        <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                        <form class="l-f-o__form" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="reg-fname">Username *</label>
                                                <input class="input-text input-text--primary-style" name="name" type="text" id="reg-fname" placeholder="Full Name">
                                                @error('name')
                                                <span style="color: red;">*{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="reg-email">E-MAIL *</label>
                                                <input class="input-text input-text--primary-style" type="email" name="email" id="reg-email" placeholder="Enter E-mail">
                                                @error('email')
                                                <span style="color: red;">*{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="reg-password">PASSWORD *</label>
                                                <input class="input-text input-text--primary-style" type="password" name="password" id="reg-password" placeholder="Enter Password">
                                                @error('password')
                                                <span style="color: red;">*{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="reg-password">CONFIRM PASSWORD *</label>
                                                <input class="input-text input-text--primary-style" type="password" name="password_confirmation" placeholder="Enter Confirm Password">
                                                @error('password_confirmation')
                                                <span style="color: red;">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="u-s-m-b-15">
                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">CREATE</button>
                                            </div>
                                            <a class="gl-link" href="{{ url('/') }}">Return to Store</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->

@endsection
