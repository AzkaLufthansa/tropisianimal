<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galeri::create([
            'nama_gambar' => 'Elang',
            'gambar' => 'galeri_images/wh33fWxHG5OLvkJKQKW2y521UUsd5qx2bOjsWbVT.png'
        ]);

        Galeri::create([
            'nama_gambar' => 'Uncal',
            'gambar' => 'galeri_images/b8STBvz3FDYW2V2x3D2PxdiE67xodNd11W78s5um.png'
        ]);

        Galeri::create([
            'nama_gambar' => 'Gajah',
            'gambar' => 'galeri_images/vpacyceyLySvlYnVgtGElv6rdYZsQ02Kkurl2eLx.png'
        ]);

        Galeri::create([
            'nama_gambar' => 'Burung',
            'gambar' => 'galeri_images/VRvxn2LhpMk9Kg8drip3RzzGPUFuijlO4utL1VYr.png'
        ]);

        Galeri::create([
            'nama_gambar' => 'Kudanil',
            'gambar' => 'galeri_images/iSB2OFo7vhyCy2jproDdlSHmkgVBbusg39hHhjuV.png'
        ]);

        Galeri::create([
            'nama_gambar' => 'Penyu',
            'gambar' => 'galeri_images/iP8jaWBG2xaeJKTV7KduyHmUxeh4K7aXaWzXRwhv.png'
        ]);

        Galeri::create([
            'nama_gambar' => 'Orangutan',
            'gambar' => 'galeri_images/tpnpuiaVVc1QyacLi2te2d41B4MEVgT9fbufGtOa.png'
        ]);

        Galeri::create([
            'nama_gambar' => 'Komodo',
            'gambar' => 'galeri_images/XJBpolIaOjXHwwHZlSnxaEK8QaFBkF17RpICo2mo.png'
        ]);
    }
}
