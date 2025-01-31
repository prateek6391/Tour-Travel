<?php
  $server="localhost";
  $username="root";
  $password="";

  $con=mysqli_connect($server,$username,$password);
  if(!$con){
      die("connection to this database failed due to ".mysqli_connect_error());
  }
  echo "Successfully connected to database";

  $visitor_name=$_REQUEST['visitor_name'];
  $visitor_email=$_REQUEST['visitor_email'];
  $text=$_REQUEST['where'];
  $number=$_REQUEST['numGuest'];
  $phone=$_REQUEST['visitor_phone'];
  $date1=$_REQUEST['arivals'];
  $date2=$_REQUEST['leaving'];

  $sql="INSERT INTO `Booking`.`form` (`name`, `email`, `whereto`, `noofguests`, `phone`, `arrival`, `leaving`) VALUES ('visitor_name', 'visitor_email', 'text', 'number', 'phone', 'date1', 'date2');";
//   echo $sql;

  if($con->query($sql)==true){
    //   echo "Successfully inserted";
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Tour and travel
    </title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="utils.css" />
  </head>
  <body>
    
    <!-- header section starts -->
    <header>
      <div id="menu-bar" class="fas fa-bars"></div>
      <a href="#" class="logo"><span>T</span>ravel</a>
      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>

    <!-- header section ends -->

    <!-- login form container -->

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email" />
        <input type="password" class="box" placeholder="enter your password" />
        <input type="submit" value="login now" class="btn" />
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">Click here</a></p>
        <p>Don't have an account? <a href="#">register now</a></p>
      </form>
    </div>

    <!-- home section starts -->

    <section class="home" id="home">
      <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>discover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
      </div>

      <div class="video-container">
        <video
          src="images/vid-2.mp4"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section>

    <!-- home section ends -->

    <!-- book section starts -->

    <section class="book" id="book">
      <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/book-img.svg" alt="" />
        </div>

        <form action="index.php" method = "POST" >
          <div class="inputBox">
            <h3>Name</h3>
            <input type="text" id="name" name="visitor_name" placeholder="Full Name" pattern=[A-Z\sa-z]{3,20} required>
          </div>
          <div class="inputBox">
            <h3>E-mail</h3>
            <input type="email" id="email" name="visitor_email" placeholder="pk@email.com" required>
          </div>
          <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="place name" name="where"/>
          </div>
          <div class="inputBox">
            <h3>Number of Guests</h3>
            <input type="number" placeholder="number of guests" min="1" name="numGuest" required/>
          </div>
          <div class="inputBox">
            <h3>Contact Number</h3>
    <input type="tel" id="phone" name="visitor_phone" placeholder="898-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
          </div>
          <div class="inputBox">
            <h3>Arrivals</h3>
            <input type="date" id="arivals-date" name="arivals" required />
          </div>
          <div class="inputBox">
            <h3>Leaving</h3>
            <input type="date" id="leaving-date" name="leaving" required />
          </div>
          <input type="submit" class="btn" id="send" value="book now" />
        </form>
    
      </div>
    </section>
    <!-- book section ends -->

    <!-- packages section starts -->

    <section class="packages" id="packages">
      <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/p-1.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> mumbai</h3>
            <p>
              Mumbai offers natural heritage and modern entertainment including leisure spots, beaches, cinemas, studios, holy places, amusement parks and historical monuments
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹10000.00 <span>₹14500.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-2.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> hawaii</h3>
            <p>
              The Big Island is home to an active volcano, and Oahu is home to Pearl Harbor and its rich history.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹20000.00 <span>₹35000.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-3.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> sydney</h3>
            <p>
              Spectacular harbor views, heritage-listed buildings, museums, shops, galleries, and cute courtyard cafés make this a great place to stay.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹28000.00 <span>₹39000.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-4.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> paris</h3>
            <p>
              one of the most beautiful cities in the world. It is known worldwide for the Louvre Museum, Notre-Dame cathedral, and the Eiffel tower. It has a reputation of being a romantic and cultural city.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹40000.00 <span>₹65000.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-5.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> tokyo</h3>
            <p>
              The cultural side of Tokyo is famous for its numerous things to do and top attractions, including museums; festivals; internationally noted cuisine; and professional sports clubs
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹37000.00 <span>₹45000.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <img src="images/p-6.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> egypt</h3>
            <p>
              Some of the most popular things for visitors to do in Egypt include exploring Hurghada's pretty beaches, discovering the stone relics of Luxor and swimming in the clear waters
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">₹46000.00 <span>₹59000.00</span></div>
            <a href="#" class="btn">book now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- package section ends -->

    <!-- services section starts -->

    <section class="services" id="services">
      <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-hotel"></i>
          <h3>affordable hotels</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
            consectetur quis unde a voluptatibus ipsam inventore deleniti et
            enim numquam.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>food and drinks</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
            consectetur quis unde a voluptatibus ipsam inventore deleniti et
            enim numquam.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>safty guide</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
            consectetur quis unde a voluptatibus ipsam inventore deleniti et
            enim numquam.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3>around the world</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
            consectetur quis unde a voluptatibus ipsam inventore deleniti et
            enim numquam.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-plane"></i>
          <h3>fastest travel</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
            consectetur quis unde a voluptatibus ipsam inventore deleniti et
            enim numquam.
          </p>
        </div>
        <div class="box">
          <i class="fas fa-hiking"></i>
          <h3>adventures</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
            consectetur quis unde a voluptatibus ipsam inventore deleniti et
            enim numquam.
          </p>
        </div>
      </div>
    </section>
    <!-- services section ends -->

    <!-- gallery section starts -->

    <section class="gallery" id="gallery">
      <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/g-1.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-2.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-3.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-4.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-5.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-6.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-7.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-8.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-9.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Pariatur, ex?
            </p>
            <a href="#" class="btn">see more </a>
          </div>
        </div>
      </div>
    </section>
    <!-- gallery section ends -->

    <!-- review section starts -->
    <section class="review" id="review">
      <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
      </h1>

      <div class="swiper-container review-slider">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic1.png" alt="" />
              <h3>Anonymous</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure
                saepe, assumenda tempora quibusdam deleniti autem vel.
                Voluptatibus, amet sequi perspiciatis laboriosam ad corrupti
                ratione alias officiis iure quibusdam quisquam! Nihil.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic2.png" alt="" />
              <h3>Anonymous</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure
                saepe, assumenda tempora quibusdam deleniti autem vel.
                Voluptatibus, amet sequi perspiciatis laboriosam ad corrupti
                ratione alias officiis iure quibusdam quisquam! Nihil.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic3.png" alt="" />
              <h3>Anonymous</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure
                saepe, assumenda tempora quibusdam deleniti autem vel.
                Voluptatibus, amet sequi perspiciatis laboriosam ad corrupti
                ratione alias officiis iure quibusdam quisquam! Nihil.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic4.png" alt="" />
              <h3>Anonymous</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure
                saepe, assumenda tempora quibusdam deleniti autem vel.
                Voluptatibus, amet sequi perspiciatis laboriosam ad corrupti
                ratione alias officiis iure quibusdam quisquam! Nihil.
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- review section ends -->

    <!-- contact section starts -->
    <section class="contact" id="contact">
      <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/contact-img.svg" alt="" />
        </div>

        <form action="">
          <div class="inputBox">
            <input type="text" placeholder="name" />
            <input type="email" placeholder="email" />
          </div>
          <div class="inputBox">
            <input type="number" placeholder="number" />
            <input type="text" placeholder="subject" />
          </div>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="message"
          ></textarea>
          <input type="submit" class="btn" values="send message" />
        </form>
      </div>
    </section>
    <!-- contact section ends -->

    <!-- brand section -->
    <section class="brand-container">
      <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/1.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/2.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/3.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/4.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/5.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="images/6.jpg" alt="" /></div>
        </div>
      </div>
    </section>

    <!-- footer section -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>about us</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Perferendis delectus nesciunt praesentium ea veniam, repellat quis
            labore optio voluptate mollitia.
          </p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
          <a href="#">india</a>
          <a href="#">USA</a>
          <a href="#">japan</a>
          <a href="#">france</a>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">book</a>
          <a href="#">packages</a>
          <a href="#">services</a>
          <a href="#">gallery</a>
          <a href="#">review</a>
          <a href="#">contact</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">linkedin</a>
          <a href="#">twitter</a>
        </div>
      </div>
      <h1 class="credit"> credit by <span> code with pk @ web designer</span> | all rights reserved! </h1>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
  </body>
</html>
