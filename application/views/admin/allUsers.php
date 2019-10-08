
<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">

            <style>
                .rSize{
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                }
                .purpleColor{
                    color: purple;
                }
                .textFontSize{
                    font-size: 12px;
                }
                .addNewPerson{
                    background: linear-gradient(60deg, #ab47bc, #8e24aa);
                    color: white;
                    padding:10px;
                    box-sizing: border-box;
                    border-radius: 3px;
                }
                .importantoActive{
                    background: #55B559;
                    padding: 5px 10px;
                    box-sizing: border-box;
                    color: white;
                    border-radius: 3px;
                }
                .importantoPassiv{
                    background: red;
                    padding: 5px 10px;
                    box-sizing: border-box;
                    color: white;
                    border-radius: 3px;
                }
                .importantoAdmin{
                    background: cornflowerblue;
                    padding: 5px 10px;
                    box-sizing: border-box;
                    color: white;
                    border-radius: 3px;
                }
            </style>




            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">İstifadəçilər</h4>
                        <p class="card-category">Ümumi istifadəçi siyahısı</p>
                    </div>
                    <div class="card-body table-responsive">
                        <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success">
                                <?php echo $this->session->flashdata('success') ?>
                            </div>
                        <?php } ?>

                            <button type="button" class="btn btn-primary btn-link btn-sm pull-right">
                                <a href="<?php echo base_url('addUser') ?>">
                                    <span class="addNewPerson pull-left">Yenİ İstİfadəçİ yarat &nbsp;&nbsp;
                                        <i class="material-icons">person_add</i>
                                    </span>
                                </a>
                            </button>


                        <table class="table table-hover">

                            <thead class="text-warning">

                            <th>Şəkil</th>
                            <th>Ad, Soyad</th>

                            <th>E-poçt</th>
                            <th>Cinsi</th>
                            <th>İcazə</th>
                            <th>Status</th>
                            <th>Əməliyyatlar</th>
                            </thead>
                            <tbody>
                            <?php foreach ($getAllUsers as $getAllUser){ ?>
                                <tr>
                                    <td>
                                        <img style="object-fit: cover!important;" class="rSize" rel="tooltip" title="<?php echo $getAllUser['name']." ".$getAllUser['surname']." (".$getAllUser['department'].")" ?>" src="<?php echo base_url('upload/users/'.$getAllUser['image']) ?>" /></td>
                                    <td>
                                        <b><span class="purpleColor"><?php echo $getAllUser['name']." ".$getAllUser['surname'] ?></span></b>
                                        <br>
                                        <span class="textFontSize"><?php echo $getAllUser['department'] ?></span>
                                    </td>

                                    <td><?php echo $getAllUser['email'] ?></td>
                                    <td><?php echo $getAllUser['gender'] ?></td>




                                    <?php if($getAllUser['privilege'] == 'Admin'){ ?>
                                        <td><span class="importantoAdmin"><?php echo $getAllUser['privilege'] ?></span></td>
                                    <?php }else{ ?>
                                        <td><span><?php echo $getAllUser['privilege'] ?></span></td>
                                    <?php } ?>



                                    <?php if($getAllUser['status'] == 'Aktiv'){ ?>
                                        <td><span class="importantoActive"><?php echo $getAllUser['status'] ?></span></td>
                                    <?php }else{ ?>
                                        <td><span class="importantoPassiv"><?php echo $getAllUser['status'] ?></span></td>
                                    <?php } ?>



                                    <td>
                                        <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                            <a href="<?php echo base_url('updateUser/'.$getAllUser['id'])?>"> <i class="material-icons">edit</i></a>
                                        </button>
                                        <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                            <a href="<?php echo base_url('deleteUser/'.$getAllUser['id'])?>"><i class="material-icons">close</i></a>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/leftMenuColorFilter'); ?>
<?php $this->load->view('admin/includes/footerJs'); ?>


