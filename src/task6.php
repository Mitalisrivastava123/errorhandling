
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light nav1">
  <a class="navbar-brand text-white" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-white fw-bold" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white fw-bold" href="./file4.txt">Contact Us </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white fw-bold" href="./task1.php">PAGE 1</a>
      </li>
    
    </ul>
  </div>
</nav>

<?php
if(http_response_code() == 404)
{
$str = "<h3 class='text-center mt-4'>Oops link is not working</h3><img src='./images/smiley1.jpg' height='400px' class=' d-block mx-auto'>";
echo $str;
}


?>
</body>
</html>