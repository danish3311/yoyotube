<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
      
    <div class="container mt-5">

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="Title">Title</label>
          <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" name="desc" class="form-control" id="desc" aria-describedby="desc" placeholder="Enter Description">
          </div>

          <div class="form-group">
            <label for="image">Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control" id="file" aria-describedby="file">
          </div>
      
          <div class="form-group">
            <label for="File">Video</label>
            <input type="file" name="video" class="form-control" id="file" aria-describedby="file">
          </div>
        
        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
      </form>


    </div>

<style>

.form-group{
    width: 50%;
    margin: auto;
}
.submit-btn{
    margin-left: 45%;
    margin-top: 5%;

}


</style>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>