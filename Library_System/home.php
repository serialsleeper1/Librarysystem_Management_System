<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./styles/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <div class="parent">
    <div class="div1">
      <div class="account" id="btn">

      </div>
      <img src="color_logo-wm-lm_dimensions.png" width="99px" class="logo" id="logo">
      <nav>
        <ul>
          <li><a class="active" href="">Home</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Category</a></li>
          <li><a href="">Notification</a></li>
          <li><a href="">Account</a></li>
        </ul>
      </nav>
      <div id="links">
        <ul>     
          <ul>
            <li><a class="active" href="">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Category</a></li>
            <li><a href="">Notification</a></li>
            <li><a href="">Account</a></li>
        </ul>
      </div>
    </div>
    <div class="div2">

      <div class="img-container">
        <img class="image" src="./images/img3.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img6.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img9.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img4.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img7.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img5.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img8.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img6.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img4.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img5.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img12.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img13.jpg" width="300px">
      </div>
      <div class="img-container">
        <img class="image" src="./images/img14.jpg" width="300px">
      </div>

    </div>
    <div class="div3">

      <div class="box">
        <img src="./images/img6.jpg" width="100%" height="300px">
      </div>
      <div class="box">
        <img src="./images/img7.jpg"  width="100%" height="300px">
      </div>
      <div class="box">
        <img src="./images/img8.jpg"  width="100%" height="300px">
      </div>
      <div class="box">
        <img src="./images/img9.jpg"  width="100%" height="300px">
      </div>
      <div class="box">
        <img src="./images/img10.jpg" width="100%" height="300px">
      </div>
      <div class="box">
        <img src="./images/img11.jpg"  width="100%" height="300px">
      </div>


    </div>

    <div class="div4">

    </div>

  </div>

  <script>
    let n = 0;
    document.getElementById('btn').addEventListener('click',()=>{
      if(n == 0){
          document.getElementById('links').style = "display:block";
          n = 1;
        }else if(n == 1){
          document.getElementById('links').style = "display:none";
          n= 0;
      }

    });
  </script>
</body>

</html>