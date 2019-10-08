<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/leftMenu'); ?>
<?php $this->load->view('admin/includes/navbar'); ?>

<style>
    .importantoAdmin {
        /*background: cornflowerblue;*/
        background: linear-gradient(60deg, #26c6da, #00acc1);
        padding: 5px 10px;
        box-sizing: border-box;
        color: white;
        border-radius: 3px;
    }

    .importantoSimple {
        background: white;
        padding: 5px 10px;
        box-sizing: border-box;
        color: #9c27b0;
        border-radius: 3px;
    }
</style>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">

                        <?php if ($_SESSION['user_privilege'] == 'Admin') { ?>
                            <b><span class="importantoAdmin pull-right">Admin</span></b>
                        <?php } else { ?>
                            <b><span class="importantoSimple pull-right">Sade</span></b>
                        <?php } ?>
                        <h4 class="card-title">Tapşırıq</h4>
                        <p class="card-category">Tapşırığı yenilə</p>
                    </div>
                    <div class="card-body">

                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <?php echo $this->session->flashdata('success') ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('err')) { ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('err') ?>
                            </div>
                        <?php }
                        //                        print_r('<pre>');print_r($getUpdateTask)
                        ?>

                        <form method="post" action="<?php echo base_url('updateTaskAct/' . $getUpdateTask['id']) ?>"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kimə</label>

                                            <select class="js-example-basic-single form-control" name="users[]"
                                                    multiple>
                                                <?php foreach ($getAllUsersForTask as $getAllUsersForTaskKey) { ?>
                                                    <?php if (in_array($getAllUsersForTaskKey['id'], explode(',', $getAllAssigmentUsersForTask['user_ids']))) { ?>
                                                        <option selected
                                                                value="<?php echo $getAllUsersForTaskKey['id'] ?>"><?php echo $getAllUsersForTaskKey['name'] . " " . $getAllUsersForTaskKey['surname'] . " - " . $getAllUsersForTaskKey['department']; ?></option>

                                                    <?php } else { ?>
                                                        <option value="<?php echo $getAllUsersForTaskKey['id'] ?>"><?php echo $getAllUsersForTaskKey['name'] . " " . $getAllUsersForTaskKey['surname'] . " - " . $getAllUsersForTaskKey['department']; ?></option>
                                                    <?php } ?>
                                                <?php } ?>

                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Vacibliyi</label>
                                            <select name="status" id="" class="form-control">
                                                <?php foreach ($getAllTaskStatuses as $getAllTaskStatusesKey) { ?>
                                                    <option <?php if($getAllTaskStatusesKey['id'] == $getUpdateTask['status_id']){ echo 'SELECTED';} ?> value="<?php echo $getAllTaskStatusesKey['id'] ?>"><?php echo $getAllTaskStatusesKey['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>


                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">

                                        <div class="form-group" style="margin-top: 19px">
                                            <label class="bmd-label-floating">Bitmə tarixini yenilə</label><br>
                                            <?php $deadline = date('Y-m-d\TH:i', strtotime($getUpdateTask['deadline'])); ?>
                                            <input name="deadline" type="datetime-local" class="form-control a" value="<?php echo $deadline ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nəticə</label>
                                            <select name="done" id="" class="form-control">

                                                <?php foreach ($getTaskAllDoneStatus as $getTaskAllDoneStatusKey) { ?>
                                                    <option <?php if($getTaskAllDoneStatusKey['done_number'] == $getUpdateTask['done']){ echo 'SELECTED';} ?> value="<?php echo $getTaskAllDoneStatusKey['done_number'] ?>"><?php echo $getTaskAllDoneStatusKey['done_name'] ?></option>
                                                   <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Başlıq</label>
                                            <input name="title" type="text" class="form-control"
                                                   value="<?php echo $getUpdateTask['titile'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Ətraflı məlumat</label>
                                            <textarea name="description" class="form-control" id="" cols="30" rows="10"><?php echo $getUpdateTask['description'] ?></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <?php if ($getUpdateTask['task_image'] == !NULL) { ?>
                                    <div class="col-md-6">
                                        <div class="">
                                            <label class="bmd-label-floating">Şəkil</label>
                                            <br>
                                            <img style="border-radius: 5px; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);"
                                                 width="250px"
                                                 src="<?php echo base_url('upload/tasks/' . $getUpdateTask['task_image']) ?>"
                                                 alt="">
                                        </div>
                                    </div>
                                <?php } else {
                                    echo '';
                                } ?>

                                <div class="col-md-6">
                                    <div class="">
                                        <label class="bmd-label-floating">Yeni şəkil</label>
                                        <input name="images" type="file" class="form-control">
                                    </div>
                                </div>


                            </div>
                            <br>
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


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-single').select2();
    });
</script>