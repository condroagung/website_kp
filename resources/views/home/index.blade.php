<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{('/css/css_nav.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    @include('navbar')
    <div class="p-5 container-fluid" style="background-color:rgba(51, 50, 49, 1);">
        <div class="container">
            <div class="row justify-content-md-center align-items-center" style="padding-top:14vh; padding-bottom:7vh">
                <div class="col-md-6">
                    <p style="font-family: 'Mali', cursive; font-size:48px; color:white"><span style="color:#ffab28">Karya </span>Kencana</p>
                    <p style="font-family: 'Roboto', sans-serif; font-size:24px; color:white; font-weight: 400">One Stop Solution Four Your Bussiness</p>
                </div>
                <div class="col-md-6 mt-5">
                    <img src="{{ url('/image/ilustrasi1.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="p-5 container-fluid" style="background-color:#f3f3f3">
        <div class="container">
            <div class="d-flex justify-content-center">
                <p style="font-family: 'Mali', cursive; font-weight: 500; font-size:48px">Jasa Kami</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-5">
                <div class="col">
                    <div class="jasa-kami" style="border: 1px solid rgba(0, 0, 0, 0.2); box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{('/image/konsul.png')}}" alt="" class="img-fluid" style="border-radius:10px;">
                        </div>
                        <p class="d-flex justify-content-center" style="font-family: 'Roboto', sans-serif; font-size:25px; font-weight:700; margin-top:1vh">Konsultasi Teknologi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="jasa-kami" style="border: 1px solid rgba(0, 0, 0, 0.2); box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{('/image/konsul.png')}}" alt="" class="img-fluid" style="border-radius:10px;">
                        </div>
                        <p class="d-flex justify-content-center" style="font-family: 'Roboto', sans-serif; font-size:25px; font-weight:700; margin-top:1vh">Konsultasi Teknologi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="jasa-kami" style="border: 1px solid rgba(0, 0, 0, 0.2); box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{('/image/konsul.png')}}" alt="" class="img-fluid" style="border-radius:10px;">
                        </div>
                        <p class="d-flex justify-content-center" style="font-family: 'Roboto', sans-serif; font-size:25px; font-weight:700; margin-top:1vh">Konsultasi Teknologi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="jasa-kami" style="border: 1px solid rgba(0, 0, 0, 0.2); box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{('/image/konsul.png')}}" alt="" class="img-fluid" style="border-radius:10px;">
                        </div>
                        <p class="d-flex justify-content-center" style="font-family: 'Roboto', sans-serif; font-size:25px; font-weight:700; margin-top:1vh">Konsultasi Teknologi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="jasa-kami" style="border: 1px solid rgba(0, 0, 0, 0.2); box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{('/image/konsul.png')}}" alt="" class="img-fluid" style="border-radius:10px;">
                        </div>
                        <p class="d-flex justify-content-center" style="font-family: 'Roboto', sans-serif; font-size:25px; font-weight:700; margin-top:1vh">Konsultasi Teknologi</p>
                    </div>
                </div>
                <div class="col">
                    <div class="jasa-kami" style="border: 1px solid rgba(0, 0, 0, 0.2); box-sizing: border-box; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 25px;">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="{{('/image/konsul.png')}}" alt="" class="img-fluid" style="border-radius:10px;">
                        </div>
                        <p class="d-flex justify-content-center" style="font-family: 'Roboto', sans-serif; font-size:25px; font-weight:700; margin-top:1vh">Konsultasi Teknologi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-5">
                    <a class="btn btn-custom" href="{{ ('/jasa');}}" role="button" style="border-radius:15px; background-color:rgba(255, 171, 40, 1); color:white; font-family: 'Roboto', sans-serif; font-weight:400" onMouseOver="this.style.backgroundColor='rgba(221, 121, 60, 1)'" onMouseOut=" this.style.backgroundColor='rgba(255, 171, 40, 1)'">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5 container-fluid" style="background-color:#f9f9f9;">
        <div class="d-flex justify-content-center">
            <p style="font-family: 'Mali', cursive; font-weight: 500; font-size:48px">Portofolio Kami</p>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-5">
                <div class="col">
                    <div class="p-5 row align-items-center" style="background-image:linear-gradient(243.86deg, #7CE5FE 46.79%, rgba(145, 230, 250, 0) 134.5%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 30px">
                        <div class="col-md-5 d-flex justify-content-center">
                            <img src="{{('/image/Handphone.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <p class="mt-5 d-flex justify-content-center" style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col">
                    <div class="p-5 row align-items-center" style="background-image:linear-gradient(243.86deg, #7CE5FE 46.79%, rgba(145, 230, 250, 0) 134.5%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 30px">
                        <div class="col-md-5 d-flex justify-content-center">
                            <img src="{{('/image/Handphone.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <p class="mt-5 d-flex justify-content-center" style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col">
                    <div class="p-5 row align-items-center" style="background-image:linear-gradient(243.86deg, #7CE5FE 46.79%, rgba(145, 230, 250, 0) 134.5%); box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 30px">
                        <div class="col-md-5 d-flex justify-content-center">
                            <img src="{{('/image/Handphone.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <p class="mt-5 d-flex justify-content-center" style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col">
                    <div class="p-5 row align-items-center" style="background-image:linear-gradient(243.86deg, #7CE5FE 46.79%, rgba(145, 230, 250, 0) 134.5%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 30px">
                        <div class="col-md-5 d-flex justify-content-center">
                            <img src="{{('/image/Laptop.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <p class="mt-5 d-flex justify-content-center" style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col">
                    <div class="p-5 row align-items-center" style="background-image:linear-gradient(243.86deg, #7CE5FE 46.79%, rgba(145, 230, 250, 0) 134.5%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 30px">
                        <div class="col-md-5 d-flex justify-content-center">
                            <img src="{{('/image/Laptop.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <p class="mt-5 d-flex justify-content-center" style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col">
                    <div class="p-5 row align-items-center" style="background-image:linear-gradient(243.86deg, #7CE5FE 46.79%, rgba(145, 230, 250, 0) 134.5%); box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 30px">
                        <div class="col-md-5 d-flex justify-content-center">
                            <img src="{{('/image/Laptop.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <p class="mt-5 d-flex justify-content-center" style="font-family: 'Roboto', sans-serif;">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-5">
                    <a class="btn btn-custom" href="{{ ('/portofolio');}}" role="button" style="border-radius:15px; background-color:rgba(255, 171, 40, 1); color:white; font-family: 'Roboto', sans-serif; font-weight:400" onMouseOver="this.style.backgroundColor='rgba(221, 121, 60, 1)'" onMouseOut=" this.style.backgroundColor='rgba(255, 171, 40, 1)'">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="{{('/js/navbar.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>