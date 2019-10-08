<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-12 col-md-12">
                    <div class="card">

<?php

//print_r('<pre>');
//print_r($tasks) ?>

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
                        <div class="card-body ">
                            <div class="tab-content">
                                <?php if ($this->session->flashdata('success')) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php } ?>



                                <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>

                                    <button style="background: linear-gradient(60deg, #ab47bc, #8e24aa)"  type="button" class="btn btn-primary btn-link btn-sm pull-right">
                                        <a href="<?php echo base_url('addTask') ?>">
                                    <span class="addNewPerson pull-left" style="color: white">Yenİ tapşırıq yarat &nbsp;&nbsp;
                                        <i class="material-icons">playlist_add</i>
                                    </span>
                                        </a>
                                    </button>

                                <?php  }
                                       elseif ($_SESSION['user_privilege'] == 'Sadə')
                                       { ?>

                                        <button style="background: linear-gradient(60deg, #ab47bc, #8e24aa)"  type="button" class="btn btn-primary btn-link btn-sm pull-right">
                                        <a href="<?php echo base_url('userTaskAdd') ?>">
                                        <span class="addNewPerson pull-left" style="color: white">Yenİ tapşırıq yarat &nbsp;&nbsp;
                                            <i class="material-icons">playlist_add</i>
                                        </span>
                                        </a>
                                        </button>

                                       <?php } ?>




                                <style>
                                    .rSizeİmg {
                                        width: 30px;
                                        height: 30px;
                                        border-radius: 50%;
                                    }

                                    .importanto {
                                        background: red;
                                        padding: 5px 10px;
                                        box-sizing: border-box;
                                        color: white;
                                        border-radius: 3px;
                                    }

                                    .normImportanto {
                                        background: orange;
                                        padding: 5px 10px;
                                        box-sizing: border-box;
                                        color: white;
                                        border-radius: 3px;
                                    }
                                    .lowImportanto {
                                        background: #808000;
                                        padding: 5px 10px;
                                        box-sizing: border-box;
                                        color: white;
                                        border-radius: 3px;
                                    }
                                </style>









<!--           New start                     -->


                                <br>
                                <br>
                                <div class="tab-pane active" id="alls">

                                    <table class="table table-hover">

                                        <tr>
                                            <th>Göndərdi</th>
                                            <th>Kimə</th>
                                            <th>Yönləndirilib</th>
                                            <th>Başlıq</th>
                                            <th>Yaranma tarixi</th>
                                            <th>Başlama tarixi</th>
                                            <th>Bitmə tarixi</th>
                                            <th>Vacibliyi</th>
                                            <th>Əməliyyatlar</th>

