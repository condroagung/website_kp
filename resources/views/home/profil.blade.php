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
    <link rel="stylesheet" href="{{('/css/css_profil.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    @include('navbar')
    <section class="profil-1">
        <div class="container">
            <div class="title-profil">
                <p>Profil</p>
            </div>
            <div class="visi-misi-profil">
                <p>Visi Misi</p>
            </div>
            <div class="visi-misi-content">
                <div class="row">
                    <div class="col-6">
                        <p class="visi">Visi</p>
                        <div class="detail-visi">
                            <p>Terwujudnya komunintas yang dapat berfikir, bekerja</p>
                            <p>cepat, mudah dan nyaman melalui mekanisasi dan</p>
                            <p>teknologi informasi yang efisien dan efektif</p>
                        </div>
                    </div>
                    <div class="col-5">
                        <p class="misi">Misi</p>
                        <div class="detail-misi">
                            <p>Mengembangkan Kinerja Perusahaan</p>
                            <p>Mengembangkan Kapasitas Perusahaan</p>
                            <p>Mengembangkan Kapasitas Sumber Daya Manusia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,320L40,272C80,224,160,128,240,122.7C320,117,400,203,480,245.3C560,288,640,288,720,261.3C800,235,880,181,960,149.3C1040,117,1120,107,1200,101.3C1280,96,1360,96,1400,96L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
        <section class="profil-2">
            <div class="title-komitmen">
                <p>Komitmen Kami</p>
            </div>
            <div class="komitmen-1">
                <p>Mengapa memilih Karya Kencana ?</p>
                <p style="font-weight:400; font-size:36px">Karena Karya Kencana memang bisa dipercaya, terbukti</p>
                <p style="font-weight:400; font-size:36px; margin-top:5px;">sejak 1992 tetap eksis hingga kini!</p>
            </div>
            <div class="komitmen-2">
                <p>Mengapa Karya Kencana bisa dipercaya ?</p>
                <p style="font-weight:400; font-size:36px; margin-top:50px">Karena Karya Kencana selalu memberikan layanan</p>
                <p style="font-weight:400; font-size:36px; margin-top:5px;">terbaik kepada client nya!</p>
            </div>
        </section>
    </section>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>