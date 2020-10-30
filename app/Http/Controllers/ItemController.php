<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Property;
use App\Models\Contact;
use App\Models\Region;
use Log;

class ItemController extends Controller
{


    public function property(Request $request){

        $response = [];
        $response['success'] = FALSE;
        $property = Property::all();
        if(count($property)>0){

            $response['success'] = TRUE;
            $response['message']='Data found';
            $response['data']=$property;
            return $response;
        }
        $response['message'] = "No property found";
        return $response;
    }

    public function contact(Request $request){

        $response = [];
        $response['success'] = FALSE;
        $contact = Contact::all();
        if(count($contact)>0){

            $response['success'] = TRUE;
            $response['message']='Data found';
            $response['data']=$contact;
            return $response;
        }
        $response['message'] = "No property found";
        return $response;
    
    }
    public function region(Request $request){

        $response = [];
        $response['success'] = FALSE;
        $region = Region::all();
        if(count($region)>0){

            $response['success'] = TRUE;
            $response['message']='Data found';
            $response['data']=$region;
            return $response;
        }
        $response['message'] = "No property found";
        return $response;
    
    }
    public function getdata(Request $request){
  
        $response = [];
        $response['success'] = FALSE;
        try {
   
             $validator = Validator::make($request->all(), [
                'name' => 'required',
             
            ]);
            if($validator->fails()) {
                 return $validator->messages();
            }
            $name=$request->post('name');
            $region = Region::where('name','like', '%' . $name. '%')->get();
            $property = Property::where('name','like', '%' . $name . '%')->with('region')->get();
            $contact = Contact::where('first_name','like', '%' . $name . '%')->get();
            
            if($region){
                $response['success'] = TRUE;
                $response['message']='Data found';
                $response['data']['region']=$region;
                $response['data']['property']=$property;
                $response['data']['contact']=$contact;
                return $response;  
            }
            $response['message'] = "Not found";
            return $response;
        }catch (\Exception $e) {
            Log::error($e->getTraceAsString());
            $response = apiResponseServerError($e);
        }
    }
}
