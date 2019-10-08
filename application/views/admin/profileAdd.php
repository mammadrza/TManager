
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
                        <p class="card-category">İstifadəçi əlavə edin</p>
                    </div>
                    <div class="card-body">

                        <?php if($this->session->flashdata('err')){ ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('err') ?>
                            </div>
                        <?php } ?>

                        <form method="post" action="<?php echo base_url('addUserAct') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Adı</label>
                                        <input name="name" type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Soyadı</label>
                                        <input name="surname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Departament</label>
                                        <input name="department" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">E-poçt</label>
                                        <input name="email" type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Şifrə</label>
                                        <input name="password" type="password" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">İcazə</label>
                                        <select name="privilege" class="form-control">
                                            <option value="">--Seçin--</option>
                                            <option value="Sadə">Sadə</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                        <!--                                        <input type="text" class="form-control">-->
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="">--Seçin--</option>
                                            <option value="Aktiv">Aktiv</option>
                                            <option value="Passiv">Passiv</option>
                                        </select>
                                        <!--                                        <input type="text" class="form-control">-->
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Cinsi</label>
                                        <select name="gender" id="" class="form-control">
                                            <option value="">--Seçin--</option>
                                            <option value="Kişi">Kişi</option>
                                            <option value="Qadın">Qadın</option>
                                        </select>
                                        <!--                                        <input type="text" class="form-control">-->
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Əlavə et</button>
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


