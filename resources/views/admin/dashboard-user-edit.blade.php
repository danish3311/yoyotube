<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="{{url('css/admin.css')}}">

  <title>Dashboard</title>
</head>

<body>


  <div class="container bg-light">

    <div class="row">
          <div class="col-sm-3 ">
            <h2 class="mx-4"><a style="list-style-type: none; text-decoration: none;color: black" href="/admin/dashboard">Dashboard</a></h2>
                        <div class="sidebar">
                          <ul class="mt-5">
                          <li><a href="/admin/dashboard/users">Users</a></li>
                          <li><a href="/admin/dashboard/videos">Videos</a></li>
                    
                        </ul>
                        </div>

          </div>

          <div class="col-sm-9" style="border-left: 1px solid black">
            <h2 class="mx-4">Admin</h2>    
            <form method="POST" style=" text-align: right; margin:auto" action="{{ route('logout') }}">
              @csrf
              <label for="Logout"></label>
              <li  style="list-style-type: none;"><input class="btn btn-primary" type="submit" style="padding: 5px;margin-top:5px;" value="Logout"></li>
          </form>   
            <div class="row">
             
              <form method="POST" action="{{url('admin/dashboard/users/update/'.$user->id)}}">
                @csrf
                @method('PUT')
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{$user->name}}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <label class="labels">Email</label>
                    <input type="email"
                        class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                    </div>
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit">Update User</button>
                </div>
            </form>

              </div>
            </div>
          </div>
  </div>

  </div>

  </div>




  {{-- <script>

    $(document).ready(function () {
      $('#edit').on('click',function(){
        $.ajax({
          type: "POST",
          url: "{{/admin/dashboard/users/".$"}}",
          data: "data",
          dataType: "dataType",
          success: function (response) {
            
          }
        });
      })
    });
    
    
    </script> --}}

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>