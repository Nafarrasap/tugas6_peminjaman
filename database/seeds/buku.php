<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku_model::insert([
            [
                'judul' => 'Mariposa',
                'penerbit' => 'Coconut Book',
                'pengarang' => 'Luluk HF',
                'foto' => '-',
                'created_at' => date('Y-m-d H:i:s'),

            ],
            [
                'judul' => 'Laskar Pelangi',
                'penerbit' => 'Bentang Pustaka',
                'pengarang' => 'Andrea Hirata',
                'foto' => '-',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'judul' => 'Sang Pemimpi',
                'penerbit' => 'Bentang Pustaka',
                'pengarang' => 'Andrea Hirata',
                'foto' => '-',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'judul' => 'Bumi Manusia',
                'penerbit' => 'Lentera',
                'pengarang' => 'Pramoedya Ananta Noer',
                'foto' => '-',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'judul' => '5cm',
                'penerbit' => 'Grasindo',
                'pengarang' => 'Donny Dhirgantoro',
                'foto' => '-',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
