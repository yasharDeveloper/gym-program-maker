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

        <div id="accordion">

            {{-- برنامه سینه --}}
                <div class="card">
                  <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                      سینه
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body chest">

                        <div class="row fields">

                                <div class="col form-group">
                                    <label for="usr">حرکت:</label>
                                    <input type="text" name="chestName1" class="form-control" id="usr">
                                </div>

                                <div class="col form-group">
                                    <label for="usr">ست:</label>
                                    <input type="text" name="chestSet1" class="form-control" id="usr">
                                </div>

                                <div class="col form-group">
                                    <label for="usr">بیشترین وزن:</label>
                                    <input type="text" name="chestMax1" class="form-control" id="usr">
                                </div>

                        </div>
                    </div>

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
                    <div class="card-body biceps">

                        <div class="row fields">

                            <div class="col form-group">
                                <label for="usr">حرکت:</label>
                                <input type="text" name="bicepsName1" class="form-control" id="usr">
                            </div>

                            <div class="col form-group">
                                <label for="usr">ست:</label>
                                <input type="text" name="bicepsSet1" class="form-control" id="usr">
                            </div>

                            <div class="col form-group">
                                <label for="usr">بیشترین وزن:</label>
                                <input type="text" name="bicepsMax1" class="form-control" id="usr">
                            </div>

                        </div>


                    </div>
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
                    <div class="card-body triceps">

                        <div class="row fields">

                            <div class="col form-group">
                                <label for="usr">حرکت:</label>
                                <input type="text" name="tricepsName1" class="form-control" id="usr">
                            </div>

                            <div class="col form-group">
                                <label for="usr">ست:</label>
                                <input type="text" name="tricepsSet1" class="form-control" id="usr">
                            </div>

                            <div class="col form-group">
                                <label for="usr">بیشترین وزن:</label>
                                <input type="text" name="tricepsMax1" class="form-control" id="usr">
                            </div>

                        </div>


                    </div>
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
                          <div class="card-body armpit">

                            <div class="row fields">

                                <div class="col form-group">
                                    <label for="usr">حرکت:</label>
                                    <input type="text" name="armpitName1" class="form-control" id="usr">
                                </div>

                                <div class="col form-group">
                                    <label for="usr">ست:</label>
                                    <input type="text" name="armpitSet1" class="form-control" id="usr">
                                </div>

                                <div class="col form-group">
                                    <label for="usr">بیشترین وزن:</label>
                                    <input type="text" name="armpitMax1" class="form-control" id="usr">
                                </div>

                            </div>

                          </div>
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
                              <div class="card-body shoulder">

                                <div class="row fields">

                                    <div class="col form-group">
                                        <label for="usr">حرکت:</label>
                                        <input type="text" name="shoulderName1" class="form-control" id="usr">
                                    </div>

                                    <div class="col form-group">
                                        <label for="usr">ست:</label>
                                        <input type="text" name="shoulderSet1" class="form-control" id="usr">
                                    </div>

                                    <div class="col form-group">
                                        <label for="usr">بیشترین وزن:</label>
                                        <input type="text" name="shoulderMax1" class="form-control" id="usr">
                                    </div>

                                </div>

                              </div>
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
                                  <div class="card-body back">

                                    <div class="row fields">

                                        <div class="col form-group">
                                            <label for="usr">حرکت:</label>
                                            <input type="text" name="backName1" class="form-control" id="usr">
                                        </div>

                                        <div class="col form-group">
                                            <label for="usr">ست:</label>
                                            <input type="text" name="backSet1" class="form-control" id="usr">
                                        </div>

                                        <div class="col form-group">
                                            <label for="usr">بیشترین وزن:</label>
                                            <input type="text" name="backMax1" class="form-control" id="usr">
                                        </div>

                                    </div>

                                  </div>
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
                                      <div class="card-body leg">

                                        <div class="row fields">

                                            <div class="col form-group">
                                                <label for="usr">حرکت:</label>
                                                <input type="text" name="legName1" class="form-control" id="usr">
                                            </div>

                                            <div class="col form-group">
                                                <label for="usr">ست:</label>
                                                <input type="text" name="legSet1" class="form-control" id="usr">
                                            </div>

                                            <div class="col form-group">
                                                <label for="usr">بیشترین وزن:</label>
                                                <input type="text" name="legMax1" class="form-control" id="usr">
                                            </div>

                                        </div>

                                      </div>
                                      <a class="addItem" title="leg" href="#">افزودن حرکت</a>
                                    </div>
                                  </div>

              </div>



    </div>

</body>
</html>
