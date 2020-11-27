<?php


namespace App\Http\Controllers;



use App\Models\IotImage;

use Prologue\Alerts\Facades\Alert;


class ImageController extends Controller
{
    public function index()
    {
        $images = IotImage::get();
//        dd($images);
//        dd($advantages);
        return view('images.index')
            ->with('images' , $images);
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $request['active'] = $request['active'] ? 1 : 1 ;
        $request->validate([
            "image_file" => ['required'] ,
            "active" => ['required'] ,
        ]);
        $imagename = basename($request->image_file->store('public' , 'public'));
        $request['image'] = $imagename ;
//        dd($request->all());
        IotImage::create($request->all());
        Alert::success("created successfully ")->flash();
        return redirect(route('images.index'));
    }

    public function delete(IotImage $image)
    {
        IotImage::destroy($image->id);
        Alert::success("deleted successfully ")->flash();
        return redirect(route('images.index'));
    }


}
