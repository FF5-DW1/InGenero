<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     */
    public function test_go_to_login(): void
    {
        $response = $this->get('/orenegni');

        $response->assertStatus(200);
    }

    
    public function test_authenticate_login(): void
    {
        // Crea un usuario administrador y autentícalo
        $admin = User::factory()->create(['is_admin' => true]);

        $csrfToken = $this->getCsrfTokenFromLoginForm();

        $response = $this->actingAs($admin)
                        ->post('/orenegni', [
                            'email' => $admin->email,
                            'password' => 'password',
                            '_token' => $csrfToken, // Incluir el token CSRF// Cambiar 'password' por la contraseña del usuario administrador
                        ]);

        // Verifica que el usuario se autentique correctamente y sea redirigido a /gestionadmin
        $response->assertStatus(302);
        $response->assertRedirect('/gestionadmin');

        // Sigue la redirección y verifica que la respuesta sea exitosa (código 200)
        $response = $this->get('/gestionadmin');
        $response->assertStatus(200);
    }




    public function test_failed_login(): void
    {
        $csrfToken = $this->getCsrfTokenFromLoginForm();

        $response = $this->post('/orenegni', [
            'email' => 'nonexistentuser@mimail.com',
            'password' => 'invalidpassword',
            '_token' => $csrfToken,

        ]);

        $response->assertStatus(302)
                ->assertRedirect('orenegni') // Se redirige de nuevo a la página de inicio de sesión
                ->assertSessionHasErrors(['default']); // Error en la sesión con la clave 'default'


        // Verificar que el mensaje de error personalizado se muestra en la redirección
        $errorMessage = session('errors')->get('default')[0];
        $this->assertEquals('Error: Parece que los datos no son correctos.', $errorMessage);
    }

    public function test_user_logout(): void
    {
        $user = User::factory()->create(['is_admin' => true]);
        $this->actingAs($user);
       
        $csrfToken = csrf_token();
        
        $response = $this->post('/logout', [
                        '_token' => $csrfToken, 
                        ]);
        
        $response->assertStatus(302)
                ->assertRedirect('orenegni');
    }

}
