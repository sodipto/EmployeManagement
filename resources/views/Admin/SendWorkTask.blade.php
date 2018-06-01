@extends('layouts.admin')


@section('title','|Employe Send Task')

@section('CSS')


  <link rel="stylesheet" href="{{asset('Content/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
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
            <input type="text" id="user" class="form-control" placeholder=" Ex: Employe Id " required="">
            <span class="input-group-btn">
             <button class="btn btn-success" type="submit" >Search!</button>
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
     
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                

              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Subject:">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                     
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because 
                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                        blinded by desire, that they cannot foresee</p>
                    
                      <p>Thank you,</p>
                      <p>John Doe</p>
                    </textarea>
              </div>

              <div class="form-group">
                
                  <input type="file" multiple="">
          
                <p class="help-block">Max. 32MB</p>
              </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
               {{--  <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> --}}
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Reset</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
     
             

         </div>

    </div>



@endsection



@section('Scripts')

<script src="{{asset('Content/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

{{-- {{!! $calendar_details->script() !!} --}}
<script>

//Textarea Decoration
$(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });


</script>
@endsection