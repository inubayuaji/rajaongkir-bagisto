<?php

namespace Lunantu\RajaOngkir\Database\Seeders;

use Illuminate\Database\Seeder;

class RajaongkirProvinsiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rajaongkir_provinsi')->delete();
        
        \DB::table('rajaongkir_provinsi')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Bali',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Bangka Belitung',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Banten',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Bengkulu',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'DI Yogyakarta',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'DKI Jakarta',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Gorontalo',
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Jambi',
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'Jawa Barat',
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'Jawa Tengah',
            ),
            10 => 
            array (
                'id' => 11,
                'nama' => 'Jawa Timur',
            ),
            11 => 
            array (
                'id' => 12,
                'nama' => 'Kalimantan Barat',
            ),
            12 => 
            array (
                'id' => 13,
                'nama' => 'Kalimantan Selatan',
            ),
            13 => 
            array (
                'id' => 14,
                'nama' => 'Kalimantan Tengah',
            ),
            14 => 
            array (
                'id' => 15,
                'nama' => 'Kalimantan Timur',
            ),
            15 => 
            array (
                'id' => 16,
                'nama' => 'Kalimantan Utara',
            ),
            16 => 
            array (
                'id' => 17,
                'nama' => 'Kepulauan Riau',
            ),
            17 => 
            array (
                'id' => 18,
                'nama' => 'Lampung',
            ),
            18 => 
            array (
                'id' => 19,
                'nama' => 'Maluku',
            ),
            19 => 
            array (
                'id' => 20,
                'nama' => 'Maluku Utara',
            ),
            20 => 
            array (
                'id' => 21,
            'nama' => 'Nanggroe Aceh Darussalam (NAD)',
            ),
            21 => 
            array (
                'id' => 22,
            'nama' => 'Nusa Tenggara Barat (NTB)',
            ),
            22 => 
            array (
                'id' => 23,
            'nama' => 'Nusa Tenggara Timur (NTT)',
            ),
            23 => 
            array (
                'id' => 24,
                'nama' => 'Papua',
            ),
            24 => 
            array (
                'id' => 25,
                'nama' => 'Papua Barat',
            ),
            25 => 
            array (
                'id' => 26,
                'nama' => 'Riau',
            ),
            26 => 
            array (
                'id' => 27,
                'nama' => 'Sulawesi Barat',
            ),
            27 => 
            array (
                'id' => 28,
                'nama' => 'Sulawesi Selatan',
            ),
            28 => 
            array (
                'id' => 29,
                'nama' => 'Sulawesi Tengah',
            ),
            29 => 
            array (
                'id' => 30,
                'nama' => 'Sulawesi Tenggara',
            ),
            30 => 
            array (
                'id' => 31,
                'nama' => 'Sulawesi Utara',
            ),
            31 => 
            array (
                'id' => 32,
                'nama' => 'Sumatera Barat',
            ),
            32 => 
            array (
                'id' => 33,
                'nama' => 'Sumatera Selatan',
            ),
            33 => 
            array (
                'id' => 34,
                'nama' => 'Sumatera Utara',
            ),
        ));
        
        
    }
}