<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Manage Users</title>

<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>


<style>
.onoffswitch { position: relative; width: 95px; -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none; } .onoffswitch-checkbox { display: none; } .onoffswitch-label { display: block; overflow: hidden; cursor: pointer; border: 2px solid #999999; border-radius: 0px; } .onoffswitch-inner { display: block; width: 200%; margin-left: -100%; transition: margin 0.3s ease-in 0s; } .onoffswitch-inner:before, .onoffswitch-inner:after { display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 26px; font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold; box-sizing: border-box; border: 2px solid transparent; background-clip: padding-box; } .onoffswitch-inner:before { content: "Active"; padding-left: 10px; background-color: #327D1F; color: #FFFFFF; } .onoffswitch-inner:after { content: "Disable"; padding-right: 10px; background-color: #CF1414; color: #FFFFFF; text-align: right; } .onoffswitch-switch { display: block; width: 18px; margin: 0px; background: #1094E0; position: absolute; top: 0; bottom: 0; right: 77px; transition: all 0.3s ease-in 0s; } .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner { margin-left: 0; } .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch { right: 0px; }
</style>

  </head>

  <body id="page-top">
    <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">

        <?php include APPPATH.'views/admin/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('admin/Dashboard'); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Manage Users</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Users Details

             <div align="right">


<a href="<?php echo site_url('user/signup0'); ?>" class="pull-right btn btn-success btn-xs" name="button"><i class="fas fa-plus"></i> Add New</a>
        <a class="pull-right btn btn-primary btn-large" style="margin-right:40px" href='<?= base_url() ?>admin/crud/export_csv'><i class="fa fa-file-excel-o"></i> Export Data</a>


</div>

                   </div>

            <div class="card-body">
              <div class="table-responsive">
<!---- Success Message ---->







<?php if ($this->session->flashdata('success')) { ?>

  <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>

<?php } ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email id</th>
                      <th>Reg date</th>
                      <th>Action</th>
                      <th>Status</th>
                    </tr>
                  </thead>

                  <tbody>

<?php
if(count($userdetails)) :
$cnt=1;
foreach ($userdetails as $row) :
?>
                    <tr>
                      <td><?php echo htmlentities($cnt);?></td>
                      <td><?php echo htmlentities($row->firstName)?></td>
                      <td><?php echo htmlentities($row->lastName)?></td>
                      <td><?php echo htmlentities($row->emailId)?></td>
                      <td><?php echo htmlentities($row->regDate)?></td>
                      <td><?php echo  anchor("admin/Manage_Users/getuserdetail/{$row->id}",' ','class="fa fa-info-circle"')?>
                        <?php echo  anchor("admin/Manage_Users/deleteuser/{$row->id}",' ','class="fa fa-trash"')?>
                        <?php echo  anchor("admin/User_profile/updateprofile/{$row->id}",' ','class="fa fa-edit"')?>


                      </td>
                    <td>  <div class="onoffswitch" id="<?php echo $row->id; ?>">
                           <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox status " id="myonoffswitch<?php echo $row->id; ?>" value="<?php echo $row->isActive; ?>" <?php echo $row->isActive == 1 ? 'checked' : '' ?> />
                       <label class="onoffswitch-label" for="myonoffswitch<?php echo $row->id; ?>" >
                           <span class="onoffswitch-inner"></span>
                           <span class="onoffswitch-switch"></span>
                       </label>
                     </div></td>

                    </tr>
 <?php
$cnt++;
endforeach;
else : ?>

<tr>
<td colspan="6">No Record found</td>
</tr>
<?php
endif;
?>


                  </tbody>
                </table>
              </div>
            </div>

          </div>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
    <?php include APPPATH.'views/admin/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



  <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

<script>
$(document).on("click",".status",function(){
       var ida = $(this).parent().attr('id');
       if($(this).prop("checked") == true){
              $.ajax({
                            url:'admin/Manage_Users/change_user_status/true',
                            type:'post',
                            data:'id='+ida,
                            success:function(){
                                   }
                        });
                     }
                     else if($(this).prop("checked") == false){
                            $.ajax({
                                          url:'admin/Manage_Users/change_user_status/false',
                                          type:'post',
                                          data:'id='+ida,
                                          success:function(){
                                                 }
                     });
                            }
                     });
</script>

  </body>

</html>
