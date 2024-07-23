<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Font+Name&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/conflict-detection.min.js"
        integrity="sha512-xCW0XKIjktyY34NFvrvxxGZr7aAovIhKAuF4Z49ZGWzjoDC0pGzO4qwGG8Kg6kGcKWNib0g8P1w91XO6nC9dyQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Himanshu</title>
</head>

<body>
    <div class="container">
        <nav>
            <div class="logo">
                <h1>Developer<span>X</span></h1>
            </div>
            <ul class="abc">
                <li><a href="#">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="#Contact">Contact Us</a></li>
                <li><a href="#">My Resume</a></li>
            </ul>
        
            <div class="navbar" onclick="myFunction(this)" id="bar"> 
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        </nav>
          </div>
        
        <div class="main">
            <div class="maintaxt">
                <h3>Hello I am</h3>
                <h1>Himanshu <span>Saini</span></h1>
                <p>FullStack Developer</p>
                <button id="cvb"  ><a href="<?php echo base_url();?>/assets/resuma.jpg" download="resume" style="text-decoration: none;">Daunlod cv</a></button>
            </div>
            <img src="<?php echo base_url();?>/assets/man.png.jpg" alt="">
        </div>
        <div class="aboutus" id="About">
            <div class="head">
                <h1>About <span>Us</span></h1>
            </div>
            <div class="about">
                <img src="<?php echo base_url();?>/assets/man2.png.jpg" alt="">

            
            <div class="aboutText">
                <h2>Hello I am a fullStack <span>Developer</span> </h2>
                <p>Experience : <span>0 - 2 years</span></p>
                <p>Speciality : <span>Web development</span></p>
                <p>Skills : <span> Mern and php</span></p>
                <p>Email : <span>himanshusaini5467@gmail.com</span></p>
        
        </div>
            </div>
        </div>
    </div>
    <div class="services" id="Services">
        <div class="head">
            <h1>Our <span>Service</span></h1>

        </div>
        <div class="service">
            <div class="card">
                <img src="<?php echo base_url();?>/assets/downloada.png" alt="">

                <h3>Website development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, deserunt.</p>
            </div>
            <div class="card">
                <img src="<?php echo base_url();?>/assets/downloada.png" alt="">

                <h3> Backend development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, deserunt.</p>
            </div>
            <div class="card">
               <img src="<?php echo base_url();?>/assets/downloada.png" alt="">
                <h3>Frontend development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, deserunt.</p>
            </div>
            <div class="card">
                <img src="<?php echo base_url();?>/assets/downloada.png" alt="">

                <h3>Website desgin</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, deserunt.</p>
            </div>
        </div>
    </div>

    <div class="works">
        <div class="head">
            <h1>My <span>works</span></h1>
        </div>
        <div class="myworks">
            <div class="workcard">
                <img src="<?php echo base_url();?>/assets/news.jpg" alt="">

                <p> News Website using APi</p>
                <a href="#"></a>
            </div>
            <div class="workcard">
                <img src="<?php echo base_url();?>/assets/eco.jpg" alt="">
                <p> Ecommerce Website using APi</p>
                <a href="#"></a>
            </div>
            <div class="workcard">
                <img src="<?php echo base_url();?>/assets/image.jpg" alt="">
                <p> Food Website using APi</p>
                <a href="#"></a>
            </div>
        </div>
    </div>
    <div class="connect" id="Contact">
        <div class="head">
            <h1>Contact <span>Us</span></h1>
    </div>
    <!-- <?php echo form_open('Welcome/index') ?> -->
    <div class="contacts">
    
     
           <!-- <?php echo validation_errors(); ?> -->
    <?= form_open_multipart('Welcome/port', ['id'=>'my-form',]) ?>
    <p>Name:</p>
        <input type="text" class="name" placeholder="Enter your name" name="name" value="<?php echo set_value('name')?>" 
        <?php echo form_error('name')?>
        <p>Phone no:</p>
        <input type="number" class="phoneno" placeholder="Enter your phone number" name="phone"value="<?php echo set_value('phone')?>" 
        <?php echo form_error('phone')?>
        <p>Email:</p>
        <input type="email" class="email" placeholder="Enter your email" name="email"value="<?php echo set_value('email')?>" 
        <?php echo form_error('email')?>
        <p>Address:</p>
        <input type="text" class="address" placeholder="Enter your address" name="address"value="<?php echo set_value('address')?>" 
        <?php echo form_error('address')?>
        <input type="button" value="submit">
        <?= form_submit('submit', 'login') ?>
        <?= form_close() ?>
       
    </div>
    <!-- <?php echo form_close() ?> -->
    
    </div>
    <div class="footer">
        <div class="text">
            <h3> Connect here</h3> 
            <p>Facebook</p>
            <p>Instagram</p>
            <p>Linkdin</p>
            <p>X</p>
        </div>
        <div class="text">
            <h3>My work</h3>
            <p>Best</p>
            <p>Quality</p>
            <p>Good</p>
            <p>Best Price</p>
        </div>
        <div class="text">
            <h3>Contact   </h3>
            <p>Email</p>
            <p>Phone</p>
            <p>Message</p>
            <p>Social Media</p>
        </div>
    </div>
    </div>
    </div>


    <script src="<?php echo base_url();?>/assets/index.js"></script>
    </body>
   
    <script>
        function myFunction(x) {
          x.classList.toggle("change");
        };
        
        </script>
</html>