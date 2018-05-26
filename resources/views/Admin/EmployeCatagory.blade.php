@extends('layouts.admin')


@section('title','|Employe Catagory')


@section('pageheader')
      <h1>
        Employee
        <small>Catagory Crud</small>
      </h1>
@endsection

@section('content')

    <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Add Employe Catagory</a>

    <br><br>

   @if( Session::has('message') )
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('message') }}
    </div>
  @endif

    <div class="modal fade" id="modal-id">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<h4 class="modal-title">Add Employe Catagory</h4>
    			</div>

        
    			<div class="modal-body">

    				 @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
					{{-- 	<form action="" method="POST" role="form"> --}}
							{!! Form::open(['action' => 'CatagoryController@store']) !!}
    
             
							<div class="form-group">
								<label for="">Catagory Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Catagory Name" value="{{old('name')}}">
							</div>

							<div class="form-group">
								<label for="">Description</label>
							<textarea  id="desc" name="desc" class="form-control" rows="3" ></textarea>

							</div>



							<button type="submit" class="btn btn-primary">Save</button>
              {!! Form::close() !!}
						{{-- </form> --}}

    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				{{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
    			</div>
    		</div>
    	</div>
    </div>
  
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Employee Catagory Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Catagory Name</th>
                  <th>Description</th>
                  <th>Edit</th>
                  <th>Delete</th>     
                </tr>


            @foreach($data as $catagory)
                <tr>
                  <td>{{$catagory->Emp_catagory_id}}</td>
                  <td>{{$catagory->name}}</td>
                  
                  <td>{{$catagory->Description}}</td>

                  <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs btnedit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                  </td>

                  <td>
                  	<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                  </td>
                </tr>
            @endforeach
                


                
              </table>

             


            </div>

             <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                 {!!$data-> render()!!} 
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@endsection


{{-- Edit Modal --}}

    <div class="modal fade" id="catagoryedit">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    				<h4 class="modal-title">Add Employe Catagory</h4>
    			</div>
    			<div class="modal-body">
    				 
              
             {{--  this idd parameter just requered so use not work i pass hidden input id --}}
						  {!! Form::open(['action' => ['CatagoryController@update','idd'=>'update'],'method' => 'PUT']) !!}
							
               <input type="hidden"  id="cid" name="cid">

							<div class="form-group">
								<label for="">Catagory Name</label>
								<input type="text" class="form-control" id="editname"  name="editname" required="">
							</div>

							<div class="form-group">
								<label for="">Description</label>
							<textarea id="editdesc" name="editdesc" class="form-control" rows="3" required="required"></textarea>

							</div>



							<button type="submit" class="btn btn-primary">Update</button>
						 {!! Form::close() !!}

    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    				{{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
    			</div>
    		</div>
    	</div>
    </div>


@section('Scripts')
<script>



  //Edit Button click Then value show
  $('.btnedit').click(function() {
    

    //This parrent use get the value inside variable
    var id=$(this).parent().parent().parent().find('td').eq(0).text();
    var name=$(this).parent().parent().parent().find('td').eq(1).text();
    var Description=$(this).parent().parent().parent().find('td').eq(2).text();

    $('#catagoryedit').modal();
    
    //Catagory value show
    $('#editname').val(name);
    $('#editdesc').val(Description);
    $('#cid').val(id);

  });



</script>
@endsection