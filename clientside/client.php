<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IN_N_out</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&family=Playfair+Display&display=swap" rel="stylesheet">
<style>
*{
    margin: 0;
    padding: 0;
    font-family: 'Pixelify Sans', sans-serif;
    font-family: 'Playfair Display', serif;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgb(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/background.jpg);
    background-size: cover;
    background-position: center;
}
.banner img{
    box-shadow: 0 0 25px cyan,
    0 0 15px cyan;
    filter: grayscale(.4);
    transition: 0.7s;
}
.banner img:hover{
    filter:grayscale(0);
    transform: scale(1.3) rotate(720deg);
}
.navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 100px;
    cursor: pointer;
    border-radius: 50%;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin:0 20px;
    position: relative;
}
.navbar ul li a{
    text-decoration: none;
    color: aliceblue;
    text-transform: uppercase;
}
.navbar ul li::after{
    content:'';
    height: 3px;
    width:0;
    background: #009688;
    position: absolute;
    left:0;
    bottom:-10px;
    transition: 0.5s;
}
.navbar ul li:hover:after{
    width: 100%;
}
.content{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}
.content h1{
    font-size: 70px;
    margin-top: 80px;
}
.content p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}
button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
a{
    text-decoration: none;
    color: #fff;
}
span{
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span{
    width:100%;
}
button:hover{
    border: none;
}
@media only screen and (max-width: 768px) {
    .navbar ul {
        text-align: center;
        margin-top: 10px;
    }

    .navbar ul li {
        display: block;
        margin: 10px 0;
    }
}
/*
.page2{
    width: 100%;
    height: 100vh;
    display: flex;
    background-color: #000102;  /*   #eef3f8   #000102  */
/*    background-size: cover;
    background-position: center;
}

.page2 img{
   height: 50vh;
   width: 50vh;
   padding: 55% 0% 55% 60%;
   border-radius: 50% ;
   max-width: 100%;
   height: auto;
}
img{
    box-shadow: 0 0 15px cyan,0 0 25px cyan;
    filter: grayscale(0);
}*/
.page2 {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content:space-around ;
    align-items: center;
    background-color: #000102;
    background-size: cover;
    background-position: center;
}

.page2 img {
    height: 60vh;
    width: 50vh;
    padding: 5%;
    border-radius: 30%;
    max-width: 100%;
    height: auto;
    box-shadow: 0 0 15px cyan, 0 0 25px cyan;
    filter: grayscale(0);
}
.about{
    color: #fff;
    justify-content: space-evenly;
}
.about h4{
    padding-left:200px;
    padding-bottom: 30px;
}
.about h1{
    padding-left:100px;
    padding-bottom: 20px;
}
.about hr{
    border-top: 5px white;
    border-radius: 10px;
    opacity: 0.4;
}
.about p{
    font-size: 25px;
    margin-top: 10px;
}

.page3{
    height: 100vh;
    width: 100%;
    background-color:  #000102;
}
.page3 h3{
   color: rgb(26, 127, 216);
   text-align: center;
   font-size: 19px;
}
.page3 h1{
    color: #fff;
    text-align: center;
}
.page3 .left img{
    height: 40vh;
    width: 40vh;
    float: left;
    margin-top: 50px;
    margin-left:300px;
    border-radius: 20%;
    box-shadow: 0 0 15px cyan, 0 0 25px cyan;
    filter: grayscale(0);
}
.page3 .right img{
    clear: both;
    height: 40vh;
    width: 40vh;
    margin-top: 50px;
    border-radius: 20%;
    box-shadow: 0 0 15px cyan, 0 0 25px cyan;
    filter: grayscale(0);
}
.container{
    height: 100vh;
    width: 100%;
    margin: 0 auto;
    padding: 20px;
    background-image: url(images/contactbackground.png);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-weight: bolder;
}


.container h1 {
    font-size: 28px;
    color: #FFF;
    margin-bottom: 20px;
}

.container p {
    font-size: 16px;
    color: #FFF;
    margin-bottom: 20px;
}

.container form {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

.container label {
    font-size: 14px;
    color: #FFF;
    margin-bottom: 5px;
}

.container input, textarea {
    font-size: 14px;
    padding: 8px 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 3px;
}

.container button {
    font-size: 16px;
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}


.container button:hover {
    background-color: #0056b3;
}

.contact-info {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.contact-info h2 {
    font-size: 20px;
    color: #FFF;
    margin-bottom: 10px;
}

.contact-info p {
    font-size: 15px;
    color: #FFF;
    margin-bottom: 9px;
}
</style>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="images/logo.jpeg" class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>FIX YOUR PHONE WITH US</h1>
            <p>The most efficient way to make your phone feel healthy</p>
            <div>
                <button type="button" id="span"><a href="selling.php"><span></span>Buy your Phone</a></button>
                <button type="button" id="span"><a href="mobilerepair.php"><span></span>Want A Repair</a></button>
            </div>
        </div>
    </div>
    
    
    <div class="page2">
        <div class="image">
            <img src="images/aboutimage.png" alt="Image">
        </div>
        <div class="about">
            <h4>Hello There</h4>
            <h1>We Are In and Out </h1>
            <hr>
            <p> 
                At In and Out, our mission is simple:  to provide exceptional mobile <br>
                repair services and quality devices that empower you to stay connected, <br>
                productive, and creative in today's fast-paced world. We strive to deliver <br>
                reliable solutions tailored to your unique needs.
                </p>
        </div>
    </div>

    
    <div class="page3">
            <h3>What We Do</h3>
            <h1>Over the years, we have served our customers<br> by giving them amenities that we are good at.<h1>
            <div class="left">
                <img src="images/slimg.png" alt="selling" >
              
            </div>
            <div class="right">
                <img src="images/rpimg.png" alt="repair" >
            </div>
    </div>
    
        <div class="container">
            <h1>Contact Us</h1>
            <form action="" method="post">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
    
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
    
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
    
                <button type="submit">SUBMIT</button>
            </form>
    
            <div class="contact-info">
                <h2>Where to Find Us</h2>
                <p>Raipur,(C.G.)</p>
    
                <h2>Email Us At</h2>
                <p>contact@inout.com</p>
    
                <h2>Call Us At</h2>
                <p>Phone: (+91) 555 1212</p>
            </div>
        </div>

    
</body>
</html>
