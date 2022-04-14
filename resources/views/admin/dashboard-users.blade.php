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
            {{-- @if (session()->has('status'))
                           <div class="alert alert-success">
                            {{session('status')}}
                            </div>
                       @endif --}}
            <div class="row">
              <table id="users">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td><a href="{{url('/admin/dashboard/users/edit/'. $user->id)}}" class="btn btn-outline-primary ">Edit</a></td>
                  <td><a href="{{url('/admin/dashboard/users/del/'. $user->id)}}" class="btn btn-outline-danger ">Remove</a></td>
                </tr>
                @endforeach
             </table>
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