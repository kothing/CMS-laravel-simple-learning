<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    // Update settings data
    public function update(Request $request) {
        $formFields = $request->validate([
            'site_title' => 'required',
            'site_tagline' => '',
            'site_description' => '',
            'site_keywords' => '',
            'site_url' => 'required|url',
            'posts_per_page' => 'required|numeric'
        ]);

        $settings = Settings::first();
        $settings->update($formFields);

        return back()->with('info', 'Settings has been updated successfully');
    }
}
