@extends('user_layouts.master')

@section('title', 'Home')

@section('content')
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Primary Slider ======-->
        @include('user_layouts.slider')
        <!--====== End - Primary Slider ======-->


        <!--====== Section 1 ======-->
        @include('user_layouts.shop_by_deal')
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        @include('user_layouts.top_trending')
        <!--====== End - Section 2 ======-->


        <!--====== Section 3 ======-->
        @include('user_layouts.deal_of_day')
        <!--====== End - Section 3 ======-->


        <!--====== Section 4 ======-->
        @include('user_layouts.new_arrival')
        <!--====== End - Section 4 ======-->


        <!--====== Section 5 ======-->
        @include('user_layouts.banner')
        <!--====== End - Section 5 ======-->


        <!--====== Section 6 ======-->
        @include('user_layouts.feature')
        <!--====== End - Section 6 ======-->


        <!--====== Section 7 ======-->
        @include('user_layouts.promotion')
        <!--====== End - Section 7 ======-->


        <!--====== Section 8 ======-->

        <!--====== End - Section 8 ======-->


        <!--====== Section 9 ======-->
        @include('user_layouts.shipping')
        <!--====== End - Section 9 ======-->


        <!--====== Section 10 ======-->
        @include('user_layouts.best_seller')
        <!--====== End - Section Content ======-->
        <!--====== End - Section 10 ======-->


        <!--====== Section 11 ======-->
        @include('user_layouts.client_feedback')
        <!--====== End - Section 11 ======-->


        <!--====== Section 12 ======-->
        @include('user_layouts.brand')
        <!--====== End - Section 12 ======-->
    </div>
    <!--====== End - App Content ======-->


@endsection
