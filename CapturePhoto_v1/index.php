<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capture Photo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="faculty-Home-page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body class="u-body u-xxl-mode">
    <header class="u-clearfix u-header u-header" id="sec-4477"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://crescent.education/" class="u-image u-logo u-image-1" data-image-width="352" data-image-height="93" title="crescent home page">
          <img src="https://crescent.education/wp-content/themes/crescent/theme/images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-menu-open-right u-offcanvas u-menu-1" data-responsive-from="XXL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-custom-color-1 u-text-hover-palette-2-base" href="#" style="">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="faculty-Home-page.html#sec-1f1f" data-page-id="201522847" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="faculty-Home-page.html#sec-223b" data-page-id="201522847" style="padding: 10px 0px;">services</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="faculty-Home-page.html#sec-2b52" data-page-id="201522847" style="padding: 10px 0px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-container-style u-custom-color-1 u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-custom-font u-font-arial u-nav u-popupmenu-items u-spacing-0 u-text-active-palette-2-light-1 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="faculty-Home-page.html#sec-1f1f" data-page-id="201522847">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="faculty-Home-page.html#sec-223b" data-page-id="201522847">services</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="faculty-Home-page.html#sec-2b52" data-page-id="201522847">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-60"></div>
          </div>
        </nav>
      </div></header>
    <section  style="background-color: #29274d;">
        <div class="container-fluid">
            <div class="row text-center align-items-center justify-content-center" style="height: 100vh;">
                <div class="col-sm-12 col-md-6 mx-auto" >
                    <h1 class="text-white mb-5" style="font-size: 6rem;">
                        Visitor Pass Generator 
                    </h1>
                    <h1 class="text-white mb-5" style="font-size: 1opx;">
                      Instant Visitor Pass Generator 
                  </h1>
                    <button class="btn btn-warning text-white" id="accesscamera" data-toggle="modal" data-target="#photoModal" style="font-size: 2rem;">
                        Create VP
                    </button>
                    <input type="button" onclick="printInvoice();" value="Print Card" style="font-size: 2rem;" class="btn btn-warning text-white">
                </div>
            </div>
        </div>
    </section>

    <!--Modal-->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Capture Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div id="my_camera" class="d-block mx-auto rounded overflow-hidden"></div>
                    </div>
                    <div id="results" class="d-none"></div>
                    <form method="post" id="photoForm">
                        <input type="hidden" id="photoStore" name="photoStore" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <form action=info() method="post">   
                    <div class="form-group">
                      <label for="Name_1">Name</label>
                      <input type="Name" class="form-control" id="Name_1" name="Name_1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="Phone_no">Phone no</label>
                      <input type="text" class="form-control" id="Phone_no" name="Phone_no" placeholder="Phone no">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="nameOfPersonToMeet">Name of Person to Meet</label>
                      <input type="text" class="form-control" id="nameOfPersonToMeet" name="nameOfPersonToMeet" placeholder="Name of Person to Meet">
                    </div>
                    <div class="form-group">
                      <label for="Department">Department</label>
                      <input type="text" class="form-control" id="Department" name="Department"  placeholder="Department">
                    </div>
                    <div class="form-group">
                      <label for="purposeOfVisit">Purporse of Visit</label>
                      <input type="text" class="form-control" id="purposeOfVisit" name="purposeOfVisit" placeholder="Purpose of Visit">
                      <small id="details_alert" class="form-text text-muted">Entered details will be stored in the database</small>
                    </div>
                    <button type="submit" class="btn btn-warning mx-auto text-white">Submit details</button>
                    </form> 
                    <button type="button" class="btn btn-warning mx-auto text-white" id="takephoto">Capture Photo</button>
                    <button type="button" class="btn btn-warning mx-auto text-white d-none" id="retakephoto">Retake</button>
                    <button type="submit" class="btn btn-warning mx-auto text-white d-none" id="uploadphoto" form="photoForm">Upload</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="./plugin/sweetalert/sweetalert.min.js"></script>
    <script src="./plugin/webcamjs/webcam.min.js"></script>
    <script src="main.js"></script>

    <footer class="u-align-center u-clearfix u-footer u-grey-30 u-footer" id="sec-e1bb"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-left u-custom-font u-font-arial u-text u-text-black u-text-1">
          <span style="font-size: 1.5rem; font-weight: 700;"> B.S.ABDUR RAHMAN CRESCENT INSTITUTE OF SCIENCE &amp; TECHNOLOGY</span>
          <br>
          <br>
          <span style="font-size: 1.125rem;">GST Road, Vandalur, Chennai 600 048. Tamilnadu. INDIA | www.crescent.education</span>
          <br>
          <br>
          <span style="font-size: 1.125rem;">Copyrights © 2018-All Rights Reserved | B.S.Abdur Rahman Crescent Institute of Science &amp; Technology, Chennai</span>
        </p>
        <div style="padding-top: 4rem;">
        <p class="u-align-left u-custom-font u-font-arial u-text u-text-black u-text-2">Follow us now</p>
        <p class="u-align-left u-custom-font u-font-arial u-text u-text-body-color u-text-3">
          <span style="font-weight: 700; font-size: 1.5rem;">CONTACT</span>
          <br>
          <br>
          <span style="font-size: 1.125rem;">+91 44 22751347 | +91 44 22751348 | +91 44 22751350 | +91 44 22751375<br>&nbsp;www.crescent.education
          </span>
        </p>
            <div class="u-social-icons u-spacing-10 u-social-icons-1">
              <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-160c"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-160c"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
    c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
              </a>
              <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8d2a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-8d2a"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
    c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
    c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
    c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
    c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
              </a>
              <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0fc7"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0fc7"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
    z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
    C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
    c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
              </a>
            </div>
        </div>
      </div>
    </footer>
      <section>
        <div class="container-fluid"id="id_tt">
            <div class="row text-center align-items-center justify-content-center" >
                  <img src="./uploadPhoto/22.png" alt="">
                  <h1 class="no1"><?php         
                  if(isset($_POST['Name_1'])) {
                      echo "This is Button1 that is selected";
                      } ?></h1> 
                  <h1 class="no2">9840XXXXXX</h1>
                  <h6 class="no3">xxx-xxx-xxxx</h6>
                  <img class="no4"src="./uploadPhoto/temp.jpeg" alt="">
            </div>
        </div>
      </section>



<script>
      function printInvoice()
 {
     printDiv = "#id_tt"; // id of the div you want to print
     $("*").addClass("no-print");
     $(printDiv+" *").removeClass("no-print");
     $(printDiv).removeClass("no-print");

     parent =  $(printDiv).parent();
     while($(parent).length)
     {
         $(parent).removeClass("no-print");
         parent =  $(parent).parent();
     }
     window.print();

 }

</script>   
</body>

</html>