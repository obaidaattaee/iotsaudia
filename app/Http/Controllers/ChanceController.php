<?php


namespace App\Http\Controllers;


use App\Models\Chance;
use Prologue\Alerts\Facades\Alert;


class ChanceController extends Controller
{
    public function index()
    {
        $chances = Chance::get();
//        dd($advantages);
        return view('chance.index')
            ->with('chances' , $chances);
    }

    public function create()
    {
        return view('chance.create');
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
        $imagename = basename($request->image_file->store('public' , 'public'));
        $request['image'] = $imagename ;
//        dd($request->all());
        Chance::create($request->all());
        Alert::success("created successfully ")->flash();
        return redirect(route('chances.index'));
    }

    public function delete(Chance $chance)
    {
        Chance::destroy($chance->id);
        Alert::success("deleted successfully ")->flash();
        return redirect(route('chances.index'));
    }
    public function edit(Chance $chance)
    {
        return view('chance.edit')
            ->with('chance' , $chance);
    }
    public function update(\Illuminate\Http\Request $request , Chance $chance)
    {
        $request['active'] = $request['active'] ? 1 : 0 ;
        $request->validate([
            "title" => ['required'] ,
            "slug" => ['required'] ,
            "description" => ['required'] ,
            "active" => ['required'] ,
        ]);

        if (!empty($request->image_file)){
            $imagename = basename($request->image_file->store('public' , 'public'));
            $request['image'] = $imagename ;
            $chance->update($request->all());

            Alert::success("updated successfully ")->flash();
            return redirect(route('chances.index'));
        }

        $chance->update($request->all());

        Alert::success("updated successfully ")->flash();
        return redirect(route('chances.index'));
    }

}
