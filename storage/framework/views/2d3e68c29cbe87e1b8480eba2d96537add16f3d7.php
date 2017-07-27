
<?php

/*
  if (isset($_GET['submit'])) {
    $example = $_GET['example'];
    $example2 = $_GET['example2'];
    echo $example . " " . $example2;
  } else {
*/


  if (isset($_GET['act'])) {

      $VAL = '';
  $Var0 = '';
  $Var1 = '';

    if (!empty($_GET['AT_0'])) { $Var0 = '0'; } 
    elseif (!empty($_GET['AT_1'])) { $Var0 = '1'; }

    if (!empty($_GET['AA_0'])) { $Var1 = '0'; }
    elseif (!empty($_GET['AA_1'])) { $Var1 = '1'; }

    $VAL = $Var0 . '~' . $Var1;

    echo $VAL; //Your code here
  } else {
?>


        <form action="" method="get" id="AT_0"><input type="hidden" name="AT_0"></form>
        <form method="get" id="AT_1"><input type="hidden" name="AT_1"></form>

        <button type="submit" form="AT_0" value="submit" class="button button_black">None</button>
        <button type="submit" form="AT_1" value="submit" class="button button_black">Vodka</button>
        <input name="example" type="text" id="AT" />



        <form action="" method="get" id="AA_0"><input type="hidden" name="AA_0"></form>
        <form action="" method="get" id="AA_1"><input type="hidden" name="AA_1"></form>

        <button type="submit" form="AA_0" value="submit" class="button button_black">None</button>
        <button type="submit" form="AA_1" value="submit" class="button button_black">1</button>
        <input name="example" type="text" id="AA" />


        <form action="test" method="get" id="act"><input type="hidden" name="act"></form>
<button type="submit" form="act" value="submit" class="button button_black">Submit</button>

<?php
  }
?>
<!--
<form action="" method="get">
  Example value: <input name="example" type="text" />
  Example value 2: <input name="example2" type="text" />
  <input name="submit" type="submit" />
</form>
-->

