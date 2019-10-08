<?php if($getSingleProfileInfo['id'] != $_SESSION['user_data']){
    redirect(base_url('profile'));
} ?>


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

                            <b><span class="importantoAdmin pull-right"><?php echo $getSingleProfileInfo['privilege'] ?></span></b>

                        <?php }else{ ?>

                            <b><span class="importantoSimple pull-right"><?php echo $getSingleProfileInfo['privilege'] ?></span></b>

                        <?php } ?>
                        <h4 class="card-title">Profil</h4>
                        <p class="card-category">İstifadəçi əlavə edin</p>
                    </div>
                    <div class="card-body">

                        <?php if($this->session->flashdata('err')){ ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('err') ?>
                            </div>
                        <?php } ?>
                        <form method="post" action="<?php echo base_url('editProfileAct/'.$getSingleProfileInfo['id']) ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Adı</label>
                                        <input name="name" type="text" class="form-control" value="<?php echo $getSingleProfileInfo['name']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Soyadı</label>
                                        <input name="surname" type="text" class="form-control" value="<?php echo $getSingleProfileInfo['surname']; ?>" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Departament</label>
                                        <input name="department" type="text" class="form-control" value="<?php echo $getSingleProfileInfo['department']; ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">E-poçt</label>
                                        <input name="email" type="email" class="form-control" value="<?php echo $getSingleProfileInfo['email']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Cinsi</label>
                                        <select name="gender" id="" class="form-control">
                                            <option <?php if($getSingleProfileInfo['gender'] == ""){ echo "SELECTED"; } ?> value="">--Seçin--</option>
                                            <option <?php if($getSingleProfileInfo['gender'] == "Kişi"){ echo "SELECTED"; } ?> value="Kişi">Kişi</option>
                                            <option <?php if($getSingleProfileInfo['gender'] == "Qadın"){ echo "SELECTED"; } ?> value="Qadın">Qadın</option>
                                        </select>
                                    </div>
                                </div>
<!--                                <div class="col-md-4">-->
<!--                                    <div class="">-->
<!--                                        <label class="bmd-label-floating">Şəkil</label>-->
<!--                                        <br>-->
<!--                                        <img width="80" height="80" src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/11/16/12/homer-simpson.jpeg"  alt="profile image">-->
<!--                                    </div>-->
<!--                                </div>-->

                                <div class="col-md-4">
                                    <div class="">
                                        <label class="bmd-label-floating">Yeni şəkil</label>
                                        <br>
                                        <input name="images" type="file" class="form-control" style="margin-top: 12px">
                                    </div>
                                </div>




                            </div>



                            <button type="submit" class="btn btn-primary pull-right">Yenilə</button>
                            <a href="<?php echo base_url('profile') ?>" class="btn btn-warning pull-right">Imtina</a>
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
                            <img style="width: 130px!important; height: 130px!important; object-fit:cover!important;" class="img" src="<?php echo base_url('upload/users/'.$getSingleProfileInfo['image']) ?>" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">
                            Profil şəkili
                        </h6>
                        
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="form-group">

                                </div>

                            </div>

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


