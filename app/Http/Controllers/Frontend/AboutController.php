<?php


namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\About;
use Prologue\Alerts\Facades\Alert;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('about.index')
            ->with('about' , $about);
    }

    public function save()
    {
        request()->validate([
            'title' => 'required' ,
            'description' => 'required' ,
        ]);
        if (About::first()){
            About::first()->update(request()->all());
            Alert::success('updated successfully')->flash();
            return redirect(route('about.index'));
        }
        else{
            About::create(request()->all());
            Alert::success('created successfully')->flash();
            return redirect(route('about.index'));
        }
    }
}
