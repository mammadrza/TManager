
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
                .whiteColor{
                    color: white;
                }
                .textFontSize{
                    font-size: 12px;
                }
                .marginBottomNone{
                    margin-bottom: 0px;
                }

            </style>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tapşırıq</h4>
                        <p class="card-category">Ətraflı məlumat</p>
                    </div>
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Başlıq</label>
                                        <p>Proqram hazırlanması</p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Ətraflı</label>
                                        <div class="form-group">
<!--                                                <label class="bmd-label-floating">test </label>-->
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consectetur et illo in labore laudantium magnam mollitia quis quod voluptatibus? Debitis ducimus harum quas! Alias architecto perspiciatis qui sint voluptatibus!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Şəkil</label>
                                        <div class="form-group">
                                            <img width="250px" src="https://www.securitylab.ru/upload/iblock/d74/d743b3630d73351fecebcaebb921c6e5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

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
                                        <p><b class="purpleColor">Elnur Səfərli</b> - İT departamenti</p>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label class="bmd-label-floating">Şəkil: </label><br>
                                    <img class="rSize" src="<?php echo base_url('public/') ?>assets/img/faces/marc.jpg" />
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">E-poçt: </label>
                                        <p>elnur.s@gmail.com</p>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Başlama tarixi: </label>
                                        <p>20.09.2019</p>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Bitmə tarixi: </label>
                                        <p>30.09.2019</p>
                                    </div>
                                </div>

                            </div>
                        <hr>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    <h5 class="whiteColor marginBottomNone">Kimə</h5>
                                </div>
                                <hr>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Ad / Soyad / Departament: </label>
                                    <p><b class="purpleColor">Rza Talıbov</b> - İT departamenti</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="bmd-label-floating">Şəkil: </label><br>
                                <img class="rSize" src="https://lh3.googleusercontent.com/-9f7WBjOJDt0/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rceiHZeW1cs387Ktu0k_f_T-Y131A.CMID/s192-c/photo.jpg" />
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">E-poçt: </label>
                                    <p>rza.t@code.edu.az</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Başlama tarixi: </label>
                                    <p>22.09.2019</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Bitmə tarixi: </label>
                                    <p>30.09.2019</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>


<!--                            second user-->

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Ad / Soyad / Departament: </label>
                                    <p><b class="purpleColor">Zaur Abbasov</b> - Marketinq departamenti</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="bmd-label-floating">Şəkil: </label><br>
                                <img class="rSize" src="https://www.facebook.com/search/async/profile_picture/?fbid=100029962700416&width=72&height=72" />
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">E-poçt: </label>
                                    <p>a.zaur@gmail.com</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Başlama tarixi: </label>
                                    <p>23.09.2019</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Bitmə tarixi: </label>
                                    <p>30.09.2019</p>
                                </div>
                            </div>

<!--                            second user-->

                        </div>





                        <hr>



                        <div class="row">

                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    <h5 class="whiteColor marginBottomNone">Yönləndirilib </h5>
                                </div>
                                <hr>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Ad / Soyad / Departament: </label>
                                    <p><b class="purpleColor">Fidan Rəhimova</b> - Marketinq departamenti</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label class="bmd-label-floating">Şəkil: </label><br>
                                <img class="rSize" src="<?php echo base_url('public/') ?>assets/img/faces/marc.jpg" />
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">E-poçt: </label>
                                    <p>fidan.r@gmail.com</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Başlama tarixi: </label>
                                    <p>25.09.2019</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Bitmə tarixi: </label>
                                    <p>30.09.2019</p>
                                </div>
                            </div>

                        </div>


                            <button type="submit" class="btn btn-primary pull-right">Bağla</button>
                            <div class="clearfix"></div>

                    </div>
                </div>
            </div>


<!--            <style>-->
<!--                .rSize{-->
<!--                    width: 40px;-->
<!--                    height: 40px;-->
<!--                    border-radius: 50%;-->
<!--                }-->
<!--                .purpleColor{-->
<!--                    color: purple;-->
<!--                }-->
<!--                .textFontSize{-->
<!--                    font-size: 12px;-->
<!--                }-->
<!--            </style>-->




<!--            <div class="col-lg-4 col-md-12">-->
<!--                <div class="card">-->
<!--                    <div class="card-header card-header-warning">-->
<!--                        <h4 class="card-title">Employees Stats</h4>-->
<!--                        <p class="card-category">New employees on 15th September, 2016</p>-->
<!--                    </div>-->
<!--                    <div class="card-body table-responsive">-->
<!--                        <table class="table table-hover">-->
<!--                            <thead class="text-warning">-->
<!--                            <th>Şəkil</th>-->
<!--                            <th>Ad, Soyad</th>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                <td><img class="rSize" rel="tooltip" title="Elnur Səfərli" src="--><?php //echo base_url('public/') ?><!--assets/img/faces/marc.jpg" /></td>-->
<!--                                <td>-->
<!--                                    <b><span class="purpleColor">Rza Talıbov</span></b>-->
<!--                                    <br>-->
<!--                                    <span class="textFontSize">İT departament</span>-->
<!---->
<!--                                </td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>2</td>-->
<!--                                <td>Minerva Hooper</td>-->
<!---->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>3</td>-->
<!--                                <td>Sage Rodriguez</td>-->
<!---->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>4</td>-->
<!--                                <td>Philip Chaney</td>-->
<!---->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->



        </div>
    </div>
</div>



<?php $this->load->view('admin/includes/footer'); ?>
<?php $this->load->view('admin/includes/leftMenuColorFilter'); ?>
<?php $this->load->view('admin/includes/footerJs'); ?>


