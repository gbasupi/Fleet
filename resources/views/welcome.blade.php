<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fleet Management System</title>

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
    <body background="../../images/bw.jpg">
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

            <div class="col-md-6 col-12" >
              <!-- caption -->
              <div class="landin-page_left mt-5 pt-5">
                  <h1 class="title" ><font color="green">Tlokweng Fleet Management System</font></h1>

                  <div class="">
                    <p class="subtitle txt-grey mt-4" font color="black">
                    <font color="black">Bw Jobs 4 Graduates stands to prevent and cure unemployment amongst the youth of Botswana, the organization prepares and equip the youth with leadership skills, business skills, self-responsibility and encouraging entrepreneurship among the youth to prepare them to effectively and productively respond to the challenges of school, university, the corporate world, labour market and society at large.
                    </font>
                    </p>


                    <a href="#" class="btn pull-right btn-txt-primary mt-3 "> Learn More <i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
              </div>
              <!-- /.caption -->
            </div>


            </div>
        </div>
    </body>
</html>
