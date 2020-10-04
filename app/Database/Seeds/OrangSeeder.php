<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        // [
        //     'nama'      => 'Adven',
        //     'alamat'    => 'Jl. Sembarang',
        //     'created_at' => Time::now(),
        //     'updated_at' => Time::now()
        // ],
        // [
        //     'nama'      => 'Indra',
        //     'alamat'    => 'Jl. CBD',
        //     'created_at' => Time::now(),
        //     'updated_at' => Time::now()
        // ],
        // [
        //     'nama'      => 'deas',
        //     'alamat'    => 'Jl. OIU',
        //     'created_at' => Time::now(),
        //     'updated_at' => Time::now()
        // ]

        // ];



        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama'      => $faker->name(),
                'alamat'    => $faker->address,
                'created_at' => $time = Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('orang')->insert($data);
        }
        // // Simple Queries
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat,created_at,updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );

        //Using Query Builder
        //$this->db->table('orang')->insert($data);
    }
}
