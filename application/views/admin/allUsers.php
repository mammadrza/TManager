
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
            </style>




            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">İstifadəçilər</h4>
                        <p class="card-category">Ümumi istifadəçi siyahısı</p>
                    </div>
                    <div class="card-body table-responsive">


                            <button type="button" class="btn btn-primary btn-link btn-sm pull-right">
                                <a href="">
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
                            <th>Əməliyyatlar</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img class="rSize" rel="tooltip" title="Elnur Səfərli" src="<?php echo base_url('public/') ?>assets/img/faces/marc.jpg" /></td>
                                <td>
                                    <b><span class="purpleColor">Rza Talıbov</span></b>
                                    <br>
                                    <span class="textFontSize">İT departament</span>
                                </td>
                                <td>rza.t@code.edu.az</td>
                                <td>
                                    <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                        <a href=""> <i class="material-icons">edit</i></a>
                                    </button>
                                    <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                        <a href=""><i class="material-icons">close</i></a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="rSize" rel="tooltip" title="Elnur Səfərli" src="<?php echo base_url('public/') ?>assets/img/faces/marc.jpg" /></td>
                                <td>
                                    <b><span class="purpleColor">Rza Talıbov</span></b>
                                    <br>
                                    <span class="textFontSize">İT departament</span>
                                </td>
                                <td>rza.t@code.edu.az</td>
                                <td>
                                    <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                        <a href=""> <i class="material-icons">edit</i></a>
                                    </button>
                                    <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                        <a href=""><i class="material-icons">close</i></a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="rSize" rel="tooltip" title="Elnur Səfərli" src="<?php echo base_url('public/') ?>assets/img/faces/marc.jpg" /></td>
                                <td>
                                    <b><span class="purpleColor">Rza Talıbov</span></b>
                                    <br>
                                    <span class="textFontSize">İT departament</span>
                                </td>
                                <td>rza.t@code.edu.az</td>
                                <td>
                                    <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                        <a href=""> <i class="material-icons">edit</i></a>
                                    </button>
                                    <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                        <a href=""><i class="material-icons">close</i></a>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="rSize" rel="tooltip" title="Elnur Səfərli" src="<?php echo base_url('public/') ?>assets/img/faces/marc.jpg" /></td>
                                <td>
                                    <b><span class="purpleColor">Rza Talıbov</span></b>
                                    <br>
                                    <span class="textFontSize">İT departament</span>
                                </td>
                                <td>rza.t@code.edu.az</td>
                                <td>
                                    <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                        <a href=""> <i class="material-icons">edit</i></a>
                                    </button>
                                    <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                        <a href=""><i class="material-icons">close</i></a>
                                    </button>
                                </td>
                            </tr>
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


