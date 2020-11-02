<?php


namespace App\Http\Controllers;


use App\Models\Advantage;
use Prologue\Alerts\Facades\Alert;


class AdvantageController extends Controller
{
    public function index()
    {
        $advantages = Advantage::get();
//        dd($advantages);
        return view('advantage.index')
            ->with('advantages' , $advantages);
    }

    public function create()
    {
        return view('advantage.create');
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
        Advantage::create($request->all());
        Alert::success("created successfully ")->flash();
        return redirect(route('advantages.index'));
    }

    public function delete(Advantage $advantage)
    {
        Advantage::destroy($advantage->id);
        Alert::success("deleted successfully ")->flash();
        return redirect(route('advantages.index'));
    }
    public function edit(Advantage $advantage)
    {
        return view('advantage.edit')
            ->with('advantage' , $advantage);
    }
    public function update(\Illuminate\Http\Request $request , Advantage $advantage)
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
            $advantage->update($request->all());

            Alert::success("updated successfully ")->flash();
            return redirect(route('advantages.index'));
        }

        $advantage->update($request->all());

        Alert::success("updated successfully ")->flash();
        return redirect(route('advantages.index'));
    }

}
