

<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-primary">

                                <?php if($_SESSION['user_privilege'] == 'Admin'){ ?>
                                    <b><span class="importantoAdmin pull-right"><?php echo $getSingleSessionIdInfo['privilege'] ?></span></b>
                                <?php }else{ ?>
                                    <b><span class="importantoSimple pull-right"><?php echo $getSingleSessionIdInfo['privilege'] ?></span></b>
                                <?php } ?>
                                <h4 class="card-title">Profil</h4>
                                <p class="card-category">İstifadəçi profili</p>
                            </div>
                            <div class="card-body">

                                <?php if($this->session->flashdata('success')){ ?>
                                    <div class="alert alert-success">
                                        <?php echo $this->session->flashdata('success') ?>
                                    </div>
                                <?php } ?>
                                <form method="post" action="<?php echo base_url('addUserAct') ?>" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Adı</label>
                                                <br>
                                                <b><span><?php echo $getSingleSessionIdInfo['name'] ?></span></b>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Soyadı</label>
                                                <br>
                                                <b><span><?php echo $getSingleSessionIdInfo['surname'] ?></span></b>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Departament</label>
                                                <br>
                                                <b><span><?php echo $getSingleSessionIdInfo['department'] ?></span></b>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">E-poçt</label>
                                                <br>
                                                <b><span><?php echo $getSingleSessionIdInfo['email'] ?></span></b>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Cinsi</label>
                                                <br>
                                                <b><span><?php echo $getSingleSessionIdInfo['gender'] ?></span></b>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Status</label>
                                                <br>
                                                <b><span><?php echo $getSingleSessionIdInfo['status'] ?></span></b>
                                            </div>
                                        </div>

                                    </div>


<!--                                    <button type="submit" class="btn btn-primary pull-right">Əlavə et</button>-->
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <style>
                        .importantoAdmin{
                            /*background: cornflowerblue;*/
                            background: linear-gradient(60deg, #26c6da, #00acc1);
                            padding: 5px 10px;
                            box-sizing: border-box;
                            color: white;
                            border-radius: 3px;
                        }
                        .importantoSimple{
                            background: white;
                            padding: 5px 10px;
                            box-sizing: border-box;
                            color:#9c27b0 ;
                            border-radius: 3px;
                        }
                    </style>


                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img style="width: 130px!important; height: 130px!important; object-fit:cover!important;"  class="img" src="<?php echo base_url('upload/users/'.$getSingleSessionIdInfo['image']) ?>" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-gray">

                                    <a href="<?php echo base_url('editProfile/'.$getSingleSessionIdInfo['id']); ?>" class="btn btn-primary btn-round">Profili redaktə et</a>


                                </h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">

                                        </div>

                                    </div>

<!--                                <h4 class="card-title">Alec Thompson</h4>-->
<!--                                <p class="card-description">-->
<!--                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...-->
<!--                                </p>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/leftMenuColorFilter'); ?>
<?php $this->load->view('admin/includes/footerJs'); ?>


