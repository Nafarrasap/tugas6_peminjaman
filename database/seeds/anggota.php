<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_model::insert([
          [
            'nama_anggota'=>'dilan',
            'alamat'=>'magetan',
            'telp'=>'081111222333',
            'created_at'=>date('Y-m-d H:i:s'),

          ],
          [
            'nama_anggota'=>'milea',
            'alamat'=>'magetan',
            'telp'=>'081333222111',
            'created_at'=>date('Y-m-d H:i:s'),
          ],
          [
            'nama_anggota'=>'farras',
            'alamat'=>'magetan',
            'telp'=>'081333222112',
            'created_at'=>date('Y-m-d H:i:s'),
          ],
          [
            'nama_anggota'=>'zeva',
            'alamat'=>'magetan',
            'telp'=>'081333222113',
            'created_at'=>date('Y-m-d H:i:s'),
          ],
          [
            'nama_anggota'=>'fina',
            'alamat'=>'magetan',
            'telp'=>'081333222114',
            'created_at'=>date('Y-m-d H:i:s'),
          ]
      ]);
    }
}
