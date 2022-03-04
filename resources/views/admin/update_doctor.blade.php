
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <base href="/public">
    <!-- plugins:css -->
  @include('admin.css')
  </head>
  <body>
   @include('admin.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')

      <!-- partial -->
      @include('admin.navbar')
 
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <div class="container" align="left" style="padding-top:100px;">

          @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif

                <form  action="{{url('editDoctor',$doctor->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Doctor Name</label>
                      <input type="text" class="form-control" style="color:black"  name="name" value="{{$doctor->name}}" required>
                    </div>
                    <div class="mb-3">
                      <label for="number" class="form-label">Phone Number</label>
                      <input type="tel" class="form-control"  style="color:black"  name="number" value="{{$doctor->phone}}" placeholder="Write the number" required >
                    </div>
                    
                   
                
                      <div class="mb-3">
                    <label for="speciality" class="form-label">Speciality</label>
                      <select class="form-select" name="speciality"value="{{$doctors->speciality}}" required>
                        <option selected>Open this select menu</option>
                        <option value="eye">Eye Treatment</option>
                        <option value="ear">Ear Treatment</option>
                        <option value="pyschaitry ">pyschaitry </option>
                        <option value="physiotherapy ">physiotherapy </option>
                        <option value="surgeon ">Surgeon </option>
                      </select>
                      </div>

                      <div class="mb-3">
                        <label for="room" class="form-label">Room Number</label>
                        <input type="text" class="form-control"  style="color:black" name="room" value="{{$doctors->room}}" placeholder="Write the room number" required>
                      </div>

                      <div class="mb-3">
                        <label for="image" class="form-label">Upload Picture</label>
                        <input type="file" class="form-control"  name="file" required >
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                



            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>