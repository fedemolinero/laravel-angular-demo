<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Modules\Empresas\Models\Empresas;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmpresasControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        // Insertar algunas empresas directamente en la base de datos

        Empresas::create(['Razon_Social' => 'Empresa 1']);
        Empresas::create(['Razon_Social' => 'Empresa 2']);

        // Simular la llamada al método index()
        $response = $this->get('/api/empresas');

        // Verificar que la respuesta sea exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar que la respuesta sea un JSON
        $response->assertJson();

        // Verificar que la respuesta contenga los datos de las empresas creadas
        $response->assertJsonFragment(['Razon_Social' => 'Empresa 1']);
        $response->assertJsonFragment(['Razon_Social' => 'Empresa 2']);
    }
}
