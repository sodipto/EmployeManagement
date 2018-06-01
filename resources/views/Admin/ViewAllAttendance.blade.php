@extends('layouts.admin')


@section('title','|Employe Attendance')

@section('CSS')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

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

  
   <div class="row">
     
       <div class="col-md-2">

           
          <img src="/Content/dist/img/saha.jpg" class="img-responsive" alt="Image" style="height: 170px;"
           id="uploadPreview">
            

         


       </div>


       <div class="col-md-4 ">

            <h4><b>ID :</b> {{"141725"}}</h4>
            <h4><b>Name:</b> {{"sodipto Saha"}}</h4>
            <h4><b>Position:</b> {{"Manager"}}</h4>
            <h4><b>Email:</b> {{"sodipto@gmail.com"}}</h4>
            <h4><b>Branch:</b> {{"Banani"}}</h4>
            <h4><b>CeLL:</b> {{"01833000000"}}</h4>
        
           


       </div>

       <div class="col-md-3 ">
           


       </div>



        <div class="col-md-3">

           
           <h4>Search Employee</h4>
           
         <div class="input-group">
            <input type="text" class="form-control" placeholder=" Ex: Employe Id " required="">
            <span class="input-group-btn">
             <button class="btn btn-success" type="submit">Search!</button>
            </span>
        </div>


       </div>


       {{--  <div class="col-md-4">

           
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
  
 --}}

   </div>



<br>
<hr>

    <div class="row">
         
         <div class="col-md-12">
             
             <h1>Here Full Calender Show The Daily Attendance With Each Date</h1>

         </div>

    </div>

@endsection



@section('Scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{{-- {{!! $calendar_details->script() !!} --}}
<script>
//when select image preview immge
// function PreviewImage() {
//         var oFReader = new FileReader();
//         oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

//         oFReader.onload = function (oFREvent) {
//             document.getElementById("uploadPreview").src = oFREvent.target.result;
//         };
//     };



</script>
@endsection