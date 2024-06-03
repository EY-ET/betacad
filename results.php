<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Upload Result</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

</head>
<body class="topics-listing-page" id="top">
    <main>
        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="homepage.php">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Upload Result</li>
                            </ol>
                        </nav>
                        <h2 class="text-white">Upload Result</h2>
                    </div>
                </div>
            </div>
        </header>
        <section class="section-padding section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <!-- Display echoed messages here -->
                        <?php include("upload.php"); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="site-footer section-padding">
        <!-- Footer content -->
    </footer>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
