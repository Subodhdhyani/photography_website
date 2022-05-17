<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imgs/Tlogo.png">
    <link rel = "stylesheet" type ="text/css" href="css/file.css">
    <title>Contact us</title>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

</head>

<body>

<?php include "header.php"; ?>
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-6 fw-bold">We would love to hear from you!</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Fill out the form below and we would be happy to get back to you at the soonest.</p>
        </div>
        <hr class="my-4">


        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-top g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h4 style="text-align: center;"><a
                            href="mailto:tickets@captcha-photography.p.tawk.email">Mail us From Here</a></h4><br>
                    <p class="text-center fs-4">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0" id="gmap_canvas"
                            src="https://maps.google.com/maps?width=450&amp;height=350&amp;hl=en&amp;q=Dehradun%20Dehradun+(Dehradun)&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

                    </p>
                </div>



                <div class="col-md-10 mx-auto col-lg-5">
               <form class="p-4 p-md-5 border rounded-3 bg-white" name="myForm" method="post" action="contactrequest.php" autocomplete ="off">
                        <p>How can we help?</p>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="strName" placeholder="Name"
                                required>
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword" name="strEmail" placeholder="Email"
                                required>
                            <label for="floatingPassword">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="myText"  name="strMessage" placeholder="Message" required>
                            <label for="myText">Message</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Send Message</button>
                        <hr class="my-4">

                    </form>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>
        

</body>

</html>