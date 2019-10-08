<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white"
         data-image="<?php echo base_url('public/') ?>assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->

        <style>
            .textC {
                background: #9c27b0;
                /*padding: 0px 5px;*/
                padding: 0px 8px;
                border-radius: 4px;
                color: white;
                /*border: 2px solid #9c27b0;*/
                /*border-top-right-radius: 0px;*/
                /*border-bottom-right-radius: 0px;*/
            }

            .textCorner {
                /*border: 2px solid #9c27b0;*/
                border-radius: 4px;
                padding: 0px 5px;
                color: #9c27b0;
                /*border-top-left-radius: 0px;*/
                /*border-bottom-left-radius: 0px;*/
            }
            @-webkit-keyframes blink6 {
                10% { transform: scale(1, 1) rotate(80deg); }
                20% { transform: scale(0, 0) rotate(160deg); }
                100% { transform: scale(0, 0) rotate(0deg); }
            }
            @keyframes blink6 {
                10% { transform: scale(1, 1) rotate(80deg); }
                20% { transform: scale(0, 0) rotate(160deg); }
                100% { transform: scale(0, 0) rotate(0deg); }
            }
            #blink6 {
                position: relative;
                display: inline-block;
                color: #fff;
                /*text-shadow: 0 0 10px #3d7a97;*/
                text-shadow: 0 0 10px white!important;
                background: linear-gradient(60deg, #ab47bc, #8e24aa)!important;
            }
            #blink6:after, #blink6:before {
                content: "";
                position: absolute; top: 0; left: 0;
                display: block;
                width: 20px;
                height: 20px;
                background-image:
                        radial-gradient(rgba(255,255,255,1), rgba(255,255,255,0) 30%),
                        linear-gradient(45deg, rgba(0,0,0,0) 49%, rgba(255,255,255,.4) 50%, rgba(0,0,0,0) 51%),
                        linear-gradient(135deg, rgba(0,0,0,0) 49%, rgba(255,255,255,.4) 50%, rgba(0,0,0,0) 51%);
                -webkit-animation: blink6 10s linear infinite;
                animation: blink6 10s linear infinite;
                transform: scale(0, 0) rotate(0deg);
            }
            #blink6:before {
                top: -30%;
                right: 0; left: auto;
                -webkit-animation-delay: 5s;
                animation-delay: 5s;
            }

        </style>
        <div class="logo">
        <span class="simple-text logo-normal">
          <span id='blink6' class="textC">T</span><span class="textCorner">Manager</span>
        </span>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>
                    <li class="nav-item  ">
                        <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Admin panel</p>
                        </a>
                    </li>
                <?php } else {
                    echo '';
                } ?>



<!--                --><?php //if ($_SESSION['user_privilege'] == 'Admin') { ?>

<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link" href="--><?php //echo base_url('allTasksList') ?><!--">-->
<!--                            <i class="material-icons">content_paste</i>-->
<!--                            <p>Bütün Tapşırıqlar</p>-->
<!--                        </a>-->
<!--                    </li>-->

<!--                --><?php //} elseif ($_SESSION['user_privilege'] == 'Sadə') { ?>


                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('tasks') ?>">
                            <i class="material-icons">content_paste</i>
                            <p>Tapşırıqlar</p>
                        </a>
                    </li>
                <?php if ($_SESSION['user_privilege'] != 'Admin') { ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('tasksToMe') ?>">
                            <i class="material-icons">content_paste</i>
                            <p>Mənə göndərilənlər</p>
                        </a>
                    </li>

                <?php } ?>
<!--                --><?php //} ?>


                <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url('allUsers') ?>">
                            <i class="material-icons">people</i>
                            <p>İstifadəçilər</p>
                        </a>
                    </li>
                <?php } else {
                    echo '';
                } ?>

            </ul>
        </div>
    </div>

    <div class="main-panel">