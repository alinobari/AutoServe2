<?php
  $VAL = '';
  $Var0 = '';
  $Var1 = '';
  $Var2 = '';
  $Var3 = '';

  if (isset($_GET['MT_1'])) {
    $Var0 = $_GET['Alcohol_Type'];
    $Var1 = $_GET['Alcohol_Amount'];
    $Var2 = $_GET['Mix_Type'];
    $Var3 = $_GET['Mix_Amount'];
    $VAL = $Var0 . '~' . $Var1 . '~' . $Var2 . '~' . $Var3 ;

    //$url = 'https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe';
    //$myvars = '0~1~0~1~0~1';
/*
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
            "0~1~0~1~0~1");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec ($ch);

    curl_close ($ch);
    echo $response;
        //echo $VAL;
*/
  } else {
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AutoServe</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

  <!-- JavaScript -->
  <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="js/jquery.js"></script> 

</head>

<body>
  <div class="flex-center position-ref full-height">
    <div class="content">
      <div class="title m-b-md">
        AutoServe
      </div>

      <div class="links m-b-md">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about_us') }}">About Us</a>
        <a href="{{ url('/about_project') }}">About Project</a>
        <a href="{{ url('/gallery') }}">Gallery</a>
        <a href="{{ url('/contact_us') }}">Contact Us</a>
        <a href="{{ url('/serve') }}">Serve</a>
      </div>
    
      <div class="title-60 m-b-md">
        Serve
      </div>
<!--  
      <div class="m-b-md">
        <div class="text title-20 size-25">Alcohol Type</div>

        <button id="AT_0" class="button button_black">None</button>
        <button id="AT_1" class="button button_black">Vodka</button>
        <button id="AT_2" class="button button_black">Rum</button>
        <button id="AT_3" class="button button_black">Gin</button>
        
      </div>

      <div class="m-b-md">
        <div class="text title-20 size-25">Alcohol Amount (oz)</div>

        <button id="AA_0" class="button button_black">None</button>
        <button id="AA_1" class="button button_black">1</button>
        <button id="AA_2" class="button button_black">2</button>
        <button id="AA_3" class="button button_black">3</button>
      </div>
-->
       <div class="m-b-md">
        <div class="text title-20 size-25">Small</div>

        <!--<button id="MT_0" class="button button_black">None</button>-->
        <form action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=53470fe"
          method="POST" style="display: inline;" onsubmit="http://localhost:8000/serve">
          <input type="hidden" name="arg" value="0~0~1~1~0~0">
          <button id="MT_1"  type="submit" value="SEND" class="button button_black">Coke</button>
        </form>
        <form action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe"
          method="POST" style="display: inline;">
          <input type="hidden" name="arg" value="0~0~2~6~0~0">
          <button id="MT_1"  type="submit" value="SEND" class="button button_black">Sprite</button>
        </form>
        <form action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe"
          method="POST" style="display: inline;">
          <input type="hidden" name="arg" value="0~0~3~6~0~0">
          <button id="MT_1"  type="submit" value="SEND" class="button button_black" >Root Beer</button>
        </form>
      </div>

       <div class="m-b-md">
        <div class="text title-20 size-25">Large</div>

        <!--<button id="MT_0" class="button button_black">None</button>-->
        <form action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe"
          method="POST" style="display: inline;">
          <input type="hidden" name="arg" value="0~0~1~15~0~0">
          <button id="MT_1"  type="submit" value="SEND" class="button button_black">Coke</button>
        </form>
        <form action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe"
          method="POST" style="display: inline;">
          <input type="hidden" name="arg" value="0~0~2~15~0~0">
          <button id="MT_1"  type="submit" value="SEND" class="button button_black">Sprite</button>
        </form>
        <form action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe"
          method="POST" style="display: inline;">
          <input type="hidden" name="arg" value="0~0~3~15~0~0">
          <button id="MT_1"  type="submit" value="SEND" class="button button_black">Root Beer</button>
        </form>
      </div>
<!--      
      <div class="m-b-md">
        <div class="text title-20 size-25">Mix Amount (oz)</div>

        <button id="MA_0" class="button button_black">None</button>
        <button id="MA_1" class="button button_black">1</button>
        <button id="MA_2" class="button button_black">2</button>
        <button id="MA_3" class="button button_black">3</button>
        <button id="MA_4" class="button button_black">4</button>
        <button id="MA_5" class="button button_black">5</button>
        <button id="MA_6" class="button button_black">6</button>
        <button id="MA_7" class="button button_black">7</button>       
      </div>
      <div>
        <button id="MA_8" class="button button_black">8</button>
        <button id="MA_9" class="button button_black">9</button>
        <button id="MA_10" class="button button_black">10</button>
        <button id="MA_11" class="button button_black">11</button>
        <button id="MA_12" class="button button_black">12</button>
        <button id="MA_13" class="button button_black">13</button>
        <button id="MA_14" class="button button_black">14</button>
        <button id="MA_15" class="button button_black">15</button>
      </div>
-->
      <form action="" method="get">
        <input type="hidden" name="Alcohol_Type" id="AT_text" type="" />
        <input type="hidden" name="Alcohol_Amount" id="AA_text" type="" />
        <input type="hidden" name="Mix_Type" id="MT_text" type="" />
        <input type="hidden" name="Mix_Amount" id="MA_text" type="" />

        <div></div>

        <!--<button type="hidden" id="Drink_Submit" name="Drink_Submit" type="">SEND</button>-->

      </form>


<!--
      <form class="title-20" action="https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe"
        method="POST">
        Send a drink to AutoServe<br>


        <input name="Alcohol_Type" id="AT_text" type="" />
        <input name="Alcohol_Amount" id="AA_text" type="" />
        <input name="Mix_Type" id="MT_text" type="" />
        <input name="Mix_Amount" id="MA_text" type="" />


        <?php
          //$VAL = $Var0 . '~' . $Var1 . '~' . $Var2 . '~' . $Var3 ;
        ?>

        <input type="text" name="arg" value="0~1~0~1">
        <br>
        <br>
        <input type="submit" value="SEND">
      </form>
-->

    </div>
  </div>
</body>

</html>
<?php
  }
?>