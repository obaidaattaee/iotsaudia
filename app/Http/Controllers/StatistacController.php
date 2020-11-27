<?php


namespace App\Http\Controllers;



use App\Models\Statistac;
use Prologue\Alerts\Facades\Alert;


class StatistacController extends Controller
{
    public function index()
    {
        $statistics = Statistac::get();
//        dd($advantages);
        return view('statistic.index')
            ->with('statistics' , $statistics);
    }

    public function create()
    {
        return view('statistic.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $request['active'] = $request['active'] ? 1 : 0 ;
        $request->validate([
            "title" => ['required'] ,
            "value" => ['required'] ,
            "color" => ['required'] ,
            "active" => ['required'] ,
        ]);

//        dd($request->all());
        Statistac::create($request->all());
        Alert::success("created successfully ")->flash();
        return redirect(route('statistics.index'));
    }

    public function delete(Statistac $statistac)
    {
        Statistac::destroy($statistac->id);
        Alert::success("deleted successfully ")->flash();
        return redirect(route('statistics.index'));
    }
    public function edit(Statistac $statistac)
    {
        return view('statistic.edit')
            ->with('statistic' , $statistac);
    }
    public function update(\Illuminate\Http\Request $request , Statistac $statistac)
    {
        $request['active'] = $request['active'] ? 1 : 0 ;
        $request->validate([
            "title" => ['required'] ,
            "value" => ['required'] ,
            "color" => ['required'] ,
            "active" => ['required'] ,
        ]);

        $statistac->update($request->all());

        Alert::success("updated successfully ")->flash();
        return redirect(route('statistics.index'));
    }

}
