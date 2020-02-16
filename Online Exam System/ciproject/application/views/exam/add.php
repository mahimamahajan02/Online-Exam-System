<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Add Exam</title>
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>
  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add Exam</div>
        <div class="card-body">
<!---- Success Message ---->
<?php if ($this->session->flashdata('success')) { ?>

  <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>

<?php } ?>


<!---- Error Message ---->

<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>

<?php } ?>



   <?php echo form_open('exam/add');?>
            <div class="form-group">
              <div class="form-row">

                                <div class="col-md-6">
                                <div class="form-label-group">

                                  <div class="form-group">

                                      <select name="coursename" id="coursename" class="form-control" style="width:300px">
                                        <?php
                                        if(count($coursedetails)) :
                                        $cnt=1;
                                        foreach ($coursedetails as $row) :
                                        ?>

                                        <option value="<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['courseName'])?></option>



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

                                      </select>
                                  </div>



                </div>
                </div>

                <div class="col-md-6">
                <div class="form-label-group">


                                            <div class="form-group">

                                                <select name="subjectname" id="subjectname" class="form-control" style="width:300px">
                                                  <?php
                                                  if(count($subjectdetails)) :
                                                  $cnt=1;
                                                  foreach ($subjectdetails as $row) :
                                                  ?>

                                                  <option value="<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['subjectName'])?></option>



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

                                                </select>
                                            </div>
            </div>
            </div>






                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'question','id'=>'question','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('question')]);?>
<?php echo form_label('Enter question', 'question'); ?>
<?php echo form_error('question',"<div style='color:red'>","</div>");?>

                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'option1','id'=>'option1','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('option1')]);?>
<?php echo form_label('Enter option1', 'option1'); ?>
<?php echo form_error('option1',"<div style='color:red'>","</div>");?>

                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'option2','id'=>'option2','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('option2')]);?>
<?php echo form_label('Enter option2', 'option2'); ?>
<?php echo form_error('option2',"<div style='color:red'>","</div>");?>

                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'option3','id'=>'option3','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('option3')]);?>
<?php echo form_label('Enter option3', 'option3'); ?>
<?php echo form_error('option3',"<div style='color:red'>","</div>");?>

                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'correct','id'=>'correct','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('correct')]);?>
<?php echo form_label('Enter correct', 'correct'); ?>
<?php echo form_error('correct',"<div style='color:red'>","</div>");?>

                  </div>
                </div>



              </div>
            </div>




 <?php echo form_submit(['name'=>'Add','value'=>'Add','class'=>'btn btn-primary btn-block']); ?>

          </form>

          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo site_url('teacher/Manage_Exams'); ?>">Back</a>

          </div>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  </body>

</html>
