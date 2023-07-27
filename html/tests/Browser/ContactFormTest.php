<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactFormTest extends DuskTestCase
{

    @return void

    public function testContactForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contacto') // Ajusta la URL si es diferente
                ->assertSee('name') // Verifica que el label "Nombre" esté presente
                ->assertSee('email') // Verifica que el label "Correo electrónico" esté presente
                ->assertSee('message') // Verifica que el label "Mensaje" esté presente
                ->assertPresent('form') // Verifica que el formulario esté presente
                ->assertVisible('input[name="name"]') // Verifica que el campo de nombre esté visible
                ->assertVisible('input[name="email"]') // Verifica que el campo de correo esté visible
                ->assertVisible('textarea[name="message"]') // Verifica que el campo de mensaje esté visible
                ->assertVisible('button[type="submit"]') // Verifica que el botón de envío esté visible
                ->type('name', 'Ruben') // Rellena el campo del nombre con 'Ruben'
                ->type('email', 'test@example.com') // Rellena el campo del correo con una dirección de ejemplo
                ->type('message', 'Mensaje de prueba') // Rellena el campo del mensaje con un texto de ejemplo
                ->press('Enviar') // Haz clic en el botón "Enviar"
                ->waitForText('Mensaje enviado con éxito') // Espera a que aparezca un mensaje de éxito (ajusta el texto según tu implementación)
                ->assertPathIs('/contacto') // Verifica que la URL después de enviar el formulario sea la misma (ajusta la URL si es diferente)
                ->assertSee('Mensaje enviado con éxito'); // Verifica que se muestra el mensaje de éxito después de enviar el formulario
        });
    }
}
