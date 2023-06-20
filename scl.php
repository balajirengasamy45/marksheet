<!DOCTYPE html>
<html lang="en">
   <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
   h1{
    text-align:center;
   } 
h2{
  text-align: center;
}
table, th, td {
  border:1px solid black;
}
input{
    width:100%;
}
</style>
<body>
    <h1>MARKLIST</h1>
    <table style="width:100%">
        <tr>
            <th>SUBJECT</th>
            <th>MARK</th>
            <th>GRADE</th>
            <th>PASS/FAIL</th>
        </tr>
        <tr>
            <td>TAMIL</td>
            <td> <input type="number"  class="tamil_mark"></td>
            <td> <input type="text"  class="tamil_grade"></td>
            <td> <input type="text"  class="tamil_passfail"></td>
        </tr>
        <tr>
            <td>ENGLISH</td>
            <td> <input type="number"  class="english_mark"></td>
            <td> <input type="text"  class="english_grade"></td>
            <td> <input type="text"  class="english_passfail"></td>
</tr>
        <tr>
            <td>MATHS</td>
            <td> <input type="number"  class="maths_mark"></td>
            <td> <input type="text"  class="maths_grade"></td>
            <td> <input type="text"  class="maths_passfail"></td>
        </tr>
        <tr>
            <td>SCINECE</td>
            <td> <input type="number"  class="sinece_mark"></td>
            <td> <input type="text"  class="sinece_grade"></td>
            <td> <input type="text"  class="sinece_passfail"></td>
        </tr>
        <tr>
            <td>SOCIAL</td>
            <td> <input type="number"  class="social_mark"></td>
            <td> <input type="text"  class="social_grade"></td>
            <td> <input type="text"  class="social_passfail"></td>
           
</tr>

    </table>

    <button class="total_mark">next</button><br>
    
TOTAL MARK: <input type="number" class="total_value">
GRADE VALUE: <input type="text" class="total_grade">
    
