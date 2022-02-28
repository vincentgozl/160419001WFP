<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <!-- <div class="title m-b-md">
                    Apotik
                </div> -->

                <div class="links">
                    
                @if ($id == '1' && $detail == 'medicine')
                    <h2>Panadol</h2>
                    <img src="https://i-cf65.ch-static.com/content/dam/cf-consumer-healthcare/panadol/id_id/product-images/Panadol%20Extra_455x455.png?auto=format" alt="">
                    <p>Panadol adalah obat yang mengandung paracetamol. Panadol memiliki beberapa varian yang ditujukan untuk meredakan gejala dan keluhan, seperti demam, flu, sakit kepala, hidung tersumbat, batuk tidak berdahak, dan bersin-bersin.  
                    Panadol juga sering digunakan untuk meredakan sakit gigi dan nyeri otot.</p>
                    <!-- <a href="">Decolgen</a> -->
                @elseif ($id == '2' && $detail == 'medicine')
                    <h2>Bodrex</h2>
                    <img src="https://www.bodrex.com/themes/front_site/images/product/bodrex-Ori-juli-2020-300x300-rev1.png" alt="">
                    <p>Bodrex adalah obat yang bermanfaat untuk meringankan sakit kepala, sakit gigi, dan demam. Selain itu, obat ini juga memiliki varian yang ditujukan untuk  meredakan gejala flu, seperti bersin, hidung tersumbat, batuk berdahak, atau batuk kering.</p>
                @elseif ($id == '1' && $detail == 'medical')
                    <h2>Masker</h2>
                    <img src="https://png.pngtree.com/png-clipart/20200318/ourmid/pngtree-medical-mask-watercolor-blue-side-face-png-image_2162719.jpg" alt="">
                    <p>Masker menjadi barang wajib pada masa adaptasi kebiasan baru akibat pandemi virus corona. Penggunaan masker secara disiplin dipercaya mampu menekan tingkat penyebaran virus yang pertama ditemukan di Wuhan pada akhir 2019 tersebut. 
                        Namun, penggunaan masker yang efektif untuk meminimalkan penularan tentunya tidak bisa dilakukan secara sembarangan.</p>
                @elseif ($id == '2' && $detail == 'medical')
                    <h2>Face Shield</h2>
                    <img src="https://www.pennlive.com/resizer/sDms_25Tz-zHdqDVCpDdu_6NYOk=/1280x0/smart/cloudfront-us-east-1.images.arcpublishing.com/advancelocal/BSCHNFXBWFBNXCZEMQUJYRFPC4.png" alt="">
                    <p>Face shield adalah pelindung wajah yang terbuat dari plastik bening dan kaku untuk menutupi wajah hingga memanjang ke bawah dagu penggunanya.</p>

                @endif
                </div>
            </div>
        </div>
    </body>
</html>
