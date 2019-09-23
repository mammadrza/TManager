
<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">


              <div class="col-lg-12 col-md-12">
                  <div class="card">
                      <div class="card-header card-header-tabs card-header-primary">
                          <div class="nav-tabs-navigation">
                              <div class="nav-tabs-wrapper">
                                  <span class="nav-tabs-title">Tapşırıqlar:</span>
                                  <ul class="nav nav-tabs" data-tabs="tabs">
                                      <li class="nav-item">
                                          <a class="nav-link active" href="#alls" data-toggle="tab">
                                              <i class="material-icons">assignment</i> Yenİ
                                              <div class="ripple-container"></div>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#processes" data-toggle="tab">
                                              <i class="material-icons">access_time</i> Prossesdə
                                              <div class="ripple-container"></div>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#dones" data-toggle="tab">
                                              <i class="material-icons">assignment_turned_in
                                              </i> Hazır
                                              <div class="ripple-container"></div>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#cancels" data-toggle="tab">
                                              <i class="material-icons">cancel</i> İmtİna
                                              <div class="ripple-container"></div>
                                          </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#archives" data-toggle="tab">
                                              <i class="material-icons">archive</i> Arxİv
                                              <div class="ripple-container"></div>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="tab-content">


                              <style>
                                  .rSizeİmg{
                                      width: 30px;
                                      height: 30px;
                                      border-radius: 50%;
                                  }
                                  .importanto{
                                      background: red;
                                      padding: 5px 10px;
                                      box-sizing: border-box;
                                      color: white;
                                      border-radius: 3px;
                                  }
                                  .normImportanto{
                                      background: orange;
                                      padding: 5px 10px;
                                      box-sizing: border-box;
                                      color: white;
                                      border-radius: 3px;
                                  }
                              </style>

                              <div class="tab-pane active" id="alls">
                                  <table class="table table-hover">
                                      <tr>
                                          <th>Göndərdi</th>
                                          <th>Kimə</th>
                                          <th>Yönləndirilib</th>
                                          <th>Başlıq</th>
                                          <th>Başlama tarixi</th>
                                          <th>Bitmə tarixi</th>

                                          <th>Vacibliyi</th>
<!--                                          <th>Statusu</th>-->
<!--                                          <th>Qəbul et</th>-->
                                          <th>Əməliyyatlar</th>

                                      </tr>
                                      <tbody>
                                      <tr>
                                          <td>
<!--                                              <img class="rSizeİmg" rel="tooltip" title="Elnur Səfərli" src="--><?php //echo base_url('public/') ?><!--assets/img/faces/marc.jpg" />-->
                                              <img class="rSizeİmg" rel="tooltip" title="Elnur Səfərli &#013; - İT Departamenti" src="https://www.facebook.com/search/async/profile_picture/?fbid=1295829223&width=72&height=72" />
                                          </td>
                                          <td>
                                              <img class="rSizeİmg" rel="tooltip" title="Rza Talıbov &#013; - İT Departamenti" src="https://lh3.googleusercontent.com/-9f7WBjOJDt0/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rceiHZeW1cs387Ktu0k_f_T-Y131A.CMID/s192-c/photo.jpg" />
                                              <img class="rSizeİmg" rel="tooltip" title="Zaur Abbasov &#013; - Marketinq Departamenti " src="https://www.facebook.com/search/async/profile_picture/?fbid=100029962700416&width=72&height=72" />
                                          </td>
                                          <td>
                                              <!--                                              <img class="rSizeİmg" rel="tooltip" title="Elnur Səfərli" src="--><?php //echo base_url('public/') ?><!--assets/img/faces/marc.jpg" />-->
                                              <img class="rSizeİmg" rel="tooltip" title="Elnur Səfərli &#013; - İT Departamenti" src="https://www.facebook.com/search/async/profile_picture/?fbid=1295829223&width=72&height=72" />
                                          </td>
                                          <td>
                                              Proqram hazırlanması
                                          </td>
                                          <td>
                                              20.09.2019
                                          </td>
                                          <td>
                                              30.09.2019
                                          </td>

                                          <td>
                                              <span class="importanto">Yüksək</span>
                                          </td>
