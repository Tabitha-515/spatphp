
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contacts.css">
</head>
<body>

    <section>
        <div class="first-container">

            <header>
                <div class="navbar">
                    <h2 class="logo">MabbySpa</h2>
        
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">About</a> </li>
                        <li><a href="#">Services</a> </li>
                        <li><a href="#">Contact</a> </li>
                    </ul>
                </div>
            </header>
        
            <!--------banner section-->
        
            <div class="banner">
                <div class="banner">
                    <div class="spa-img">
                        <img src="images/beautyr.png">
                        <!-- <img src="images/logo.png" alt=""> -->
                    </div>
                    <div class="banner-content">
                        <span>Beauty Center</span>
                        <h1>Beauty and success <br>starts here.</h1>
                        <p>Together creeping heaven upon third dominion be upon won't darkness rule<br>
                             behold it created good saw after she'd Our set living.</p>
        
                             <button><a href="branch.php" class="button">Start Booking</a></button>
                    </div>
        
                </div>
            </div>
        

        </div>
    </section>
    
    <section>
        <div class="contact-form">
            <div class="form-container">
                <form action ="action_page.php">
                    <label for="fname">First Name</label><br>
                    <input type="text" id="fname" name="firstname" placeholder="Your name...."><br><br>
    
                    <label for="fname">Last Name</label><br>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name...."><br><br>

                    <textarea id="subject" name="subject" placeholder="write something...." style="height:200px"></textarea>

                    <input type="submit" value="submit">
                </form>
            </div>
    
        </div>

    </section>


    
</body>
</html>