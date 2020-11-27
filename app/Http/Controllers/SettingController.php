<?php

namespace App\Http\Controllers;

use \App\Models\Settings;
use Illuminate\Support\Facades\Request;
use Prologue\Alerts\Facades\Alert;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Settings::first();
        // dd($settings);
        return view('settings.index')
            ->with('settings', $settings);
            
    }

    public function save(\Illuminate\Http\Request $request)
    {
        $setting = Settings::first() ;
        $settings = $request->validate([
            "slider_title" => ['required'],
            "video_link" => ['required'],
            "advantage_title" => ['required'],
            "email_address" => ['required'],
            "mobile_address" => ['required'],
            "location" => ['required'],
            "facebook_address" => ['required'],
        ]);
        if (!empty($request['video_background_image_file'])){
            $video_background_image = basename($request['video_background_image_file']->store("public" , 'public'));
            $settings['video_background_image'] = $video_background_image;
        }
        else{
            $settings["video_background_image"] = $setting->video_background_image ;
        }
        if (!empty($request['logo_image_file'])) {
            $logo_image = basename($request['logo_image_file']->store("public" , 'public'));
            $settings['logo_image'] = $logo_image;
        }
        else{
            $settings["logo_image"] = $setting->logo_image ;
        }
        if (!empty($request['youtube'])){
            $contact_image_1_file = basename($request['youtube']->store("public" , 'public'));
            $settings['youtube'] = $contact_image_1_file;
        }
        else{
            $settings["youtube"] = $setting->youtube ;
        }
        if (!empty($request['instagram'])) {
            $contact_image_2_file = basename($request['instagram']->store("public" , 'public'));
            $settings['instagram'] = $contact_image_2_file;
        }
        else{
            $settings["instagram"] = $setting->instagram ;
        }
        if (!empty($request['twitter'])) {
            $twitter_file = basename($request['twitter']->store("public" , 'public'));
            $settings['twitter'] = $twitter_file;
        }
        else{
            $settings["twitter"] = $setting->twitter ;
        }

        if (Settings::first()){
            Settings::first()->update([
                "logo_image" => $settings["logo_image"],
                "slider_title" => $settings["slider_title"],
                "video_link" => $settings["video_link"],
                "video_background_image" => $settings["video_background_image"],
                "advantage_title" => $settings["advantage_title"],
                "email_address" => $settings["email_address"],
                "mobile_address" => $settings["mobile_address"],
                "location" => $settings["location"],
                "facebook_address" => $settings["facebook_address"],
                "twitter" =>$settings["twitter"],
                "instagram" => $settings["instagram"],
                "youtube" => $settings["youtube"],
            ]);
            Alert::success('settings updated successfully');
            return redirect(route('settings.index'));
        }
        Settings::create([
            "logo_image" => $settings["logo_image"],
            "slider_title" => $settings["slider_title"],
            "video_link" => $settings["video_link"],
            "video_background_image" => $settings["video_background_image"],
            "advantage_title" => $settings["advantage_title"],
            "email_address" => $settings["email_address"],
            "mobile_address" => $settings["mobile_address"],
            "location" => $settings["location"],
            "facebook_address" => $settings["facebook_address"],
            "twitter" =>$settings["twitter"],
            "instagram" => $settings["instagram"],
            "youtube" => $settings["youtube"],
        ]);
        Alert::success('settings save successfully');
        return redirect(route('settings.index'));
    }
}
