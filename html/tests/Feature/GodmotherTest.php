<?php

namespace Tests\Feature;

use App\Models\FormGodMother;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GodmotherTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_admin_can_create_artist_profile()
    {
        $admin = User::factory()->create([
            'email' => 'test@example.com',
            'is_admin' => true,
        ]);

        $this->actingAs($admin);

        // Post desde storeform
        $response = $this->post(route('storeformmadrinas'), [
            'name' => 'Artist Name',
            'last_name' => 'Artist Last Name',
            'description' => 'description  of godmother'
        ]);

        // Assert that the response is a redirect
        $response->assertStatus(302);

    }

    public function testGetAllGodMothers()
    {
        
        FormGodMother::factory()->count(2)->create([
            'is_active' => true,
        ]);
        
        $response = $this->get(route('getAllGodMothers'));

        $response->assertStatus(200);

        $response->assertViewHas('godmothers');

        $godmothersInView = $response->viewData('godmothers');

        //Dos madrinas en el view
        $this->assertCount(2, $godmothersInView);
    }
}
