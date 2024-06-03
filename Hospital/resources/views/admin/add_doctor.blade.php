<!-- Admin dashboard -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">
        .label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

       
        @csrf
        <div class="container" align="center" style="padding-top: 100px;">
        @csrf
        @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">
                x
            </button>

            {{session()->get('message')}}
        </div>
        @endif
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div style="padding:15px;">
                @csrf
                    <label>Name</label>
                    <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">
                </div>

                <div style="padding:15px;">

                    <label>Email</label>
                    <input type="text" style="color:black;" name="email" placeholder="Write the email" required="">
                </div>

                <div style="padding:15px;">

                    <label>Phone</label>
                    <input type="number" style="color:black;" name="phone" placeholder="Write the number" required="">
                </div>

                <div style="padding:15px;">

                <label>Place</label>
                    <input type="text" style="color:black;" name="place" placeholder="Write the address" required="">
                </div>

                <div style="padding:15px;">

                </div>
                <div style="padding:15px;">
                <label>Password</label>
                    <input type="text" style="color:black;" name="password" placeholder="Write the password" required="">
                </div>

                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>
                

            </form>

        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>