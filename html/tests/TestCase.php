<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Obtiene el token CSRF válido del formulario de inicio de sesión.
     *
     * @return string|null
     */
    protected function getCsrfTokenFromLoginForm()
    {
        $response = $this->get('/orenegni'); // Ruta del formulario de inicio de sesión
        $content = $response->getContent();
        if (preg_match('/<input type="hidden" name="_token" value="([^"]+)"/', $content, $matches)) {
            return $matches[1];
        }
        return null;
    }

    protected function getCsrfTokenFromResponse($response)
{
    $content = $response->getContent();
    preg_match('/<input type="hidden" name="_token" value="(.*)"/', $content, $matches);
    return $matches[1] ?? null;
}
}
