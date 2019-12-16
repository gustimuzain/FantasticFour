<?php

use Illuminate\Database\Seeder;
use App\Mobil;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mobil1 = new Mobil;
        $mobil1->mobil_id = "IM001";
        $mobil1->nama = "Honda Brio";
        $mobil1->harga = "900000";
        $mobil1->tahun = "2014";
        $mobil1->plat = "HD3434";
        $mobil1->kategori_id = "23";
        $mobil1->gambar = "Honda Brio";
        $mobil1->save();
    }
}
