@extends('layouts.admin')


@section('title','|Salary View')

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
        Add New
        <small>Employe</small>
      </h1>
@endsection --}}

@section('content')


  
   <div class="row">
     
       <div class="col-md-2">

           
          <img src="/Content/dist/img/saha.jpg" class="img-responsive" alt="Image" style="height: 170px;"
           id="uploadPreview">
           <br>
            

         <div class="form-inline">

           <form>
           
            <select name="year" id="input" class="form-control" required="required">
              <option value="-1">2018</option>
              <option value="2">2017</option>
              <option value="3">2016</option>
              <option value="4">2015</option>
            </select>
          </form>

         </div>


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


{{-- <div class="row">

     <div class="col-md-12">

           
          <div class="form-group">
            <label for=""><h3>Employe Details</h3></label>
            <hr>
           
         </div>

        
       </div>
</div> --}}


   <div class="row" >

      <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

          <li role="presentation" class="active">
            {{-- this onclick pass the value of the month --}}
            <a href="#Personal" aria-controls="home" role="tab" data-toggle="tab" onclick="fun(1)">Jan</a>
          </li>

          <li role="presentation">
            <a href="#Official" aria-controls="tab" role="tab" data-toggle="tab">Feb</a>
          </li>

          <li role="presentation">
            <a href="#Salary" aria-controls="tab" role="tab" data-toggle="tab">Mar</a>
          </li>

          <li role="presentation" class="">
            <a href="#Personal" aria-controls="home" role="tab" data-toggle="tab">Apr</a>
          </li>

          <li role="presentation">
            <a href="#Official" aria-controls="tab" role="tab" data-toggle="tab">May</a>
          </li>

          <li role="presentation">
            <a href="#Salary" aria-controls="tab" role="tab" data-toggle="tab">Jun</a>
          </li>

          <li role="presentation" class="">
            <a href="#Personal" aria-controls="home" role="tab" data-toggle="tab" >Jul</a>
          </li>

          <li role="presentation">
            <a href="#Official" aria-controls="tab" role="tab" data-toggle="tab">Aug</a>
          </li>

          <li role="presentation">
            <a href="#Salary" aria-controls="tab" role="tab" data-toggle="tab">Sep</a>
          </li>

          <li role="presentation" class="">
            <a href="#Personal" aria-controls="home" role="tab" data-toggle="tab">Oct</a>
          </li>

          <li role="presentation">
            <a href="#Official" aria-controls="tab" role="tab" data-toggle="tab">Nov</a>
          </li>

          <li role="presentation">
            <a href="#Salary" aria-controls="tab" role="tab" data-toggle="tab">Dec</a>
          </li>



        </ul>
      
        <!-- Tab panes -->
        <div class="tab-content">


          <div role="tabpanel" class="tab-pane active" id="Personal">
             
             <div class="col-md-12">

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
            <td>25000</td>
            <td>----</td>
          </tr>

          <tr>
            <td>Medical Allowance</td>
            <td>1000</td>
            <td>----</td>
          </tr>

          <tr>
            <td>Conveyance</td>
            <td>5000</td>
            <td>----</td>
          </tr>

          <tr>
            <td>Special Allowance</td>
            <td>1000</td>
            <td>----</td>
          </tr>

          <tr>
            <td>OverTime</td>
            <td>2000</td>
            <td>----</td>
          </tr>


           <tr>
            <td>Bonus(Festival)</td>
            <td>2000</td>
            <td>----</td>
          </tr>

          <tr>
            <td>Bonus(Depend on Work)</td>
            <td>0</td>
            <td>----</td>
          </tr>

          <tr>
            <td>Other</td>
            <td>200</td>
            <td>----</td>
          </tr>

           <tr>
            <td>Leave Enhancement</td>       
            <td>----</td>
            <td>100</td>
          </tr>

          <tr>
            <td>Launch/Eat Cost</td>       
            <td>----</td>
            <td>2500</td>
          </tr>

          <tr>
            <td>Provident Fund(per Month)</td>       
            <td>----</td>
            <td>300</td>
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

            
             </div>
          
          </div>



          {{-- Officials Details Tab --}}
          <div role="tabpanel" class="tab-pane" id="Official">
             <div class="col-md-12 ">

            </div>

          </div>

      {{-- Salary Tab --}}
     <div role="tabpanel" class="tab-pane" id="Salary">
             
         <div class="col-md-12 ">


         </div>

    </div>



      </div>
    
     
   </div>

</div>
      
@endsection



@section('Scripts')
<script>


 function fun(id){

  alert(id);
 }

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