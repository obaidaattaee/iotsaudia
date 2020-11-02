<?php

namespace App\Http\Controllers;

use App\Http\Requests\Iot_usageStoreRequest;

use App\Models\IotUsage;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;

class Iot_usageController extends Controller
{
    public function index()
    {
        $usages = IotUsage::get();
//        dd($advantages);
        return view('usage.index')
            ->with('usages' , $usages);
    }

    public function create()
    {
        return view('usage.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $request['active'] = $request['active'] ? 1 : 0 ;
        $request->validate([
            "title" => ['required'] ,
            "descritpion" => ['required'] ,
            "image_file" => ['required'] ,
            "active" => ['required'] ,
        ]);
        $imagename = basename($request->image_file->store('public' , 'public'));
        $request['image'] = $imagename ;
//        dd($request->all());
        IotUsage::create($request->all());
        Alert::success("created successfully ")->flash();
        return redirect(route('usage.index'));
    }

    public function delete(IotUsage $usage)
    {
        IotUsage::destroy($usage->id);
        Alert::success("deleted successfully ")->flash();
        return redirect(route('usage.index'));
    }
    public function edit(IotUsage $usage)
    {
        return view('usage.edit')
            ->with('usage' , $usage);
    }
    public function update(\Illuminate\Http\Request $request , IotUsage $usage)
    {
        $request['active'] = $request['active'] ? 1 : 0 ;
        $request->validate([
            "title" => ['required'] ,
            "descritpion" => ['required'] ,
            "active" => ['required'] ,
        ]);

        if (!empty($request->image_file)){
            $imagename = basename($request->image_file->store('public' , 'public'));
            $request['image'] = $imagename ;
            $usage->update($request->all());

            Alert::success("updated successfully ")->flash();
            return redirect(route('usage.index'));
        }

        $usage->update($request->all());

        Alert::success("updated successfully ")->flash();
        return redirect(route('usage.index'));
    }

}
