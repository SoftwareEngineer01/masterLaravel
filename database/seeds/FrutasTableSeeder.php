<?php

use Illuminate\Database\Seeder;

class FrutasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=5; $i++) { 
            DB::table('frutas')->insert([
                'nombre' => 'Fruta #'.$i,
                'descripcion' => Str::random(10),
                'precio' => '1200',
                'fecha' =>date('Y-m-d')
            ]);
       }
    }
}
