$(document).ready(function() {



    $("#btnLogin").click(function(){
        var e = $('#loginform input[name=email]').val();
        var p = $('#loginform input[name=pass]').val();
        $.ajax({
          url: "/petdoctor/web/controllers/Login.php", 
          type:"POST",
          data:{
            email:e,
            pass:p
          },
          success: function(result){
              if(result=='success'){
                window.location = 'http://localhost/petdoctor/web/controllers/Dashboard.php';
              }
          }

        });
    });

    $("#btnSignup").click(function(){
        // alert($('#signupform').serialize());
        var d = $('#signupform').serializeArray();
        
        $.ajax({
          url: "/petdoctor/web/controllers/Register.php", 
          type:"POST",
          data:d,
          success: function(result){
              if(result=='success'){
                alert(result);
                location.reload();
              }else{
                alert("Registeration Failed");
              }
          }

        });
    });

    $(".addToCartBtn").click(function(){
        var id = $(this).attr("data-id");
        $.ajax({
          url: "http://localhost/petdoctor/web/controllers/Cart.php", 
          type:"GET",
          data:{
            product_id:id,
            action:'insert'
          },
          success: function(result){
             console.log(result);
          }

        });
    });

    $(".removeFromCartBtn").click(function(){
        var id = $(this).attr("data-id");
        $.ajax({
          url: "http://localhost/petdoctor/web/controllers/Cart.php", 
          type:"GET",
          data:{
            product_id:id,
            action:'remove'
          },
          success: function(result){
              console.log(result);
              location.reload();
          }

        });
    });

 });



    
