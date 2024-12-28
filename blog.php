<?php
include './db.connection/db_connection.php';
 
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your website description">
    <meta name="keywords" content="your,keywords,here">
    <meta name="author" content="Your Name">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Baalyam</title>
    <link rel="icon" href="assests/images/Logo.png" type="image/x-icon">

    <link rel="stylesheet" href="assests/style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-lYFkg6eZ2q7hnkxZ9pPt2K/CszkQzPLhtlDwe2lnJQmI+iY9GM1f3tmzxoTfwUKl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .dropdown-item:hover {
            background-color: #ff69b4;
            /* Pink color highlight on hover */
            color: #fff;
            /* Text color on hover */
        }

        .custom-nav-buttons button {
            background-color: #7369ff;
            border: none;
            cursor: pointer;
            padding: 5;
            margin: 0;
            border-radius: 10px;
        }

        .custom-nav-buttons button svg {
            fill: #fcf7f9;
            width: 25px;
            height: 25px;
        }

        .custom-nav-buttons button:hover svg {
            fill: #ff1493;
        }
    </style>

</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light    nav_top shadow" style="margin-top: -10px;">
        <div class="container">
            <a href="index.php"><img class="img_logo   navbar-logo " src=" assests/images/Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav_names " id="navbarNav">
                <ul class="navbar-nav  nav_auto  ms-auto">
                    <li class="nav-item dropdown">
                        <a style="color:black; font-weight: bold;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Programs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #fff; border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <a class="dropdown-item" href="daycare.html" style="color: #333;font-weight: bold;">Daycare</a>
                            <a class="dropdown-item" href="nursery.html" style="color: #333;font-weight: bold;">Nursery</a>
                            <a class="dropdown-item" href="lkg.html" style="color: #333;font-weight: bold;">LKG</a>
                            <a class="dropdown-item" href="ukg.html" style="color: #333;font-weight: bold;">UKG</a>
                            <a class="dropdown-item" href="playgroup.html" style="color: #333;font-weight: bold;">Play Group</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a style="color:black; font-weight: bold;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Experience Baalyam
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #fff; border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

                            <a class="dropdown-item" href="founder.html" style="color: #333;font-weight: bold;">Founders</a>
                            <a class="dropdown-item" href="vision_mission.html" style="color: #333;font-weight: bold;">Vision and Mission</a>
                        </div>
                    </li>



                    <li class="nav-item  ">
                        <a style="color:black; font-weight: bold;" class="nav-link " id="navlink4" href="branches.html">Branches</a>
                    </li>

                    <!-- <li class="nav-item  ">
                        <a style="color:black; font-weight: bold;" class="nav-link " id="navlink4" href="blog.php">Blogs</a>
                    </li> -->




                    <li class="nav-item  ">
                        <div class="d-flex flex-row">
                            <a style="color:black; font-weight: bold;" class="nav-link " id="navlink5" href="gallery.html">Gallery</a>
                        </div>
                    </li>
                    <a href="contact.html"><button class="header_button " id="navlink6">Contact</button></a>

                    <div class="d-block d-md-none">
                        <div class="d-flex flex-row justify-content-start mt-2 mb-2 ">
                            <a href="https://www.facebook.com/BaalyamIndoItalianPlaySchool/ " target="_blank"><img src="assests/images/facebook.png" class="img-fluid " /></a>
                            <a href="https://www.instagram.com/baalyam_preschool_kukatpally/" target="_blank"><img src="assests/images/insta.png" class="img-fluid ms-2" /></a>
                            <img src="assests/images/twitter.png" class="img-fluid ms-2" />
                        </div>
                    </div>

                </ul>

            </div>
        </div>
    </nav>


   
 

     
    <div class="section1 my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="blogs-head " style="font-size: 42px; color:black; font-weight: bold;">Blogs</h1>
                    <div class="d-flex flex-row justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="326" height="13" viewBox="0 0 326 13" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.49402 10.368C14.4034 9.59066 32.5617 9.55179 81.8547 9.47405C158.827 9.35744 219.917 8.50234 236.895 7.25853C238.243 7.14193 130.347 6.28681 119.267 6.90871C101.993 7.91931 19.5012 7.06419 2.90174 5.89812C-1.81689 5.58717 -0.0473825 4.49884 3.02815 4.26562C7.83102 3.87694 20.7231 3.91581 56.0707 3.99355C80.9278 4.03242 278.689 3.13843 300.302 1.5448C312.435 0.65082 319.808 -0.165424 323.179 0.0289192C326.001 0.184395 326.044 0.65082 323.6 1.93349C321.957 2.78861 323.811 3.29391 324.99 3.52712C326.802 3.91581 326.043 5.23735 323.768 6.28681C320.693 7.72496 315.384 7.68609 317.912 6.24794C318.46 5.93699 318.586 5.15961 316.648 5.31509C311.003 5.78152 271.105 8.96876 260.278 9.51292C144.671 15.421 31.8455 11.1066 7.95741 12.5447C-0.510838 13.0889 3.36523 10.8345 7.49402 10.368Z" fill="#25B4F8" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="blogs">
        <div class="container">

            <div class="row" id="blogRow">
                <?php
                $counter = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($counter === 0) {
                            echo '
                                    <div class="col-md-9  order-1 order-md-1" id="selectedblog">
                                    <div id="selectedBlogId" style="display: none">' . $counter . '</div>
                                    <h2 class="mb-3  tittle_text">' . $row['title'] . '</h2>
                                    <video class="custom-video" muted  autoplay    controls style="width: 100%; height: auto;">
                                    <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>
                                    <p>Published On  ';
                ?>




                            <?php echo date("Y-m-d H:i:s", strtotime($row['time']));
                            echo '</p>
                                    
                                    <div class="row d-flex my-3">';



                            echo '<div>';
                            ?>
                            <?php if (!empty($row['photos'])) : ?>
                                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                    <div class="swiper-wrapper row">
                                        <!-- Added 'row' class for Bootstrap grid -->

                                        <?php foreach (json_decode($row['photos']) as $photo) : ?>
                                            <div class="testimonial-item col-6 col-md-4 col-lg-3">
                                                <!-- Added Bootstrap grid classes -->
                                                <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo" class="img-fluid my-2">
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            <?php else : ?>
                                <p>No photos available.</p>
                            <?php endif; ?>
                            <?php echo '</div>';

                            echo '
                                        </div>';
                            echo $row['content'];
                            echo '
                                            <div style="display: none" id="lastchild">
                                                    <video onclick="swapDivs(`' . $counter . '`)"
                                                        class="custom-video" controls muted autoplay style="width: 100%; height: auto;">
                                                        <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>
                                            </div>';
                            echo '</div>';





                            if ($result->num_rows > 1) {
                                echo '<div class="col-md-3  order-2 order-md-2 scrollable-div">';
                            }
                        } else {
                            echo '<div id="sidebardiv' . $counter . '""><video
                                            class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>';
                            echo '<div class="col-md-9  order-2 order-md-1" id="lastchild" style="display: none">
                                        <h2 class="mb-3" >' . $row['title'] . '</h2>
                                        <video class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <p>Published On ';
                            ?>
                            <?php echo date("Y-m-d H:i:s", strtotime($row['time']));

                            echo '</p>
                                         <div class="row d-flex my-3">
                                         <div class="row">
                                         <div class="col-9"></div>
                                         <button onclick="hideDiv()" class="btn btn-primary col-3 readmore_btn" id="read">Read More</button>
                                         
                                           </div>
                                         ';


                            echo '<div id="images" style="display:none;">'; ?>
                            <?php if (!empty($row['photos'])) : ?>
                                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                    <div class="swiper-wrapper row">
                                        <!-- Added 'row' class for Bootstrap grid -->

                                        <?php foreach (json_decode($row['photos']) as $photo) : ?>
                                            <div class="testimonial-item col-6 col-md-4 col-lg-3">
                                                <!-- Added Bootstrap grid classes -->
                                                <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo" class="img-fluid my-2">
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            <?php else : ?>
                                <p>No photos available.</p>
                            <?php endif;
                            echo $row['content'];
                            ?>
                <?php echo '</div>';




                            echo '
                                        </div>';
                            echo '</div></div>';
                        }
                        $counter++;
                    }
                    if ($result->num_rows > 1) {
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>


    <script>
        state = 1;

        function hideDiv() {

            if (state == 0) {
                var div = document.getElementById('images');
                document.getElementById('read').innerHTML = "Read More";
                div.style.display = 'none';
                state = 1;
            } else {
                var div = document.getElementById('images');
                div.style.display = 'block';
                document.getElementById('read').innerHTML = "Read less";
                state = 0;
            }

        }


        function swapDivs(currentDivId) {
            var currentDiv = document.getElementById('sidebardiv' + currentDivId);
            currentDiv.setAttribute('id', 'sidebardiv' + document.getElementById('selectedBlogId').innerText);
            console.log(document.getElementById('selectedBlogId').innerText);
            let selectedBlog = document.getElementById('selectedblog');
            let currentDivLastChild = currentDiv.querySelector('#lastchild');
            let selectedDivLastChild = selectedBlog.querySelector('#lastchild');
            var currentDivNewDiv = document.createElement('div');
            currentDivNewDiv.innerHTML = selectedBlog.querySelector('#lastchild').innerHTML;
            let currentDivNewDivLastChild = document.createElement('div');
            currentDivNewDivLastChild.id = 'lastchild';
            currentDivNewDivLastChild.style.display = 'none';
            selectedBlog.removeChild(selectedDivLastChild);
            selectedBlog.removeChild(document.getElementById('selectedBlogId'));
            currentDivNewDivLastChild.innerHTML = selectedBlog.innerHTML;
            currentDivNewDiv.appendChild(currentDivNewDivLastChild);
            let selectedBlogNewDiv = document.createElement('div');
            selectedBlogNewDiv.innerHTML = currentDiv.querySelector('#lastchild').innerHTML;
            let selectedBlogIDNewDiv = document.createElement('div');
            selectedBlogIDNewDiv.id = 'selectedBlogId';
            selectedBlogIDNewDiv.innerText = currentDivId;
            let selectedBlogNewDivLastChild = document.createElement('div');
            selectedBlogNewDivLastChild.id = 'lastchild';
            selectedBlogNewDivLastChild.style.display = 'none';
            currentDiv.removeChild(currentDivLastChild);
            selectedBlogNewDivLastChild.innerHTML = currentDiv.innerHTML;
            selectedBlogNewDiv.appendChild(selectedBlogIDNewDiv);
            selectedBlogNewDiv.appendChild(selectedBlogNewDivLastChild);
            currentDiv.innerHTML = currentDivNewDiv.innerHTML;
            selectedBlog.innerHTML = selectedBlogNewDiv.innerHTML;

            // Manage volume
            let currentDivVideo = currentDiv.querySelector('video');
            let selectedBlogVideo = selectedBlog.querySelector('video');
            if (currentDivVideo) currentDivVideo.muted = true; // Mute the sidebar video
            if (selectedBlogVideo) selectedBlogVideo.muted = false; // Unmute the main video

            // Scroll to main video section
            selectedBlog.scrollIntoView({
                behavior: 'smooth'
            });




        }
    </script>

<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<div style="margin-bottom: -300px;" class="d-none d-md-none d-lg-block">
    <dotlottie-player src="https://lottie.host/93b48cf8-d656-409f-ac31-bc1bf2168469/abJylLlGdd.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
</div>



<img src="assests/images/Footer.png" class="img-fluid footer-img d-none d-md-block" style="width:2000px" />
    <footer class="d-none d-md-block">
        <!-- Your footer content goes here -->
        <div class="container foot-sec">

            <div class="row d-flex flex-row justify-content-center">

                <div class="col-2 col-md-3 col-lg-2 col-xl-2 sec1footer full_div_space">
                    <h1 class="footer-heading text-center ms-4">Education</h1>
                    <ul style="text-decoration: none;list-style: none;" class="text-center">
                        <a href="daycare.html" style="text-decoration: none;">
                            <li class="footlink">Day Care</li>
                        </a>
                        <a href="nursery.html" style="text-decoration: none;">
                            <li class="footlink">Nursery</li>
                        </a>
                        <a href="lkg.html" style="text-decoration: none;">
                            <li class="footlink">L.K.G</li>
                        </a>
                        <a href="ukg.html" style="text-decoration: none;">
                            <li class="footlink">U.K.G</li>
                        </a>
                        <a href="playgroup.html" style="text-decoration: none;">
                            <li class="footlink">Play Group</li>
                        </a>
                    </ul>
                </div>
                <div class="col-2 col-md-2  col-lg-2 col-xl-2 full_div_space">
                    <h1 class="footer-heading text-center ms-4">Branches</h1>
                    <ul style="text-decoration: none;list-style: none;" class="text-center">

                        <div onclick="openGoogleMaps()">
                            <li class="footlink bobble_space">Gachibowli</li>
                        </div>
                        <script>
                            function openGoogleMaps() {
                                const mapUrl = "https://www.google.com/maps/place/Baalyam+Indo+Italian+play+school+%7C+Gachibowli/@17.4733662,78.33388,15z/data=!4m6!3m5!1s0x3bcb93e929e81485:0x4bcbfbf154c177f4!8m2!3d17.4733662!4d78.33388!16s%2Fg%2F11ldvyrdl6?entry=ttu";
                                window.open(mapUrl, "_blank");
                            }
                        </script>


                        <div onclick="openGoogleMaps2()">
                            <li class="footlink bobble_space">Kukatpally</li>
                        </div>
                        <script>
                            function openGoogleMaps2() {
                                const mapUrl = "https://www.google.com/maps/place/Baalyam+Indo+Italian+play+school/@17.4911699,78.4107365,16.5z/data=!4m6!3m5!1s0x3bcb9130d309dc35:0xcab2c1f0a6c8bf96!8m2!3d17.4918693!4d78.4130226!16s%2Fg%2F11y430xs7t?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D";
                                window.open(mapUrl, "_blank");
                            }
                        </script>


                        <div onclick="openGoogleMaps3()">
                            <li class="footlink bobble_space">Kowkur</li>
                        </div>
                        <script>
                            function openGoogleMaps3() {
                                const mapUrl = "https://www.google.com/maps/place/Baalyam+Indo+Italian+play+school+%7C+Kowkur/@17.505099,78.504684,5z/data=!4m6!3m5!1s0x3bcb9bb62a81bac3:0x457372c85638bc1c!8m2!3d17.5050992!4d78.5046837!16s%2Fg%2F11vz16x5h1?hl=en&entry=ttu";
                                window.open(mapUrl, "_blank");
                            }
                        </script>


                        <div onclick="openGoogleMaps4()">
                            <li class="footlink bobble_space">Siddipet</li>
                        </div>
                        <script>
                            function openGoogleMaps4() {
                                const mapUrl = "https://www.google.com/maps/place/Baalyam+Indo+Italian+play+school+%7C+Siddipet/@18.096776,78.847172,5z/data=!4m6!3m5!1s0x3bcc93fae9d0570d:0xd5eb7ac93e0720f7!8m2!3d18.096776!4d78.8471716!16s%2Fg%2F11svnd__t0?hl=en&entry=ttu";
                                window.open(mapUrl, "_blank");
                            }
                        </script>


                       
                            <li class="footlink bobble_space">Bowrampet</li>
                   


                    </ul>
                </div>
                <div class="col-2 col-md-5  col-lg-3 col-xl-2 full_div_space">
                    <h1 class="footer-heading text-center ms-4">Contact</h1>
                    <ul style="text-decoration: none;list-style: none;" class="text-center">
                        <li class="footlink text-center">Support</li>


                        <li class="footlink text-center">+91 9392173921 </li>

                        <li class="footlink text-center"> info@baalyamglobal.com</li>

                        <div class="text-center  mt-3">
                            <a href="https://www.facebook.com/BaalyamIndoItalianPlaySchool/ " target="_blank"><img src="assests/images/facebook.png" class="img-fluid" /></a>
                            &nbsp;&nbsp;

                            <a href="https://www.instagram.com/baalyam_preschool_kukatpally/" target="_blank"><img src="assests/images/insta.png" class="img-fluid" /></a>


                        </div>
                    </ul>
                </div>
            </div>

        </div>
    </footer>

    <!-- for mobile  -->
    <img src="assests/images/footer mobile.png" class="img-fluid d-block d-md-none" style="width:1600px" />
    <footer class="d-block d-md-none mob-sec-foot">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="assests/images/balyam_footer_logo.png" class="img-fluid" />

                    <div class="  need_top_md_last    ">
                        <a href="https://www.facebook.com/BaalyamIndoItalianPlaySchool/ " target="_blank"><img src="assests/images/facebook.png" class="img-fluid" /></a>
                        &nbsp;&nbsp;

                        <a href="https://www.instagram.com/baalyam_preschool_kukatpally/" target="_blank"><img src="assests/images/insta.png" class="img-fluid" /></a>


                    </div>
                </div>
                <div class="col-6 sec1footer ">
                    <h1 class="footer-heading text-center ms-4">Education</h1>
                    <ul style="text-decoration: none;list-style: none;" class="text-center">
                        <a href="daycare.html" style="text-decoration: none;">
                            <li class="footlink">Day Care</li>
                        </a>
                        <a href="nursery.html" style="text-decoration: none;">
                            <li class="footlink">Nursery</li>
                        </a>
                        <a href="lkg.html" style="text-decoration: none;">
                            <li class="footlink">L.K.G</li>
                        </a>
                        <a href="ukg.html" style="text-decoration: none;">
                            <li class="footlink">U.K.G</li>
                        </a>
                        <a href="playgroup.html" style="text-decoration: none;">
                            <li class="footlink">Play Group</li>
                        </a>
                    </ul>
                </div>
                <div class="col-4 col-md-3  col-lg-2 col-xl-2 medium-foot " style="margin-top: -40px;">
                    <h1 class="footer-heading text-center ms-4">Branches</h1>
                    <ul style="text-decoration: none;list-style: none;" class="text-center">
                        <div class="" onclick="openGoogleMaps()">
                            <li class="footlink bobble_space">Gachibowli</li>
                        </div>
                        <script>
                            function openGoogleMaps() {
                                const mapUrl = "https://www.google.com/maps/place/Baalyam+Indo+Italian+play+school+%7C+Gachibowli/@17.4733662,78.33388,15z/data=!4m6!3m5!1s0x3bcb93e929e81485:0x4bcbfbf154c177f4!8m2!3d17.4733662!4d78.33388!16s%2Fg%2F11ldvyrdl6?entry=ttu";
                                window.open(mapUrl, "_blank");
                            }
                        </script>
                        
                        
                        <div  class="" onclick="openGoogleMaps2()">
                            <li class="footlink bobble_space">Kukatpally</li>
                        </div>
                        <script>
                            function openGoogleMaps2() {
                                const mapUrl = "https://www.google.com/maps/place/Baalyam+Indo+Italian+play+school/@17.4911699,78.4107365,16.5z/data=!4m6!3m5!1s0x3bcb9130d309dc35:0xcab2c1f0a6c8bf96!8m2!3d17.4918693!4d78.4130226!16s%2Fg%2F11y430xs7t?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D";
                                window.open(mapUrl, "_blank");
                            }
                        </script>


                        <div onclick="openGoogleMaps3()">
                            <li class="footlink bobble_space">Kowkur</li>
                        </div>
                        <script>
                            function openGoogleMaps3() {
                                const mapUrl = "https://www.google.com/maps/place/Baalyam+Indo+Italian+play+school+%7C+Kowkur/@17.505099,78.504684,5z/data=!4m6!3m5!1s0x3bcb9bb62a81bac3:0x457372c85638bc1c!8m2!3d17.5050992!4d78.5046837!16s%2Fg%2F11vz16x5h1?hl=en&entry=ttu";
                                window.open(mapUrl, "_blank");
                            }
                        </script>
                        <div onclick="openGoogleMaps4()">
                            <li class="footlink bobble_space">Siddipet</li>
                        </div>
                        <script>
                            function openGoogleMaps4() {
                                const mapUrl = "https://www.google.com/maps/place/Baalyam+Indo+Italian+play+school+%7C+Siddipet/@18.096776,78.847172,5z/data=!4m6!3m5!1s0x3bcc93fae9d0570d:0xd5eb7ac93e0720f7!8m2!3d18.096776!4d78.8471716!16s%2Fg%2F11svnd__t0?hl=en&entry=ttu";
                                window.open(mapUrl, "_blank");
                            }
                        </script>

                        
                            <li class="footlink bobble_space">Bowrampet</li>
                         
                        
                      
                    </ul>
                </div>
                <div class="col-8 col-md-3  col-lg-3 col-xl-2 medium-foot">
                    <h1 class="footer-heading text-center ms-4">Contact</h1>
                    <ul style="text-decoration: none;list-style: none;" class="text-center">
                        <li class="footlink text-center">Support</li>
                        <li class="footlink text-center">+91 9392173921</li>

                        <li class="footlink text-center"> info@baalyamglobal.com</li>



                    </ul>
                </div>
            </div>




        </div>
    </footer>




  <a href="https://api.whatsapp.com/send?phone=919392173921 
  " target="_blank">
      <div class="whatsapp_logo">
        <img src="assests/images/whatsapp.png" alt="whatsapp" class="img-fluid" height="50px" width="50px">
      </div>
  </a>

<button id="scrollBtn" onclick="scrollToTop()" style="background-color: transparent;">
  <div class="pyramid-loader" >
    <div class="wrapper">
      <span class="side side1"></span>
      <span class="side side2"></span>
      <span class="side side3"></span>
      <span class="side side4"></span>
      <span class="shadow"></span>
    </div>
  </div>
</button>

<script>
   // Function to scroll to the top of the page
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth' // Optional, smooth scrolling animation
  });
}

// Show scroll button when scrolling down
window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollBtn").style.display = "block";
  } else {
    document.getElementById("scrollBtn").style.display = "none";
  }
}
</script>



  <div class="copy-right   upup_div">
      <div class="container bottom">
          <div class="row">
              <div class="col-12 col-md-8 ">
                  <span style="color:#0C0531">
                      <strong > 
                       <div class="col-sm terms"> 
                          <a href="terms.html"> Terms & conditions </a>  
                          <a href="privacy.html">   Privacy &      policy  </a>
                       </div>
                      </strong>
                  
                  </span>
              </div>
              <div class="col-12 col-md-4">
                  <div class="col-sm-auto ml-auto brand"><strong><a
                      href="https://bhavicreations.com/">Branded By @<img src="assests\images\icon vision\bhavi.png"alt="baalyamschools. "  > </a>  
                  </strong>
                  </div>
              </div>
          </div>
      </div>

  </div>
  

</body>

</html>