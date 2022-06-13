<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>一站式登入</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



</head>

<body>

    <div class="container">
        <img style="max-width:40%; max-height:100%" src="{{  asset('/storage/images/cfright.png')}}" alt="">
        <div>Welcome!</div>
        <div class="">CLICKFORCE</div>
        <div class="login_form_outer1">

            <div class="">
                <div>
                    <label for="">帳號</label><input type="text">
                </div>
                <div>
                    <label for="">密碼</label><input type="text">
                </div>
                <div>
                    <button>登入</button>
                    <button>取消</button>
                </div>

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
        padding-top: 50%;
        margin-left: 70%;
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
        margin-left: 60% */
    }

    .welcome {
        /* margin-left: 80%; */
        margin-top: 20%;
        border-radius: 5%;
    }
</style>



</html>