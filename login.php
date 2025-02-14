<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB --> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
        .divider:after, .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 95px);
        }
        .hhh {
            height: 100vh;
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <script>
        // JavaScript code to disable forward button
        function disableForwardButton() {
            history.pushState(null, null, document.URL);
            window.addEventListener('popstate', function () {
                history.pushState(null, null, document.URL);
            });
        }
    </script>
</head>
<body onload="disableForwardButton()">
  <!-- <nav class="navs">
   
    <div class="logo" >
      <a href="https://porbandar.nic.in/" title="Go to home" class="emblem" rel="home" style="text-decoration: none;">
                  <img id="logo" class="site_logo" src="pngwing.com.png" style="filter: invert(100%);" alt="State Emblem of India">
                  <span style="color: white; font-size: 14px;">પોરબંદર જિલ્લો</span>
      </a>
    </div>

     <div class="item">
        <a href="#" class="deco ideco hover-underline-animation">Home</a>
     <a href="#" class="deco ideco hover-underline-animation">About Us</a>
     <a href="#" class="deco ideco hover-underline-animation">Contact Us</a>
    <a href="#" class="deco ideco hover-underline-animation">View Detail</a>
    <a href="#" class="deco ideco hover-underline-animation">Institute Login</a>
    <a href="login.html" class="deco ideco hover-underline-animation">Login</a>
     </div>
</nav> -->
<nav class="navbar fixed-top navbar-expand-lg" style="color: #3B71CA; background-color: #3B71CA;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <!--  -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
          <a href="index1.php" title="Go to home" class="emblem" rel="home" style="text-decoration: none; margin-left: 6px;">
            <img id="logo" class="site_logo" src="pngwing.com.png" style="filter: invert(100%);" alt="State Emblem of India">
            <span style="color: white; font-size: 14px;">પોરબંદર જિલ્લો</span>
</a>
        </li>
        </ul>
      <!-- Left links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 2%;">
        <li class="nav-item" style="margin-left: 30px;">
          <a class="nav-link active hover-underline-animation"  style="font-weight: 600; color: white; font-size: 18px;" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item" style="margin-left: 30px;">
          <a class="nav-link active hover-underline-animation" style="font-weight: 600; color: white; font-size: 18px;"  aria-current="page" href="#">About Us</a>
        </li>
        <li class="nav-item" style="margin-left: 30px;">
          <a class="nav-link active hover-underline-animation" style="font-weight: 600; color: white; font-size: 18px;"  aria-current="page" href="#">Contact Us</a>
        </li>
        <!-- <li class="nav-item" style="margin-left: 30px;">
          <a class="nav-link active hover-underline-animation" style="font-weight: 600; color: white; font-size: 18px;"  aria-current="page" href="#">View Detail</a>
        </li> -->
        <!-- <li class="nav-item" style="margin-left: 30px;">
          <a class="nav-link active hover-underline-animation" style="font-weight: 600; color: white; font-size: 18px;"  aria-current="page" href="login.html">Login</a>
        </li> -->
        
      </ul>
      <!-- Left links -->
    </div>
  </div>
</nav>
    <section class="hhh">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="logindata.php" method="post">
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3 username"  class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="email"/>
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4 password" class="form-control form-control-lg"
                    placeholder="Enter password" name="pass" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                
                <!-- Dropdown menu -->
                <div class="form-outline mb-4">
                  <!-- <label for="dropdownMenu form-label">Select User Role</label> -->
                  <!-- <select class="form-select" id="dropdownMenu" name="type" aria-label="Select an option" onchange="handleUserRoleChange(this)"> -->
                  <select class="form-select" id="dropdownMenu" name="type" aria-label="Select an option">
                    <option selected>Select User Role</option>
                    <option value="government">Government Official</option>
                    <option value="institution">Institute Official</option>
                  </select>
                </div>
                <div class="form-outline mb-4" id="schoolIndexContainer" style="display:none;">
                  <input type="text" id="form3Example5 schoolIndex"  class="form-control form-control-lg"
                    placeholder="Enter a School Index Number" name="txtsindex" require/>
                  <label class="form-label" for="form3Example5">School Index</label>
                </div>
                <div class="d-flex  justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                   
                    
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-2 pt-2">
                  <a id="link1" href="">
                    <button type="submit" class="btn btn-primary btn-lg"  style="padding-left: 2.5rem; padding-right: 2.5rem;" onClick="storeEmailAndRedirect()">Login</button></a>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-2 px-4 px-xl-5 bg-dark" style="margin-top: 53px;">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0" style="padding-left: 580px;">
            Copyright © 2023. All rights reserved.
          
          </div>
          <!-- Copyright -->
      
          
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <!-- MDB -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
      <!-- <script>
    function handleUserRoleChange(selectElement) {
        var schoolIndexContainer = document.getElementById('schoolIndexContainer');
        var schoolIndexInput = document.getElementById('form3Example5');

        if (selectElement.value === 'institution') {
            // Show and enable School Index input field
            schoolIndexContainer.style.display = 'block';
            schoolIndexInput.disabled = false;
        } else {
            // Hide and disable School Index input field
            schoolIndexContainer.style.display = 'none';
            schoolIndexInput.disabled = true;
        }
    }

    // Listen for the popstate event

</script> -->

</body>
</html>
