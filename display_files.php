<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>View Uploaded Files</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <style>
        body {
            background-color: White; /* Light grey background for the whole page */
        }

        .navbar {
            background-color: #17cf26; /* Green navbar */
        }
        .navbar-icon {
            color: green;
        }
        .navbar-brand, .nav-link {
            color: white !important; /* White text color */
        }

        .topics-detail-section {
            background-color: #ffffff; /* White background for sections */
            padding: 60px 0; /* Section padding */
        }

        .section-padding {
            padding: 60px 0; /* Section padding */
        }

        .section-bg {
            background-color: #f1f1f1; /* Light grey background for sections */
        }

        .topics-detail-block {
            border-radius: 8px;
            overflow: hidden;
            background-color: #ffffff; /* White background for the image block */
            padding: 20px; /* Padding inside the block */
        }

        .topics-detail-block img {
            border-radius: 8px;
        }

        .newsletter-image {
            border-radius: 8px;
        }

        footer {
            background-color: #343a40; /* Dark background for footer */
            color: white; /* White text color */
            padding: 60px 0; /* Footer padding */
        }

        .footer-links a {
            color: white; /* White color for footer links */
        }

        .btn.custom-btn {
            background-color: #28a745; /* Green button */
            color: white;
            border: 2px solid #28a745;
        }

        .btn.custom-border-btn {
            border: 2px solid #28a745; /* Green border button */
            color: #28a745;
        }

        .btn.custom-border-btn:hover {
            background-color: #28a745;
            color: white;
        }

        .topics-detail-block-image {
            border-radius: 8px; /* Rounded corners for images */
        }

        .breadcrumb-item a {
            color: #28a745; /* Green breadcrumb link */
        }

        .breadcrumb-item.active {
            color: #6c757d; /* Grey color for active breadcrumb */
        }

        h2.text-white {
            color: #ffffff !important; /* Ensuring text color is white */
        }

        h3 {
            color: #333333; /* Dark color for headings */
        }

        p {
            color: #555555; /* Grey color for paragraphs */
        }

        blockquote {
            border-left: 4px solid #28a745;
            padding-left: 20px;
            color: #6c757d;
        }

        .custom-icon.bi-bookmark {
            color: #28a745; /* Green bookmark icon */
        }

        .subscribe-form h4 {
            color: #333333; /* Dark color for subscribe form heading */
        }

        .form-control {
            border-radius: 0;
        }

        .form-control::placeholder {
            color: #6c757d;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #28a745;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="topics-listing-page" id="top">
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="homepage.php">
                    <i class="bi-back"></i>
                    <span style="font-size: 19px">Beteseb Academy</span>
                </a>
                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="homepage.php#section_1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="homepage.php#section_2">Browse Topics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="homepage.php#section_3">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="homepage.php#section_4">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="homepage.php#section_5">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="topics-listing.html">Topics Listing</a></li>
                                <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-none d-lg-block">
                        <a href="#top" class="navbar-icon bi-person smoothscroll" style="bg-color: green;"></a>
                    </div>
                </div>
            </div>
        </nav>
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="homepage.php" style="font-size: 15px">Homepage</a></li>

                                    <li class="breadcrumb-item" aria-current="page" style="font-size: 15px">Chemistry Files</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">Files for <br> Chemistry</h2>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="topics-detail-block bg-white shadow-lg">
                                <img src="http://127.0.0.1:5500/img/$index.html$" class="topics-detail-block-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </header>

        <section class="topics-detail-section section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div id="uploaded-files">
                            <?php
                            $directory = 'uploads/';
                            $scanned_directory = array_diff(scandir($directory), array('..', '.'));

                            foreach($scanned_directory as $file) {
                                $file_path = $directory . $file;
                                $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

                                if (in_array($file_extension, array('jpg', 'jpeg', 'png', 'gif'))) {
                                    // Display image with filename underneath, clickable
                                    echo "<div style='text-align: left; margin-bottom: 20px;'>";
                                    echo "<a href='$file_path' target='_blank'><img src='$file_path' width='10%' height='60px' alt='$file' class='topics-detail-block-image img-fluid'></a><br>";
                                    echo "<p style='font-size: 19px'>$file</p>";
                                    echo "</div>";
                                } elseif (in_array($file_extension, array('pdf', 'doc', 'docx', 'ppt', 'pptx'))) {
                                    // Display PDF or document with filename, clickable
                                    echo "<div style='text-align: center; margin-bottom: 20px;'>";
                                    echo "<a href='$file_path' target='_blank'><iframe src='$file_path' width='100%' height='600px' style='border: none;' class='topics-detail-block'></iframe></a><br>";
                                    echo "<p>$file</p>";
                                    echo "</div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="row mt-5">
                    <div class="col-lg-12 col-12">
                        <h3 class="mb-4 pb-2">Want to upload files?</h3>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div id="uploaded-files">
                                <a href="user.html" style="color: rgb(16, 233, 52); font-size: 30px;">Upload files here</a>
                        </div>
                    </div>
                </div>
        
    </main>

    <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="homepage.php">
                            <i class="bi-back"></i>
                            <span><br>Beteseb inc.</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">How it works</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                ###-###-####
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@company.com" class="site-footer-link">
                                info@school.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Thai</button></li>

                                <li><button class="dropdown-item" type="button">Myanmar</button></li>

                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 EY_ET corps. All rights reserved.
                        <br><br>Design: EY_ET</p>
                        
                    </div>

                </div>
            </div>
        </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

