<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
// require 'PHPMailer/src/Exception.php';

// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rose-jade";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Email Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Connect to Database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert into Database
    $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        echo "Subscription successful.";

        // Send Confirmation Email
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth   = true;
            $mail->Username   = '7276a30afabd55';  // Your Gmail Address
            $mail->Password   = '5ffca07b59f4fd';  // Your Gmail App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom('info@rosejadeinc.com', 'Rosejade');
            $mail->addAddress($email);

            // Email Content
            $mail->isHTML(true);
            $mail->Subject = 'Subscription Confirmation';
            $mail->Body    = '<h1>Thank You for Subscribing!</h1><p>We appreciate your interest in our newsletter.</p>';

            $mail->send();
            echo ' Confirmation email sent.';
        } catch (Exception $e) {
            echo " Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
    <!-- Footer area start here -->
    <footer class="footer-area secondary-bg">
        <div class="footer__shape-regular-left wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img src="../assets/images/shape/footer-regular-left.png" alt="shape">
        </div>
        <div class="footer__shape-solid-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="sway_Y__animation" src="../assets/images/shape/footer-solid-left.png" alt="shape">
        </div>
        <div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img class="sway_Y__animation" src="../assets/images/shape/footer-regular-right.png" alt="shape">
        </div>
        <div class="footer__shape-regular-right wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img src="../assets/images/shape/footer-solid-right.png" alt="shape">
        </div>
        <div class="footer__shadow-shape">
            <img src="../assets/images/shape/footer-shadow-shape.png" alt="shodow">
        </div>
        <div class="container">
            <div class="footer__wrp pt-100 pb-100">
                <div class="footer__item item-big wow fadeInUp text-justify" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <a href="../index.php" class="logo mb-30">
                        <img src="../assets/images/logo/foologo.png" alt="image">
                    </a>
                    <p> At Rosejade, we are committed to empowering small
                        businesses with
                        innovative funding solutions like Merchant Cash
                        Advances (MCA) and
                        tailored financial strategies. Your success is our
                        mission.</p>
                </div>
                <div class="footer__item item-sm wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <h4 class="footer-title">Quick Link</h4>
                    <ul class="quick-link" style="padding-bottom:45px;">
                        <li><a href="../index.php"><i class="fa-regular fa-angles-right me-1"></i> Home</a></li>
                        <li><a href="../about.php"><i class="fa-regular fa-angles-right me-1"></i> About Us </a>
                        </li>
                        <li><a href="../contact.php"><i class="fa-regular fa-angles-right me-1"></i> Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer__item item-sm2 wow fadeInUp"
                data-wow-delay="200ms" data-wow-duration="1500ms">
                <h4 class="footer-title">Services</h4>
                <ul>
                    <li><a href="../services/merchant-cash-advances.php"><i
                                class="fa-regular fa-angles-right me-1"></i>Merchant
                            Cash Advance</a></li>
                    <li><a href="../services/line-of-credit.php"><i
                                class="fa-regular fa-angles-right me-1"></i>Line
                            of Credit</a>
                    </li>
                    <li><a href="../services/equipment-financing.php"><i
                                class="fa-regular fa-angles-right me-1"></i>Business
                            Equipment Financing</a>
                    </li>
                </ul>
            </div>
            
               
            <div class="footer__item item-big wow fadeInUp text-justify" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <h4 class="footer-title">Subscribe to our Newsletter</h4>
                        <p class="mb-20">We will inform you about promotions and exclusive offers as well as new
                            teaching materials.</p>
                        <div class="newsletter__form">
                            <form id="subscribeForm " action="" method="post">
                                <input type="email" id="email" name="email" placeholder="Enter Your E-mail" required>
                                <div class="error" id="emailError"></div>
                                <div class="btn-two">
                                    <button type="submit" class="btn-subs">Subscribe <i
                                            class="fa-regular fa-arrow-right-long"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div
                    class="d-flex gap-1 flex-wrap align-items-center justify-content-md-between justify-content-center">
                    <p class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">&copy; All Copyright 2025
                        by <a href="#0">Rose Jade Inc.</a></p>
                    <ul class="d-flex align-items-center gap-4 wow fadeInDown" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <li><a href="../terms-condition.php">Terms & Condition</a></li>
                        <li><a href="../privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3.7.0 Min Js -->
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Mean menu Js -->
    <script src="../assets/js/meanmenu.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="../assets/js/wow.min.js"></script>
    <!-- Pace min Js -->
    <script src="../assets/js/pace.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="../assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="../assets/js/nice-select.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="../assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="../assets/js/script.js"></script>
</body>

</html>