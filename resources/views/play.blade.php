<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">


    <title>Home Page</title>
</head>

<body>
    <x-header />

    <div class="container play-container">
        <div class="playleft">

            <video width="100%" height="400px" style="margin: auto" controls>
                <source src="{{URL::asset('upload/videos/song.mp4')}}" type="video/mp4">

            </video>
            <h2 style="margin-top:20px">{{$title}}</h2>
            <p style="margin-top: 10px">Description</p>
            <p style="margin-top: 20px">{{$desc}}</p>





        </div>
        <div class="playright">

            <div class="list-right">


            </div>


        </div>


    </div>


    <x-footer />

</body>

</html>