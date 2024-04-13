<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <style>
        

        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
  background: url('./assets/images/Home 6.jpg');
  background-size: cover;
  
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;
}
.text h5{
  font-size: 50px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: orange;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;

}
.hire{
  font-size: 18px;
  background: cadetblue;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: orange;
  border: 1px solid #4070f4;
}       
</style>


</head>
<body>
<?php
include('header.php');
?>

  <section class="about-us">
    <div class="about">
      <!--<img src="girl.png" class="pic">-->
      <div class="text">
        <h2>About Us</h2>
        <h5>TATU CITY<span> HUB</span></h5>
          <p>We are organisation that helps you to access your home. We deal in the House selling and the allocating the location of survival to many. For more Questions Contact us though the details provided below</p>
        <div class="data">
        <a href="contact.php" class="hire">Contact us</a>
        </div>
      </div>
    </div>

    <div class="image">
      
    </div>
  </section>


    
</body>
</html>