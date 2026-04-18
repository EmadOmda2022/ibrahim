<?php

namespace Tests\Feature;

use App\Models\SiteContent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SiteContentTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_uses_database_content(): void
    {
        SiteContent::create([
            'key' => 'homepage',
            'content' => array_merge(SiteContent::defaults(), [
                'hero_title' => 'عنوان من قاعدة البيانات',
            ]),
        ]);

        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('عنوان من قاعدة البيانات');
    }

    public function test_dashboard_can_update_homepage_content(): void
    {
        $payload = array_merge(SiteContent::defaults(), [
            'hero_title' => 'عنوان جديد من لوحة التحكم',
            'contact_email' => 'office@example.com',
        ]);

        $response = $this->put(route('dashboard.update'), $payload);

        $response->assertRedirect(route('dashboard.edit'));
        $response->assertSessionHas('status');

        $this->assertDatabaseHas('site_contents', [
            'key' => 'homepage',
        ]);

        $this->get('/')->assertSee('عنوان جديد من لوحة التحكم');
    }
}
