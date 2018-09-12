<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();

    	$products = [
            [
                'title' => 'Curso Laravel desde cero',
                'description' => 'Aprende lo mas actual del framework mas popular de PHP',
                'price' => 100,
            ],
            [
                'title' => 'Curso Vue',
                'description' => 'Crea aplicaciones de tipo SPA, con el framework que esta cambiando la web.',
                'price' => 100,
            ],
            [
                'title' => 'Curso Angular JS',
                'description' => 'Crea aplicaciones increibles con Angular Js framework de Google',
                'price' => 100,
            ],
            [
                'title' => 'Curso de Estructuras de Datos en Java',
                'description' => 'Curso dedicado a estructuras complejas de datos como Arboles, grafos, etc. Solo en Java.',
                'price' => 100,
            ],
            [
                'title' => 'Curso Bootstrap 4',
                'description' => 'Diseño responsivo con el framework css más popular.',
                'price' => 100,
            ],
        ];

        // Uncomment the below to run the seeder
        DB::table('products')->insert($products);
    }
}
