<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZeWoke</title>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="floating-wpp.css">
  <script type="text/javascript" src="floating-wpp.js"></script>
  <link href="style.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="body">

  <?php
  require('data base/conn.php');

  if (isset($_POST['cname'])) {
    // general information start
    $company_name = stripcslashes($_REQUEST['cname']);
    $company_name = mysqli_real_escape_string($mysqli, $company_name);
    $user_name = stripcslashes($_REQUEST['uname']);
    $user_name = mysqli_real_escape_string($mysqli, $user_name);
    $user_email = stripcslashes($_REQUEST['email']);
    $user_email = mysqli_real_escape_string($mysqli, $user_email);
    $phone_number = stripcslashes($_REQUEST['phone_number']);
    $phone_number = mysqli_real_escape_string($mysqli, $phone_number);
    $address = stripcslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($mysqli, $address);
    $company_services = stripcslashes($_REQUEST['company_services']);
    $company_services= mysqli_real_escape_string($mysqli, $company_services);
    date_default_timezone_set("Asia/kolkata");
    $trn_date = date("Y-m-d H:i:s");

    // general information end
$query = "INSERT into `client_info`(company_name,user_name,user_email,phone_number,address,company_services,trn_date) VALUES('$company_name','$user_name','$user_email','$phone_number','$address','$company_services','$trn_date')";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    if ($result) {
  ?><div class="d-flex justify-content-center mt-5">
        <div class='mt-5 px-5 text-center user-alert container-opacity py-5'>
          <h2 id="demo" class=''>Thanks for eloborating your needs! We'll revert to shortly for further processions.</h2>
        </div>
      </div>

    <?php
    } else {
      echo "0";
    }
  } else {
    ?> <div class="left-side">
      <img src="img/left-img.png" class="col-12">
   </div>
    <div class="right-side">
      <!-- Add more content here to enable scrolling -->
      <form class="form" action="" method="post" name="main-form">
        <div class="py-3">
          <!-- General questions start -->
          <section class="border-white border-bottom border-2 py-2">
            <div class="fs-2 fw-bold py-3">Grap this cream of an opportunity! from <span class="zewoke-color"> ToCyber</span> </div>
            <div class="hr-line my-3"></div>
            <p class="fs-5">
              Wait no more! Utilize our limited time deal to get your starter website developed by our skilled team & kick start your digital presence to reap the best fruits of your business.
            </p>
            <!--Form-group  start -->
            <!-- single question start -->
            <div class="fs-2 fw-bold py-3">COMPANY DETAILS</div>
            <div class="form-bdr"></div>
 
              <div class="py-2  col-md-6">
                <div class=" fw-normal fs-5"> <label for="cname">Company Name:<span class="text-danger">*</span></label></div>
                <div class=" text-start"><input class="outline-custom" type="text" id="cname" name="cname" placeholder=""></div>
                <div class="pp-field-info">Please add your name, if you don't have a registered business entity</div>

              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class=" fw-normal fs-5"><label for="uname">Name:<span class="text-danger">*</span></label></div>
                <div class=" text-start"><input class="outline-custom" type="text" id="uname" name="uname" placeholder=""></div>
              </div>
              <!-- single question end -->
            </div>
            <!--Form-group  end -->
            <!--Form-group  start -->
            <!-- single question start -->

              <div class="py-2 col-md-6 ">
                <div class="fw-normal fs-5"><label for="email">Email:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="email" id="email" name="email" placeholder=""></div>
              </div>
              <!-- single question end -->

              <!-- single question start -->
              <div class="py-2  col-md-6">
                <div class="fw-normal fs-5"><label for="phone_number">Phone Number:<span class="text-danger">*</span></label></div>
                <div class="text-start"><input class="outline-custom" type="text" id="phone_number" name="phone_number" placeholder=""></div>
              </div>
              <div class="py-2 col-md-6">
                <div class="fw-normal fs-5"><label for="address">Address:<span class="text-danger">*</span></label></div>
                <div class="text-start"><textarea class="outline-custom" name="address" id="address" rows="3" cols="28"></textarea> </div>
              </div>
              <div class="py-2 col-md-6">
                <div class="fw-normal fs-5"><label for="company_services">Give us a brief about your company & its services:<span class="text-danger">*</span></label></div>
                <div class="text-start"><textarea class="outline-custom" name="company_services" id="company_services" rows="3" cols="28"></textarea> </div>
              </div>


              <div class="form-bdr"></div>
              <!-- single question end -->
            <section class="py-3">
              <div class="tac" id="submit-section">
                <div class="">
                <div class="form-btn tac"><input type="submit" class="btn-default" value="Submit">
                  <input type="reset" class=" btn-outline" value="Reset">
                </div>
                <div class="zw-only-copyright">
                  <p> Copyright © 2016 - <span><?php
                    echo (date("Y"));
                     ?></span> , ZeWoke Corporation Pvt. Ltd. All Rights Reserved.</p>
                </div>
              </div>
            </section>
        </div>
      </form>
    </div>

  <?php $mysqli->close();
  } ?>
</body>

</html>