<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteContentController extends Controller
{
    public function home(): View
    {
        $content = SiteContent::homepage()->mergedContent();

        return view('site.home', compact('content'));
    }

    public function edit(): View
    {
        $content = SiteContent::homepage()->mergedContent();

        return view('dashboard.index', compact('content'));
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'brand_name' => ['required', 'string', 'max:255'],
            'brand_tagline' => ['required', 'string', 'max:255'],
            'nav_services_label' => ['required', 'string', 'max:255'],
            'nav_about_label' => ['required', 'string', 'max:255'],
            'nav_contact_label' => ['required', 'string', 'max:255'],
            'dashboard_link_label' => ['required', 'string', 'max:255'],
            'hero_badge' => ['required', 'string', 'max:255'],
            'hero_title' => ['required', 'string', 'max:255'],
            'hero_description' => ['required', 'string'],
            'primary_cta_label' => ['required', 'string', 'max:255'],
            'primary_cta_link' => ['required', 'string', 'max:255'],
            'secondary_cta_label' => ['required', 'string', 'max:255'],
            'secondary_cta_link' => ['required', 'string', 'max:255'],
            'stat_1_label' => ['required', 'string', 'max:255'],
            'stat_1_value' => ['required', 'string', 'max:255'],
            'stat_2_label' => ['required', 'string', 'max:255'],
            'stat_2_value' => ['required', 'string', 'max:255'],
            'stat_3_label' => ['required', 'string', 'max:255'],
            'stat_3_value' => ['required', 'string', 'max:255'],
            'workflow_eyebrow' => ['required', 'string', 'max:255'],
            'workflow_title' => ['required', 'string', 'max:255'],
            'workflow_badge' => ['required', 'string', 'max:255'],
            'workflow_step_1_title' => ['required', 'string', 'max:255'],
            'workflow_step_1_text' => ['required', 'string'],
            'workflow_step_2_title' => ['required', 'string', 'max:255'],
            'workflow_step_2_text' => ['required', 'string'],
            'workflow_step_3_title' => ['required', 'string', 'max:255'],
            'workflow_step_3_text' => ['required', 'string'],
            'services_label' => ['required', 'string', 'max:255'],
            'services_heading' => ['required', 'string', 'max:255'],
            'services_description' => ['required', 'string'],
            'service_1_title' => ['required', 'string', 'max:255'],
            'service_1_text' => ['required', 'string'],
            'service_2_title' => ['required', 'string', 'max:255'],
            'service_2_text' => ['required', 'string'],
            'service_3_title' => ['required', 'string', 'max:255'],
            'service_3_text' => ['required', 'string'],
            'about_label' => ['required', 'string', 'max:255'],
            'about_heading' => ['required', 'string', 'max:255'],
            'about_card_1_title' => ['required', 'string', 'max:255'],
            'about_card_1_text' => ['required', 'string'],
            'about_card_2_title' => ['required', 'string', 'max:255'],
            'about_card_2_text' => ['required', 'string'],
            'about_card_3_title' => ['required', 'string', 'max:255'],
            'about_card_3_text' => ['required', 'string'],
            'about_card_4_title' => ['required', 'string', 'max:255'],
            'about_card_4_text' => ['required', 'string'],
            'contact_label' => ['required', 'string', 'max:255'],
            'contact_heading' => ['required', 'string', 'max:255'],
            'contact_text' => ['required', 'string'],
            'contact_email' => ['required', 'email:rfc', 'max:255'],
            'contact_dashboard_button' => ['required', 'string', 'max:255'],
        ]);

        $homepage = SiteContent::homepage();
        $homepage->update(['content' => $validated]);

        return redirect()
            ->route('dashboard.edit')
            ->with('status', 'تم تحديث محتوى الصفحة الرئيسية بنجاح.');
    }
}
