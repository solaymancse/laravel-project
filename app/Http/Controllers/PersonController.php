<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function create(Request $req){
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $dob = $req->birth_date;
        $address = $req->address;

        DB::table('persons')->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'birth_date'=> $dob,
            'address' => $address, 
        ]);
        return Redirect('all-persons');
        
        
    }
    public function getAll(){
        $data = DB::table('persons')->get();
    return view('person.all',['persons'=>$data]);
    }

    public function edit($id){
        $affected = DB::table('persons')
        ->where('id',$id)->first();
    return view('person.edit',['persons'=>$affected]);
    }
    public function update(Request $req,$id){
        $name = $req->name;
        $email = $req->email;
        $phone = $req->phone;
        $dob = $req->birth_date;
        $address = $req->address;

       DB::table('persons')
        ->where('id',$id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'birth_date'=> $dob,
            'address' => $address, 
        ]);
        return Redirect('all-persons');
    }
    public function delete($id){
     

       DB::table('persons')
        ->where('id',$id)->delete();
        return Redirect('all-persons');
    }
}
