@extends('layouts.admin')


@section('title','|Multiple user Task')

@section('CSS')


  <link rel="stylesheet" href="{{asset('Content/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
<style>
hr { background-color: red; height: 1px; border: 0; }

.req{  color: red;}

.table-bordered > tbody > tr > td {
     border: 1px solid black;
}

</style>
@endsection

@section('pageheader')
      <h1>
        Send Task 
        <small>Multiple User</small>
      </h1>
@endsection

@section('content')


  
   <div class="row">
    
       
       <div class="col-md-6 ">


           
          {{-- <button class="btn btn-danger delete-row">Delete Row</button> --}}
          <table class="table table-bordered " id="table">
            <thead>


              <tr style="background-color:black;">
                <th style="color:white;">Select</th>
                <th style="color:white;">User</th>
                <th style="color:white;">Details</th>
             
              </tr>

            
            </thead>
            <tbody>
              
            </tbody>
          </table>
            <p data-placement="top" data-toggle="tooltip" title="Remove Employe" class="pp"><button class="btn btn-danger btn-xs delete-row" ><span class="glyphicon glyphicon-trash"></span></button></p>

          <div class=" col-md-5 input-group">
            <input type="text" id="user" class="form-control" placeholder=" Ex: Employe Id " required="">
            <span class="input-group-btn">
             <button class="btn btn-success" type="submit" id="search">Search!</button>
            </span>
         </div>

          
        
           


       </div>

       <div class="col-md-2 ">
           
      {{--   <p id="usershow"></p> --}}

       </div>



        <div class="col-md-4">

          
            <ul class="list-group">
              <li class="list-group-item list-group-item-success">First Select Employe By search</li>
              <li class="list-group-item list-group-item-info">Second Select Multiple Or Single</li>
              <li class="list-group-item list-group-item-warning">Third Ensure This Employe Id Is Valid</li>
              <li class="list-group-item list-group-item-danger">Then Send </li>
            </ul>

       </div>

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

// multiple user select
 $(document).ready(function(){

   $('.delete-row').hide();

        $("#search").click(function(){
            var id = $("#user").val();
            var details = $("#user").val();
            if(id.length!=0){
            var markup = "<tr><td><input type='checkbox' name='record' ></td><td>" + id + "</td><td>" + details + "</td></tr>";
            $("table tbody").append(markup);
              }

          $('.delete-row').show();


        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
              if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    

    
</script>
@endsection