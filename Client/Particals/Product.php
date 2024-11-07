<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body><div class="container">


<div class="section-product py-5"> 
 <h2 class="title-section"> Sản Phẩm </h2> 
 <div class="row">
     <?php
     for ($i = 0; $i < 8; $i++) :
     ?>
         <div class="col-12 col-md-6 col-lg-4 col-xl-3">
             <div class="card mb-4">
                 <img src="assets/images/product_1.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
             </div>
         </div>

     <?php endfor; ?>
 </div></div>

</div>
</body>
</html>