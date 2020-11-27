<?php


namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Advantage;
use App\Models\Chance;
use App\Models\Contact;
use App\Models\IotImage;
use App\Models\IotUsage;
use App\Models\Settings;
use App\Models\Statistac;
use App\Models\GovermentRole;

class HomePageController extends Controller
{
    public function index()
    {
        $settings = Settings::first();
        $advantages = Advantage::where('active' , 1)->get();
        $statistics = Statistac::where('active' , 1)->get();
        $images = IotImage::where('active' , 1)->get();
        $usages = IotUsage::where('active' , 1)->get();

        return view('frontend.home')
            ->with('settings' , $settings)
            ->with('statistics' , $statistics)
            ->with('images' , $images)
            ->with('usages' , $usages)
            ->with('advantages' , $advantages);
    }

    public function contact()
    {
        $settings = Settings::first();
        return view('frontend.contact')
            ->with('settings' , $settings);
    }
    public function contactSave()
    {
        request()->validate([
            'name' => ['required'],
            'message' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
        ]);
        Contact::create(request()->all());
        $settings = Settings::first();
        session()->flash('msg' , 's: سنتواصل معك قريبا ');
        return view('frontend.contact')
            ->with('settings' , $settings);
    }

    public function contacts()
    {
        $contacts = Contact::get();
        return view('contacts.index')
            ->with('contacts' , $contacts);
    }

    public function about()
    {
        $settings = Settings::first();
        $about = About::first();
        return view('frontend.about')
            ->with('about' , $about)
            ->with('settings' , $settings);
    }
    function advantage(){
        $chances = Chance::get();
        $settings = Settings::first();
        return view('frontend.chance')
        ->with('settings' , $settings)
        ->with('chances' , $chances);
    }
    function usage(){
        $usages = IotUsage::where('active' , 1)->get();
        $settings = Settings::first();
        $images = IotImage::where('active', 1)->get();
        $statistics = Statistac::where('active' , 1)->get();
        return view('frontend.iot_usage')
        ->with('settings' , $settings)
        ->with('images' , $images)
        ->with('statistics' , $statistics)
        ->with('usages' , $usages);
    }
    public function singleAdvantage(Advantage $advantage){
        return view('frontend.single-advantage')
        ->with('advantage' , $advantage);
    }
    public function singleChance(Chance $chance){
        return view('frontend.single-advantage')
        ->with('advantage' , $chance);
    }
}
