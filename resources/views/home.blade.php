<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    

    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 


    <title>Home Page</title>
  </head>
  <body>
    <x-header/>

      <div class="view-container">

      <x-filter/>
      <x-view/>

      </div>


    <x-footer/>

  </body>
</html>