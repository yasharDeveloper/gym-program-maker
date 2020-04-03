@extends('layouts/gym-layout')


@section('title', 'body information')
@section('content-style', 'css/body-info.css')
@section('js-script', 'js/body-info.js')

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection


@section('content')
    @parent
    {{-- <div class="container"> --}}
        <div class="row justify-content-center">

            <div class="col-6 info-wrapper">

                <div class="row justify-content-center info-wrapper-header">
                    <h3 >اطلاعات</h3>
                </div>

                <div class="row">
                    <h3 class="col-2">وزن</h3>
                    <h3 class="col-2">70</h3>
                </div>

                <hr>

                <div class="row">
                    <h3 class="col-2">وزن</h3>
                    <h3 class="col-2">70</h3>
                </div>

            </div>
        </div>
        </div>
    </div>
    {{-- </div> --}}

@endsection