<!--                                          <td>-->
<!--                                              Gözləmədə-->
<!--                                          </td>-->



<!--                                          <td>-->
<!--                                              <div class="form-check">-->
<!--                                                  <label class="form-check-label">-->
<!--                                                      <input class="form-check-input" type="checkbox" value="" checked>-->
<!--                                                      <span class="form-check-sign"><span class="check"></span></span>-->
<!--                                                  </label>-->
<!--                                              </div>-->
<!--                                          </td>-->

                                          <td class="td-actions text-right">
                                              <a class="nav-link" href="#pablo" id="menuT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="material-icons">menu</i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right" style="text-align: center" aria-labelledby="menuT">
                                                  <a href="<?php echo base_url('more') ?>" rel="tooltip" title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                          <i class="material-icons">remove_red_eye</i>
                                                  </a>
                                                  <button type="button" rel="tooltip" title="Yönləndir" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">redo</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">edit</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                      <i class="material-icons">close</i>
                                                  </button>
                                              </div>
                                          </td>

                                      </tr>


                                      <tr>
                                          <td>
                                              <!--                                              <img class="rSizeİmg" rel="tooltip" title="Elnur Səfərli" src="--><?php //echo base_url('public/') ?><!--assets/img/faces/marc.jpg" />-->
                                              <img class="rSizeİmg" rel="tooltip" title="Rza Talıbov &#013; - İT Departamenti" src="https://lh3.googleusercontent.com/-9f7WBjOJDt0/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rceiHZeW1cs387Ktu0k_f_T-Y131A.CMID/s192-c/photo.jpg" />

                                          </td>
                                          <td>
                                              <img class="rSizeİmg" rel="tooltip" title="Elnur Səfərli &#013; - İT Departamenti" src="https://www.facebook.com/search/async/profile_picture/?fbid=1295829223&width=72&height=72" />
                                              <img class="rSizeİmg" rel="tooltip" title="Zaur Abbasov &#013; - Marketinq Departamenti " src="https://www.facebook.com/search/async/profile_picture/?fbid=100029962700416&width=72&height=72" />
                                          </td>
                                          <td>
                                              <!--                                              <img class="rSizeİmg" rel="tooltip" title="Elnur Səfərli" src="--><?php //echo base_url('public/') ?><!--assets/img/faces/marc.jpg" />-->
<!--                                              <img class="rSizeİmg" rel="tooltip" title="Elnur Səfərli &#013; - İT Departamenti" src="https://www.facebook.com/search/async/profile_picture/?fbid=1295829223&width=72&height=72" />-->
                                          </td>
                                          <td>
                                              Şəbəkə problemləri
                                          </td>
                                          <td>
                                              20.09.2019
                                          </td>
                                          <td>
                                              30.09.2019
                                          </td>

                                          <td>
                                              <span class="normImportanto">Orta</span>
                                          </td>
                                          <!--                                          <td>-->
                                          <!--                                              Gözləmədə-->
                                          <!--                                          </td>-->



                                          <!--                                          <td>-->
                                          <!--                                              <div class="form-check">-->
                                          <!--                                                  <label class="form-check-label">-->
                                          <!--                                                      <input class="form-check-input" type="checkbox" value="" checked>-->
                                          <!--                                                      <span class="form-check-sign"><span class="check"></span></span>-->
                                          <!--                                                  </label>-->
                                          <!--                                              </div>-->
                                          <!--                                          </td>-->

                                          <td class="td-actions text-right">
                                              <a class="nav-link" href="#pablo" id="menuT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="material-icons">menu</i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right" style="text-align: center" aria-labelledby="menuT">
                                                  <a href="<?php echo base_url('more') ?>" rel="tooltip" title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">remove_red_eye</i>
                                                  </a>
                                                  <button type="button" rel="tooltip" title="Yönləndir" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">redo</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">edit</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                      <i class="material-icons">close</i>
                                                  </button>
                                              </div>
                                          </td>

                                      </tr>






                                      <tr>
                                          <td>
                                              <b><span style="color: purple;">Elnur Səfərli</span></b>
                                              <br>
                                              <span>İT departament</span>
                                          </td>
                                          <td>
                                              <b><span style="color: purple;">Mahir Ibadov</span></b>
                                              <br>
                                              <span>İT departament</span>
                                              <br>
                                              <b><span style="color: purple;">Zaur Abbasov</span></b>
                                              <br>
                                              <span>Marketing departament</span>

                                          </td>
                                          <td><b><span style="color: purple;">Samir Abbasov</span></b> <br> Marketinq departamenti</td>
                                          <td>
                                              Unibook işləri
                                          </td>
                                          <td>
                                              22.09.2019
                                          </td>
                                          <td>
                                              28.09.2019
                                          </td>

                                          <td>
                                              <span class="importanto">Yüksək</span>
                                          </td>
                                          <!--                                          <td>-->
                                          <!--                                              Gözləmədə-->
                                          <!--                                          </td>-->



