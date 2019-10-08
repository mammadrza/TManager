<style>
    .importantoAdmin{
        /*background: cornflowerblue;*/
        background: linear-gradient(60deg, #ab47bc, #8e24aa)!important;
        padding: 5px 10px;
        box-sizing: border-box;
        color: white;
        border-radius: 3px;
    }
    @-webkit-keyframes pulsate {
        50% { color: #fff; text-shadow: 0 -1px rgba(0,0,0,.3), 0 0 5px #ffd, 0 0 8px #fff; }
    }
    @keyframes pulsate {
        50% { color: #fff; text-shadow: 0 -1px rgba(0,0,0,.3), 0 0 5px #ffd, 0 0 8px #fff; }
    }
    #blink7 {
        color: rgb(245,245,245);
        text-shadow: 0 -1px rgba(0,0,0,.1);
        background: green;
        -webkit-animation: pulsate 1.2s linear infinite;
        animation: pulsate 1.2s linear infinite;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" style="color: #9c27b0"><b><?php echo "Xoş gəldiniz, ".$_SESSION['user_name']." ".$_SESSION['user_surname'] ?></b></a>
            <?php if($_SESSION['user_privilege'] == 'Admin'){
                echo "<span id='blink7' class='importantoAdmin'>admin</span>";
            } ?>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#pablo">-->
<!--                        <i class="material-icons">dashboard</i>-->
<!--                        <p class="d-lg-none d-md-block">-->
<!--                            Stats-->
<!--                        </p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        <i class="material-icons">notifications</i>-->
<!--                        <span class="notification">5</span>-->
<!--                        <p class="d-lg-none d-md-block">-->
<!--                            Some Actions-->
<!--                        </p>-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">-->
<!--                        <a class="dropdown-item" href="#">Mike John responded to your email</a>-->
<!--                        <a class="dropdown-item" href="#">You have 5 new tasks</a>-->
<!--                        <a class="dropdown-item" href="#">You're now friend with Andrew</a>-->
<!--                        <a class="dropdown-item" href="#">Another Notification</a>-->
<!--                        <a class="dropdown-item" href="#">Another One</a>-->
<!--                    </div>-->
<!--                </li>-->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            İstifadəçi
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="<?php echo base_url('profile') ?>">Profil</a>
<!--                        <a class="dropdown-item" href="#">Settings</a>-->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('logOut') ?>">Çıxış</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>