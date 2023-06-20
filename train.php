
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid mt-3  text-center " >
  <h2 class="text-bg-success">TRAIN TICKET BOOKING</h2>         
  <table class="table table-hover">
      <tr class="bg-info p-3">
      <td>FROM</td>
      <td><select class="form_app">
      <option>-select-</option>
                    <option>salam</option>
                    <option>coimbatore</option>
                    <option>trichy</option>
                    <option>chennai</option>
                    <option>vilupuram</option>
                    <option>karaikal</option>
        </select></td>
        <td>TO</td>
                <td><select class="to_app">
                    <option>-select-</option>
                    <option>walayar</option>
                    <option>palakad</option>
                    <option>mangalur</option>
                    <option>kochi</option>
                    <option>alaphuzha</option>
                    <option>varakal</option>
                </select></td>
    </tr>
    <tr class="bg-info p-3">
    <td>TRAIN NAME</td>
            <td><select class="name_app">
                <option>-select-</option>
                <option> VAIGAI EXPRESS</option>
                <option> POTHIGAI EXPRESS</option>
                <option> KERALA EXPRESS</option>
                <option> MGR EXPRESS</option>
                <option> CENTRAL EXPRESS</option>
        </select></td>
        <td>TRAIN NUMBER</td>
            <td><select class="train_app">
                <option>-select-</option>
                <option> 001</option>
                <option> 002</option>
                <option> 003</option>
                <option> 004</option>
                <option> 005</option>
        </select></td>
    </tr>
    <tr  class="bg-info p-3"> 
    <td>DEPT</td>
            <td><select class="dept_app"> 
                <option>-select-</option>
                <option>SLEEPER</option>
                <option> SITTING</option>
                <option> UR</option>
         </select></td>
        <td>SEAT NUMBER</td></td>
            <td><select class="seat_app">
                <option>-select-</option>
                <option> 001</option>
                <option> 002</option>
                <option> 003</option>
        </select></td>
    </tr>
    <tr  class="bg-info p-3"> 
    <td>MEMBER</td>
            <td><input type="number" class="mem_er">
        </td>
        <td>CHILDREN</td></td>
            <td><input type="number" class="ch_er">
        </td>
    </tr>
    <tr  class="bg-info p-3"> 
    <td>TOTAL</td>
            <td><input type="number" class="to_er">
        </td>
        <td>AMOUNT</td></td>
            <td><input type="number" class="am_er">
        </td>
    </tr>
    <tr class="bg-info p-3">
    <td>PAYMENT METHOD</td>
    <td><select>
        <option>-select-</option>
        <option>paytm</option>
        <option>gpay</option>
        <option>phonepay</option>
        <option>upi</option>
    </select></td></tr>
    
  </table>
</div>
<button type="button" class="btn btn-success">BOOKING</button><br><br>
<span class="form_app"></span><br>
<span class="to_app"></span><br>
<span class="name_app"></span><br>
<span class="train_app"></span><br>
<span class="dept_app"></span><br>
<span class="seat_app"></span><br>
<span class="mem_er"></span><br>
<span class="ch_er"></span><br>
<span class="to_er"></span>
<script src="jquery-3.7.0.js"></script>
<script>
     $(document).ready( function(){
        $(".form_app").focusout(function(){
       var r=$(".form_app").val();
       $(".form_app").text("FROM="+r);
    })
       $(".to_app").focusout(function(){
       var r1=$(".to_app").val();
       $(".to_app").text("TO="+r1); 
    
        })
       
        $(".name_app").focusout(function(){
       var r3=$(".name_app").val();
       $(".name_app").text("TRAIN NAME="+r3);
        })
        $(".train_app").focusout(function(){
       var r5=$(".train_app").val();
       $(".train_app").text("TRAIN NUMBER="+r5);
        })
        $(".dept_app").focusout(function(){
       var r4=$(".dept_app").val();
       $(".dept_app").text("PEPARTMENT="+r4);
        })
        $(".seat_app").focusout(function(){
       var r4=$(".seat_app").val();
       $(".seat_app").text("SEAT NUMBER="+r4);
    })
       $(".mem_er").focusout(function(){
       var r4=$(".mem_er").val();
       $(".mem_er").text("MEMBER="+r4);
        })
        $(".ch_er").focusout(function(){
       var r4=$(".ch_er").val();
       $(".ch_er").text("CHILDREN="+r4);
        })
        $(".to_er").focusout(function(){
            var q1=parseInt($(".mem_er").val());
    var q2=parseInt($(".ch_er").val());
    var total=q1+q2;
       $(".to_er").text("TOTAL="+total);
        })

     });
</script>
</body>
</html>