<!--                                          <td>-->
<!--                                              <div class="form-check">-->
<!--                                                  <label class="form-check-label">-->
<!--                                                      <input class="form-check-input" type="checkbox" value="" checked>-->
<!--                                                      <span class="form-check-sign"><span class="check"></span></span>-->
<!--                                                  </label>-->
<!--                                              </div>-->
<!--                                          </td>-->

                                          <td class="td-actions text-right">
                                              <a class="nav-link"  href="#pablo" id="menuT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="material-icons">menu</i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right" style="text-align: center" aria-labelledby="menuT">
                                                  <button type="button" rel="tooltip" title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">remove_red_eye</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Yönləndir" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">redo</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">edit</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                      <i class="material-icons">close</i>
                                                  </button>
                                              </div>
                                          </td>

                                      </tr>
                                      <tr>
                                          <td>
                                              Elnur Səfərli
                                          </td>
                                          <td>
                                              İT departament
                                          </td>
                                          <td><b><span style="color: purple;">Samir Abbasov</span></b> <br> Marketinq departamenti</td>
                                          <td>
                                              Şəbəkələrin qoşulmısı
                                          </td>
                                          <td>
                                              20.09.2019
                                          </td>
                                          <td>
                                              30.09.2019
                                          </td>

                                          <td>
                                              <span class="importanto">Yüksək</span>
                                          </td>
                                          <!--                                          <td>-->
                                          <!--                                              Gözləmədə-->
                                          <!--                                          </td>-->



<!--                                          <td>-->
<!--                                              <div class="form-check">-->
<!--                                                  <label class="form-check-label">-->
<!--                                                      <input class="form-check-input" type="checkbox" value="" checked>-->
<!--                                                      <span class="form-check-sign"><span class="check"></span></span>-->
<!--                                                  </label>-->
<!--                                              </div>-->
<!--                                          </td>-->

                                          <td class="td-actions text-right">
                                              <a class="nav-link"  href="#pablo" id="menuT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="material-icons">menu</i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right" style="text-align: center" aria-labelledby="menuT">
                                                  <button type="button" rel="tooltip" title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">remove_red_eye</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Yönləndir" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">redo</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">edit</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                      <i class="material-icons">close</i>
                                                  </button>
                                              </div>
                                          </td>

                                      </tr>
                                      <tr>
                                          <td>
                                              Elnur Səfərli
                                          </td>
                                          <td>
                                              İT departament
                                          </td>
                                          <td>
                                              Şəbəkələrin qoşulmısı
                                          </td>
                                          <td><b><span style="color: purple;">Samir Abbasov</span></b> <br> Marketinq departamenti</td>
                                          <td>
                                              20.09.2019
                                          </td>
                                          <td>
                                              30.09.2019
                                          </td>

                                          <td>
                                              <span class="normImportanto">Orta</span>
                                          </td>
                                          <!--                                          <td>-->
                                          <!--                                              Gözləmədə-->
                                          <!--                                          </td>-->



