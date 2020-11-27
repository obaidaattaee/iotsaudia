<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactPage ;
use Prologue\Alerts\Facades\Alert;

class ContactPageController extends Controller
{
    public function index()
    {
        $contact = ContactPage::first();
        // dd($contact);
        return view('contacts.index')
            ->with('contact' , $contact);
    }

    public function save()
    {
        $contact = ContactPage::first();
        // dd(request()->all());
        $request = request();
        $contacts = $request->validate([
            'title' => 'required' ,
            'description' => 'required' ,
        ]);
        if (!empty($request['image_1_file'])) {
            $image_1 = basename($request['image_1_file']->store("public" , 'public'));
            $contacts['image_1'] = $image_1;
        }
        else{
            $contacts["image_1"] = $contact ? $contact->image_1 : "" ;
        }
        if (!empty($request['image_2_file'])) {
            $image_2 = basename($request['image_2_file']->store("public" , 'public'));
            $contacts['image_2'] = $image_2;
        }
        else{
            $contacts["image_2"] = $contact ? $contact->image_2 : "" ;
        }
        if (!empty($request['image_3_file'])) {
            // dd("adasd");
            $image_3 = basename($request['image_3_file']->store("public" , 'public'));
            $contacts['image_3'] = $image_3;
        }
        else{
            $contacts["image_3"] =$contact ? $contact->image_3 : "" ;
        }
        if ($contact){
            $contact->update($contacts);
            Alert::success('updated successfully')->flash();
            return redirect(route('contact.index'));
        }
        else{
            ContactPage::create($contacts);
            Alert::success('created successfully')->flash();
            return redirect(route('contact.index'));
        }
    }
}
