@extends('layouts.admin')


@section('title','|Employe Attendance')

@section('CSS')

  <link rel="stylesheet" href="{{asset('Content/plugins/timepicker/bootstrap-timepicker.min.css') }}">

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


<div class="row">
	 <div class="col-md-12">
   	 	
          <div class="panel panel-primary">

             <div class="panel-heading">Add Official Event To The Calender</div>

              <div class="panel-body">    

                   {!! Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                          @if (Session::has('success'))
                             <div class="alert alert-success">{{ Session::get('success') }}</div>
                          @elseif (Session::has('warnning'))
                              <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                          @endif

                      </div>

                     {{--  <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('event_name','Event Name:') !!}
                            <div class="">
                            {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div> --}}

                        <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="form-group">
                            {!! Form::label('Attendance','Attendance Title:') !!}
                            <div class="">
                            {!! Form::select('age', [
								   'Present' => 'Present',
								   'Leave' => 'Leave',
								   'ValidLeave' => 'Valid Leave',
								   'Holiday'=> 'Holiday'
								   ],

								   null, ['placeholder' => 'Select Attendance Type','class' => 'form-control']
								) !!}

                            {!! $errors->first('Attendance', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>


                      <div class="col-xs-12 col-sm-3 col-md-3 ">
                        <div class="form-group">
                          {!! Form::label('start_date','Date:') !!}
                          <div class="">
                          {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>


                       <div class="col-xs-12 col-sm-3 col-md-3 bootstrap-timepicker">
                        <div class="form-group">
                            {!! Form::label('Entry_Time','Entry Time:') !!}
                            <div class="input-group">
                            {!! Form::text('Entry_Time', null, ['class' => 'form-control timepicker']) !!}
                            {!! $errors->first('Entry_Time', '<p class="alert alert-danger">:message</p>') !!}
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                           </div>
                            </div>

                        </div>



                      </div>
                      



                      {{-- <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('end_date','End Date:') !!}
                          <div class="">
                          {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div> --}}

                      <div class="col-xs-12 col-sm-3 col-md-3 text-center"> &nbsp;<br/>
                      {!! Form::submit('Add Attendance',['class'=>'btn btn-primary']) !!}
                      </div>
                    </div>
                   {!! Form::close() !!}

             </div>

            </div>

           {{--  <div class="panel panel-primary">
              <div class="panel-heading">Officials Event Details</div>
              <div class="panel-body" >
                  {!! $calendar_details->calendar() !!}
              </div>
            </div> --}}



   	 </div>
</div>
      
@endsection



@section('Scripts')
<script src="{{asset('Content/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript">
	$('.timepicker').timepicker({
      showInputs: false
    })
</script>
@endsection