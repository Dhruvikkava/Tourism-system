<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
    <title>Tourism System</title>
    <link rel="stylesheet" href="stle/style.css">
    

    
</head>
<body>
    <header>
        <nav>
            <div class="mainrow clearfix">
                
                    <img src="24B-Tourism.png" class="logo mx-5">
                
                <ul class="main-nav" id="chkid">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="packages.php">PACKAGES</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="login.php">LOGIN | REGISTER</a></li>
                </ul>
                
            </div>
        </nav>
            <p class="usr" style="margin-left:200px;margin-top:-60px">
            <?php 
            if($_SESSION){
            echo $_SESSION['user']; 
            }
            ?>
            </p>
        <nav class="center-div">
            <h1>Tourism</h1>
            <h3>Best places for searching India tour <br>Packages</h3>
            <button type="submit" name="submit"><a href="login.php">Login Now</a></button>
        </nav>
    </header>


    <section>
        <div class="container text-center packages">
            <h1>PACKAGES</h1>
            
            <div class="row-first packages">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="GOA.jpg" class="center-img">
                    <h3>GOA</h3>
                    <p> Goa is India's smallest state and unlike any other, known for its endless beaches, stellar
                     nightlife, eclectic seafood, world-heritage listed architecture.</p>
                    <button type="submit"><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Goa">More about..</a></button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="DARJEELING.jpg" class="center-img">
                    <h3>DARJEELING</h3>
                    <p>Darjeeling one of the most beautiful hill stations in Eastern part of India. Spread over mountain ridge,
                         nestled amidst acres of lush green tea plantations. </p>
                    <button type="submit"><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Darjeeling">More about..</a></button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="AMRITSAR.jpg" class="center-img">
                    <h3>AMRITSAR</h3>
                    <p>Home of the glorious Golden Temple, the iconic city of Amritsar, portrays the heroic character of the 
                        Punjab. A day in this peaceful city starts with Gurudwaras. </p>
                    <button type="submit" ><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Amritsar">More about..</a></button>
                </div>
            </div>
            
            <div class="row-first packages">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="MANALI.jpg" class="center-img">
                    <h3>MANALI</h3>
                    <p>One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir
                         Panjal and the Dhauladhar ranges covered with snow.</p>
                    <button type="submit"><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Manali,_Himachal_Pradesh">More about..</a></button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="NAINITAL.jpg" class="center-img">
                    <h3>NAINITAL</h3>
                    <p>Nainital is a charming hill station that sits prettily at the green foothills of the Kumao
                        the Himalayas.Nainital is located beautiful Naini Lake.</p>
                    <button type="submit"><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Nainital">More about..</a></button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="VAISHNO-DEVI.jpg" class="center-img">
                    <h3>VAISHNO-DEVI</h3>
                    <p>Vaishno Devi is a temple town that's Vaishno Devi Mandir. Popularly known
                        as Mata Rani, Vaishnavi and Trikuta and manifestation of the Hindu Goddess Durga.</p>
                    <button type="submit"><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Vaishno_Devi">More about..</a></button>
                </div>
            </div>

            <div class="row-first packages">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="AGRA.jpg" class="center-img">
                    <h3>AGRA</h3>
                    <p>Located on the banks of River Yamuna in Uttar Pradesh, Agra is a popular 
                    tourist destination as it is home to one of the 7 wonders of the world, the Taj Mahal.  </p>
                    <button type="submit"><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Agra">More about..</a></button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="RISHIKESH.jpg" class="center-img">
                    <h3>RISHIKESH</h3>
                    <p>Located in the foothills of the Himalayas in convergence of Ganga and 
                        Chandrabhaga River, Rishikesh is a small town in the Dehradun located in Uttarakhand.</p>
                    <button type="submit"><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Rishikesh">More about..</a></button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
                    <img src="AJANTA-AND-ELLORA-CAVES.jpg" class="center-img">
                    <h3>AJANTA & ELLORA-CAVES</h3>
                    <p>Ajanta and Ellora caves, considered to be one of the finest examples of 
                        ancient rock-cut caves, are located near Aurangabad in Maharashtra, India. </p>
                    <button type="submit"><a style="color:black;text-decoration:none;" href="https://en.wikipedia.org/wiki/Ajanta_Caves">More about..</a></button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid text-center bg-light services">
            <h1><span>OUR</span> SERVICES</h1>

            <div class="row">
                <div class="servic col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="imgset"><i class="fa fa-heart"></i></div>
                    <h2>We Care Your Happy</h2>
                    <p>Your happiness is our primary preference</p>
                </div>
                <div class="servic col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="imgset"><i class="fa fa-cutlery"></i></div>
                    <h2>Food</h2>
                    <p>We provide good food facilities based on <br>the famous dishes of that city.</p>
                </div>
                <div class="servic col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="imgset"><i class="fa fa-th-large"></i></div>
                    <h2>Accommodation</h2>
                    <p>We provide good room facilities.</p>
                </div>
            </div>

            <div class="row">
                <div class="servic col-lg-4 col-md-4 col-sm-4 col-12 last-three">
                    <div class="imgset"><i class="fa fa-info-circle"></i></div>
                    <h2>Guide</h2>
                    <p>We provide guideline to describe the <br>complate information about the city.</p>
                </div>
                <div class="servic col-lg-4 col-md-4 col-sm-4 col-12 last-three">
                    <div class="imgset"><i class="fa fa-bus"></i></div>
                    <h2>Comfort Travelling</h2>
                    <p>We provide good transport services with <br>safety precaution</p>
                </div>
                <div class="servic col-lg-4 col-md-4 col-sm-4 col-12 last-three">
                    <div class="imgset"><i class="fa fa-thumbs-up"></i></div>
                    <h2>We Care Your Happy</h2>
                    <p>Your happiness is our primary preference</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center about">
            <h1><span>About</span> Us</h1>

            <p>Choosing the right website for your upcoming family vacation,a business trip or tourism of your
                wonderful may seam like a complicated process, but it doesnot have to be.
            </p>
            <p>
                There are many reason as to why we choose a certain website: be it by price, location and different
                 layers of booking, type of facilities, etc. One of the best way to cut your trip expenses is by Choosing 
                 the right websites that fits your needs at the lowest cost possible.
            </p>
            <p>Tourism system means conceptual approach which helps to identify the dynamic elements of tourism. 
                The important element of tourism system is its historical potential for development and resulting 
                benefits. However, the system operates within a global economic environment along with national priorities.
            </p>
            <p class="last">
                Travelling agent history is well represented over the internet but it is not easy to search and finding to
                the tourism agent telephone number, website and email address.indiatourism.com of course takes care of it 
                and provides all of you want to know about Packages and Destinations!
            </p>

        </div>
    </section>

    <section>
    <div class="container-fluid" style="width:100%;height:550px;">
        <div class="container-fluid contact">
            <form method="POST">
                <h1> Contact <span id="us">Us</span></h1>
                <label>Enter Your Name:</label><br>
                <input type="text" name="name"><br>
                <label>Enter Your Email:</label><br>
                <input type="text" name="email"><br>
                <label>Subject:</label><br>
                <input type="text" name="subject"><br>
                <label>Message:</label><br>
                <input type="text" name="message"><br>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
    </section>

    <section>
        <div class="container-fluid" style="width:100%,height:auto;background:rgba(0, 100, 179, 0.555);">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-10 offset-sm-2 offset-1" style="color:white">
                <h2>Contact:</h2>
                    <p>Surat, Gujarat, India</p>
                    <p>dhruvikkava12345@gmail.com</p>
                    <label  style="margin-left:0px">Phone number:</label>
                        <ul  style="margin-left:20px">
                            <li>+91 9106295234</li>
                            <li>+91 7106295234</li>
                            <li>+91 7106295234</li>
                        </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 offset-sm-2 offset-1"style="color:white">
                    <h2>Tourism:</h2>
                    <p>A tourism website which helps the tourist<br> 
                        people for exploring India.
                    </p>
                    <h3>Follows on..</h3>
                    <p style="font-size:30px;"><i class="fa fa-facebook-square"></i>
                        <i class="fa fa-twitter-square"></i>
                        <i class="fa fa-linkedin-square"></i>
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-instagram"></i>
                    </p>

                </div>
            </div>
        </div>
    </section>

    
    <section class="footer">
        <p><i class="fa fa-copyright"></i>2021 Copyright: Indiatour.com </p>
    </section>

    
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
    include 'conn.php';
        $name = $_POST['name'];
        $email= $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $ins = "INSERT INTO `contact`( `name`, `email`, `subject`, `message`) 
        VALUES ('$name','$email','$subject','$message')";

        $qry = mysqli_query($con,$ins);
        if($qry)
                {
                    ?>
                    <script>
                        alert("data submitted");
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert("Data not submitted");
                    </script>
                    <?php
                }
    }
?>

