<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Planet Shopify | Online Shopping Site for Men</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
    <br><br><br>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">Who We Are ?</h3>
          <hr />
          <img
            src="https://img.freepik.com/free-photo/silhouettes-discussing-business-people_23-2147626313.jpg?uid=R86380376&ga=GA1.1.523749392.1725889500&semt=ais_hybrid"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2">
          
            Welcome to <b>UniCart Online Store!</b> We’re passionate about bringing you a curated selection of high-quality watches, stylish t-shirts, comfortable shoes, 
            and premium headphones—all in one place. UniCart was built with the vision of creating a seamless and enjoyable shopping experience, where quality, style, 
            and affordability meet. Whether you're on the hunt for a classic timepiece, a comfortable yet trendy tee, the perfect pair of shoes, or immersive 
            headphones, our team carefully selects every item to ensure it meets our high standards. At UniCart, we believe that style should be accessible and 
            that the perfect product is just a click away. Our commitment to customer satisfaction drives us to provide not only an exceptional product range but 
            also top-notch customer support. We’re here to help with every step of your shopping journey, from product inquiries to a smooth checkout process and 
            ongoing assistance. Thank you for choosing UniCart Online Store. Discover the joy of online shopping with us—where style meets convenience!</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">LIVE SUPPORT</h1>
            <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
          </span>
          <hr>
          <p>At <b>UniCart Online Store</b>, we understand that shopping online should be as easy and stress-free as possible. That’s why our LIVE SUPPORT team is 
            available 24/7, every day of the year, to assist you whenever you need us. Whether you have questions about our products, need help with an order,
             or require technical assistance, our knowledgeable and friendly support staff are just a message or call away. Our commitment to outstanding customer
              service ensures that every UniCart customer receives timely and helpful responses to all inquiries. Shop confidently with UniCart, knowing that dedicated
               support is always available to help make your shopping experience smooth and enjoyable!</p>

               <img
            src="https://img.freepik.com/free-vector/call-center-design_24877-49650.jpg?uid=R86380376&ga=GA1.1.523749392.1725889500&semt=ais_hybrid"
            class="img-fluid d-block rounded mx-auto image-thumbnail">

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
