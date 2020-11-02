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
            "twitter" => ['required'],
            "instagram" => ['required'],
            "youtube" => ['required'],
        ]);
        if (!empty($request['video_background_image_file']) || !empty($request['logo_image_file'])){
            $video_background_image = basename($request['video_background_image_file']->store("public" , 'public'));
            $logo_image = basename($request['logo_image_file']->store("public" , 'public'));
            $settings['video_background_image'] = $video_background_image;
            $settings['logo_image'] = $logo_image;
        }else{
            $settings["logo_image"] = $setting->logo_image ;
            $settings["video_background_image"] = $setting->video_background_image ;

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
