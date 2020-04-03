@extends('layouts/gym-layout')

@section('title', "write-program")
@section('content-style', 'css/write-program.less')
@section('js-script', 'js/write-program.js')

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    @parent
    {{-- show errors --}}
    @if($errors->any())
        @foreach($errors->all() as $error)
            <h3>{{$error}}</h3>
        @endforeach
    @endif

    <div class="d-flex flex-column write-program-wrapper">

        <div class="d-flex title-wrapper">

            <h2 class="title">سینه</h2>
            <a exer="chest" href="#">افزودن</a>
            <a toggle href="#">نمایش</a>

        </div>

        <form action="" class="needs-validation">
            @csrf
            <div class="d-flex field-wrapper">

                <div class="form-group">
                    <label for="uname">حرکت</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="uname">ست ها</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group ml-auto">
                    <label for="uname">بیشترین وزن</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

            </div>

        </form>

        <div class="d-flex title-wrapper">

            <h2 class="title">جلو بازو</h2>
            <a exer="chest" href="#">افزودن</a>
            <a toggle href="#">نمایش</a>

        </div>

        <form action="" class="needs-validation">
            @csrf
            <div class="d-flex field-wrapper">

                <div class="form-group">
                    <label for="uname">حرکت</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="uname">ست ها</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group ml-auto">
                    <label for="uname">بیشترین وزن</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

            </div>

        </form>

        <div class="d-flex title-wrapper">

            <h2 class="title">پشت بازو</h2>
            <a exer="chest" href="#">افزودن</a>
            <a toggle href="#">نمایش</a>

        </div>

        <form action="" class="needs-validation">
            @csrf
            <div class="d-flex field-wrapper">

                <div class="form-group">
                    <label for="uname">حرکت</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="uname">ست ها</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group ml-auto">
                    <label for="uname">بیشترین وزن</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

            </div>

        </form>


    </div>


@endsection









</body>
</html>
