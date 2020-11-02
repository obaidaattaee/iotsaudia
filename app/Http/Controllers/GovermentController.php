<?php


namespace App\Http\Controllers;


use App\Models\GovermentRole;
use Prologue\Alerts\Facades\Alert;


class GovermentController extends Controller
{
    public function index()
    {
        $chances = GovermentRole::get();
//        dd($advantages);
        return view('goverment.index')
            ->with('chances' , $chances);
    }

    public function create()
    {
        return view('goverment.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $request['active'] = $request['active'] ? 1 : 0 ;
        $request->validate([
            "title" => ['required'] ,
            "slug" => ['required'] ,
            "description" => ['required'] ,
            "image_file" => ['required'] ,
            "active" => ['required'] ,
        ]);
        $imagename = basename($request->image_file->store('public'));
        $request['image'] = $imagename ;
//        dd($request->all());
        GovermentRole::create($request->all());
        Alert::success("created successfully ")->flash();
        return redirect(route('goverment.index'));
    }

    public function delete(GovermentRole $chance)
    {
        GovermentRole::destroy($chance->id);
        Alert::success("deleted successfully ")->flash();
        return redirect(route('goverment.index'));
    }
    public function edit(GovermentRole $chance)
    {
        return view('goverment.edit')
            ->with('chance' , $chance);
    }
    public function update(\Illuminate\Http\Request $request , GovermentRole $chance)
    {
        $request['active'] = $request['active'] ? 1 : 0 ;
        $request->validate([
            "title" => ['required'] ,
            "slug" => ['required'] ,
            "description" => ['required'] ,
            "active" => ['required'] ,
        ]);

        if (!empty($request->image_file)){
            $imagename = basename($request->image_file->store('public'));
            $request['image'] = $imagename ;
            $chance->update($request->all());

            Alert::success("updated successfully ")->flash();
            return redirect(route('goverment.index'));
        }

        $chance->update($request->all());

        Alert::success("updated successfully ")->flash();
        return redirect(route('goverment.index'));
    }

}
