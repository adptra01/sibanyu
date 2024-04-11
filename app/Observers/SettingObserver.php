<?php

namespace App\Observers;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingObserver
{
    public function created(Setting $setting)
    {
        Cache::forget('settings');
        Cache::forget('settings_admin_panel');
    }

    public function updated(Setting $setting)
    {
        Cache::forget('settings');
        Cache::forget('settings_admin_panel');

    }

    public function deleted(Setting $setting)
    {
        Cache::forget('settings');
        Cache::forget('settings_admin_panel');

    }
}