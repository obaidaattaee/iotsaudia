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
        $about =About::first() ;
        $request = request();
        $abouts = $request->validate([
            'title' => 'required' ,
            'description' => 'required' ,
        ]);

        if (!empty($request['image_1_file'])) {
            // dd("df");
            $image_1 = basename($request['image_1_file']->store("public" , 'public'));
            $abouts['image_1'] = $image_1;
        }
        else{
            $abouts["image_1"] = $about ? $about->image_1 : "" ;
        }
        if (!empty($request['image_2_file'])) {
            $image_2 = basename($request['image_2_file']->store("public" , 'public'));
            $abouts['image_2'] = $image_2;
        }
        else{
            $abouts["image_2"] = $about ? $about->image_2 : "" ;
        }
        if (!empty($request['image_3_file'])) {
            // dd("adasd");
            $image_3 = basename($request['image_3_file']->store("public" , 'public'));
            $abouts['image_3'] = $image_3;
        }
        else{
            $abouts["image_3"] =$about ? $about->image_3 : "" ;
        }


        if ($about){
            // dd($abouts);
            About::first()->update($abouts);
            Alert::success('updated successfully')->flash();
            return redirect(route('about.index'));
        }
        else{
            About::create($abouts);
            Alert::success('created successfully')->flash();
            return redirect(route('about.index'));
        }
    }
}
