<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Cormorant+Garamond:ital,wght@1,600&family=Dancing+Script&family=Inter:wght@900&family=Lato:ital,wght@0,400;1,100&family=Merriweather+Sans:ital,wght@0,400;1,300&family=Montserrat:wght@100;400;900&family=Sacramento&family=Ubuntu&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Cormorant+Garamond:ital,wght@1,600&family=Dancing+Script&family=Inter:wght@900&family=Lato:ital,wght@1,100&family=Merriweather+Sans:ital,wght@0,400;1,300&family=Montserrat:wght@100;400;900&family=Sacramento&family=Ubuntu&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <title>selling site ❤</title>
  <style>
    body {

margin:0px;
text-align: center;
background-color: #000102;
}

.navbar-brand {
font-family: 'Amatic SC', cursive;
color: #c3eb72;
font-size: 2rem;
}
h2{
font-family: 'Amatic SC', cursive;
border-radius: 1rem;
text-align: centre;
background-color: white;

margin-top: 5rem;
margin-bottom: 5rem;



}
.form-control{
width:80% !important;
}
.upper
{

margin: 0rem;
padding:0rem 0rem;


}

.table{

border-style: dotted;

}
.carousel-inner{
   border-radius: 20%;
   box-shadow: 0 0 0 25px cyan  0 0 0 20px cyan;
}
.top-contact{

margin:0px;

}
.middle h4{
margin-top: 1rem;
margin-bottom: 5rem;
}
h3
{
font-family: 'Amatic SC', cursive;
border-radius: 1rem;
text-align: centre;
background-color: white;

margin-top: 5rem;
margin-bottom: 0;


}
.bottom{
display: block;
}
.producer{
padding: 4rem;
background-color: grey;
}
.Card{
padding: 5rem;
}

.correction{
padding: 5rem 10rem 5rem 10rem;

display: block;
margin: 5rem 5rem 5rem 5rem;
}

.consumer{
padding: 4rem;
background-color: grey;
}
.bottom{
background-color: grey;
}
.card-img{
height:15rem;
width:24rem;
margin: 2rem auto 2rem auto;
border-radius: 3rem;
text-align:
}
.form-upper{
width:100%;
}
h1 {
font-family: 'Amatic SC', cursive;
border-radius: 1rem;
text-align: centre;
background-color: white;
padding: 20px;
margin-bottom: 0;
}
p{
background-color: white;
border-radius: 1rem;
font-style:
}
.top {
background-image: url("../images/iphone2.jpg");
background-position:center;
background-size: cover;
text-align:center;
padding: 22rem 35rem 20rem 35rem;
}
@media screen and (max-width:950px){
.form-upper{
  width:100%;
}
.top{
background-image: url("../images/iphone2.jpg");
background-position:center;
background-size: contain;
padding: 3rem 3rem 3rem 3rem;


}
p{
background-color: white;
border-radius: 3rem;
  padding: 1rem 3rem 1rem 3rem;

}
.carousel
{
height:10rem;
width:100%;
}
.card-img{
width:100%;
border-radius: 1rem;
}
.bottom-card{
margin:0re,;
}
.table{


border-style: dotted;
padding:1rem;
width:100%




}

.upper
{

padding:0rem;
font-size: 0.7rem;



}

}

  </style>
</head>

<body>
  <h1>come and get your phone today❤</h1>

  <section class="content container-fluid">

    <div class="correction">





        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <!-- Indicators -->


          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="carousel-item ">
              <img class=" w-100" src="images/ORH9AL0.jpg" alt="Los Angeles">
            </div>

            <div class="carousel-item active">
              <img class=" w-100" src="images/OYHKA70.jpg" alt="Chicago">
            </div>

            <div class="carousel-item">
              <img class=" w-100" src="images/P6YUL80.jpg" alt="New York">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
  </section>

  <section class="container-fluid bottom-card">
 <?php
    $conn = mysqli_connect("localhost", "root", "", "mobilemanagement");
    $qry = "SELECT * FROM newphonedetails";
    $result = mysqli_query($conn, $qry);
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='card'>
              <img class='card-img' src='images/P6YUL80.jpg' alt='Card image cap'>
              <div class='card-body'>
                <h5 class='card-title'>" . $row["model"] . "</h5>
                <p class='card-text'>" . $row["features"] . "</p>
                <a href='#' class='btn btn-primary'>" . $row["price"] . "</a>
              </div>
            </div>";
    }
    ?>
  </section>
<footer style="padding:3rem; background-color:grey;">
<br>
<br>
<strong>payment integrating is on progess sorry for the inconvience❤️</strong>
</footer>
</body>

</html>