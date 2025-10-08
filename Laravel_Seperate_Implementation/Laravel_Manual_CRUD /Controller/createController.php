<?php

namespace App\Http\Controllers;

use App\Models\CustomerDetails;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class CreateController extends Controller
{


    // Show the data - GET 
    public function index( ){

        $CustomerDetails= CustomerDetails::latest()->get();
        // $CustomerDetails= CustomerDetails::orderBy('id','desc')->get();

         $registeruser=User::all();
        return view('create',compact('CustomerDetails','registeruser'));
        
    }


    //Create data  - POST 
    public function store(Request $request){
  

        $validated = $request->validate([
                'name'=>'required',
                'age'=>'required',
                'state'=>'required',
                'mobile_number'=>'required',
        ]);

        CustomerDetails::create($validated);
    
        return redirect('/create');


    }


    //Update the data - PUT 

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'state' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
        ]);


        $Customer=CustomerDetails::findOrFail($id);

        $Customer->update([

            'name'=> $request->name,
            'age'=> $request->age,
            'state'=> $request->state,
            'mobile_number' => $request->mobile_number

        ]);

        return redirect('/create');

    }

      //Delete the data - DELETE

    public function destroy($id){

        $Customer=CustomerDetails::findOrFail($id);
        $Customer->delete();
        return redirect('create');
    }


}
