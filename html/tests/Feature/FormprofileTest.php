<?php

// tests/Feature/FormprofileTest.php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use App\Models\User;

class FormprofileTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if an admin can create an artist profile by filling out the form.
     *
     * @return void
     */
   /*  public function test_admin_can_create_artist_profile()
    {
        $admin = User::factory()->create([
            'email' => 'test@example.com',
            'is_admin' => true,
        ]);

        $this->actingAs($admin);

        // Post desde storeform
        $response = $this->post(route('storeform'), [
            'name' => 'Artist Name',
            'last_name' => 'Artist Last Name',
            'idiomas' => 'lorem',
            'date_of_birth' => 'lorem',
            'height' => '120',
            'weight' => '120',
            'eyes_color' => 'lorem',
            'hair_color' => 'lorem',
            'additional_info' => 'lorem',
            'artistic_skills' => 'lorem',
            'profile_media' => 'lorem',
            'is_active' => '1',
        ]);

        // Assert that the response is a redirect
        $response->assertStatus(302);

    } */
}