<script src="jquery-3.7.0.js"></script>
<script>
    $(document).ready( function(){
    
       $(".tamil_mark").focusout(function(){
       var TAMIL=$(".tamil_mark").val();
       if(TAMIL<=35){
        $(".tamil_mark").val();
        $(".tamil_grade").val("D");
        $(".tamil_passfail").val("fail");
         $(".tamil_passfail").css("background","red");
       }
    })
    $(".tamil_mark").focusout(function(){
       var TAMIL=$(".tamil_mark").val();
     if(TAMIL>=35 && TAMIL<=50){
        $(".tamil_mark").val();
        $(".tamil_grade").val("C");
        $(".tamil_passfail").val("PASS");
         $(".tamil_passfail").css("background","green");
       }
    })
    $(".tamil_mark").focusout(function(){
       var TAMIL=$(".tamil_mark").val();
        if(TAMIL>=50 && TAMIL<=75){
        $(".tamil_mark").val();
        $(".tamil_grade").val("B");
        $(".tamil_passfail").val("pass");
         $(".tamil_passfail").css("background","green");
       }
    })
    $(".tamil_mark").focusout(function(){
       var TAMIL=$(".tamil_mark").val();
        if(TAMIL>=75 && TAMIL<=100){
        $(".tamil_mark").val();
        $(".tamil_grade").val("A");
        $(".tamil_passfail").val("pass");
         $(".tamil_passfail").css("background","green");
       }
    })
    $(".english_mark").focusout(function(){
       var ENGLISH=$(".english_mark").val();
       if(ENGLISH<=35){
        $(".english_mark").val();
        $(".english_grade").val("D");
        $(".english_passfail").val("fail");
         $(".english_passfail").css("background","red");
       }
    })
    $(".english_mark").focusout(function(){
       var ENGLISH=$(".english_mark").val();
       if(ENGLISH>=35 && ENGLISH<=50){
        $(".english_mark").val();
        $(".english_grade").val("C");
        $(".english_passfail").val("PASS");
         $(".english_passfail").css("background","green");
       }
    })
    $(".english_mark").focusout(function(){
       var ENGLISH=$(".english_mark").val();
       if(ENGLISH>=50 && ENGLISH<=75){
        $(".english_mark").val();
        $(".english_grade").val("B");
        $(".english_passfail").val("pass");
         $(".english_passfail").css("background","green");
       }
    })
    $(".english_mark").focusout(function(){
       var ENGLISH=$(".english_mark").val();
       if(ENGLISH>=75 && ENGLISH<=100){
        $(".english_mark").val();
        $(".english_grade").val("A");
        $(".english_passfail").val("pass");
        $(".english_passfail").css("background","green");
       }
    })
    $(".maths_mark").focusout(function(){
       var MATHS=$(".maths_mark").val();
       if(MATHS<=35){
        $(".maths_mark").val();
        $(".maths_grade").val("D");
        $(".maths_passfail").val("fail");
        $(".maths_passfail").css("background","red");
       }
    })
    $(".maths_mark").focusout(function(){
       var MATHS=$(".maths_mark").val();
       if(MATHS>=35 &&MATHS<=50){
        $(".maths_mark").val();
        $(".maths_grade").val("C");
        $(".maths_passfail").val("PASS");
        $(".maths_passfail").css("background","green");
       }
    })
    $(".maths_mark").focusout(function(){
       var MATHS=$(".maths_mark").val();
       if(MATHS>=50 && MATHS<=75){
        $(".maths_mark").val();
        $(".maths_grade").val("B");
        $(".maths_passfail").val("pass");
        $(".maths_passfail").css("background","green");
       }
    })
    $(".maths_mark").focusout(function(){
       var MATHS=$(".maths_mark").val();
       if(MATHS>=75 && MATHS<=100){
        $(".maths_mark").val();
        $(".maths_grade").val("A");
        $(".maths_passfail").val("pass");
        $(".maths_passfail").css("background","green");
       }
    })
    $(".sinece_mark").focusout(function(){
       var SCINECE=$(".sinece_mark").val();
       if(SCINECE<=35){
        $(".sinece_mark").val();
        $(".sinece_grade").val("D");
        $(".sinece_passfail").val("fail");
        $(".sinece_passfail").css("background","red");
       }
    })
    $(".sinece_mark").focusout(function(){
       var SCINECE=$(".sinece_mark").val();
       if(SCINECE>=35 && SCINECE<=50){
        $(".sinece_mark").val();
        $(".sinece_grade").val("C");
        $(".sinece_passfail").val("PASS");
        $(".sinece_passfail").css("background","green");
       }
    })
    $(".sinece_mark").focusout(function(){
       var SCINECE=$(".sinece_mark").val();
       if(SCINECE>=50 && SCINECE<=75){
        $(".sinece_mark").val();
        $(".sinece_grade").val("B");
        $(".sinece_passfail").val("pass");
        $(".sinece_passfail").css("background","green");
       }
    })
    $(".sinece_mark").focusout(function(){
       var SINECE=$(".sinece_mark").val();
       if(SINECE>=75 && SINECE<=100){
        $(".sinece_mark").val();
        $(".sinece_grade").val("A");
        $(".sinece_passfail").val("pass");
        $(".sinece_passfail").css("background","green");
       }
    })
    $(".social_mark").focusout(function(){
       var SOCIAL=$(".social_mark").val();
       if(SOCIAL<=35){
        $(".social_mark").val();
        $(".social_grade").val("D");
        $(".social_passfail").val("fail");
        $(".social_passfail").css("background","red");
       }
    })
    $(".social_mark").focusout(function(){
       var SOCIAL=$(".social_mark").val();
       if(SOCIAL>=35 && SOCIAL<=50){
        $(".social_mark").val();
        $(".social_grade").val("C");
        $(".social_passfail").val("PASS");
        $(".social_passfail").css("background","green");
       }
    })
    $(".social_mark").focusout(function(){
       var SOCIAL=$(".social_mark").val();
       if(SOCIAL>=50 && SOCIAL<=75){
        $(".social_mark").val();
        $(".social_grade").val("B");
        $(".social_passfail").val("pass");
        $(".social_passfail").css("background","green");
       }
    })
    $(".social_mark").focusout(function(){
       var SOCIAL=$(".social_mark").val();
       if(SOCIAL>=75 && SOCIAL<=100){
        $(".social_mark").val();
        $(".social_grade").val("A");
        $(".social_passfail").val("pass");
         $(".social_passfail").css("background","green");
       }
    })

$(".total_mark").click(function(){
    var tamil=parseInt($(".tamil_mark").val());
    var english=parseInt($(".english_mark").val());
    var maths=parseInt($(".maths_mark").val());
    var sinece=parseInt($(".sinece_mark").val());
    var social=parseInt($(".social_mark").val());
    var total=tamil+english+maths+sinece+social;
      var total= $(".total_value").val(total);
      var total= $(".total_value").css("background","yellow");

     var total=$(".total_value").val();
    if(total<=350){
        $(".total_grade").val("AVERAGE");
        $(".total_grade").css("background","blue");
    }
    else if(total>=351 && total<=400){
        $(".total_grade").val("GOOD");
        $(".total_grade").css("background","blue");
    }
    else if(total>=401 && total<=450){
        $(".total_grade").val("VERY GOOD");
        $(".total_grade").css("background","blue");
    }
    else if(total>=451 && total<=500){
        $(".total_grade").val("TOP CLASS");
        $(".total_grade").css("background","blue");
    }
    })
});
</script>
<h1>THANK YOU.....</h1>
</body>
</html>