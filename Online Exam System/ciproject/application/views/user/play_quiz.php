<!DOCTYPE html>



<html>
<body>

<div class="timer">
            <time id="countdown">10:00</time>
        </div>

<script type="text/javascript">

      var seconds = 600;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
             //form1 is your form name
            document.form1.submit();
          } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);
</script>
</body>
</html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Exam </title>

</head>
<body>

<div id="container">
	<h1>Exam </h1>

    <form method="post" action="<?php echo base_url();?>user/Questions/resultdisplay"name="form2" id="form2" >


    <?php foreach($questions as $row) { ?>

    <?php $ans_array = array($row->option1, $row->option2, $row->option3, $row->correct);
	shuffle($ans_array); ?>

    <p><?=$row->id?>.<?=$row->question?></p>

    <input type="radio" name="quizid<?=$row->id?>" value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?><br>
    <input type="radio" name="quizid<?=$row->id?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
    <input type="radio" name="quizid<?=$row->id?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
    <input type="radio" name="quizid<?=$row->id?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>

    <?php } ?>

    <br><br>
    <input type="submit" value="Submit!">

    </form>

</div>

</body>
</html>