<!--                                          <td>-->
<!--                                              <div class="form-check">-->
<!--                                                  <label class="form-check-label">-->
<!--                                                      <input class="form-check-input" type="checkbox" value="" checked>-->
<!--                                                      <span class="form-check-sign"><span class="check"></span></span>-->
<!--                                                  </label>-->
<!--                                              </div>-->
<!--                                          </td>-->

                                          <td class="td-actions text-right">
                                              <a class="nav-link" style="margin-top: -5px" href="#pablo" id="menuT" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="material-icons">menu</i>
                                              </a>
                                              <div class="dropdown-menu dropdown-menu-right" style="text-align: center" aria-labelledby="menuT">
                                                  <button type="button" rel="tooltip" title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">remove_red_eye</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Yönləndir" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">redo</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Redaktə et" class="btn btn-primary btn-link btn-sm">
                                                      <i class="material-icons">edit</i>
                                                  </button>
                                                  <button type="button" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                      <i class="material-icons">close</i>
                                                  </button>
                                              </div>
                                          </td>

                                      </tr>



                                      </tbody>
                                  </table>
                              </div>











                              <div class="tab-pane" id="processes">
                                  <table class="table">
                                      <tbody>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="" checked>
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                          </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="">
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Sign contract for "What are conference organizers afraid of?"</td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>






                              <div class="tab-pane" id="dones">
                                  <table class="table">
                                      <tbody>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="">
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="" checked>
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                          </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="" checked>
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Sign contract for "What are conference organizers afraid of?"</td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>




                              <div class="tab-pane" id="cancels">
                                  <table class="table">
                                      <tbody>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="">
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="" checked>
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                          </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="" checked>
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Sign contract for "What are conference organizers afraid of?"</td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>






                              <div class="tab-pane" id="archives">
                                  <table class="table">
                                      <tbody>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="">
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="" checked>
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                          </td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
                                              </button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <div class="form-check">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" value="" checked>
                                                      <span class="form-check-sign"><span class="check"></span></span>
                                                  </label>
                                              </div>
                                          </td>
                                          <td>Sign contract for "What are conference organizers afraid of?"</td>
                                          <td class="td-actions text-right">
                                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                  <i class="material-icons">edit</i>
                                              </button>
                                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                  <i class="material-icons">close</i>
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


<!--              <style>-->
<!--                  .iSize{-->
<!--                      width: 50px;-->
<!--                      height: 50px;-->
<!--                      border-radius: 50%;-->
<!--                  }-->
<!--              </style>-->



<!--              <div class="col-lg-4 col-md-12">-->
<!--                  <div class="card">-->
<!--                      <div class="card-header card-header-warning">-->
<!--                          <h4 class="card-title">İstifadəçilər</h4>-->
<!--                          <p class="card-category">Siyahı</p>-->
<!--                      </div>-->
<!--                      <div class="card-body table-responsive">-->
<!--                          <table class="table table-hover">-->
<!--                              <thead class="text-warning">-->
<!--                              <th>Şəkil</th>-->
<!--                              <th>Ad Soyad</th>-->
<!---->
<!--                              </thead>-->
<!--                              <tbody>-->
<!--                              <tr>-->
<!--                                  <td><img class="iSize" src="--><?php //echo base_url('public/') ?><!--assets/img/faces/marc.jpg" /></td>-->
<!--                                  <td>-->
<!--                                      <span><b>Dakota Rice</b></span>-->
<!--                                      <br>-->
<!--                                      İT Departament-->
<!--                                  </td>-->
<!---->
<!--                              </tr>-->
<!--                              <tr>-->
<!--                                  <td>2</td>-->
<!--                                  <td>Minerva Hooper</td>-->
<!---->
<!--                              </tr>-->
<!--                              <tr>-->
<!--                                  <td>3</td>-->
<!--                                  <td>Sage Rodriguez</td>-->
<!---->
<!--                              </tr>-->
<!--                              <tr>-->
<!--                                  <td>4</td>-->
<!--                                  <td>Philip Chaney</td>-->
<!--                                  -->
<!--                              </tr>-->
<!--                              </tbody>-->
<!--                          </table>-->
<!--                      </div>-->
<!--                  </div>-->
<!--              </div>-->

          </div>
        </div>
      </div>
      <?php $this->load->view('admin/includes/footer'); ?>
      <?php $this->load->view('admin/includes/leftMenuColorFilter'); ?>
      <?php $this->load->view('admin/includes/footerJs'); ?>