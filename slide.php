<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>HARDI Tour</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/final logo.png" type="image/gif" />
</head>
<style>
    .image-container {
        max-width: 100%;
        max-height: 7rem;
    }

    /* Your existing CSS styles go here */

    /* Slideshow styles */
    .slideshow-container {
        position: relative;
        max-width: 100%;
        overflow: hidden;
    }

    .slideshow-image {
        width: 100%;
        display: none;
    }

    .slideshow-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }

</style>
<body class="main-layout">
    <div class="slideshow-container">
        <div class="slideshow-image">
            <img src="images/rwanda-lake-kivu-1.jpg" style="width: 100%;" alt="#">
            <div class="slideshow-text">
                <h1><strong style="margin-right: .5rem;">HARDI</strong><strong class="white"> TOURS AND TRAVEL AGENCY</strong></h1>
            </div>
        </div>
        <div class="slideshow-image">
            <img src="images/1.jpg" style="width: 100%;" alt="#">
            <div class="slideshow-text">
                <h1><strong style="margin-right: .5rem;">HARDI</strong><strong class="white"> TOURS AND TRAVEL AGENCY</strong></h1>
            </div>
        </div>
        <div class="slideshow-image">
            <img src="images/2.jpg" style="width: 100%;" alt="#">
            <div class="slideshow-text">
                <h1><strong style="margin-right: .5rem;">HARDI</strong><strong class="white"> TOURS AND TRAVEL AGENCY</strong></h1>
            </div>
        </div>
        <div class="slideshow-image">
            <img src="images/3.jpg" style="width: 100%;" alt="#">
            <div class="slideshow-text">
                <h1><strong style="margin-right: .5rem;">HARDI</strong><strong class="white"> TOURS AND TRAVEL AGENCY</strong></h1>
            </div>
        </div>
        <!-- Add more slides like the one above with different images and text -->
    </div>

    <script>
        // JavaScript for slideshow
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("slideshow-image");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change slide every 5 seconds
        }
    </script>
</body>
</html>
