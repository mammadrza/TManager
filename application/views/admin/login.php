

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/myCustomCss.css') ?>">
</head>
<body class="align">

<div class="grid">
    <style>
        .textC{
            background: #9c27b0;
            padding:0px 5px;
            border-radius: 4px;
            color: white;
            border: 2px solid #9c27b0;
            border-top-right-radius:0px ;
            border-bottom-right-radius:0px ;
        }
        .textCorner{
            border: 2px solid #9c27b0;
            border-radius: 4px;
            padding:0px 5px;
            color: #9c27b0;
            border-top-left-radius:0px ;
            border-bottom-left-radius:0px ;

        }

    </style>

    <div style="text-align: center">
        <h1>  <span class="textC">T</span><span class="textCorner">Manager</span></h1>
    </div>
        <br>
    <form action="<?php echo base_url('loginAct') ?>" method="POST" class="form login" enctype="multipart/form-data">

        <div class="form__field">

            <label for="login__username">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use>
                </svg>
                <span class="hidden">Username</span>
            </label>

            <input id="login__username" type="email" name="email" class="form__input" placeholder="E-poçt daxil edin" required>

        </div>

        <div class="form__field">

            <label for="login__password">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use>
                </svg>
                <span class="hidden">Password</span>
            </label>

            <input id="login__password" type="password" name="password" class="form__input" placeholder="Şifrə daxil edin" required>

        </div>

        <div class="form__field">
            <input type="submit" value="Daxil ol">
        </div>

    </form>
    <?php if($this->session->flashdata('err')){ ?>
        <br>
        <div style="text-align: center;color: red">
            <span><?php echo $this->session->flashdata('err') ?></span>
        </div>

    <?php } ?>

</div>

<svg xmlns="http://www.w3.org/2000/svg" class="icons">

    <symbol id="arrow-right" viewBox="0 0 1792 1792">
        <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/>
    </symbol>

    <symbol id="lock" viewBox="0 0 1792 1792">
        <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/>
    </symbol>

    <symbol id="user" viewBox="0 0 1792 1792">
        <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/>
    </symbol>

</svg>

</body>
</html>