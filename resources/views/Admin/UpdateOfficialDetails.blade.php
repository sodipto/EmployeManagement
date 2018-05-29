@extends('layouts.admin')


@section('title','|Update Officials Details')

@section('CSS')

<style>
hr { background-color: red; height: 1px; border: 0; }

.req{  color: red;}

</style>
@endsection

{{-- @section('pageheader')
      <h1>
        Update
        <small>Officials Details</small>
      </h1>
@endsection
 --}}
@section('content')

<form action="" method="POST" role="form">
  

 
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



<br> <br>

<div class="row">
  <div class="col-md-12">

           
          <div class="form-group">
            <label for=""><h3>Update Officials Details Section</h3></label>
            <hr>
           
         </div>

        
       </div>
</div>



   <div class="row" >
  <form action="" method="POST" role="form">    
      <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Employe ID<b class="req"></b></label>
            <input type="text" class="form-control" id=""  disabled="" value="123456">
         </div>

        
       </div>


       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Employe Name<b class="req">*</b></label>
            <input type="text" class="form-control" id="" value="Sodipto Saha" disabled="">

         </div>

        
       </div>



        <div class="col-md-4">

           
          <div class="form-group">
          
            <div class="form-group">
           <label for="">Employe Designation/Catagory/Position<b class="req"></b></label>
            <input type="text" class="form-control" id=""  disabled="" value="Manager">
           </div>
          
         </div>

        
       </div>


        


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Desk Number<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex: 421">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Desk Phone/Telephone Number<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex: 01833000000">
         </div>

        
       </div>

        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Desk Phone Number Extension<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex: +8800">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Official Email-ID<b class="req">*</b></label>
            <input type="email" class="form-control" id="" placeholder="ex: Abc@companydomain.com">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Office Branch<b class="req">*</b></label>

            <select name="" id="input" class="form-control" required="required">
              <option value="-1" selected="" disabled="">Select Office Branch</option>
              <option value="1">Mirpur</option>
              <option value="2">Banani</option>
              
            </select>
          
         </div>

        
       </div>




        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Type Of Employee<b class="req">*</b></label>

            <select name="" id="input" class="form-control" required="required">
              <option value="-1" selected="" disabled="">Select Type</option>
              <option value="1">FullTime</option>
              <option value="2">PartTime</option>
              <option value="3">Contractual</option>
              <option value="4">Projecuise</option>
              <option value="5">Other</option>
            </select>
          
         </div>

        
       </div>





       <div class="col-md-6">

           
          <div class="form-group">
            <label for="">Reporting Manager<b class="req">*</b></label>

            <select name="" id="input" class="form-control" required="required">
              <option value="-1" selected="" disabled="">Select Reporting Manager</option>
              <option value="1">Sodipto Saha</option>
              <option value="2">Badhan Saha</option>
              
            </select>
          
         </div>

        
       </div>

       <div class="col-md-6">

           
          <div class="form-group">
            <label for="">Functional Manager<b class="req">*</b></label>

            <select name="" id="input" class="form-control" required="required">
              <option value="-1" selected="" disabled="">Select Functional Manager</option>
              <option value="1">Sodipto Saha</option>
              <option value="2">Badhan Saha</option>
              
            </select>
          
         </div>

        
       </div>

        

      

        

       


     
   </div>






 

  
 <hr>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
      
@endsection



@section('Scripts')
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