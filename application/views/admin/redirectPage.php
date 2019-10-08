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
                        <p class="card-category">Tapşırığı yönləndir</p>
                    </div>
                    <div class="card-body">

                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success">
                                <?php echo $this->session->flashdata('success') ?>
                            </div>
                        <?php } ?>
                        <form method="post" action="<?php echo base_url('redirectPageAct/'.$getTaskId['id']) ?>"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Yönləndir</label>

                                         <select class="js-example-basic-single form-control" name="users[]" multiple>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
                                                <?php foreach ($getAllUsersForTask as $getAllUsersForTaskKey) { ?>
                                                    <?php if (in_array($getAllUsersForTaskKey['id'],explode(',',$getRedirectUsersIds['redirect_ids']))) { ?>
                                                        <option selected value="<?php echo $getAllUsersForTaskKey['id'] ?>"><?php echo $getAllUsersForTaskKey['name'] . " " . $getAllUsersForTaskKey['surname'] . " - " . $getAllUsersForTaskKey['department']; ?></option>

                                                    <?php } else { ?>
                                                        <option  value="<?php echo $getAllUsersForTaskKey['id'] ?>"><?php echo $getAllUsersForTaskKey['name'] . " " . $getAllUsersForTaskKey['surname'] . " - " . $getAllUsersForTaskKey['department']; ?></option>
                                                    <?php } ?>
                                                <?php } ?>


                                            </select>

                                        </div>
                                    </div>
                                </div>






                            <button type="submit" class="btn btn-primary pull-right">Yönləndir</button>
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