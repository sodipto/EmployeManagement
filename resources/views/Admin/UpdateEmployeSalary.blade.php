@extends('layouts.admin')


@section('title','|Update Salary')

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
            <label for=""><h3>Update Salary Details Section</h3></label>
            <hr>
           
         </div>

        
       </div>
</div>


   <div class="row" >


    <form action="" method="POST">
      
    

    <div class="col-md-4">

           
         <div class="form-group">
            <label for="">Bank Name/other<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="Ducth Bangla Bank">
         </div>

        
    </div>

    <div class="col-md-4">

           
         <div class="form-group">
            <label for="">Bank Branch<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="Mirpur">
         </div>

        
    </div>



        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Account Number<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="12121212121">
            
           
          
         </div>

        
       </div>


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Basic Salary <b class="req">*</b></label>
            <input type="number" class="form-control" id="" placeholder="ex: 25000">

         </div>

        
       </div>


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Conveyance<b class="req">*</b></label>
            <input type="number" class="form-control" id="" placeholder="ex: 2200">
         </div>

        
       </div>


        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Medical Allowance<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex:2000">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Special Allowance<b class="req">*</b></label>
            <input type="text" class="form-control" id="" placeholder="ex: 1000">
         </div>

        
       </div>

       

      

        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Provident Fund</label>
            <input type="number" class="form-control" id="" placeholder="ex: 300">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Bonus</label>
            <input type="number" class="form-control" id="" placeholder="ex: 500">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Yearly Increment</label>
            <input type="number" class="form-control" id="" placeholder="ex: 1500">
         </div>

        
       </div>

       <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Salary Scale</label>
            <select name="" id="input" class="form-control" required="required">
              <option value="-1" selected="" disabled="">Select Scale</option>
              <option value="1">1</option>
              <option value="2">2</option>
              
            </select>
         </div>

        
       </div>

        <div class="col-md-4">

           
          <div class="form-group">
            <label for="">Extra Field</label>
            <input type="number" class="form-control" id="" placeholder="ex: if you needed">
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