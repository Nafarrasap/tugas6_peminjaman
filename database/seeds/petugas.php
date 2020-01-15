<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Petugas_model::insert([
        [
          'nama_petugas'=>'farras',
          'alamat'=>'magetan',
          'telp'=>'081123123123',
          'username'=>'farras',
          'password'=>'farras',
          'created_at'=>date('Y-m-d H:i:s')
        ],
        [
          'nama_petugas'=>'jepa',
          'alamat'=>'magetan',
          'telp'=>'081123123123',
          'username'=>'jepa',
          'password'=>'jepa',
          'created_at'=>date('Y-m-d H:i:s')
        ],
        [
          'nama_petugas'=>'zalfa',
          'alamat'=>'magetan',
          'telp'=>'081123123123',
          'username'=>'zalfa',
          'password'=>'zalfa',
          'created_at'=>date('Y-m-d H:i:s')
        ],
        [
          'nama_petugas'=>'fina',
          'alamat'=>'magetan',
          'telp'=>'081123123123',
          'username'=>'fina',
          'password'=>'fina',
          'created_at'=>date('Y-m-d H:i:s')
        ],
        [
          'nama_petugas'=>'manda',
          'alamat'=>'magetan',
          'telp'=>'081123123123',
          'username'=>'manda',
          'password'=>'manda',
          'created_at'=>date('Y-m-d H:i:s')
        ]
      ]);
    }
}