<?php
//
//echo $_SESSION['user_data'];
//print_r('<pre>');
//print_r($statusToCheckWhoSend); ?>
                                        </tr>
                                        <tbody>

                                        <?php foreach ($tasks as $task) { ?>
<!--            --><?php //print_r('<pre>') ;print_r($task); ?>
                                            <?php if($task['done'] == '0'){ ?>


                                            <tr>



                                                    <td>
                                                        <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                             title="<?= $task['name'] . ' ' . $task['surname'] ?> &#013; - <?= $task['department'] ?>"
                                                             src="<?= base_url('upload/users/' . $task['image']) ?>"/>
                                                    </td>
                                                    <td>
                                                        <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                        <?php if (isset($users)) { ?>
                                                            <?php foreach ($users as $users) { ?>
                                                                <?php $loop_user = explode('|', $users) ?>
                                                                <?php if ($loop_user['4'] != 1) { ?>
                                                                    <img style="object-fit: cover!important; margin: 1px 0px" class="rSizeİmg" rel="tooltip"
                                                                         title="<?= $loop_user['0'] . ' ' . $loop_user['1'] ?> &#013; - <?= $loop_user['2'] ?>"
                                                                         src="<?= base_url('upload/users/' . $loop_user['3']) ?>"/>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </td>





                                                <td>
                                                    <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                    <?php if (isset($users)) { ?>
                                                        <?php foreach ($users as $users) { ?>
                                                            <?php $loop_user = explode('|', $users) ?>
                                                            <?php if ($loop_user['4'] != 0) { ?>
                                                                <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                                     title="<?= $loop_user['5'] . ' ' . $loop_user['6'] ?> &#013; - <?= $loop_user['7'] ?>"
                                                                     src="<?= base_url('upload/users/' . $loop_user['8']) ?>"/>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo $task['titile']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $task['created_at']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $task['started_date']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $task['deadline']; ?>
                                                </td>

                                                <td>
                                                    <?php if($task['status_id'] == '1'){ ?>
                                                        <span class="importanto"><?php echo $tasksStatuses[0]['name']; ?></span>
                                                    <?php }elseif ($task['status_id'] == '2'){ ?>
                                                        <span class="normImportanto"><?php echo $tasksStatuses[1]['name']; ?></span>
                                                    <?php }elseif ($task['status_id'] == '3'){ ?>
                                                        <span class="lowImportanto"><?php echo $tasksStatuses[2]['name']; ?></span>
                                                    <?php }
                                                    else{
                                                        echo " ";
                                                    } ?>

                                                </td>

                                                <td class="td-actions text-right">
                                                    <a class="nav-link" href="#pablo" id="menuT" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="material-icons">menu</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="text-align: center" aria-labelledby="menuT">
                                                        <a href="<?php echo base_url('more/'.$task['id']) ?>" rel="tooltip"
                                                           title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                            <i class="material-icons">remove_red_eye</i>
                                                        </a>

                                                        <a href="<?php echo base_url('redirectPage/'.$task['id']) ?>" rel="tooltip" title="Yönləndir"
                                                                class="btn btn-primary btn-link btn-sm">
                                                            <i class="material-icons">redo</i>
                                                        </a>


                                                        <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>

                                                        <a href="<?php echo base_url('updateTask/'.$task['id']) ?>" rel="tooltip" title="Redaktə et"
                                                                    class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                        </a>

                                                        <a href="<?php echo base_url('deleteTask/'.$task['id']) ?>" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                        </a>

                                                        <?php } else {
                                                            echo '';
                                                        } ?>


                                                    </div>
                                                </td>

                                            </tr>
                                            <?php } ?>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>









<!--         in proccess start                      -->










                                <div class="tab-pane" id="processes">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Göndərdi</th>
                                            <th>Kimə</th>
                                            <th>Yönləndirilib</th>
                                            <th>Başlıq</th>
                                            <th>Yaranma tarixi</th>
                                            <th>Başlama tarixi</th>
                                            <th>Bitmə tarixi</th>
                                            <th>Vacibliyi</th>
                                            <th>Əməliyyatlar</th>

                                            <?php
                                            //
                                            //echo $_SESSION['user_data'];
                                            //print_r('<pre>');
                                            //print_r($statusToCheckWhoSend); ?>
                                        </tr>
                                        <tbody>

                                        <?php foreach ($tasks as $task) { ?>

                                            <?php if($task['done'] == '1'){ ?>
                                            <tr>



                                                <td>
                                                    <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                         title="<?= $task['name'] . ' ' . $task['surname'] ?> &#013; - <?= $task['department'] ?>"
                                                         src="<?= base_url('upload/users/' . $task['image']) ?>"/>
                                                </td>
                                                <td>
                                                    <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                    <?php if (isset($users)) { ?>
                                                        <?php foreach ($users as $users) { ?>
                                                            <?php $loop_user = explode('|', $users) ?>
                                                            <?php if ($loop_user['4'] != 1) { ?>
                                                                <img style="object-fit: cover!important; margin: 1px 0px" class="rSizeİmg" rel="tooltip"
                                                                     title="<?= $loop_user['0'] . ' ' . $loop_user['1'] ?> &#013; - <?= $loop_user['2'] ?>"
                                                                     src="<?= base_url('upload/users/' . $loop_user['3']) ?>"/>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </td>





                                                <td>
                                                    <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                    <?php if (isset($users)) { ?>
                                                        <?php foreach ($users as $users) { ?>
                                                            <?php $loop_user = explode('|', $users) ?>
                                                            <?php if ($loop_user['4'] != 0) { ?>
                                                                <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                                     title="<?= $loop_user['5'] . ' ' . $loop_user['6'] ?> &#013; - <?= $loop_user['7'] ?>"
                                                                     src="<?= base_url('upload/users/' . $loop_user['8']) ?>"/>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo $task['titile']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $task['created_at']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $task['started_date']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $task['deadline']; ?>
                                                </td>

                                                <td>
                                                    <?php if($task['status_id'] == '1'){ ?>
                                                        <span class="importanto"><?php echo $tasksStatuses[0]['name']; ?></span>
                                                    <?php }elseif ($task['status_id'] == '2'){ ?>
                                                        <span class="normImportanto"><?php echo $tasksStatuses[1]['name']; ?></span>
                                                    <?php }elseif ($task['status_id'] == '3'){ ?>
                                                        <span class="lowImportanto"><?php echo $tasksStatuses[2]['name']; ?></span>
                                                    <?php }
                                                    else{
                                                        echo " ";
                                                    } ?>

                                                </td>

                                                <td class="td-actions text-right">
                                                    <a class="nav-link" href="#pablo" id="menuT" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="material-icons">menu</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         style="text-align: center" aria-labelledby="menuT">
                                                        <a href="<?php echo base_url('more/'.$task['id']) ?>" rel="tooltip"
                                                           title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                            <i class="material-icons">remove_red_eye</i>
                                                        </a>

                                                        <a href="<?php echo base_url('redirectPage/'.$task['id']) ?>" rel="tooltip" title="Yönləndir"
                                                           class="btn btn-primary btn-link btn-sm">
                                                            <i class="material-icons">redo</i>
                                                        </a>


                                                        <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>

                                                            <a href="<?php echo base_url('updateTask/'.$task['id']) ?>" rel="tooltip" title="Redaktə et"
                                                               class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </a>

                                                            <a href="<?php echo base_url('deleteTask/'.$task['id']) ?>" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </a>

                                                        <?php } else {
                                                            echo '';
                                                        } ?>


                                                    </div>
                                                </td>

                                            </tr>
                                            <?php } ?>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>














<!--       Finish start                         -->












                                <div class="tab-pane" id="dones">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Göndərdi</th>
                                            <th>Kimə</th>
                                            <th>Yönləndirilib</th>
                                            <th>Başlıq</th>
                                            <th>Yaranma tarixi</th>
                                            <th>Başlama tarixi</th>
                                            <th>Bitmə tarixi</th>
                                            <th>Vacibliyi</th>
                                            <th>Əməliyyatlar</th>

                                            <?php
                                            //
                                            //echo $_SESSION['user_data'];
                                            //print_r('<pre>');
                                            //print_r($statusToCheckWhoSend); ?>
                                        </tr>
                                        <tbody>

                                        <?php foreach ($tasks as $task) { ?>

                                            <?php if($task['done'] == '2'){ ?>
                                                <tr>



                                                    <td>
                                                        <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                             title="<?= $task['name'] . ' ' . $task['surname'] ?> &#013; - <?= $task['department'] ?>"
                                                             src="<?= base_url('upload/users/' . $task['image']) ?>"/>
                                                    </td>
                                                    <td>
                                                        <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                        <?php if (isset($users)) { ?>
                                                            <?php foreach ($users as $users) { ?>
                                                                <?php $loop_user = explode('|', $users) ?>
                                                                <?php if ($loop_user['4'] != 1) { ?>
                                                                    <img style="object-fit: cover!important; margin: 1px 0px" class="rSizeİmg" rel="tooltip"
                                                                         title="<?= $loop_user['0'] . ' ' . $loop_user['1'] ?> &#013; - <?= $loop_user['2'] ?>"
                                                                         src="<?= base_url('upload/users/' . $loop_user['3']) ?>"/>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </td>





                                                    <td>
                                                        <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                        <?php if (isset($users)) { ?>
                                                            <?php foreach ($users as $users) { ?>
                                                                <?php $loop_user = explode('|', $users) ?>
                                                                <?php if ($loop_user['4'] != 0) { ?>
                                                                    <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                                         title="<?= $loop_user['5'] . ' ' . $loop_user['6'] ?> &#013; - <?= $loop_user['7'] ?>"
                                                                         src="<?= base_url('upload/users/' . $loop_user['8']) ?>"/>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['titile']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['created_at']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['started_date']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['deadline']; ?>
                                                    </td>

                                                    <td>
                                                        <?php if($task['status_id'] == '1'){ ?>
                                                            <span class="importanto"><?php echo $tasksStatuses[0]['name']; ?></span>
                                                        <?php }elseif ($task['status_id'] == '2'){ ?>
                                                            <span class="normImportanto"><?php echo $tasksStatuses[1]['name']; ?></span>
                                                        <?php }elseif ($task['status_id'] == '3'){ ?>
                                                            <span class="lowImportanto"><?php echo $tasksStatuses[2]['name']; ?></span>
                                                        <?php }
                                                        else{
                                                            echo " ";
                                                        } ?>

                                                    </td>

                                                    <td class="td-actions text-right">
                                                        <a class="nav-link" href="#pablo" id="menuT" data-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">menu</i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                             style="text-align: center" aria-labelledby="menuT">
                                                            <a href="<?php echo base_url('more/'.$task['id']) ?>" rel="tooltip"
                                                               title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">remove_red_eye</i>
                                                            </a>

                                                            <a href="<?php echo base_url('redirectPage/'.$task['id']) ?>" rel="tooltip" title="Yönləndir"
                                                               class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">redo</i>
                                                            </a>


                                                            <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>

                                                                <a href="<?php echo base_url('updateTask/'.$task['id']) ?>" rel="tooltip" title="Redaktə et"
                                                                   class="btn btn-primary btn-link btn-sm">
                                                                    <i class="material-icons">edit</i>
                                                                </a>

                                                                <a href="<?php echo base_url('deleteTask/'.$task['id']) ?>" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                                    <i class="material-icons">close</i>
                                                                </a>

                                                            <?php } else {
                                                                echo '';
                                                            } ?>


                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>














<!--Abort start-->















                                <div class="tab-pane" id="cancels">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Göndərdi</th>
                                            <th>Kimə</th>
                                            <th>Yönləndirilib</th>
                                            <th>Başlıq</th>
                                            <th>Yaranma tarixi</th>
                                            <th>Başlama tarixi</th>
                                            <th>Bitmə tarixi</th>
                                            <th>Vacibliyi</th>
                                            <th>Əməliyyatlar</th>

                                            <?php
                                            //
                                            //echo $_SESSION['user_data'];
                                            //print_r('<pre>');
                                            //print_r($statusToCheckWhoSend); ?>
                                        </tr>
                                        <tbody>

                                        <?php foreach ($tasks as $task) { ?>

                                            <?php if($task['done'] == '3'){ ?>
                                                <tr>



                                                    <td>
                                                        <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                             title="<?= $task['name'] . ' ' . $task['surname'] ?> &#013; - <?= $task['department'] ?>"
                                                             src="<?= base_url('upload/users/' . $task['image']) ?>"/>
                                                    </td>
                                                    <td>
                                                        <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                        <?php if (isset($users)) { ?>
                                                            <?php foreach ($users as $users) { ?>
                                                                <?php $loop_user = explode('|', $users) ?>
                                                                <?php if ($loop_user['4'] != 1) { ?>
                                                                    <img style="object-fit: cover!important; margin: 1px 0px" class="rSizeİmg" rel="tooltip"
                                                                         title="<?= $loop_user['0'] . ' ' . $loop_user['1'] ?> &#013; - <?= $loop_user['2'] ?>"
                                                                         src="<?= base_url('upload/users/' . $loop_user['3']) ?>"/>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </td>





                                                    <td>
                                                        <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                        <?php if (isset($users)) { ?>
                                                            <?php foreach ($users as $users) { ?>
                                                                <?php $loop_user = explode('|', $users) ?>
                                                                <?php if ($loop_user['4'] != 0) { ?>
                                                                    <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                                         title="<?= $loop_user['5'] . ' ' . $loop_user['6'] ?> &#013; - <?= $loop_user['7'] ?>"
                                                                         src="<?= base_url('upload/users/' . $loop_user['8']) ?>"/>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['titile']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['created_at']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['started_date']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['deadline']; ?>
                                                    </td>

                                                    <td>
                                                        <?php if($task['status_id'] == '1'){ ?>
                                                            <span class="importanto"><?php echo $tasksStatuses[0]['name']; ?></span>
                                                        <?php }elseif ($task['status_id'] == '2'){ ?>
                                                            <span class="normImportanto"><?php echo $tasksStatuses[1]['name']; ?></span>
                                                        <?php }elseif ($task['status_id'] == '3'){ ?>
                                                            <span class="lowImportanto"><?php echo $tasksStatuses[2]['name']; ?></span>
                                                        <?php }
                                                        else{
                                                            echo " ";
                                                        } ?>

                                                    </td>

                                                    <td class="td-actions text-right">
                                                        <a class="nav-link" href="#pablo" id="menuT" data-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">menu</i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                             style="text-align: center" aria-labelledby="menuT">
                                                            <a href="<?php echo base_url('more/'.$task['id']) ?>" rel="tooltip"
                                                               title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">remove_red_eye</i>
                                                            </a>

                                                            <a href="<?php echo base_url('redirectPage/'.$task['id']) ?>" rel="tooltip" title="Yönləndir"
                                                               class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">redo</i>
                                                            </a>


                                                            <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>

                                                                <a href="<?php echo base_url('updateTask/'.$task['id']) ?>" rel="tooltip" title="Redaktə et"
                                                                   class="btn btn-primary btn-link btn-sm">
                                                                    <i class="material-icons">edit</i>
                                                                </a>

                                                                <a href="<?php echo base_url('deleteTask/'.$task['id']) ?>" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                                    <i class="material-icons">close</i>
                                                                </a>

                                                            <?php } else {
                                                                echo '';
                                                            } ?>


                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>













<!--    archives  start                       -->













                                <div class="tab-pane" id="archives">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Göndərdi</th>
                                            <th>Kimə</th>
                                            <th>Yönləndirilib</th>
                                            <th>Başlıq</th>
                                            <th>Yaranma tarixi</th>
                                            <th>Başlama tarixi</th>
                                            <th>Bitmə tarixi</th>
                                            <th>Vacibliyi</th>
                                            <th>Əməliyyatlar</th>

                                            <?php
                                            //
                                            //echo $_SESSION['user_data'];
                                            //print_r('<pre>');
                                            //print_r($statusToCheckWhoSend); ?>
                                        </tr>
                                        <tbody>

                                        <?php foreach ($tasks as $task) { ?>

                                            <?php if($task['done'] == '4'){ ?>
                                                <tr>



                                                    <td>
                                                        <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                             title="<?= $task['name'] . ' ' . $task['surname'] ?> &#013; - <?= $task['department'] ?>"
                                                             src="<?= base_url('upload/users/' . $task['image']) ?>"/>
                                                    </td>
                                                    <td>
                                                        <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                        <?php if (isset($users)) { ?>
                                                            <?php foreach ($users as $users) { ?>
                                                                <?php $loop_user = explode('|', $users) ?>
                                                                <?php if ($loop_user['4'] != 1) { ?>
                                                                    <img style="object-fit: cover!important; margin: 1px 0px" class="rSizeİmg" rel="tooltip"
                                                                         title="<?= $loop_user['0'] . ' ' . $loop_user['1'] ?> &#013; - <?= $loop_user['2'] ?>"
                                                                         src="<?= base_url('upload/users/' . $loop_user['3']) ?>"/>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </td>





                                                    <td>
                                                        <?php $users = isset($task['users']) ? explode(',', $task['users']) : false; ?>
                                                        <?php if (isset($users)) { ?>
                                                            <?php foreach ($users as $users) { ?>
                                                                <?php $loop_user = explode('|', $users) ?>
                                                                <?php if ($loop_user['4'] != 0) { ?>
                                                                    <img style="object-fit: cover!important;" class="rSizeİmg" rel="tooltip"
                                                                         title="<?= $loop_user['5'] . ' ' . $loop_user['6'] ?> &#013; - <?= $loop_user['7'] ?>"
                                                                         src="<?= base_url('upload/users/' . $loop_user['8']) ?>"/>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['titile']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['created_at']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['started_date']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $task['deadline']; ?>
                                                    </td>

                                                    <td>
                                                        <?php if($task['status_id'] == '1'){ ?>
                                                            <span class="importanto"><?php echo $tasksStatuses[0]['name']; ?></span>
                                                        <?php }elseif ($task['status_id'] == '2'){ ?>
                                                            <span class="normImportanto"><?php echo $tasksStatuses[1]['name']; ?></span>
                                                        <?php }elseif ($task['status_id'] == '3'){ ?>
                                                            <span class="lowImportanto"><?php echo $tasksStatuses[2]['name']; ?></span>
                                                        <?php }
                                                        else{
                                                            echo " ";
                                                        } ?>

                                                    </td>

                                                    <td class="td-actions text-right">
                                                        <a class="nav-link" href="#pablo" id="menuT" data-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">menu</i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                             style="text-align: center" aria-labelledby="menuT">
                                                            <a href="<?php echo base_url('more/'.$task['id']) ?>" rel="tooltip"
                                                               title="Ətraflı" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">remove_red_eye</i>
                                                            </a>

                                                            <a href="<?php echo base_url('redirectPage/'.$task['id']) ?>" rel="tooltip" title="Yönləndir"
                                                               class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">redo</i>
                                                            </a>


                                                            <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>

                                                                <a href="<?php echo base_url('updateTask/'.$task['id']) ?>" rel="tooltip" title="Redaktə et"
                                                                   class="btn btn-primary btn-link btn-sm">
                                                                    <i class="material-icons">edit</i>
                                                                </a>

                                                                <a href="<?php echo base_url('deleteTask/'.$task['id']) ?>" rel="tooltip" title="Sil" class="btn btn-danger btn-link btn-sm">
                                                                    <i class="material-icons">close</i>
                                                                </a>

                                                            <?php } else {
                                                                echo '';
                                                            } ?>


                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        <?php } ?>

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
                <!--                                  <td><img class="iSize" src="-->
                <?php //echo base_url('public/') ?><!--assets/img/faces/marc.jpg" /></td>-->
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