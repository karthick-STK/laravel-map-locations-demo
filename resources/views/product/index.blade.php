<html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <body>
    <div class="container">
    <div class="row">
        <div class="col-lg-6 my-3">
            <div class="pull-right">
                <h4>Add Location Form</h4>
            </div>
        </div>

        <div class="col-lg-6 my-3">
            <div class="pull-right">
            <button type="text"><a href="/git/laravel-map-locations-demo/public/products/address/map">View Maps</button>
            </div>
        </div>

        
    </div> 
   
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<form method="post" action="/git/laravel-map-locations-demo/public/products/store" >
  <!-- 2 column grid layout with text inputs for the first and last names -->
  @csrf
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1">First Name</label>
        <input type="text" id="name" name="fname" class="form-control" />       
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example2">Last Name</label>
        <input type="text" id="lname" name="lname" class="form-control" />        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1">address</label>
        <input type="textarea" id="address" name="address" class="form-control" />       
      </div>
    </div>    
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1">Latitude</label>
        <input type="number" id="lat" name="lat" class="form-control" />       
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example2">Longitude</label>
        <input type="number" id="long" name="long" class="form-control" />        
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-block mb-4 enroll">Add Location</button>
</form>
<button type="text" onclick="getLocation()">Get Map Address</button>    
</div>
   </body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="https://js.stripe.com/v3/"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" ></script>
<script>

var x = document.getElementById("lat");
var y = document.getElementById("long");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.value = position.coords.latitude;
  y.value = position.coords.longitude;  
}
  
</script>

</html>