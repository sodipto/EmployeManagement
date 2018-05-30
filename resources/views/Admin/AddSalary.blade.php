@extends('layouts.admin')


@section('title','|Add Salary')

@section('CSS')

<style>
hr { background-color: red; height: 1px; border: 0; }

.req{  color: red;}

.table-bordered > tbody > tr > td {
     border: 1px solid black;
}

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

            <h4><b>ID :</b><a href="#">{{"141725"}}</a></h4>
            <h4><b>Name:</b> {{"sodipto Saha"}}</h4>
            <h4><b>Position:</b> {{"Manager"}}</h4>
            <h4><b>Bank Name:</b> {{"Dutch Bnagla Bank"}}</h4>
            <h4><b>Branch:</b> {{"Banani"}}</h4>
            <h4><b>Account Number:</b> {{"123456789"}}</h4>
        
           


       </div>

       <div class="col-md-3 ">
             
            <h5><b>Month:</b> {{"MAY"}}</h5>
           
            <h5><b>Present:</b> {{"27"}} Days</h5>
            <h5><b>Valid Leave:</b> {{"2"}} Days</h5>
            <h5><b>Paid Leave:</b> {{"2"}} Days</h5>
            <h5><b>Over Time:</b> {{"50"}} Hours</h5>
            <h5><b>Eat Cost:</b> {{"2000"}} Hours</h5>
            <h5><b>Total Working Days :</b> {{"31"}} Days</h5>



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

   </div>



<br>

{{-- <div class="row">
  <div class="col-md-12">

           
          <div class="form-group">
            <label for=""><h4>Update Officials Details Section</h4></label>
            <hr>
           
         </div>

        
       </div>
</div>
 --}}


<div class="row" >

 <div class="col-md-12">
   <form action="" method="POST" role="form">    
      
      <table class="table table-bordered ">
        <thead>
          <tr style="background-color:black;">
            <th style="color:white;" width="60%">Payment Dtails</th>
            <th style="color:white;">Earning(BDT)</th>
            <th style="color:white;">Deduction(BDT)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Basic Salary</td>
            <td><input type="text" name="" value="25000"></td>
            <td>----</td>
          </tr>

          <tr>
            <td>Medical Allowance</td>
            <td><input type="text" name="" value="1000"></td>
            <td>----</td>
          </tr>

          <tr>
            <td>Conveyance</td>
            <td><input type="text" name="" value="5000"></td>
            <td>----</td>
          </tr>

          <tr>
            <td>Special Allowance</td>
            <td><input type="text" name="" value="1000"></td>
            <td>----</td>
          </tr>

          <tr>
            <td>OverTime</td>
            <td><input type="text" name="" value="2000"></td>
            <td>----</td>
          </tr>


           <tr>
            <td>Bonus(Festival)</td>
            <td><input type="text" name="" value="2000"></td>
            <td>----</td>
          </tr>

          <tr>
            <td>Bonus(Depend on Work)</td>
            <td><input type="text" name="" value="0"></td>
            <td>----</td>
          </tr>

          <tr>
            <td>Other</td>
            <td><input type="text" name="" value="200"></td>
            <td>----</td>
          </tr>

           <tr>
            <td>Leave Enhancement</td>       
            <td>----</td>
            <td><input type="text" name="" value="100"></td>
          </tr>

          <tr>
            <td>Launch/Eat Cost</td>       
            <td>----</td>
            <td><input type="text" name="" value="2500"></td>
          </tr>

          <tr>
            <td>Provident Fund(per Month)</td>       
            <td>----</td>
            <td><input type="text" name="" value="300"></td>
          </tr>

          <tr>

            <td colspan="3">{{-- .............................................................................
            .............................................................................
            .............................................................................
             ............................................................... --}}
          </td>
            

          </tr>

         

          <tr>
            <td><h4><b>Total</b></h4></td>       
            <td><h4><b>30000</b> (BDT)</h4></td>
           <td><h4><b>500</b> (BDT)</h4></td>
          </tr>


          <tr>
            <td ><h4><b>Net Salary(Total Earning- Deduction)</b></h4></td>       
            <td colspan="2"><h4><b>29500</b> (BDT)</h4></td>
         
          </tr>



        </tbody>
      </table>
 
{{-- 
   <div class="pull-left">
     
   </div>

   <div class="pull-right" style="border: 2px solid black;">
     ddd
   </div>
 --}}



 

  
  <hr>
    <div class="pull-right">
        <button type="submit" class="btn btn-primary"{{--  class="pull-right" --}} >Add Salary</button>
   </div>

   </form>
  </div>
</div>
      
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