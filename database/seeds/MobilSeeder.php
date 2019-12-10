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
        $mobil1->harga = "Honda Brio";
        $mobil1->tahun = "Honda Brio";
        $mobil1->plat = "Honda Brio";
        $mobil1->kategori_id = "Honda Brio";
        $mobil1->gambar = "Honda Brio";
        $mobil1->save();
    }
}
