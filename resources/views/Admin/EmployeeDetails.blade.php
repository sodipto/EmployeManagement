@extends('layouts.admin')


@section('title','|Employe Details')

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
           <br>
            

         <div class="btn-group">
            <button  id="btnOn" class="btn btn-success">Active</button>
            <button  id="btnoff" class="btn btn-default">Deactive</button>
  
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
            <a href="#Personal" aria-controls="home" role="tab" data-toggle="tab">Personal Details</a>
          </li>

          <li role="presentation">
            <a href="#Official" aria-controls="tab" role="tab" data-toggle="tab">Official Details</a>
          </li>

          <li role="presentation">
            <a href="#Salary" aria-controls="tab" role="tab" data-toggle="tab">Salary Details</a>
          </li>



        </ul>
      
        <!-- Tab panes -->
        <div class="tab-content">


          <div role="tabpanel" class="tab-pane active" id="Personal">
             
             <div class="col-md-12">

            <table class="table">
                    <tbody>

                      <tr>
                        <td style="text-align: left; width: 30%">Gender :</td>
                        <td style="text-align: left; width: 70%">
                           Male
                        </td>
                      </tr>

                       <tr>
                        <td style="text-align: left">AGE :</td>
                        <td style="text-align: left">
                            
                          22
                        </td>
                    </tr>
                   
              
                    <tr>
                        <td style="text-align: left">DOB :</td>
                        <td style="text-align: left">
                            
                            08/22/1997
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: left">Nationality :</td>
                        <td style="text-align: left">
                            Bangladeshi
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left">Religion :</td>
                        <td style="text-align: left">
                            Hindu
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: left">Blood Group :</td>
                        <td style="text-align: left">
                           AB+
                        </td>
                    </tr>
                    <tr>
                       <td style="text-align: left">NID Number:</td>
                        <td style="text-align: left">
                           121212121
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: left">Present Address :</td>
                        <td style="text-align: left">
                            RAMPURA TV CENTER, 336, DHAKA-1219
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left">Permanent Address :</td>
                        <td style="text-align: left">
                            Durgapur,Netrokona
                        </td>
                    </tr>
                  
                    

                </tbody></table>
           {{--   <h4><b>Gender :</b> &nbsp {{"Male"}}</h4>
             <h4><b>Age:</b> {{"22"}}</h4>
            
            <h4><b>Religion:</b> {{"Hindu"}}</h4>
            <h4><b>DOB:</b> {{"28-12-1995"}}</h4>
            <h4><b>Blood Group:</b> {{"AB+"}}</h4>
            <h4><b>Nationality:</b> {{"Bangladeshi"}}</h4>
            <h4><b>NID Number:</b> {{"1111111"}}</h4>

            <h4><b>Permanent Address:</b> {{"Dhaka"}}</h4>
            <h4><b>Current Address:</b> {{"Dhaka"}}</h4> --}}
           


            </div>
          
          </div>




          <div role="tabpanel" class="tab-pane" id="Official">
             <div class="col-md-12 ">

            <table class="table">
                    <tbody>

                      <tr>
                        <td style="text-align: left; width: 30%">Official Email:</td>
                        <td style="text-align: left; width: 70%">
                          abc@example.com
                        </td>
                      </tr>

                       <tr>
                        <td style="text-align: left">Office Branch :</td>
                        <td style="text-align: left">
                            
                         Banani
                        </td>
                    </tr>
                   
              
                    <tr>
                        <td style="text-align: left">Employe Type :</td>
                        <td style="text-align: left">
                            
                            FullTime
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: left">Reporting Manager :</td>
                        <td style="text-align: left">
                           Sodipto Saha
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left">Functional Manager :</td>
                        <td style="text-align: left">
                            Badhan Saha
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="text-align: left">Desk Number :</td>
                        <td style="text-align: left">
                          142
                        </td>
                    </tr>
                    <tr>
                       <td style="text-align: left">Desk Phone/Telephone Number:</td>
                        <td style="text-align: left">
                           +998125
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: left">Desk Phone Number Extension :</td>
                        <td style="text-align: left">
                            +998
                        </td>
                    </tr>
                   
                    

                </tbody></table>
          
           


            </div>

          </div>
           <div role="tabpanel" class="tab-pane" id="Salary">...</div>
        </div>
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