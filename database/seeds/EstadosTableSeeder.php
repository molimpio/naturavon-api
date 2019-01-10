<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            ['nome' => 'Acre-AC'],
            ['nome' => 'Alagoas-AL'],
            ['nome' => 'Amazonas-AM'],
            ['nome' => 'Amapá-AP'],
            ['nome' => 'Bahia-BA'],
            ['nome' => 'Ceará-CE'],
            ['nome' => 'Distrito Federal-DF'],
            ['nome' => 'Espírito Santo-ES'],
            ['nome' => 'Goiás-GO'],
            ['nome' => 'Maranhão-MA'],
            ['nome' => 'Minas Gerais-MG'],
            ['nome' => 'Mato Grosso do Sul-MS'],
            ['nome' => 'Mato Grosso-MT'],
            ['nome' => 'Pará-PA'],
            ['nome' => 'Paraíba-PB'],
            ['nome' => 'Pernambuco-PE'],
            ['nome' => 'Piauí-PI'],
            ['nome' => 'Paraná-PR'],
            ['nome' => 'Rio de Janeiro-RJ'],
            ['nome' => 'Rio Grande do Norte-RN'],
            ['nome' => 'Rondônia-RO'],
            ['nome' => 'Roraima-RR'],
            ['nome' => 'Rio Grande do Sul-RS'],
            ['nome' => 'Santa Catarina-SC'],
            ['nome' => 'Sergipe-SE'],
            ['nome' => 'São Paulo-SP'],
            ['nome' => 'Tocantins-TO'],
        ];

        for ($i=0; $i < sizeof($estados); $i++) {
            $linha = $estados[$i]['nome'];
            $estadoExplode = explode('-', $linha);
            $estado = [
                'nome' => strtoupper($estadoExplode[0]),
                'uf' => strtoupper($estadoExplode[1])
            ];
            DB::table('estados')->insert($estado);
        }
    }
}
