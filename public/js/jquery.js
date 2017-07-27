$(document).ready(function() {

    //Test3 code
    $("#demo").html("Hello, World!");

    $("#btn1").click(function () {
        $("#test1").val("10")
        $("#test2").val("11")
        $("#test3").val("12")
    });

    //Test2 code
    $("#A_1").click(function () {
        $("#A_text").val("A1")
    });
    $("#A_2").click(function () {
        $("#A_text").val("A2")
    });

    $("#B_1").click(function () {
        $("#B_text").val("B1")
    });
    $("#B_2").click(function () {
        $("#B_text").val("B2")
    });



});

$(document).ready(function() {

    //Serve
    $("#AT_0").click(function () {
        $("#AT_text").val("0")
    });
    $("#AT_1").click(function () {
        $("#AT_text").val("1")
    });
    $("#AT_2").click(function () {
        $("#AT_text").val("2")
    });
    $("#AT_3").click(function () {
        $("#AT_text").val("3")
    });

    $("#AA_0").click(function () {
        $("#AA_text").val("0")
    });
    $("#AA_1").click(function () {
        $("#AA_text").val("1")
    });
    $("#AA_2").click(function () {
        $("#AA_text").val("2")
    });
    $("#AA_3").click(function () {
        $("#AA_text").val("3")
    });

    $("#MT_0").click(function () {
        $("#MT_text").val("0")
    });
    //Coke
    $("#MT_1").click(function () {
        //$("#MT_text").val("Coke")
        window.navigate("http://localhost:8000/serve");
    });
    $("#MT_2").click(function () {
        $("#MT_text").val("2")
    });
    $("#MT_3").click(function () {
        $("#MT_text").val("3")
    });

    $("#MA_0").click(function () {
        $("#MA_text").val("0")
    });
    $("#MA_1").click(function () {
        $("#MA_text").val("1")
    });
    $("#MA_2").click(function () {
        $("#MA_text").val("2")
    });
    $("#MA_3").click(function () {
        $("#MA_text").val("3")
    });
    $("#MA_4").click(function () {
        $("#MA_text").val("4")
    });
    $("#MA_5").click(function () {
        $("#MA_text").val("5")
    });
    $("#MA_6").click(function () {
        $("#MA_text").val("6")
    });
    $("#MA_7").click(function () {
        $("#MA_text").val("7")
    });
    $("#MA_8").click(function () {
        $("#MA_text").val("8")
    });
    $("#MA_9").click(function () {
        $("#MA_text").val("9")
    });
    $("#MA_10").click(function () {
        $("#MA_text").val("10")
    });
    $("#MA_11").click(function () {
        $("#MA_text").val("11")
    });
    $("#MA_12").click(function () {
        $("#MA_text").val("12")
    });
    $("#MA_13").click(function () {
        $("#MA_text").val("13")
    });
    $("#MA_14").click(function () {
        $("#MA_text").val("14")
    });
    $("#MA_15").click(function () {
        $("#MA_text").val("15")
    });

    //$("#Drink_Submit").click(function () {
        //var id = $(this).attr('value');
        //$.post("https://api.particle.io/v1/devices/3f0027000151353335323536/rec_recipe?access_token=e19ed017110d490dd3043cb0245f5e93553470fe",
        //id,
        //alert(id));
    //});      
});

//function SEND_DATA() {
//    alert("Hello World")
//}


function myFunction() {
    document.getElementById("demo").innerHTML = "Paragraph changed.";
}

function popup() {
alert("Hello World")
}