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

  <div class="view-container">


    <div>

      <div class="left">

        <div class="filter">
          <div class="f-cat">
            <h3>Category</h3>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="f-tags"></div>
          <h3>tags</h3>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>

      </div>


    </div>

    <div>
      <div class="right">

        <div class="view">
          @foreach ($videos as $video)
          <div class="vid-item">
            <a href="{{url('play/'.$video->id) }}
              "><img src="{{asset('upload/assets/'.$video->thumbnail_filename)}}" alt=""></a>
            <h4>{{$video->title}}</h4>
          </div>
          @endforeach
        </div>
      </div>
    </div>



  </div>


  <x-footer />

</body>

</html>