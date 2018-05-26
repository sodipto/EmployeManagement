<?php



namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\EmployeCatagory;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CatagoryController extends Controller
{
    
    
    public function index(){

        //$data=EmployeCatagory::all();
       $data=DB::table('employe_catagories')->paginate(5);
      //  return $data;

        return view('Admin.EmployeCatagory',compact(['data']));

    }


     public function store(Request $R){




     	$R->validate([
	    'name' => 'required|unique:employe_catagories|max:30',
	    'desc' => 'required'
         ]);




        $emp_catagory=new EmployeCatagory();

        $emp_catagory->name=$R->name;
        $emp_catagory->Description=$R->desc;


        $result=$emp_catagory->save();

        if($result){

           return redirect()->back()->with('message','Add Employe Catagory Sucessfully');


        }

        else{

           return redirect()->back()->with('message','somthing error');

        }

        //return view('Admin.EmployeCatagory',compact(['data']));

    }



     public function update(Request $R,$idd){

        $id=$R->cid;
        //return $data;


        $emp_catagory=EmployeCatagory::find($id);

        $emp_catagory->name=$R->editname;
        $emp_catagory->Description=$R->editdesc;


        $result=$emp_catagory->save();

        if($result){

           return redirect()->back()->with('message','Update Employe Catagory Sucessfully');


        }

        else{

           return redirect()->back()->with('message','somthing error');

        }



     }



}
