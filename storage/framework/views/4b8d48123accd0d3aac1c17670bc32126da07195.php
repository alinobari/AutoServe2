
<?php
  if (isset($_GET['submit'])) {
    $example = $_GET['example'];
    $example2 = $_GET['example2'];
    echo $example . "~" . $example2;
  } else {
?>


<!--
<form action="" method="get">
  <button class="button button_black">None</button>
  <input name="example" type="text" />

  <input name="example2" type="button" value="2">2</input>
  <input name="submit" type="submit" />
</form>
-->

<script src="<?php echo e(URL::asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="js/jquery.js"></script>

    <button id="A_1">A1</button>
    <button id="A_2">A2</button>

    <button id="B_1">B1</button>
    <button id="B_2">B2</button>

<form action="" method="get">

    <input name="example" id="A_text" type="hidden" />

    <div></div>


    <input name="example2" id="B_text" type="hidden" />

    <div></div>

    <input id="B_submit" name="submit" type="submit" />
</form>

<?php
  }
?>