<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">

        <div class="row top-bar">
        <a href="{{route('logout')}}"><button class="col-auto btn-primary">خروج</button></a>
            <h2 class="col-auto offset-5">برنامه من</h2>


        </div>

        <div class="row exer-row">
            <h3 class="col exer-item">سینه</h3>
            <h3 class="col exer-item">جلو بازو</h3>
        </div>

        <div class="row ">
                {{-- برنامه سینه --}}
                    <table class="col-6 table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">حرکت</th>
                            <th scope="col">تعداد ست</th>
                            <th scope="col">بیشترین وزن</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>


                {{-- برنامه جلو بازو --}}
                <table class="col-6 table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">حرکت</th>
                            <th scope="col">تعداد ست</th>
                            <th scope="col">بیشترین وزن</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>

            </div>


            <div class="row exer-row">
                <h3 class="col exer-item">زیر بغل</h3>
                <h3 class="col exer-item">پشت بازو</h3>
            </div>

            <div class="row">
                {{-- برنامه زیربغل --}}
                    <table class="col-6 table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">حرکت</th>
                            <th scope="col">تعداد ست</th>
                            <th scope="col">بیشترین وزن</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>


                {{-- برنامه پشت بازو --}}
                <table class="col-6 table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">حرکت</th>
                            <th scope="col">تعداد ست</th>
                            <th scope="col">بیشترین وزن</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>

            </div>

            <div class="row exer-row">
                <h3 class="col exer-item">سرشانه</h3>
                <h3 class="col exer-item">بک و کول</h3>
            </div>

            <div class="row">
                            {{-- برنامه سرشانه --}}
                <table class="col-6 table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">حرکت</th>
                            <th scope="col">تعداد ست</th>
                            <th scope="col">بیشترین وزن</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>

                {{-- برنامه بک و کول --}}
                <table class="col-6 table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">حرکت</th>
                        <th scope="col">تعداد ست</th>
                        <th scope="col">بیشترین وزن</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>

            </div>




    </div>
</body>
</html>




