<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fuild page-body-wrapper">
        <div align="center" style="padding:100px;">

            <table>
                    <tr style="backgrouond-color:black;">
                        <th style="padding:10px">User Name</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Place</th>
                        <th style="padding:10px">Password</th>
                        <th style="padding:10px">Delete</th>
                        <th style="padding:10px">Update</th>
                    </tr>
                    @foreach($data as $doctor)
                    <tr align="center" style="background-color:black;">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->email}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->place}}</td>
                        <td>{{$doctor->password}}</td>

                        <td>
                            <a onclick="return confirm('are you sure to delete this user ?')"class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
                        </td>

                        <td>
                            <a class="btn btn-primary" href="">Update</a>
                        </td>
                    </tr>
                    @endforeach
        </div>
        </div>
        
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>