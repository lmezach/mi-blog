<?php

use Illuminate\Database\Seeder;

class TabalRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $rols = [
           'administrador',
           'editor',
           'supervisor'
       ];
    
    foreach($rols as $key => $value){
        DB::table('rols')->insert([
            'nombre' => $value
        ]);
        }
    }
}
