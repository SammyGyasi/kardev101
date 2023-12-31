<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the keys exist in the $_POST array before accessing them
    $firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
    $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
    $phoneNumber = isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $country = isset($_POST["country"]) ? $_POST["country"] : "";
    $passportNumber = isset($_POST["passportNumber"]) ? $_POST["passportNumber"] : "";
    $jobTitle = isset($_POST["jobTitle"]) ? $_POST["jobTitle"] : "";
    $organization = isset($_POST["organization"]) ? $_POST["organization"] : "";
    $organizationCountry = isset($_POST["organizationCountry"]) ? $_POST["organizationCountry"] : "";

    $to = "samuel.creatiftech@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";

    $message = "hello I am $firstName from $country and I would like to register for 
    the conference and below are my details\n";
    $message .= "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    $message .= "Phone Number: $phoneNumber\n";
    $message .= "Email: $email\n";
    $message .= "Country: $country\n";
    $message .= "Passport Number: $passportNumber\n";
    $message .= "Job Title: $jobTitle\n";
    $message .= "Entity/Organisation: $organization\n";
    $message .= "Organization Country: $organizationCountry\n";

    $headers = "From: Africamedform.com"; // 

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Registration  is successfully done.Our team will get in touch with you!';
    } else {
        // Display an error message on the form page
        echo 'Registration failed. Kindly get in touch with us by Contact@africamedforum.com..';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AfricaMed Forum</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="scss/custom-bootstrap.css">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5">
        <div class="row gx-4 d-none d-lg-flex">
            <div class="col-lg-6 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-map-marker-alt text-white"></small>
                    </div>
                    <small>Tangier,Morocco</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-envelope-open text-white"></small>
                    </div>
                    <small>Contact@africamedforum.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <small>+212 664-143135</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="far fa-clock text-white"></small>
                    </div>
                    <small>Mon - Tues : 9AM - 6PM</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-warning sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <!-- <h2 class="m-0 text-primary">AfricaMed</h2> -->
            <img src="img/logo_white.gif" alt="" width="90" height="80">
        </a>
        <button type="button" class="navbar-toggler text-light" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="programmes.html" class="nav-item nav-link">Program</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Partners</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="partners.html" class="dropdown-item">Our Partners</a>
                        <a href="become_partner.html" class="dropdown-item">Become Partner</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Media</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">NewsPaper</a>
                        <a href="videopage.html" class="dropdown-item">Video Library</a>
                        <a href="team.html" class="dropdown-item">Photo Gallery</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="registration.html" class="nav-item nav-link">Registration</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2"
                    href="https://www.facebook.com/profile.php?id=100089986179225&sk=about"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-youtube"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2"
                    href="https://www.linkedin.com/showcase/africamed-business-forum/"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0"
                    href="https://www.instagram.com/africamedbusinessforum/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header-registration py-5">
        <div class="container py-5">
            <!-- <h1 class="display-3 text-white mb-3 animated slideInDown">Registration</h1> -->
            <nav aria-label="breadcrumb animated slideInDown">
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol> -->
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <p class="container-fluid my-5 text-dark text-center">
        The AfricaMed Business Forum provides the perfect platform to turn this vision into reality.
        This international event, taking place in Tangier on <strong>December 18 and 19th, 2023</strong> , is dedicated
        to strengthening economic ties between Africa and Mediterranean countries. By bringing
        together nearly 500 high-level decision-makers, including heads of state, ministers, political
        leaders, representatives from international organizations focused on economic development,
        private sector companies, and numerous regional stakeholders, the AfricaMed Business
        Forum offers an exceptional opportunity to promote investment and cooperation.
        <br>
        <strong>Fill out the following form to secure your place now!</strong>


    </p>

    <div class="container text-dark">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">


                    <!-- Form fields go here -->
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" aria-describedby="firstNameHelp"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" aria-describedby="lastNameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" aria-describedby="phoneNumberHelp"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="country" aria-describedby="countryHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="passportNumber" class="form-label">Passport Number</label>
                        <input type="text" class="form-control" id="passportNumber"
                            aria-describedby="passportNumberHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="jobTitle" aria-describedby="jobTitleHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="organization" class="form-label">Entity/Organisation</label>
                        <input type="text" class="form-control" id="organization" aria-describedby="organizationHelp"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="organizationCountry" class="form-label">Which Country is your organisation based
                            in</label>
                        <input type="text" class="form-control" id="organizationCountry"
                            aria-describedby="organizationCountryHelp" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="termsAndConditions" required>
                        <label class="form-check-label" for="termsAndConditions"> I have read and agree to the <a
                                href="#" class="text-primary"> <u>Terms and Conditions</u> </a> </label>
                    </div>
                    <button type="submit" class="btn btn-primary col-12">Submit</button>
                </form>
            </div>
        </div>
    </div>






    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Tangier,Morocco</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 664-143135</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Contact@africamedforum.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Programmes</h5>
                    <a class="btn btn-link" href="">Conference</a>
                    <a class="btn btn-link" href="">Business Forum</a>
                    <a class="btn btn-link" href="">Collaboration</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Subscribe to our weekly newsletter</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid py-4" style="background: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom text-primary" href="#">AfricaMed.Com</a> <span
                        id="currentYear"></span> , All Rights Reserved.
                </div>

                <div class="col-md-6 text-center text-md-end">

                    Founder: <img src="/img/logo1kardev2 (1).png" alt="" width="54" height="30">
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the current year
        var currentYear = new Date().getFullYear();

        // Find the element with the id "currentYear" and set its text content
        document.getElementById("currentYear").textContent = currentYear;
    </script>

    <!-- Copyright End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>