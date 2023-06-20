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
    td{
        text-align:left;
        margin-bottom:20px;
    }
    .total_amo{
        font-size: 27px;
}
    .center{
    background-color:pink;
    width: 100%;

    height: 500px;
    text-align:center;
    }
    .body{
text-align: center;
width:50%;
height:50%;
margin:auto;
    }
</style>
<body style="background-color:powderblue;">
    <div class="center">
    <h1 class="text-bg-primary">HRMS</h1>
    <table class="body">
        <tr>
            <td>BASIC SALARY :</td>
            <td><input name="basic_salary" type="number" class="sal_amo"></td>
        </tr>
        <br><br>
        <tr>
            <td>TRANSPORT ALLOWANCE :</td>
            <td><input name="basic_ta" type="number" class="trs_amo"></td>
        </tr>
        <tr>
            <td>FOOD ALLOWANCE :</td>
            <td><input  name="basic_allow" type="number" class="fbi_amo"></td>
        </tr>
        <tr>
            <td>BONUS :</td>
            <td><input  name="basic_bonus" type="number" class="bonus_amo"></td>
        </tr>
        <tr>
            <td>INCOME TAX:</td>
            <td><input  name="basic_tax" type="number" class="tax_amo"></td>
        </tr>
        <tr>
            <td>PROVIDENT FUND:</td>
            <td><input name="basic_fund" type="number" class="pf_amo"></td>
        </tr>
    </table>

    <button name="basic_but" class="view_app">calculate</button><br><br>
         <span  name="basic_net" class="total_amo"></span>
    <br><br>
    <script src="jquery-3.7.0.js"></script>
    <script>
         $(document).ready( function(){
    
    $(".view_app").click(function(){
    var q1=parseInt($(".sal_amo").val());
    var q2=parseInt($(".trs_amo").val());
    var q3=parseInt($(".fbi_amo").val());
    var q4=parseInt($(".bonus_amo").val());
    var q5=parseInt($(".tax_amo").val());
    var q6=parseInt($(".pf_amo").val());
    var total=(q1+q2+q3+q4)-(q5+q6);
    $(".total_amo").text("NET AMOUNT="+total);
    if(total<10000){
    $(".total_amo").css("background","red");
    }
     else if(total>=10000 && total<=30000){
    $(".total_amo").css("background","yellow");
    }
    else{
    $(".total_amo").css("background","green");
    }
    })

});
    </script>
    <h1>THANK YOU...</h1>
</div>
</body>
</html>