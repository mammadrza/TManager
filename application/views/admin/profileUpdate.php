




<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Profil</h4>
                        <p class="card-category">İstifadəçi məlumatlarını redaktə edin</p>
                    </div>
                    <div class="card-body">

                        <?php if($this->session->flashdata('err')){ ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('err') ?>
                            </div>
                        <?php } ?>

                        <form method="post" action="<?php echo base_url('updateUserAct/'.$getSingleUser['id']) ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Adı</label>
                                        <input name="name" type="text" class="form-control" value="<?php echo $getSingleUser['name'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Soyadı</label>
                                        <input name="surname" type="text" class="form-control" value="<?php echo $getSingleUser['surname'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Departament</label>
                                        <input name="department" type="text" class="form-control" value="<?php echo $getSingleUser['department'] ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">E-poçt</label>
                                        <input name="email" type="email" class="form-control" value="<?php echo $getSingleUser['email'] ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Şifrə</label>
                                        <input type="password" class="form-control" disabled>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">İcazə</label>
                                        <select name="privilege" class="form-control">
                                            <option <?php if($getSingleUser['privilege'] == ""){echo 'SELECTED';} ?> value="">--Seçin--</option>
                                            <option <?php if($getSingleUser['privilege'] == "Sadə"){echo 'SELECTED';} ?> value="Sadə">Sadə</option>
                                            <option <?php if($getSingleUser['privilege'] == "Admin"){echo 'SELECTED';} ?> value="Admin">Admin</option>
                                        </select>
                                        <!--                                        <input type="text" class="form-control">-->
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option <?php if($getSingleUser['status'] == ""){echo 'SELECTED';} ?> value="">--Seçin--</option>
                                            <option <?php if($getSingleUser['status'] == "Aktiv"){echo 'SELECTED';} ?> value="Aktiv">Aktiv</option>
                                            <option <?php if($getSingleUser['status'] == "Passiv"){echo 'SELECTED';} ?> value="Passiv">Passiv</option>
                                        </select>
                                        <!--                                        <input type="text" class="form-control">-->
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Cinsi</label>
                                        <select name="gender" id="" class="form-control">
                                            <option <?php if($getSingleUser['gender'] == ""){echo 'SELECTED';} ?> value="">--Seçin--</option>
                                            <option <?php if($getSingleUser['gender'] == "Kişi"){echo 'SELECTED';} ?> value="Kişi">Kişi</option>
                                            <option <?php if($getSingleUser['gender'] == "Qadın"){echo 'SELECTED';} ?> value="Qadın">Qadın</option>
                                        </select>
                                        <!--                                        <input type="text" class="form-control">-->
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="">
                                        <label class="bmd-label-floating">Şəkil</label><br>
                                        <img style="border-radius: 50%; object-fit: cover" width="80px" height="80px" src="<?php echo base_url('upload/users/'.$getSingleUser['image']) ?>" alt="profile image">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="">
                                        <label class="bmd-label-floating">Yeni şəkil</label>
                                        <input name="images" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Yenilə</button>
                            <a href="<?php echo base_url('allUsers') ?>" class="btn btn-warning pull-right">Imtina</a>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>






            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Şifrə</h4>
                        <p class="card-category">İstifadəçi şifrəsinin yenilənməsi</p>
                    </div>
                    <div class="card-body">

                        <?php if($this->session->flashdata('errPass')){ ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('errPass') ?>
                            </div>
                        <?php } ?>

                        <form method="post" action="<?php echo base_url('updateUserPass/'.$getSingleUser['id']) ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Yeni şifrə</label>
                                        <input name="password" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Yenilə</button>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/leftMenuColorFilter'); ?>
<?php $this->load->view('admin/includes/footerJs'); ?>


