<?php

//if ($_SESSION['user_privilege'] == "Sadə"){
//    if($getSingleTask['user_id'] !== $_SESSION['user_data']){
//        redirect(base_url('tasks'));
//    }
//}
?>

<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">

            <style>
                .rSize {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                }

                .purpleColor {
                    color: purple;
                }

                .whiteColor {
                    color: white;
                }

                .textFontSize {
                    font-size: 12px;
                }

                .marginBottomNone {
                    margin-bottom: 0px;
                }

            </style>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
<!--                        --><?php
//                        print_r('<pre>');
//                        print_r($getSingleTask )
//                        ?>
                        <h4 class="card-title">Tapşırıq</h4>
                        <p class="card-category">Ətraflı məlumat</p>
                    </div>
                    <div class="card-body">
                        <?php if($this->session->flashdata('err')){ ?>
                            <div class="alert alert-danger">
                                <span><?php echo $this->session->flashdata('err') ?></span>
                            </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success">
                                <span><?php echo $this->session->flashdata('success') ?></span>
                            </div>
                        <?php } ?>
                        <div class="row">



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Yaranma tarixi: </label>
                                    <p><?php echo $getSingleTask['created_at'] ?></p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Başlama tarixi: </label>
                                    <p><?php echo $getSingleTask['started_date'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Bitmə tarixi: </label>
                                    <p><?php echo $getSingleTask['deadline'] ?></p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">

                                    <label class="bmd-label-floating">Başlıq</label>
                                    <b><p><?php echo $getSingleTask['titile'] ?></p></b>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ətraflı</label>
                                    <div class="form-group">
                                        <b><p><?php echo $getSingleTask['description'] ?></p></b>
                                    </div>
                                </div>
                            </div>

                            <?php if ($getSingleTask['task_image'] == !NULL) { ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Şəkil</label>
                                        <div class="form-group">
                                            <img style="border-radius:  5px ; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);"
                                                 width="250px"
                                                 src="<?php echo base_url('upload/tasks/' . $getSingleTask['task_image']) ?>"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php } else {
                                echo '';
                            } ?>


                        </div>


                        <hr>


                        <div class="row">

                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    <h5 class="whiteColor marginBottomNone">Göndərən</h5>
                                </div>
                                <hr>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Ad / Soyad / Departament: </label>
                                    <p>
                                        <b class="purpleColor"><?php echo $getSingleTask['name'] . " " . $getSingleTask['surname'] ?></b>
                                        - <?php echo $getSingleTask['department'] ?></p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="bmd-label-floating">Şəkil: </label><br>
                                <img class="rSize"
                                     src="<?php echo base_url('upload/users/' . $getSingleTask['image']) ?>"/>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">E-poçt: </label>
                                    <p><?php echo $getSingleTask['email'] ?></p>
                                </div>
                            </div>





                        </div>
                        <hr>
                        <div class="row">
<!--                            --><?php //print_r($getSingleMore); ?>

                                <div class="col-md-12">
                                    <div class="alert alert-info">
                                        <h5 class="whiteColor marginBottomNone">Kimə</h5>
                                    </div>
                                    <hr>
                                </div>
                                <?php if (isset($getSingleMore)) { ?>

                                    <?php foreach ($getSingleMore as $getSingleMoreKey) { ?>
                                        <?php if($getSingleMoreKey['name'] !== NULL ){ ?>

                                        <?php if ($getSingleMoreKey['is_redirect'] == 0) { ?>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Ad / Soyad / Departament: </label>
                                                    <p>
                                                        <b class="purpleColor"><?php echo $getSingleMoreKey['name'] . " " . $getSingleMoreKey['surname'] ?></b>
                                                        - <?php echo $getSingleMoreKey['department'] ?></p>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <label class="bmd-label-floating">Şəkil: </label><br>
                                                <img class="rSize"
                                                     src="<?php echo base_url('upload/users/' . $getSingleMoreKey['image']) ?>"/>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">E-poçt: </label>
                                                    <p><?php echo $getSingleMoreKey['email'] ?></p>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                        <?php } ?>
                                        <?php }else{
                                            echo '';
                                        } ?>

                                    <?php } ?>

                                <?php } ?>



                            <!-- second user -->

                        </div>


                        <div class="row">
                            <?php if (isset($getSingleMore)) {
//                                print_r('<pre>');
//                                print_r($getSingleMore)
                                ?>

                                <?php foreach ($getSingleMore as $getSingleMoreKey) { ?>


                                    <?php if ($getSingleMoreKey['is_redirect'] == 1) { ?>
                                        <div class="col-md-12">
                                            <div class="alert alert-info">
                                                <h5 class="whiteColor marginBottomNone">Yönləndirilib </h5>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">

                                                <label class="bmd-label-floating">Ad / Soyad / Departament: </label>
                                                <p>
                                                    <b class="purpleColor"><?php echo $getSingleMoreKey['redirect_user_name'] . " " . $getSingleMoreKey['redirect_user_surname'] ?></b>
                                                    - <?php echo $getSingleMoreKey['redirect_user_department'] ?></p>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="bmd-label-floating">Şəkil: </label><br>
                                            <img class="rSize"
                                                 src="<?php echo base_url('upload/users/' . $getSingleMoreKey['redirect_user_image']) ?>"/>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">E-poçt: </label>
                                                <p><?php echo $getSingleMoreKey['redirect_user_email'] ?></p>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                        </div>

                                    <?php } ?>


                                <?php } ?>

                            <?php } ?>
                        </div>


                        <!--                     geri-->




                        <?php if($getSingleTask['done'] == '2'){ ?>

                            <div class="alert alert-success">
                                <span>Tapşırıq yerinə yetirilib</span>
                            </div>

                            <a href="<?php echo base_url('tasks') ?>" class="btn btn-primary pull-right">Geri</a>
                        <?php }elseif ($getSingleTask['done'] == '3'){ ?>
                            <div class="alert alert-warning">
                                <span>Tapşırıq imtina edilib</span>
                            </div>
                            <a href="<?php echo base_url('tasks') ?>" class="btn btn-primary pull-right">Geri</a>
                        <?php }

                        elseif ($getSingleTask['done'] == '4')
                        { ?>
                            <div class="alert alert-info">
                                <span>Tapşırıq arxivdədir</span>
                            </div>
                            <a href="<?php echo base_url('tasks') ?>" class="btn btn-primary pull-right">Geri</a>

                        <?php }

                        elseif (isset($getSingleTask['started_date']) && $getSingleTask['done'] ==! '0') { ?>
                            <form action="<?php echo base_url('taskFinish/'.$getTaskId['id']) ?>" method="post"
                                  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Tapşırığın yerinə yetirilməsi ilə əlaqəli ətraflı
                                        məlumat</label>
                                    <textarea name="taskFinishDescription" class="form-control" id="" cols="30"
                                              rows="10"></textarea>
                                </div>
                                <button name="finish"
                                        onclick="return confirm('Tapşırığın yerinə yetirildiyinə əminsiniz?');"
                                        value="3" type="submit" class="btn btn-success pull-left">Tapşırığı bitir
                                </button>
                            </form>
                            <a href="<?php echo base_url('tasks') ?>" class="btn btn-primary pull-right">Geri</a>
                        <?php } else { ?>

                            <form action="<?php echo base_url('taskStatusAnswerYes/'.$getTaskId['id']) ?>" method="post"
                                  enctype="multipart/form-data">
                                <button name="accept" onclick="return confirm('Qəbul etmək istədiyinizə əminsiniz?');"
                                        value="1" type="submit" class="btn btn-success pull-left">Qebul et
                                </button>
                            </form>


                            <?php if($_SESSION['user_privilege'] == "Admin"){ ?>
                                <form action="<?php echo base_url('taskStatusAnswerNo/'.$getTaskId['id']) ?>" method="post"
                                      enctype="multipart/form-data">
                                    <button name="abort" onclick="return confirm('İmtina etmək istədiyinizə əminsiniz?');"
                                            value="2" type="submit" class="btn btn-danger pull-left">Imtina et
                                    </button>
                                </form>
                            <?php  } ?>


                            <a href="<?php echo base_url('tasks') ?>" class="btn btn-primary pull-right">Geri</a>
                        <?php } ?>


                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/leftMenuColorFilter'); ?>
<?php $this->load->view('admin/includes/footerJs'); ?>


