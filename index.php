    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">

    <!-- Google Font CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Particles.JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>

     <!-- SweetAlert CDN -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <title>RAIIT</title>
</head>
<body>

    <canvas class="background"></canvas>

    <div class="body-container">

        <div class="body-box">

            <div class="form-container">
                <div class="form-box">
                    <form class="form-elements" action="" id="form" method="POST">
                        <input type="text" id="fullName" name="fullName" placeholder="Full Name" class="input-field" autocomplete="off">
                        <input type="email" id="emailID" name="emailID" placeholder="Email Address" class="input-field">
                        <input type="number" id="contactNumber" name="contactNumber" placeholder="Contact Number" class="input-field" autocomplete="off">
                        <input type="text" id="designation" name="position" placeholder="Designation" class="input-field" autocomplete="off">
                        <input type="text" id="clubName" name="clubName" placeholder="Name of the Club" class="input-field" autocomplete="off">
                        <button name="submitBtn" placeholder="Register" id="regBtn" class="register-btn">Register</button>
                    </form>
                </div>
            </div>
    
    
            <div class="invitation-container">
                <video width="auto" height="500" loop autoplay muted class="video-box">
                    <source src="./assets/videos/invitation.mp4" type="video/mp4">
                  </video>
            </div>

        </div>

     
    </div>

</body>
</html>

<script>

$("#regBtn").click(function(event){
            var fullName = $("#fullName").val();
            var emailID = $("#emailID").val();
            var contactNumber = $("#contactNumber").val();
            var designation = $("#designation").val();
            var clubName = $("#clubName").val();

            event.preventDefault();

            if(fullName==""){
                Swal.fire(
                          "<div>Fill Everything</div>",
                          "",
                          'warning'
                        ).then((result) => {
                            // Reload the Page
                            location.reload();
                            });
            }else if(emailID==""){
                Swal.fire(
                          "<div>Fill Everything</div>",
                          "",
                          'warning'
                        ).then((result) => {
                            // Reload the Page
                            location.reload();
                            });
            }else if(contactNumber ==""){
                Swal.fire(
                          "<div>Fill Everything</div>",
                          "",
                          'warning'
                        ).then((result) => {
                            // Reload the Page
                            location.reload();
                            });
            }else if(designation==""){
                Swal.fire(
                          "<div>Fill Everything</div>",
                          "",
                          'warning'
                        ).then((result) => {
                            // Reload the Page
                            location.reload();
                            });
            }else if(clubName=""){
                Swal.fire(
                          "<div>Fill Everything</div>",
                          "",
                          'warning'
                        ).then((result) => {
                            // Reload the Page
                            location.reload();
                            });
            }else{
                    $.ajax({
                    method: "POST",
                    url: "./index.php",
                    data: {
                        fullName: fullName,
                        emailID: emailID,
                        contactNumber: contactNumber,
                        designation: designation,
                        clubName: clubName
                    },

                    success: function(data){
                        alert("working");
                    },
                    error: function(data){
                        alert("error");
                    }
                });
            }
               
          

      
        });

</script>

<script>
window.onload = function() {
  Particles.init
({
    selector: '.background',
    color: '#715ab1',
    minDistance: 20,
    sizeVariations: 6,
    minDistance: 120,
    speed: 0.4,
    maxParticles: 500
  });
};

</script>


