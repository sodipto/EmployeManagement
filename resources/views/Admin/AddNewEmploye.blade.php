@extends('layouts.admin')


@section('title','|Add New Employe')

@section('CSS')

<style>
hr { background-color: red; height: 1px; border: 0; }

.req{  color: red;}

</style>
@endsection

{{-- @section('pageheader')
      <h1>
        Add New
        <small>Employe</small>
      </h1>
@endsection --}}

@section('content')

<form action="" method="POST" role="form">
  
   <div class="row">
     
       <div class="col-md-4">

           
          <img src="/Content/dist/img/default.jpg" class="img-responsive" alt="Image" style="height: 150px;" id="uploadPreview">
           <br>
          <input type="file" id="uploadImage" onchange="PreviewImage();">
          <span><b>Upload Only:jpg|jpeg|png</b></span>


       </div>



        <div class="col-md-4">

           
           <div class="form-group">
              <label for="">First Name<b class="req">*</b></label>
              <input type="text" class="form-control" id="" placeholder="ex: Sodipto">
          </div>


       </div>

       

        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Last Name<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex: Saha">
         </div>

        
        </div>

     

         <div class="col-md-4" style="padding-top: 10px;">

           
          <div class="form-group">
            <label for="">Email Address<b class="req">*</b></label>
            <input type="email" class="form-control" id="" placeholder="ex: example@domain.com">
         </div>

        
        </div>
          

     
         <div class="col-md-4" style="padding-top: 10px;">

           
          <div class="form-group">
            <label for="">Cell-Phone<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex: 01833000000">
         </div>
     
        
       </div>
  


   </div>

<br>
   <div class="row" >
      
      <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Employe ID<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="Company Perpus">
         </div>

        
       </div>

        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Employe Designation/Catagory/Position<b class="req">*</b></label>

            <select name="" id="input" class="form-control" required="required">
              <option value="-1" selected="" disabled="">Select Position</option>
              <option value="1">Manager</option>
            </select>
          
         </div>

        
       </div>


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Joining Date<b class="req">*</b></label>
            <input type="date" class="form-control" id="" placeholder="ex: 06/01/2018">

         </div>

        
       </div>


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Age<b class="req">*</b></label>
            <input type="number" class="form-control" id="" placeholder="ex: 22">
         </div>

        
       </div>


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Permanent Address<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex: Durgapur,Netrokona">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Current Address<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex: Norda,Gulsan 2">
         </div>

        
       </div>


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Religion<b class="req">*</b></label>

            <select name="" id="input" class="form-control" required="required">
              <option value="-1" selected="" disabled="">Select Religion</option>
              <option value="1">Hindu</option>
              <option value="2">Muslim</option>
              <option value="3">Chirstan</option>
              <option value="4">Buddist</option>
              <option value="5">Other</option>
            </select>
          
         </div>

        
       </div>


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Date OF Birth<b class="req">*</b></label>
            <input type="date" class="form-control" id="" placeholder="ex: 05/28/1995">

         </div>

        
       </div>


       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Blood Group<b class="req">*</b></label>

            <select name="" id="input" class="form-control" required="required">
              <option value="-1" selected="" disabled="">Select Group</option>
              <option value="1">A+</option>
              <option value="2">A-</option>
              <option value="3">B+</option>
              <option value="4">B-</option>
              <option value="5">AB+</option>
              <option value="3">AB-</option>
              <option value="4">O+</option>
              <option value="5">O-</option>
            </select>
          
         </div>

        
       </div>

        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Nationality</label>
            <input type="number" class="form-control" id="" placeholder="ex: Bangladeshi">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">NID Card Number</label>
            <input type="number" class="form-control" id="" placeholder="ex: 19951212121">
         </div>

        
       </div>

         <div class="col-md-4">

           
          <div class="form-group">

            <label for="">Gender<b class="req">*</b></label><br>
           
                <input type="radio" name="gender" id="input" value="" checked="checked" >
               <b style="font: 15px;">Male</b> 
                 <input type="radio" name="gender" id="input" value="" >
              <b style="font: 15px;">FeMale</b> 
             
         </div>

        
        
       </div>


       


     
   </div>






 

  
 <hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      
@endsection



@section('Scripts')
<script>
//when select image preview immge
function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
@endsection