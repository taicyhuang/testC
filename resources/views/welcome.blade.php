<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <title>一站式登入</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



</head>

<body>
    <div class="container">
        <div class="d-flex flex-row-reverse">
            <div class="p-2">
                <div class="logo">
                    <div class="p-2 welcome">Welcome!</div>
                    <img class="d-block mx-auto" src="https://cerp.clickforce.asia/image/logo_english 2.png">
                </div>
                <div class="p-6">
                    <div class="login_form_outer">
                        <div class="login_form">
                            <form method="POST" id="form" action="https://cerp.clickforce.asia/login">
                                <input type="hidden" name="_token" value="ozMruHzgWG2MP2Rjb0PneYkJXJLilZu6cAeVPD0x">
                                <div class="mb-3">
                                    <input id="email" type="email" class="form-control form_style  " name="email"
                                        required="required" value="" autocomplete="email" autofocus="" placeholder="帳號">
                                </div>
                                <div class="mb-3 position-relative">
                                    <input id="password" type="password" class="form-control form_style "
                                        name="password" required="" autocomplete="current-password" placeholder="密碼">
                                    <span class="show_pw fas fa-eye"></span>
                                </div>
                                <div class="d-flex justify-content-between" style="padding-top: 20px;">
                                    <button type="button" class="form-control button"
                                        onclick="go_forget_url()">忘記密碼</button>
                                    <button type="submit" class="form-control button" id="login-btn">登入系統</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><img src="{{ asset('/storage/images/HOLMES_ssp.png')}}" alt=""></div>
                    <div class="p-2"><img src="{{ asset('/storage/images/HOLMES_ADS-0114.png')}}" alt=""></div>
                    <div class="p-2"><img src="{{ asset('/storage/images/HOLMES_DATA.png')}}" alt=""></div>
                </div>
                {{-- <div class="p-8">
                    <div class="p-2"> <img src="{{ asset('/storage/images/HOLMES_ssp 2.png')}}" alt=""></div>
                    <div class="p-2"> <img src="{{ asset('/storage/images/HOLMES_ssp 2.png')}}" alt=""></div>
                    <div class="p-2"> <img src="{{ asset('/storage/images/HOLMES_ssp 2.png')}}" alt=""></div>

                </div> --}}
            </div>

        </div>
    </div>
</body>

<style type="text/css">
    body {
        background-image:url("{{  asset('/storage/images/bg.png')}}");
        background-repeat: no-repeat;
        background-attachment: fixed; //背景圖片位置固定
        background-position: center;
        /* background-size: 75%; */
        background-size: cover;

    }

    .container {
        /* background-image:url("{{  asset('/storage/images/cfright.png')}}"); */
        /* background-repeat: no-repeat; */
        height: 100%;
        /* background-attachment: fixed; //背景圖片位置固定 */
        /* background-position: center; */
        /* background-size: 75%; */
        /* background-size: contain; */
        padding-top: 50px;
        margin-left: 400px;
        border-top-left-radius: 5%;
        border-top-right-radius: 5%;
        border-bottom-right-radius: 5%;
        border-bottom-left-radius: 5%;



    }

    .login_form_outer {

        /* /* width: 60%; */
        /* height: 10%; */
        /* /* margin: 10px; */
        /* display: block; */
        /* /* padding-top: 20%; */
        margin-right: 100px;
    }

    .welcome {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        font-size: 72px;
        /* line-height: 140%; */
        align-items: center;
        text-align: center;
        color: #4D4D4D;
    }
</style>



</html>