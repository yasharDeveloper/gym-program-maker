<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="css/write-program.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/write-program.js"></script>

</head>
<body>

    <div class="container">

        <div class="row justify-content-center title">
            <h3>write program</h3>
        </div>

        @if($errors->any())

            @foreach($errors->all() as $error)
                <h3>{{$error}}</h3>
            @endforeach

        @endif

        <div id="accordion">

            {{-- برنامه سینه --}}
                <div class="card">
                  <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                      سینه
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-parent="#accordion">

                    <form action="{{route('chestInfo')}}" method="get">

                        @csrf

                        <div class="card-body chest">

                            <div class="row fields">

                                    <div class="col form-group">
                                        <label for="usr">حرکت:</label>
                                        <input type="text" name="chestName[]" class="form-control" id="usr">
                                    </div>

                                    <div class="col form-group">
                                        <label for="usr">ست:</label>
                                        <input type="text" name="chestSet[]" class="form-control" id="usr">
                                    </div>

                                    <div class="col form-group">
                                        <label for="usr">بیشترین وزن:</label>
                                        <input type="text" name="chestMax[]" class="form-control" id="usr">
                                    </div>

                            </div>

                        </div>

                    <input type="submit" class="primary btn-primary" value="ثبت">

                    </form>

                    <a class="addItem" title="chest" href="#">افزودن حرکت</a>

                  </div>
                </div>

                {{-- برنامه جلو بازو --}}
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                      جلو بازو
                    </a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion">

                    <form action="{{route('bicepsInfo')}}" method="get">

                        <div class="card-body biceps">

                            <div class="row fields">

                                <div class="col form-group">
                                    <label for="usr">حرکت:</label>
                                    <input type="text" name="bicepsName[]" class="form-control" id="usr">
                                </div>

                                <div class="col form-group">
                                    <label for="usr">ست:</label>
                                    <input type="text" name="bicepsSet[]" class="form-control" id="usr">
                                </div>

                                <div class="col form-group">
                                    <label for="usr">بیشترین وزن:</label>
                                    <input type="text" name="bicepsMax[]" class="form-control" id="usr">
                                </div>

                            </div>


                        </div>
                        <input type="submit" class="primary btn-primary" value="ثبت">

                        </form>

                        <a class="addItem" title="biceps" href="#">افزودن حرکت</a>
                    </div>
                </div>


                {{-- پشت بازو --}}
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                      پشت بازو
                    </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">

                    <form action="{{route('tricepsInfo')}}">

                        <div class="card-body triceps">

                            <div class="row fields">

                                <div class="col form-group">
                                    <label for="usr">حرکت:</label>
                                    <input type="text" name="tricepsName[]" class="form-control" id="usr">
                                </div>

                                <div class="col form-group">
                                    <label for="usr">ست:</label>
                                    <input type="text" name="tricepsSet[]" class="form-control" id="usr">
                                </div>

                                <div class="col form-group">
                                    <label for="usr">بیشترین وزن:</label>
                                    <input type="text" name="tricepsMax[]" class="form-control" id="usr">
                                </div>

                            </div>


                        </div>

                        <input type="submit" class="primary btn-primary" value="ثبت">
                    </form>

                    <a class="addItem" title="triceps" href="#">افزودن حرکت</a>
                  </div>
                </div>


                {{-- زیربغل --}}
                <div class="card">
                        <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                            زیربغل
                          </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">

                          <form action="{{route('armpitInfo')}}">

                            <div class="card-body armpit">

                                <div class="row fields">

                                    <div class="col form-group">
                                        <label for="usr">حرکت:</label>
                                        <input type="text" name="armpitName[]" class="form-control" id="usr">
                                    </div>

                                    <div class="col form-group">
                                        <label for="usr">ست:</label>
                                        <input type="text" name="armpitSet[]" class="form-control" id="usr">
                                    </div>

                                    <div class="col form-group">
                                        <label for="usr">بیشترین وزن:</label>
                                        <input type="text" name="armpitMax[]" class="form-control" id="usr">
                                    </div>

                                </div>

                            </div>

                            <input type="submit" class="primary btn-primary" value="ثبت">
                          </form>

                          <a class="addItem" title="armpit" href="#">افزودن حرکت</a>
                        </div>
                      </div>


                      {{-- سرشانه --}}
                      <div class="card">
                            <div class="card-header">
                              <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                سرشانه
                              </a>
                            </div>
                            <div id="collapseFive" class="collapse" data-parent="#accordion">

                               <form action="{{route('shoulderInfo')}}">

                                <div class="card-body shoulder">

                                    <div class="row fields">

                                        <div class="col form-group">
                                            <label for="usr">حرکت:</label>
                                            <input type="text" name="shoulderName[]" class="form-control" id="usr">
                                        </div>

                                        <div class="col form-group">
                                            <label for="usr">ست:</label>
                                            <input type="text" name="shoulderSet[]" class="form-control" id="usr">
                                        </div>

                                        <div class="col form-group">
                                            <label for="usr">بیشترین وزن:</label>
                                            <input type="text" name="shoulderMax[]" class="form-control" id="usr">
                                        </div>

                                    </div>

                                </div>

                                <input type="submit" class="primary btn-primary" value="ثبت">
                              </form>

                              <a class="addItem" title="shoulder" href="#">افزودن حرکت</a>
                            </div>
                          </div>

                          {{-- بک و کول --}}
                          <div class="card">
                                <div class="card-header">
                                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                                    بک و کول
                                  </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordion">

                                  <form action="{{route('backInfo')}}">

                                  <div class="card-body back">

                                    <div class="row fields">

                                        <div class="col form-group">
                                            <label for="usr">حرکت:</label>
                                            <input type="text" name="backName[]" class="form-control" id="usr">
                                        </div>

                                        <div class="col form-group">
                                            <label for="usr">ست:</label>
                                            <input type="text" name="backSet[]" class="form-control" id="usr">
                                        </div>

                                        <div class="col form-group">
                                            <label for="usr">بیشترین وزن:</label>
                                            <input type="text" name="backMax[]" class="form-control" id="usr">
                                        </div>

                                    </div>

                                  </div>

                                    <input type="submit" class="primary btn-primary" value="ثبت">
                                  </form>

                                  <a class="addItem" title="back" href="#">افزودن حرکت</a>
                                </div>
                              </div>

                              {{-- پا --}}
                              <div class="card">
                                    <div class="card-header">
                                      <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
                                         پا
                                      </a>
                                    </div>
                                    <div id="collapseSeven" class="collapse" data-parent="#accordion">

                                      <form action="{{route('legInfo')}}">

                                      <div class="card-body leg">

                                        <div class="row fields">

                                            <div class="col form-group">
                                                <label for="usr">حرکت:</label>
                                                <input type="text" name="legName[]" class="form-control" id="usr">
                                            </div>

                                            <div class="col form-group">
                                                <label for="usr">ست:</label>
                                                <input type="text" name="legSet[]" class="form-control" id="usr">
                                            </div>

                                            <div class="col form-group">
                                                <label for="usr">بیشترین وزن:</label>
                                                <input type="text" name="legMax[]" class="form-control" id="usr">
                                            </div>

                                        </div>

                                      </div>

                                        <input type="submit" class="primary btn-primary" value="ثبت">
                                      </form>

                                      <a class="addItem" title="leg" href="#">افزودن حرکت</a>
                                    </div>
                                  </div>

              </div>



    </div>

</body>
</html>
