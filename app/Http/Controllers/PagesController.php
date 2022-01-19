<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //loads the welcome page
    public static function welcomePage(){
        return view('welcome');
    }

    //loads the list inventories page
    public static function loadInventoryPage(){
        $customers = Customer::all(); //
        $data = [
            'customers' => $customers
        ];
        return view('pages.inventories_list', $data);
    }

    //loads the create inventory page
    public static function createInventoryPage(){
        return view('pages.create');
    }

    //loads the edit inventory page
    public static function editInventoryDetails($id){
        $customers = Customer::find($id); 
        return view('pages.edit', ['customers' => $customers]);
        
    }

    //loads the page thats allows admin to create an inventory
    public static function CreateUser(request $request){
        $rules = [
            'sender_name' => 'required',
            'reciever_name' => 'required',
            'sender_no' => 'required',
            'reciever_no' => 'required'

        ];
        // Validator validated required fields
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            print_r($validator->errors());
            die();
        }
        
        $customers = new Customer();
        $customers->sender_name = $request->input('sender_name');
        $customers->Sender_no = $request->input('sender_no');
        $customers->reciever_name = $request->input('reciever_name');
        $customers->reciever_no = $request->input('reciever_no');
        $customers->item= $request->input('item');
        $customers->pick_up= $request->input('pick_up');
        $customers->destination= $request->input('destination');
        $customers->save();
        flash('Inventory created sucessfully')->success();
        return redirect()->back();
    }

    //checks for a customer with a particular id
    protected function getSingleDetails(){
        $customers = Customer::find($id); 
        if ($customer){
            return $customers;
        }
        return false;
    }

    //updates an inventory|allows to edit details
    public static function update(request $request, $id){
        $customers = Customer::find($id);
        if(!$customers) {
            return redirect()->back();
        }
        $rules = [
            'sender_name' => 'required',
            'reciever_name' => 'required',
            'sender_no' => 'required',
            'reciever_no' => 'required'

        ];
        // Validator
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator->errors());
            
        }
        $customers->sender_name = $request->input('sender_name');
        $customers->Sender_no = $request->input('sender_no');
        $customers->reciever_name = $request->input('reciever_name');
        $customers->reciever_no = $request->input('reciever_no');
        $customers->item= $request->input('item');
        $customers->pick_up= $request->input('pick_up');
        $customers->destination= $request->input('destination');
        $customers->save();
        flash('updated sucessfully!')->success();
        return redirect()->back();
    }

    //Deletes an inventory temporarily
public static function delete(request $request, $id){
    $customers = Customer::find($id);
    if(!$customers) {
        flash("Invalid customer ID provided")->error();
        return redirect()->back();
    }
    $customers->deletion_comment=$request->input('delete_comment');
    $customers->save();
    $customers->delete();
    flash('deleted!')->error();
    return redirect()->route('inventories');
    
}

//Allows accces to trashed inventories
public function getTrashedRecords() 
{
    $customers = Customer::onlyTrashed()->get();
    return view('pages.trash', ['customers' => $customers]);
}


//Loads the delete comment page
public function preDelete($id) 
{
    $customers = Customer::find($id);
    if(!$customers) {
        flash("Invalid student ID provided")->error();
        return redirect()->back();
    } 

    return view('pages.preDelete', ['customers' => $customers]);
}

//Restores trashed inventories
public function restoreTrashedRecords($id) 
{
    $customers = Customer::onlyTrashed()->where('id', $id)->first();
    if(!$customers) {
        flash("Invalid customer inventory ID provided")->error();
        return redirect()->back();
    }

    if($customers->trashed()) {
        $customers->restore();
        flash("customer restored successfully")->success();
        return redirect()->route('inventories');
    }

    flash("You cannot restore an inventory that has not been previously deleted")->warning();
    return redirect()->route('inventories');
}

//parmanenetly deletes an inventory
public function deleteTrash($id){
    $customers = Customer::onlyTrashed()->where('id', $id)->first();
    if (!$customers){
        flash('invalid ID')->error();
        return redirect()->back();
    }
    $customers->forceDelete();
    return redirect()->back();
}

}
