<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormGodmotherTest extends TestCase
{
    /**
     * Prueba básica de funcionalidad del formulario de Madrina.
     *
     * @return void
     */
    public function testFormGodmother()
    {
        $response = $this->get('/'); // Cambia la URL '/'

        $response->assertStatus(200); // Cambia el código de estado según tu expectativa

        // Agrega más aserciones aquí según lo necesites para probar la funcionalidad del formulario
        // Por ejemplo, puedes agregar aserciones para verificar la presencia de elementos HTML, enviar datos al formulario, etc.
    }
}
