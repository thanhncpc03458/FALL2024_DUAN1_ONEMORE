<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMHjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="./Client/assets/img/banner-2.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="./Client/assets/img/banner-bg.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item ">
      <img src="Client/assets/img/slider-3.jpg" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Thêm JavaScript cho Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybYB1F1gZ3Q4U4z1U4yU4yU4yU4yU4yU4yU4yU4yU4yU4yU4yU4yU4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-9aYkV6yR+P4g5Q6e6C8hE8z6g5Q6e6C8hE8z6g5Q6e6C8hE8z6g5Q6e6C8hE8" crossorigin="anonymous"></script>
</body>
</html>