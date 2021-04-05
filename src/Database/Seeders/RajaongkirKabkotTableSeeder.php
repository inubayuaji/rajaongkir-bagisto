<?php

namespace Lunantu\RajaOngkir\Database\Seeders;

use Illuminate\Database\Seeder;

class RajaongkirKabkotTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rajaongkir_kabkot')->delete();
        
        \DB::table('rajaongkir_kabkot')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode_pos' => '23681',
                'nama' => 'Kabupaten Aceh Barat',
                'provinsi_id' => 21,
            ),
            1 => 
            array (
                'id' => 2,
                'kode_pos' => '23764',
                'nama' => 'Kabupaten Aceh Barat Daya',
                'provinsi_id' => 21,
            ),
            2 => 
            array (
                'id' => 3,
                'kode_pos' => '23951',
                'nama' => 'Kabupaten Aceh Besar',
                'provinsi_id' => 21,
            ),
            3 => 
            array (
                'id' => 4,
                'kode_pos' => '23654',
                'nama' => 'Kabupaten Aceh Jaya',
                'provinsi_id' => 21,
            ),
            4 => 
            array (
                'id' => 5,
                'kode_pos' => '23719',
                'nama' => 'Kabupaten Aceh Selatan',
                'provinsi_id' => 21,
            ),
            5 => 
            array (
                'id' => 6,
                'kode_pos' => '24785',
                'nama' => 'Kabupaten Aceh Singkil',
                'provinsi_id' => 21,
            ),
            6 => 
            array (
                'id' => 7,
                'kode_pos' => '24476',
                'nama' => 'Kabupaten Aceh Tamiang',
                'provinsi_id' => 21,
            ),
            7 => 
            array (
                'id' => 8,
                'kode_pos' => '24511',
                'nama' => 'Kabupaten Aceh Tengah',
                'provinsi_id' => 21,
            ),
            8 => 
            array (
                'id' => 9,
                'kode_pos' => '24611',
                'nama' => 'Kabupaten Aceh Tenggara',
                'provinsi_id' => 21,
            ),
            9 => 
            array (
                'id' => 10,
                'kode_pos' => '24454',
                'nama' => 'Kabupaten Aceh Timur',
                'provinsi_id' => 21,
            ),
            10 => 
            array (
                'id' => 11,
                'kode_pos' => '24382',
                'nama' => 'Kabupaten Aceh Utara',
                'provinsi_id' => 21,
            ),
            11 => 
            array (
                'id' => 12,
                'kode_pos' => '26411',
                'nama' => 'Kabupaten Agam',
                'provinsi_id' => 32,
            ),
            12 => 
            array (
                'id' => 13,
                'kode_pos' => '85811',
                'nama' => 'Kabupaten Alor',
                'provinsi_id' => 23,
            ),
            13 => 
            array (
                'id' => 14,
                'kode_pos' => '97222',
                'nama' => 'Kota Ambon',
                'provinsi_id' => 19,
            ),
            14 => 
            array (
                'id' => 15,
                'kode_pos' => '21214',
                'nama' => 'Kabupaten Asahan',
                'provinsi_id' => 34,
            ),
            15 => 
            array (
                'id' => 16,
                'kode_pos' => '99777',
                'nama' => 'Kabupaten Asmat',
                'provinsi_id' => 24,
            ),
            16 => 
            array (
                'id' => 17,
                'kode_pos' => '80351',
                'nama' => 'Kabupaten Badung',
                'provinsi_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'kode_pos' => '71611',
                'nama' => 'Kabupaten Balangan',
                'provinsi_id' => 13,
            ),
            18 => 
            array (
                'id' => 19,
                'kode_pos' => '76111',
                'nama' => 'Kota Balikpapan',
                'provinsi_id' => 15,
            ),
            19 => 
            array (
                'id' => 20,
                'kode_pos' => '23238',
                'nama' => 'Kota Banda Aceh',
                'provinsi_id' => 21,
            ),
            20 => 
            array (
                'id' => 21,
                'kode_pos' => '35139',
                'nama' => 'Kota Bandar Lampung',
                'provinsi_id' => 18,
            ),
            21 => 
            array (
                'id' => 22,
                'kode_pos' => '40311',
                'nama' => 'Kabupaten Bandung',
                'provinsi_id' => 9,
            ),
            22 => 
            array (
                'id' => 23,
                'kode_pos' => '40111',
                'nama' => 'Kota Bandung',
                'provinsi_id' => 9,
            ),
            23 => 
            array (
                'id' => 24,
                'kode_pos' => '40721',
                'nama' => 'Kabupaten Bandung Barat',
                'provinsi_id' => 9,
            ),
            24 => 
            array (
                'id' => 25,
                'kode_pos' => '94711',
                'nama' => 'Kabupaten Banggai',
                'provinsi_id' => 29,
            ),
            25 => 
            array (
                'id' => 26,
                'kode_pos' => '94881',
                'nama' => 'Kabupaten Banggai Kepulauan',
                'provinsi_id' => 29,
            ),
            26 => 
            array (
                'id' => 27,
                'kode_pos' => '33212',
                'nama' => 'Kabupaten Bangka',
                'provinsi_id' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'kode_pos' => '33315',
                'nama' => 'Kabupaten Bangka Barat',
                'provinsi_id' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'kode_pos' => '33719',
                'nama' => 'Kabupaten Bangka Selatan',
                'provinsi_id' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'kode_pos' => '33613',
                'nama' => 'Kabupaten Bangka Tengah',
                'provinsi_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'kode_pos' => '69118',
                'nama' => 'Kabupaten Bangkalan',
                'provinsi_id' => 11,
            ),
            31 => 
            array (
                'id' => 32,
                'kode_pos' => '80619',
                'nama' => 'Kabupaten Bangli',
                'provinsi_id' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'kode_pos' => '70619',
                'nama' => 'Kabupaten Banjar',
                'provinsi_id' => 13,
            ),
            33 => 
            array (
                'id' => 34,
                'kode_pos' => '46311',
                'nama' => 'Kota Banjar',
                'provinsi_id' => 9,
            ),
            34 => 
            array (
                'id' => 35,
                'kode_pos' => '70712',
                'nama' => 'Kota Banjarbaru',
                'provinsi_id' => 13,
            ),
            35 => 
            array (
                'id' => 36,
                'kode_pos' => '70117',
                'nama' => 'Kota Banjarmasin',
                'provinsi_id' => 13,
            ),
            36 => 
            array (
                'id' => 37,
                'kode_pos' => '53419',
                'nama' => 'Kabupaten Banjarnegara',
                'provinsi_id' => 10,
            ),
            37 => 
            array (
                'id' => 38,
                'kode_pos' => '92411',
                'nama' => 'Kabupaten Bantaeng',
                'provinsi_id' => 28,
            ),
            38 => 
            array (
                'id' => 39,
                'kode_pos' => '55715',
                'nama' => 'Kabupaten Bantul',
                'provinsi_id' => 5,
            ),
            39 => 
            array (
                'id' => 40,
                'kode_pos' => '30911',
                'nama' => 'Kabupaten Banyuasin',
                'provinsi_id' => 33,
            ),
            40 => 
            array (
                'id' => 41,
                'kode_pos' => '53114',
                'nama' => 'Kabupaten Banyumas',
                'provinsi_id' => 10,
            ),
            41 => 
            array (
                'id' => 42,
                'kode_pos' => '68416',
                'nama' => 'Kabupaten Banyuwangi',
                'provinsi_id' => 11,
            ),
            42 => 
            array (
                'id' => 43,
                'kode_pos' => '70511',
                'nama' => 'Kabupaten Barito Kuala',
                'provinsi_id' => 13,
            ),
            43 => 
            array (
                'id' => 44,
                'kode_pos' => '73711',
                'nama' => 'Kabupaten Barito Selatan',
                'provinsi_id' => 14,
            ),
            44 => 
            array (
                'id' => 45,
                'kode_pos' => '73671',
                'nama' => 'Kabupaten Barito Timur',
                'provinsi_id' => 14,
            ),
            45 => 
            array (
                'id' => 46,
                'kode_pos' => '73881',
                'nama' => 'Kabupaten Barito Utara',
                'provinsi_id' => 14,
            ),
            46 => 
            array (
                'id' => 47,
                'kode_pos' => '90719',
                'nama' => 'Kabupaten Barru',
                'provinsi_id' => 28,
            ),
            47 => 
            array (
                'id' => 48,
                'kode_pos' => '29413',
                'nama' => 'Kota Batam',
                'provinsi_id' => 17,
            ),
            48 => 
            array (
                'id' => 49,
                'kode_pos' => '51211',
                'nama' => 'Kabupaten Batang',
                'provinsi_id' => 10,
            ),
            49 => 
            array (
                'id' => 50,
                'kode_pos' => '36613',
                'nama' => 'Kabupaten Batang Hari',
                'provinsi_id' => 8,
            ),
            50 => 
            array (
                'id' => 51,
                'kode_pos' => '65311',
                'nama' => 'Kota Batu',
                'provinsi_id' => 11,
            ),
            51 => 
            array (
                'id' => 52,
                'kode_pos' => '21655',
                'nama' => 'Kabupaten Batu Bara',
                'provinsi_id' => 34,
            ),
            52 => 
            array (
                'id' => 53,
                'kode_pos' => '93719',
                'nama' => 'Kota Bau-Bau',
                'provinsi_id' => 30,
            ),
            53 => 
            array (
                'id' => 54,
                'kode_pos' => '17837',
                'nama' => 'Kabupaten Bekasi',
                'provinsi_id' => 9,
            ),
            54 => 
            array (
                'id' => 55,
                'kode_pos' => '17121',
                'nama' => 'Kota Bekasi',
                'provinsi_id' => 9,
            ),
            55 => 
            array (
                'id' => 56,
                'kode_pos' => '33419',
                'nama' => 'Kabupaten Belitung',
                'provinsi_id' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'kode_pos' => '33519',
                'nama' => 'Kabupaten Belitung Timur',
                'provinsi_id' => 2,
            ),
            57 => 
            array (
                'id' => 58,
                'kode_pos' => '85711',
                'nama' => 'Kabupaten Belu',
                'provinsi_id' => 23,
            ),
            58 => 
            array (
                'id' => 59,
                'kode_pos' => '24581',
                'nama' => 'Kabupaten Bener Meriah',
                'provinsi_id' => 21,
            ),
            59 => 
            array (
                'id' => 60,
                'kode_pos' => '28719',
                'nama' => 'Kabupaten Bengkalis',
                'provinsi_id' => 26,
            ),
            60 => 
            array (
                'id' => 61,
                'kode_pos' => '79213',
                'nama' => 'Kabupaten Bengkayang',
                'provinsi_id' => 12,
            ),
            61 => 
            array (
                'id' => 62,
                'kode_pos' => '38229',
                'nama' => 'Kota Bengkulu',
                'provinsi_id' => 4,
            ),
            62 => 
            array (
                'id' => 63,
                'kode_pos' => '38519',
                'nama' => 'Kabupaten Bengkulu Selatan',
                'provinsi_id' => 4,
            ),
            63 => 
            array (
                'id' => 64,
                'kode_pos' => '38319',
                'nama' => 'Kabupaten Bengkulu Tengah',
                'provinsi_id' => 4,
            ),
            64 => 
            array (
                'id' => 65,
                'kode_pos' => '38619',
                'nama' => 'Kabupaten Bengkulu Utara',
                'provinsi_id' => 4,
            ),
            65 => 
            array (
                'id' => 66,
                'kode_pos' => '77311',
                'nama' => 'Kabupaten Berau',
                'provinsi_id' => 15,
            ),
            66 => 
            array (
                'id' => 67,
                'kode_pos' => '98119',
                'nama' => 'Kabupaten Biak Numfor',
                'provinsi_id' => 24,
            ),
            67 => 
            array (
                'id' => 68,
                'kode_pos' => '84171',
                'nama' => 'Kabupaten Bima',
                'provinsi_id' => 22,
            ),
            68 => 
            array (
                'id' => 69,
                'kode_pos' => '84139',
                'nama' => 'Kota Bima',
                'provinsi_id' => 22,
            ),
            69 => 
            array (
                'id' => 70,
                'kode_pos' => '20712',
                'nama' => 'Kota Binjai',
                'provinsi_id' => 34,
            ),
            70 => 
            array (
                'id' => 71,
                'kode_pos' => '29135',
                'nama' => 'Kabupaten Bintan',
                'provinsi_id' => 17,
            ),
            71 => 
            array (
                'id' => 72,
                'kode_pos' => '24219',
                'nama' => 'Kabupaten Bireuen',
                'provinsi_id' => 21,
            ),
            72 => 
            array (
                'id' => 73,
                'kode_pos' => '95512',
                'nama' => 'Kota Bitung',
                'provinsi_id' => 31,
            ),
            73 => 
            array (
                'id' => 74,
                'kode_pos' => '66171',
                'nama' => 'Kabupaten Blitar',
                'provinsi_id' => 11,
            ),
            74 => 
            array (
                'id' => 75,
                'kode_pos' => '66124',
                'nama' => 'Kota Blitar',
                'provinsi_id' => 11,
            ),
            75 => 
            array (
                'id' => 76,
                'kode_pos' => '58219',
                'nama' => 'Kabupaten Blora',
                'provinsi_id' => 10,
            ),
            76 => 
            array (
                'id' => 77,
                'kode_pos' => '96319',
                'nama' => 'Kabupaten Boalemo',
                'provinsi_id' => 7,
            ),
            77 => 
            array (
                'id' => 78,
                'kode_pos' => '16911',
                'nama' => 'Kabupaten Bogor',
                'provinsi_id' => 9,
            ),
            78 => 
            array (
                'id' => 79,
                'kode_pos' => '16119',
                'nama' => 'Kota Bogor',
                'provinsi_id' => 9,
            ),
            79 => 
            array (
                'id' => 80,
                'kode_pos' => '62119',
                'nama' => 'Kabupaten Bojonegoro',
                'provinsi_id' => 11,
            ),
            80 => 
            array (
                'id' => 81,
                'kode_pos' => '95755',
            'nama' => 'Kabupaten Bolaang Mongondow (Bolmong)',
                'provinsi_id' => 31,
            ),
            81 => 
            array (
                'id' => 82,
                'kode_pos' => '95774',
                'nama' => 'Kabupaten Bolaang Mongondow Selatan',
                'provinsi_id' => 31,
            ),
            82 => 
            array (
                'id' => 83,
                'kode_pos' => '95783',
                'nama' => 'Kabupaten Bolaang Mongondow Timur',
                'provinsi_id' => 31,
            ),
            83 => 
            array (
                'id' => 84,
                'kode_pos' => '95765',
                'nama' => 'Kabupaten Bolaang Mongondow Utara',
                'provinsi_id' => 31,
            ),
            84 => 
            array (
                'id' => 85,
                'kode_pos' => '93771',
                'nama' => 'Kabupaten Bombana',
                'provinsi_id' => 30,
            ),
            85 => 
            array (
                'id' => 86,
                'kode_pos' => '68219',
                'nama' => 'Kabupaten Bondowoso',
                'provinsi_id' => 11,
            ),
            86 => 
            array (
                'id' => 87,
                'kode_pos' => '92713',
                'nama' => 'Kabupaten Bone',
                'provinsi_id' => 28,
            ),
            87 => 
            array (
                'id' => 88,
                'kode_pos' => '96511',
                'nama' => 'Kabupaten Bone Bolango',
                'provinsi_id' => 7,
            ),
            88 => 
            array (
                'id' => 89,
                'kode_pos' => '75313',
                'nama' => 'Kota Bontang',
                'provinsi_id' => 15,
            ),
            89 => 
            array (
                'id' => 90,
                'kode_pos' => '99662',
                'nama' => 'Kabupaten Boven Digoel',
                'provinsi_id' => 24,
            ),
            90 => 
            array (
                'id' => 91,
                'kode_pos' => '57312',
                'nama' => 'Kabupaten Boyolali',
                'provinsi_id' => 10,
            ),
            91 => 
            array (
                'id' => 92,
                'kode_pos' => '52212',
                'nama' => 'Kabupaten Brebes',
                'provinsi_id' => 10,
            ),
            92 => 
            array (
                'id' => 93,
                'kode_pos' => '26115',
                'nama' => 'Kota Bukittinggi',
                'provinsi_id' => 32,
            ),
            93 => 
            array (
                'id' => 94,
                'kode_pos' => '81111',
                'nama' => 'Kabupaten Buleleng',
                'provinsi_id' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'kode_pos' => '92511',
                'nama' => 'Kabupaten Bulukumba',
                'provinsi_id' => 28,
            ),
            95 => 
            array (
                'id' => 96,
                'kode_pos' => '77211',
            'nama' => 'Kabupaten Bulungan (Bulongan)',
                'provinsi_id' => 16,
            ),
            96 => 
            array (
                'id' => 97,
                'kode_pos' => '37216',
                'nama' => 'Kabupaten Bungo',
                'provinsi_id' => 8,
            ),
            97 => 
            array (
                'id' => 98,
                'kode_pos' => '94564',
                'nama' => 'Kabupaten Buol',
                'provinsi_id' => 29,
            ),
            98 => 
            array (
                'id' => 99,
                'kode_pos' => '97371',
                'nama' => 'Kabupaten Buru',
                'provinsi_id' => 19,
            ),
            99 => 
            array (
                'id' => 100,
                'kode_pos' => '97351',
                'nama' => 'Kabupaten Buru Selatan',
                'provinsi_id' => 19,
            ),
            100 => 
            array (
                'id' => 101,
                'kode_pos' => '93754',
                'nama' => 'Kabupaten Buton',
                'provinsi_id' => 30,
            ),
            101 => 
            array (
                'id' => 102,
                'kode_pos' => '93745',
                'nama' => 'Kabupaten Buton Utara',
                'provinsi_id' => 30,
            ),
            102 => 
            array (
                'id' => 103,
                'kode_pos' => '46211',
                'nama' => 'Kabupaten Ciamis',
                'provinsi_id' => 9,
            ),
            103 => 
            array (
                'id' => 104,
                'kode_pos' => '43217',
                'nama' => 'Kabupaten Cianjur',
                'provinsi_id' => 9,
            ),
            104 => 
            array (
                'id' => 105,
                'kode_pos' => '53211',
                'nama' => 'Kabupaten Cilacap',
                'provinsi_id' => 10,
            ),
            105 => 
            array (
                'id' => 106,
                'kode_pos' => '42417',
                'nama' => 'Kota Cilegon',
                'provinsi_id' => 3,
            ),
            106 => 
            array (
                'id' => 107,
                'kode_pos' => '40512',
                'nama' => 'Kota Cimahi',
                'provinsi_id' => 9,
            ),
            107 => 
            array (
                'id' => 108,
                'kode_pos' => '45611',
                'nama' => 'Kabupaten Cirebon',
                'provinsi_id' => 9,
            ),
            108 => 
            array (
                'id' => 109,
                'kode_pos' => '45116',
                'nama' => 'Kota Cirebon',
                'provinsi_id' => 9,
            ),
            109 => 
            array (
                'id' => 110,
                'kode_pos' => '22211',
                'nama' => 'Kabupaten Dairi',
                'provinsi_id' => 34,
            ),
            110 => 
            array (
                'id' => 111,
                'kode_pos' => '98784',
            'nama' => 'Kabupaten Deiyai (Deliyai)',
                'provinsi_id' => 24,
            ),
            111 => 
            array (
                'id' => 112,
                'kode_pos' => '20511',
                'nama' => 'Kabupaten Deli Serdang',
                'provinsi_id' => 34,
            ),
            112 => 
            array (
                'id' => 113,
                'kode_pos' => '59519',
                'nama' => 'Kabupaten Demak',
                'provinsi_id' => 10,
            ),
            113 => 
            array (
                'id' => 114,
                'kode_pos' => '80227',
                'nama' => 'Kota Denpasar',
                'provinsi_id' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'kode_pos' => '16416',
                'nama' => 'Kota Depok',
                'provinsi_id' => 9,
            ),
            115 => 
            array (
                'id' => 116,
                'kode_pos' => '27612',
                'nama' => 'Kabupaten Dharmasraya',
                'provinsi_id' => 32,
            ),
            116 => 
            array (
                'id' => 117,
                'kode_pos' => '98866',
                'nama' => 'Kabupaten Dogiyai',
                'provinsi_id' => 24,
            ),
            117 => 
            array (
                'id' => 118,
                'kode_pos' => '84217',
                'nama' => 'Kabupaten Dompu',
                'provinsi_id' => 22,
            ),
            118 => 
            array (
                'id' => 119,
                'kode_pos' => '94341',
                'nama' => 'Kabupaten Donggala',
                'provinsi_id' => 29,
            ),
            119 => 
            array (
                'id' => 120,
                'kode_pos' => '28811',
                'nama' => 'Kota Dumai',
                'provinsi_id' => 26,
            ),
            120 => 
            array (
                'id' => 121,
                'kode_pos' => '31811',
                'nama' => 'Kabupaten Empat Lawang',
                'provinsi_id' => 33,
            ),
            121 => 
            array (
                'id' => 122,
                'kode_pos' => '86351',
                'nama' => 'Kabupaten Ende',
                'provinsi_id' => 23,
            ),
            122 => 
            array (
                'id' => 123,
                'kode_pos' => '91719',
                'nama' => 'Kabupaten Enrekang',
                'provinsi_id' => 28,
            ),
            123 => 
            array (
                'id' => 124,
                'kode_pos' => '98651',
                'nama' => 'Kabupaten Fakfak',
                'provinsi_id' => 25,
            ),
            124 => 
            array (
                'id' => 125,
                'kode_pos' => '86213',
                'nama' => 'Kabupaten Flores Timur',
                'provinsi_id' => 23,
            ),
            125 => 
            array (
                'id' => 126,
                'kode_pos' => '44126',
                'nama' => 'Kabupaten Garut',
                'provinsi_id' => 9,
            ),
            126 => 
            array (
                'id' => 127,
                'kode_pos' => '24653',
                'nama' => 'Kabupaten Gayo Lues',
                'provinsi_id' => 21,
            ),
            127 => 
            array (
                'id' => 128,
                'kode_pos' => '80519',
                'nama' => 'Kabupaten Gianyar',
                'provinsi_id' => 1,
            ),
            128 => 
            array (
                'id' => 129,
                'kode_pos' => '96218',
                'nama' => 'Kabupaten Gorontalo',
                'provinsi_id' => 7,
            ),
            129 => 
            array (
                'id' => 130,
                'kode_pos' => '96115',
                'nama' => 'Kota Gorontalo',
                'provinsi_id' => 7,
            ),
            130 => 
            array (
                'id' => 131,
                'kode_pos' => '96611',
                'nama' => 'Kabupaten Gorontalo Utara',
                'provinsi_id' => 7,
            ),
            131 => 
            array (
                'id' => 132,
                'kode_pos' => '92111',
                'nama' => 'Kabupaten Gowa',
                'provinsi_id' => 28,
            ),
            132 => 
            array (
                'id' => 133,
                'kode_pos' => '61115',
                'nama' => 'Kabupaten Gresik',
                'provinsi_id' => 11,
            ),
            133 => 
            array (
                'id' => 134,
                'kode_pos' => '58111',
                'nama' => 'Kabupaten Grobogan',
                'provinsi_id' => 10,
            ),
            134 => 
            array (
                'id' => 135,
                'kode_pos' => '55812',
                'nama' => 'Kabupaten Gunung Kidul',
                'provinsi_id' => 5,
            ),
            135 => 
            array (
                'id' => 136,
                'kode_pos' => '74511',
                'nama' => 'Kabupaten Gunung Mas',
                'provinsi_id' => 14,
            ),
            136 => 
            array (
                'id' => 137,
                'kode_pos' => '22813',
                'nama' => 'Kota Gunungsitoli',
                'provinsi_id' => 34,
            ),
            137 => 
            array (
                'id' => 138,
                'kode_pos' => '97757',
                'nama' => 'Kabupaten Halmahera Barat',
                'provinsi_id' => 20,
            ),
            138 => 
            array (
                'id' => 139,
                'kode_pos' => '97911',
                'nama' => 'Kabupaten Halmahera Selatan',
                'provinsi_id' => 20,
            ),
            139 => 
            array (
                'id' => 140,
                'kode_pos' => '97853',
                'nama' => 'Kabupaten Halmahera Tengah',
                'provinsi_id' => 20,
            ),
            140 => 
            array (
                'id' => 141,
                'kode_pos' => '97862',
                'nama' => 'Kabupaten Halmahera Timur',
                'provinsi_id' => 20,
            ),
            141 => 
            array (
                'id' => 142,
                'kode_pos' => '97762',
                'nama' => 'Kabupaten Halmahera Utara',
                'provinsi_id' => 20,
            ),
            142 => 
            array (
                'id' => 143,
                'kode_pos' => '71212',
                'nama' => 'Kabupaten Hulu Sungai Selatan',
                'provinsi_id' => 13,
            ),
            143 => 
            array (
                'id' => 144,
                'kode_pos' => '71313',
                'nama' => 'Kabupaten Hulu Sungai Tengah',
                'provinsi_id' => 13,
            ),
            144 => 
            array (
                'id' => 145,
                'kode_pos' => '71419',
                'nama' => 'Kabupaten Hulu Sungai Utara',
                'provinsi_id' => 13,
            ),
            145 => 
            array (
                'id' => 146,
                'kode_pos' => '22457',
                'nama' => 'Kabupaten Humbang Hasundutan',
                'provinsi_id' => 34,
            ),
            146 => 
            array (
                'id' => 147,
                'kode_pos' => '29212',
                'nama' => 'Kabupaten Indragiri Hilir',
                'provinsi_id' => 26,
            ),
            147 => 
            array (
                'id' => 148,
                'kode_pos' => '29319',
                'nama' => 'Kabupaten Indragiri Hulu',
                'provinsi_id' => 26,
            ),
            148 => 
            array (
                'id' => 149,
                'kode_pos' => '45214',
                'nama' => 'Kabupaten Indramayu',
                'provinsi_id' => 9,
            ),
            149 => 
            array (
                'id' => 150,
                'kode_pos' => '98771',
                'nama' => 'Kabupaten Intan Jaya',
                'provinsi_id' => 24,
            ),
            150 => 
            array (
                'id' => 151,
                'kode_pos' => '11220',
                'nama' => 'Kota Jakarta Barat',
                'provinsi_id' => 6,
            ),
            151 => 
            array (
                'id' => 152,
                'kode_pos' => '10540',
                'nama' => 'Kota Jakarta Pusat',
                'provinsi_id' => 6,
            ),
            152 => 
            array (
                'id' => 153,
                'kode_pos' => '12230',
                'nama' => 'Kota Jakarta Selatan',
                'provinsi_id' => 6,
            ),
            153 => 
            array (
                'id' => 154,
                'kode_pos' => '13330',
                'nama' => 'Kota Jakarta Timur',
                'provinsi_id' => 6,
            ),
            154 => 
            array (
                'id' => 155,
                'kode_pos' => '14140',
                'nama' => 'Kota Jakarta Utara',
                'provinsi_id' => 6,
            ),
            155 => 
            array (
                'id' => 156,
                'kode_pos' => '36111',
                'nama' => 'Kota Jambi',
                'provinsi_id' => 8,
            ),
            156 => 
            array (
                'id' => 157,
                'kode_pos' => '99352',
                'nama' => 'Kabupaten Jayapura',
                'provinsi_id' => 24,
            ),
            157 => 
            array (
                'id' => 158,
                'kode_pos' => '99114',
                'nama' => 'Kota Jayapura',
                'provinsi_id' => 24,
            ),
            158 => 
            array (
                'id' => 159,
                'kode_pos' => '99511',
                'nama' => 'Kabupaten Jayawijaya',
                'provinsi_id' => 24,
            ),
            159 => 
            array (
                'id' => 160,
                'kode_pos' => '68113',
                'nama' => 'Kabupaten Jember',
                'provinsi_id' => 11,
            ),
            160 => 
            array (
                'id' => 161,
                'kode_pos' => '82251',
                'nama' => 'Kabupaten Jembrana',
                'provinsi_id' => 1,
            ),
            161 => 
            array (
                'id' => 162,
                'kode_pos' => '92319',
                'nama' => 'Kabupaten Jeneponto',
                'provinsi_id' => 28,
            ),
            162 => 
            array (
                'id' => 163,
                'kode_pos' => '59419',
                'nama' => 'Kabupaten Jepara',
                'provinsi_id' => 10,
            ),
            163 => 
            array (
                'id' => 164,
                'kode_pos' => '61415',
                'nama' => 'Kabupaten Jombang',
                'provinsi_id' => 11,
            ),
            164 => 
            array (
                'id' => 165,
                'kode_pos' => '98671',
                'nama' => 'Kabupaten Kaimana',
                'provinsi_id' => 25,
            ),
            165 => 
            array (
                'id' => 166,
                'kode_pos' => '28411',
                'nama' => 'Kabupaten Kampar',
                'provinsi_id' => 26,
            ),
            166 => 
            array (
                'id' => 167,
                'kode_pos' => '73583',
                'nama' => 'Kabupaten Kapuas',
                'provinsi_id' => 14,
            ),
            167 => 
            array (
                'id' => 168,
                'kode_pos' => '78719',
                'nama' => 'Kabupaten Kapuas Hulu',
                'provinsi_id' => 12,
            ),
            168 => 
            array (
                'id' => 169,
                'kode_pos' => '57718',
                'nama' => 'Kabupaten Karanganyar',
                'provinsi_id' => 10,
            ),
            169 => 
            array (
                'id' => 170,
                'kode_pos' => '80819',
                'nama' => 'Kabupaten Karangasem',
                'provinsi_id' => 1,
            ),
            170 => 
            array (
                'id' => 171,
                'kode_pos' => '41311',
                'nama' => 'Kabupaten Karawang',
                'provinsi_id' => 9,
            ),
            171 => 
            array (
                'id' => 172,
                'kode_pos' => '29611',
                'nama' => 'Kabupaten Karimun',
                'provinsi_id' => 17,
            ),
            172 => 
            array (
                'id' => 173,
                'kode_pos' => '22119',
                'nama' => 'Kabupaten Karo',
                'provinsi_id' => 34,
            ),
            173 => 
            array (
                'id' => 174,
                'kode_pos' => '74411',
                'nama' => 'Kabupaten Katingan',
                'provinsi_id' => 14,
            ),
            174 => 
            array (
                'id' => 175,
                'kode_pos' => '38911',
                'nama' => 'Kabupaten Kaur',
                'provinsi_id' => 4,
            ),
            175 => 
            array (
                'id' => 176,
                'kode_pos' => '78852',
                'nama' => 'Kabupaten Kayong Utara',
                'provinsi_id' => 12,
            ),
            176 => 
            array (
                'id' => 177,
                'kode_pos' => '54319',
                'nama' => 'Kabupaten Kebumen',
                'provinsi_id' => 10,
            ),
            177 => 
            array (
                'id' => 178,
                'kode_pos' => '64184',
                'nama' => 'Kabupaten Kediri',
                'provinsi_id' => 11,
            ),
            178 => 
            array (
                'id' => 179,
                'kode_pos' => '64125',
                'nama' => 'Kota Kediri',
                'provinsi_id' => 11,
            ),
            179 => 
            array (
                'id' => 180,
                'kode_pos' => '99461',
                'nama' => 'Kabupaten Keerom',
                'provinsi_id' => 24,
            ),
            180 => 
            array (
                'id' => 181,
                'kode_pos' => '51314',
                'nama' => 'Kabupaten Kendal',
                'provinsi_id' => 10,
            ),
            181 => 
            array (
                'id' => 182,
                'kode_pos' => '93126',
                'nama' => 'Kota Kendari',
                'provinsi_id' => 30,
            ),
            182 => 
            array (
                'id' => 183,
                'kode_pos' => '39319',
                'nama' => 'Kabupaten Kepahiang',
                'provinsi_id' => 4,
            ),
            183 => 
            array (
                'id' => 184,
                'kode_pos' => '29991',
                'nama' => 'Kabupaten Kepulauan Anambas',
                'provinsi_id' => 17,
            ),
            184 => 
            array (
                'id' => 185,
                'kode_pos' => '97681',
                'nama' => 'Kabupaten Kepulauan Aru',
                'provinsi_id' => 19,
            ),
            185 => 
            array (
                'id' => 186,
                'kode_pos' => '25771',
                'nama' => 'Kabupaten Kepulauan Mentawai',
                'provinsi_id' => 32,
            ),
            186 => 
            array (
                'id' => 187,
                'kode_pos' => '28791',
                'nama' => 'Kabupaten Kepulauan Meranti',
                'provinsi_id' => 26,
            ),
            187 => 
            array (
                'id' => 188,
                'kode_pos' => '95819',
                'nama' => 'Kabupaten Kepulauan Sangihe',
                'provinsi_id' => 31,
            ),
            188 => 
            array (
                'id' => 189,
                'kode_pos' => '14550',
                'nama' => 'Kabupaten Kepulauan Seribu',
                'provinsi_id' => 6,
            ),
            189 => 
            array (
                'id' => 190,
                'kode_pos' => '95862',
            'nama' => 'Kabupaten Kepulauan Siau Tagulandang Biaro (Sitaro)',
                'provinsi_id' => 31,
            ),
            190 => 
            array (
                'id' => 191,
                'kode_pos' => '97995',
                'nama' => 'Kabupaten Kepulauan Sula',
                'provinsi_id' => 20,
            ),
            191 => 
            array (
                'id' => 192,
                'kode_pos' => '95885',
                'nama' => 'Kabupaten Kepulauan Talaud',
                'provinsi_id' => 31,
            ),
            192 => 
            array (
                'id' => 193,
                'kode_pos' => '98211',
            'nama' => 'Kabupaten Kepulauan Yapen (Yapen Waropen)',
                'provinsi_id' => 24,
            ),
            193 => 
            array (
                'id' => 194,
                'kode_pos' => '37167',
                'nama' => 'Kabupaten Kerinci',
                'provinsi_id' => 8,
            ),
            194 => 
            array (
                'id' => 195,
                'kode_pos' => '78874',
                'nama' => 'Kabupaten Ketapang',
                'provinsi_id' => 12,
            ),
            195 => 
            array (
                'id' => 196,
                'kode_pos' => '57411',
                'nama' => 'Kabupaten Klaten',
                'provinsi_id' => 10,
            ),
            196 => 
            array (
                'id' => 197,
                'kode_pos' => '80719',
                'nama' => 'Kabupaten Klungkung',
                'provinsi_id' => 1,
            ),
            197 => 
            array (
                'id' => 198,
                'kode_pos' => '93511',
                'nama' => 'Kabupaten Kolaka',
                'provinsi_id' => 30,
            ),
            198 => 
            array (
                'id' => 199,
                'kode_pos' => '93911',
                'nama' => 'Kabupaten Kolaka Utara',
                'provinsi_id' => 30,
            ),
            199 => 
            array (
                'id' => 200,
                'kode_pos' => '93411',
                'nama' => 'Kabupaten Konawe',
                'provinsi_id' => 30,
            ),
            200 => 
            array (
                'id' => 201,
                'kode_pos' => '93811',
                'nama' => 'Kabupaten Konawe Selatan',
                'provinsi_id' => 30,
            ),
            201 => 
            array (
                'id' => 202,
                'kode_pos' => '93311',
                'nama' => 'Kabupaten Konawe Utara',
                'provinsi_id' => 30,
            ),
            202 => 
            array (
                'id' => 203,
                'kode_pos' => '72119',
                'nama' => 'Kabupaten Kotabaru',
                'provinsi_id' => 13,
            ),
            203 => 
            array (
                'id' => 204,
                'kode_pos' => '95711',
                'nama' => 'Kota Kotamobagu',
                'provinsi_id' => 31,
            ),
            204 => 
            array (
                'id' => 205,
                'kode_pos' => '74119',
                'nama' => 'Kabupaten Kotawaringin Barat',
                'provinsi_id' => 14,
            ),
            205 => 
            array (
                'id' => 206,
                'kode_pos' => '74364',
                'nama' => 'Kabupaten Kotawaringin Timur',
                'provinsi_id' => 14,
            ),
            206 => 
            array (
                'id' => 207,
                'kode_pos' => '29519',
                'nama' => 'Kabupaten Kuantan Singingi',
                'provinsi_id' => 26,
            ),
            207 => 
            array (
                'id' => 208,
                'kode_pos' => '78311',
                'nama' => 'Kabupaten Kubu Raya',
                'provinsi_id' => 12,
            ),
            208 => 
            array (
                'id' => 209,
                'kode_pos' => '59311',
                'nama' => 'Kabupaten Kudus',
                'provinsi_id' => 10,
            ),
            209 => 
            array (
                'id' => 210,
                'kode_pos' => '55611',
                'nama' => 'Kabupaten Kulon Progo',
                'provinsi_id' => 5,
            ),
            210 => 
            array (
                'id' => 211,
                'kode_pos' => '45511',
                'nama' => 'Kabupaten Kuningan',
                'provinsi_id' => 9,
            ),
            211 => 
            array (
                'id' => 212,
                'kode_pos' => '85362',
                'nama' => 'Kabupaten Kupang',
                'provinsi_id' => 23,
            ),
            212 => 
            array (
                'id' => 213,
                'kode_pos' => '85119',
                'nama' => 'Kota Kupang',
                'provinsi_id' => 23,
            ),
            213 => 
            array (
                'id' => 214,
                'kode_pos' => '75711',
                'nama' => 'Kabupaten Kutai Barat',
                'provinsi_id' => 15,
            ),
            214 => 
            array (
                'id' => 215,
                'kode_pos' => '75511',
                'nama' => 'Kabupaten Kutai Kartanegara',
                'provinsi_id' => 15,
            ),
            215 => 
            array (
                'id' => 216,
                'kode_pos' => '75611',
                'nama' => 'Kabupaten Kutai Timur',
                'provinsi_id' => 15,
            ),
            216 => 
            array (
                'id' => 217,
                'kode_pos' => '21412',
                'nama' => 'Kabupaten Labuhan Batu',
                'provinsi_id' => 34,
            ),
            217 => 
            array (
                'id' => 218,
                'kode_pos' => '21511',
                'nama' => 'Kabupaten Labuhan Batu Selatan',
                'provinsi_id' => 34,
            ),
            218 => 
            array (
                'id' => 219,
                'kode_pos' => '21711',
                'nama' => 'Kabupaten Labuhan Batu Utara',
                'provinsi_id' => 34,
            ),
            219 => 
            array (
                'id' => 220,
                'kode_pos' => '31419',
                'nama' => 'Kabupaten Lahat',
                'provinsi_id' => 33,
            ),
            220 => 
            array (
                'id' => 221,
                'kode_pos' => '74611',
                'nama' => 'Kabupaten Lamandau',
                'provinsi_id' => 14,
            ),
            221 => 
            array (
                'id' => 222,
                'kode_pos' => '64125',
                'nama' => 'Kabupaten Lamongan',
                'provinsi_id' => 11,
            ),
            222 => 
            array (
                'id' => 223,
                'kode_pos' => '34814',
                'nama' => 'Kabupaten Lampung Barat',
                'provinsi_id' => 18,
            ),
            223 => 
            array (
                'id' => 224,
                'kode_pos' => '35511',
                'nama' => 'Kabupaten Lampung Selatan',
                'provinsi_id' => 18,
            ),
            224 => 
            array (
                'id' => 225,
                'kode_pos' => '34212',
                'nama' => 'Kabupaten Lampung Tengah',
                'provinsi_id' => 18,
            ),
            225 => 
            array (
                'id' => 226,
                'kode_pos' => '34319',
                'nama' => 'Kabupaten Lampung Timur',
                'provinsi_id' => 18,
            ),
            226 => 
            array (
                'id' => 227,
                'kode_pos' => '34516',
                'nama' => 'Kabupaten Lampung Utara',
                'provinsi_id' => 18,
            ),
            227 => 
            array (
                'id' => 228,
                'kode_pos' => '78319',
                'nama' => 'Kabupaten Landak',
                'provinsi_id' => 12,
            ),
            228 => 
            array (
                'id' => 229,
                'kode_pos' => '20811',
                'nama' => 'Kabupaten Langkat',
                'provinsi_id' => 34,
            ),
            229 => 
            array (
                'id' => 230,
                'kode_pos' => '24412',
                'nama' => 'Kota Langsa',
                'provinsi_id' => 21,
            ),
            230 => 
            array (
                'id' => 231,
                'kode_pos' => '99531',
                'nama' => 'Kabupaten Lanny Jaya',
                'provinsi_id' => 24,
            ),
            231 => 
            array (
                'id' => 232,
                'kode_pos' => '42319',
                'nama' => 'Kabupaten Lebak',
                'provinsi_id' => 3,
            ),
            232 => 
            array (
                'id' => 233,
                'kode_pos' => '39264',
                'nama' => 'Kabupaten Lebong',
                'provinsi_id' => 4,
            ),
            233 => 
            array (
                'id' => 234,
                'kode_pos' => '86611',
                'nama' => 'Kabupaten Lembata',
                'provinsi_id' => 23,
            ),
            234 => 
            array (
                'id' => 235,
                'kode_pos' => '24352',
                'nama' => 'Kota Lhokseumawe',
                'provinsi_id' => 21,
            ),
            235 => 
            array (
                'id' => 236,
                'kode_pos' => '26671',
                'nama' => 'Kabupaten Lima Puluh Koto/Kota',
                'provinsi_id' => 32,
            ),
            236 => 
            array (
                'id' => 237,
                'kode_pos' => '29811',
                'nama' => 'Kabupaten Lingga',
                'provinsi_id' => 17,
            ),
            237 => 
            array (
                'id' => 238,
                'kode_pos' => '83311',
                'nama' => 'Kabupaten Lombok Barat',
                'provinsi_id' => 22,
            ),
            238 => 
            array (
                'id' => 239,
                'kode_pos' => '83511',
                'nama' => 'Kabupaten Lombok Tengah',
                'provinsi_id' => 22,
            ),
            239 => 
            array (
                'id' => 240,
                'kode_pos' => '83612',
                'nama' => 'Kabupaten Lombok Timur',
                'provinsi_id' => 22,
            ),
            240 => 
            array (
                'id' => 241,
                'kode_pos' => '83711',
                'nama' => 'Kabupaten Lombok Utara',
                'provinsi_id' => 22,
            ),
            241 => 
            array (
                'id' => 242,
                'kode_pos' => '31614',
                'nama' => 'Kota Lubuk Linggau',
                'provinsi_id' => 33,
            ),
            242 => 
            array (
                'id' => 243,
                'kode_pos' => '67319',
                'nama' => 'Kabupaten Lumajang',
                'provinsi_id' => 11,
            ),
            243 => 
            array (
                'id' => 244,
                'kode_pos' => '91994',
                'nama' => 'Kabupaten Luwu',
                'provinsi_id' => 28,
            ),
            244 => 
            array (
                'id' => 245,
                'kode_pos' => '92981',
                'nama' => 'Kabupaten Luwu Timur',
                'provinsi_id' => 28,
            ),
            245 => 
            array (
                'id' => 246,
                'kode_pos' => '92911',
                'nama' => 'Kabupaten Luwu Utara',
                'provinsi_id' => 28,
            ),
            246 => 
            array (
                'id' => 247,
                'kode_pos' => '63153',
                'nama' => 'Kabupaten Madiun',
                'provinsi_id' => 11,
            ),
            247 => 
            array (
                'id' => 248,
                'kode_pos' => '63122',
                'nama' => 'Kota Madiun',
                'provinsi_id' => 11,
            ),
            248 => 
            array (
                'id' => 249,
                'kode_pos' => '56519',
                'nama' => 'Kabupaten Magelang',
                'provinsi_id' => 10,
            ),
            249 => 
            array (
                'id' => 250,
                'kode_pos' => '56133',
                'nama' => 'Kota Magelang',
                'provinsi_id' => 10,
            ),
            250 => 
            array (
                'id' => 251,
                'kode_pos' => '63314',
                'nama' => 'Kabupaten Magetan',
                'provinsi_id' => 11,
            ),
            251 => 
            array (
                'id' => 252,
                'kode_pos' => '45412',
                'nama' => 'Kabupaten Majalengka',
                'provinsi_id' => 9,
            ),
            252 => 
            array (
                'id' => 253,
                'kode_pos' => '91411',
                'nama' => 'Kabupaten Majene',
                'provinsi_id' => 27,
            ),
            253 => 
            array (
                'id' => 254,
                'kode_pos' => '90111',
                'nama' => 'Kota Makassar',
                'provinsi_id' => 28,
            ),
            254 => 
            array (
                'id' => 255,
                'kode_pos' => '65163',
                'nama' => 'Kabupaten Malang',
                'provinsi_id' => 11,
            ),
            255 => 
            array (
                'id' => 256,
                'kode_pos' => '65112',
                'nama' => 'Kota Malang',
                'provinsi_id' => 11,
            ),
            256 => 
            array (
                'id' => 257,
                'kode_pos' => '77511',
                'nama' => 'Kabupaten Malinau',
                'provinsi_id' => 16,
            ),
            257 => 
            array (
                'id' => 258,
                'kode_pos' => '97451',
                'nama' => 'Kabupaten Maluku Barat Daya',
                'provinsi_id' => 19,
            ),
            258 => 
            array (
                'id' => 259,
                'kode_pos' => '97513',
                'nama' => 'Kabupaten Maluku Tengah',
                'provinsi_id' => 19,
            ),
            259 => 
            array (
                'id' => 260,
                'kode_pos' => '97651',
                'nama' => 'Kabupaten Maluku Tenggara',
                'provinsi_id' => 19,
            ),
            260 => 
            array (
                'id' => 261,
                'kode_pos' => '97465',
                'nama' => 'Kabupaten Maluku Tenggara Barat',
                'provinsi_id' => 19,
            ),
            261 => 
            array (
                'id' => 262,
                'kode_pos' => '91362',
                'nama' => 'Kabupaten Mamasa',
                'provinsi_id' => 27,
            ),
            262 => 
            array (
                'id' => 263,
                'kode_pos' => '99381',
                'nama' => 'Kabupaten Mamberamo Raya',
                'provinsi_id' => 24,
            ),
            263 => 
            array (
                'id' => 264,
                'kode_pos' => '99553',
                'nama' => 'Kabupaten Mamberamo Tengah',
                'provinsi_id' => 24,
            ),
            264 => 
            array (
                'id' => 265,
                'kode_pos' => '91519',
                'nama' => 'Kabupaten Mamuju',
                'provinsi_id' => 27,
            ),
            265 => 
            array (
                'id' => 266,
                'kode_pos' => '91571',
                'nama' => 'Kabupaten Mamuju Utara',
                'provinsi_id' => 27,
            ),
            266 => 
            array (
                'id' => 267,
                'kode_pos' => '95247',
                'nama' => 'Kota Manado',
                'provinsi_id' => 31,
            ),
            267 => 
            array (
                'id' => 268,
                'kode_pos' => '22916',
                'nama' => 'Kabupaten Mandailing Natal',
                'provinsi_id' => 34,
            ),
            268 => 
            array (
                'id' => 269,
                'kode_pos' => '86551',
                'nama' => 'Kabupaten Manggarai',
                'provinsi_id' => 23,
            ),
            269 => 
            array (
                'id' => 270,
                'kode_pos' => '86711',
                'nama' => 'Kabupaten Manggarai Barat',
                'provinsi_id' => 23,
            ),
            270 => 
            array (
                'id' => 271,
                'kode_pos' => '86811',
                'nama' => 'Kabupaten Manggarai Timur',
                'provinsi_id' => 23,
            ),
            271 => 
            array (
                'id' => 272,
                'kode_pos' => '98311',
                'nama' => 'Kabupaten Manokwari',
                'provinsi_id' => 25,
            ),
            272 => 
            array (
                'id' => 273,
                'kode_pos' => '98355',
                'nama' => 'Kabupaten Manokwari Selatan',
                'provinsi_id' => 25,
            ),
            273 => 
            array (
                'id' => 274,
                'kode_pos' => '99853',
                'nama' => 'Kabupaten Mappi',
                'provinsi_id' => 24,
            ),
            274 => 
            array (
                'id' => 275,
                'kode_pos' => '90511',
                'nama' => 'Kabupaten Maros',
                'provinsi_id' => 28,
            ),
            275 => 
            array (
                'id' => 276,
                'kode_pos' => '83131',
                'nama' => 'Kota Mataram',
                'provinsi_id' => 22,
            ),
            276 => 
            array (
                'id' => 277,
                'kode_pos' => '98051',
                'nama' => 'Kabupaten Maybrat',
                'provinsi_id' => 25,
            ),
            277 => 
            array (
                'id' => 278,
                'kode_pos' => '20228',
                'nama' => 'Kota Medan',
                'provinsi_id' => 34,
            ),
            278 => 
            array (
                'id' => 279,
                'kode_pos' => '78619',
                'nama' => 'Kabupaten Melawi',
                'provinsi_id' => 12,
            ),
            279 => 
            array (
                'id' => 280,
                'kode_pos' => '37319',
                'nama' => 'Kabupaten Merangin',
                'provinsi_id' => 8,
            ),
            280 => 
            array (
                'id' => 281,
                'kode_pos' => '99613',
                'nama' => 'Kabupaten Merauke',
                'provinsi_id' => 24,
            ),
            281 => 
            array (
                'id' => 282,
                'kode_pos' => '34911',
                'nama' => 'Kabupaten Mesuji',
                'provinsi_id' => 18,
            ),
            282 => 
            array (
                'id' => 283,
                'kode_pos' => '34111',
                'nama' => 'Kota Metro',
                'provinsi_id' => 18,
            ),
            283 => 
            array (
                'id' => 284,
                'kode_pos' => '99962',
                'nama' => 'Kabupaten Mimika',
                'provinsi_id' => 24,
            ),
            284 => 
            array (
                'id' => 285,
                'kode_pos' => '95614',
                'nama' => 'Kabupaten Minahasa',
                'provinsi_id' => 31,
            ),
            285 => 
            array (
                'id' => 286,
                'kode_pos' => '95914',
                'nama' => 'Kabupaten Minahasa Selatan',
                'provinsi_id' => 31,
            ),
            286 => 
            array (
                'id' => 287,
                'kode_pos' => '95995',
                'nama' => 'Kabupaten Minahasa Tenggara',
                'provinsi_id' => 31,
            ),
            287 => 
            array (
                'id' => 288,
                'kode_pos' => '95316',
                'nama' => 'Kabupaten Minahasa Utara',
                'provinsi_id' => 31,
            ),
            288 => 
            array (
                'id' => 289,
                'kode_pos' => '61382',
                'nama' => 'Kabupaten Mojokerto',
                'provinsi_id' => 11,
            ),
            289 => 
            array (
                'id' => 290,
                'kode_pos' => '61316',
                'nama' => 'Kota Mojokerto',
                'provinsi_id' => 11,
            ),
            290 => 
            array (
                'id' => 291,
                'kode_pos' => '94911',
                'nama' => 'Kabupaten Morowali',
                'provinsi_id' => 29,
            ),
            291 => 
            array (
                'id' => 292,
                'kode_pos' => '31315',
                'nama' => 'Kabupaten Muara Enim',
                'provinsi_id' => 33,
            ),
            292 => 
            array (
                'id' => 293,
                'kode_pos' => '36311',
                'nama' => 'Kabupaten Muaro Jambi',
                'provinsi_id' => 8,
            ),
            293 => 
            array (
                'id' => 294,
                'kode_pos' => '38715',
                'nama' => 'Kabupaten Muko Muko',
                'provinsi_id' => 4,
            ),
            294 => 
            array (
                'id' => 295,
                'kode_pos' => '93611',
                'nama' => 'Kabupaten Muna',
                'provinsi_id' => 30,
            ),
            295 => 
            array (
                'id' => 296,
                'kode_pos' => '73911',
                'nama' => 'Kabupaten Murung Raya',
                'provinsi_id' => 14,
            ),
            296 => 
            array (
                'id' => 297,
                'kode_pos' => '30719',
                'nama' => 'Kabupaten Musi Banyuasin',
                'provinsi_id' => 33,
            ),
            297 => 
            array (
                'id' => 298,
                'kode_pos' => '31661',
                'nama' => 'Kabupaten Musi Rawas',
                'provinsi_id' => 33,
            ),
            298 => 
            array (
                'id' => 299,
                'kode_pos' => '98816',
                'nama' => 'Kabupaten Nabire',
                'provinsi_id' => 24,
            ),
            299 => 
            array (
                'id' => 300,
                'kode_pos' => '23674',
                'nama' => 'Kabupaten Nagan Raya',
                'provinsi_id' => 21,
            ),
            300 => 
            array (
                'id' => 301,
                'kode_pos' => '86911',
                'nama' => 'Kabupaten Nagekeo',
                'provinsi_id' => 23,
            ),
            301 => 
            array (
                'id' => 302,
                'kode_pos' => '29711',
                'nama' => 'Kabupaten Natuna',
                'provinsi_id' => 17,
            ),
            302 => 
            array (
                'id' => 303,
                'kode_pos' => '99541',
                'nama' => 'Kabupaten Nduga',
                'provinsi_id' => 24,
            ),
            303 => 
            array (
                'id' => 304,
                'kode_pos' => '86413',
                'nama' => 'Kabupaten Ngada',
                'provinsi_id' => 23,
            ),
            304 => 
            array (
                'id' => 305,
                'kode_pos' => '64414',
                'nama' => 'Kabupaten Nganjuk',
                'provinsi_id' => 11,
            ),
            305 => 
            array (
                'id' => 306,
                'kode_pos' => '63219',
                'nama' => 'Kabupaten Ngawi',
                'provinsi_id' => 11,
            ),
            306 => 
            array (
                'id' => 307,
                'kode_pos' => '22876',
                'nama' => 'Kabupaten Nias',
                'provinsi_id' => 34,
            ),
            307 => 
            array (
                'id' => 308,
                'kode_pos' => '22895',
                'nama' => 'Kabupaten Nias Barat',
                'provinsi_id' => 34,
            ),
            308 => 
            array (
                'id' => 309,
                'kode_pos' => '22865',
                'nama' => 'Kabupaten Nias Selatan',
                'provinsi_id' => 34,
            ),
            309 => 
            array (
                'id' => 310,
                'kode_pos' => '22856',
                'nama' => 'Kabupaten Nias Utara',
                'provinsi_id' => 34,
            ),
            310 => 
            array (
                'id' => 311,
                'kode_pos' => '77421',
                'nama' => 'Kabupaten Nunukan',
                'provinsi_id' => 16,
            ),
            311 => 
            array (
                'id' => 312,
                'kode_pos' => '30811',
                'nama' => 'Kabupaten Ogan Ilir',
                'provinsi_id' => 33,
            ),
            312 => 
            array (
                'id' => 313,
                'kode_pos' => '30618',
                'nama' => 'Kabupaten Ogan Komering Ilir',
                'provinsi_id' => 33,
            ),
            313 => 
            array (
                'id' => 314,
                'kode_pos' => '32112',
                'nama' => 'Kabupaten Ogan Komering Ulu',
                'provinsi_id' => 33,
            ),
            314 => 
            array (
                'id' => 315,
                'kode_pos' => '32211',
                'nama' => 'Kabupaten Ogan Komering Ulu Selatan',
                'provinsi_id' => 33,
            ),
            315 => 
            array (
                'id' => 316,
                'kode_pos' => '32312',
                'nama' => 'Kabupaten Ogan Komering Ulu Timur',
                'provinsi_id' => 33,
            ),
            316 => 
            array (
                'id' => 317,
                'kode_pos' => '63512',
                'nama' => 'Kabupaten Pacitan',
                'provinsi_id' => 11,
            ),
            317 => 
            array (
                'id' => 318,
                'kode_pos' => '25112',
                'nama' => 'Kota Padang',
                'provinsi_id' => 32,
            ),
            318 => 
            array (
                'id' => 319,
                'kode_pos' => '22763',
                'nama' => 'Kabupaten Padang Lawas',
                'provinsi_id' => 34,
            ),
            319 => 
            array (
                'id' => 320,
                'kode_pos' => '22753',
                'nama' => 'Kabupaten Padang Lawas Utara',
                'provinsi_id' => 34,
            ),
            320 => 
            array (
                'id' => 321,
                'kode_pos' => '27122',
                'nama' => 'Kota Padang Panjang',
                'provinsi_id' => 32,
            ),
            321 => 
            array (
                'id' => 322,
                'kode_pos' => '25583',
                'nama' => 'Kabupaten Padang Pariaman',
                'provinsi_id' => 32,
            ),
            322 => 
            array (
                'id' => 323,
                'kode_pos' => '22727',
                'nama' => 'Kota Padang Sidempuan',
                'provinsi_id' => 34,
            ),
            323 => 
            array (
                'id' => 324,
                'kode_pos' => '31512',
                'nama' => 'Kota Pagar Alam',
                'provinsi_id' => 33,
            ),
            324 => 
            array (
                'id' => 325,
                'kode_pos' => '22272',
                'nama' => 'Kabupaten Pakpak Bharat',
                'provinsi_id' => 34,
            ),
            325 => 
            array (
                'id' => 326,
                'kode_pos' => '73112',
                'nama' => 'Kota Palangka Raya',
                'provinsi_id' => 14,
            ),
            326 => 
            array (
                'id' => 327,
                'kode_pos' => '31512',
                'nama' => 'Kota Palembang',
                'provinsi_id' => 33,
            ),
            327 => 
            array (
                'id' => 328,
                'kode_pos' => '91911',
                'nama' => 'Kota Palopo',
                'provinsi_id' => 28,
            ),
            328 => 
            array (
                'id' => 329,
                'kode_pos' => '94111',
                'nama' => 'Kota Palu',
                'provinsi_id' => 29,
            ),
            329 => 
            array (
                'id' => 330,
                'kode_pos' => '69319',
                'nama' => 'Kabupaten Pamekasan',
                'provinsi_id' => 11,
            ),
            330 => 
            array (
                'id' => 331,
                'kode_pos' => '42212',
                'nama' => 'Kabupaten Pandeglang',
                'provinsi_id' => 3,
            ),
            331 => 
            array (
                'id' => 332,
                'kode_pos' => '46511',
                'nama' => 'Kabupaten Pangandaran',
                'provinsi_id' => 9,
            ),
            332 => 
            array (
                'id' => 333,
                'kode_pos' => '90611',
                'nama' => 'Kabupaten Pangkajene Kepulauan',
                'provinsi_id' => 28,
            ),
            333 => 
            array (
                'id' => 334,
                'kode_pos' => '33115',
                'nama' => 'Kota Pangkal Pinang',
                'provinsi_id' => 2,
            ),
            334 => 
            array (
                'id' => 335,
                'kode_pos' => '98765',
                'nama' => 'Kabupaten Paniai',
                'provinsi_id' => 24,
            ),
            335 => 
            array (
                'id' => 336,
                'kode_pos' => '91123',
                'nama' => 'Kota Parepare',
                'provinsi_id' => 28,
            ),
            336 => 
            array (
                'id' => 337,
                'kode_pos' => '25511',
                'nama' => 'Kota Pariaman',
                'provinsi_id' => 32,
            ),
            337 => 
            array (
                'id' => 338,
                'kode_pos' => '94411',
                'nama' => 'Kabupaten Parigi Moutong',
                'provinsi_id' => 29,
            ),
            338 => 
            array (
                'id' => 339,
                'kode_pos' => '26318',
                'nama' => 'Kabupaten Pasaman',
                'provinsi_id' => 32,
            ),
            339 => 
            array (
                'id' => 340,
                'kode_pos' => '26511',
                'nama' => 'Kabupaten Pasaman Barat',
                'provinsi_id' => 32,
            ),
            340 => 
            array (
                'id' => 341,
                'kode_pos' => '76211',
                'nama' => 'Kabupaten Paser',
                'provinsi_id' => 15,
            ),
            341 => 
            array (
                'id' => 342,
                'kode_pos' => '67153',
                'nama' => 'Kabupaten Pasuruan',
                'provinsi_id' => 11,
            ),
            342 => 
            array (
                'id' => 343,
                'kode_pos' => '67118',
                'nama' => 'Kota Pasuruan',
                'provinsi_id' => 11,
            ),
            343 => 
            array (
                'id' => 344,
                'kode_pos' => '59114',
                'nama' => 'Kabupaten Pati',
                'provinsi_id' => 10,
            ),
            344 => 
            array (
                'id' => 345,
                'kode_pos' => '26213',
                'nama' => 'Kota Payakumbuh',
                'provinsi_id' => 32,
            ),
            345 => 
            array (
                'id' => 346,
                'kode_pos' => '98354',
                'nama' => 'Kabupaten Pegunungan Arfak',
                'provinsi_id' => 25,
            ),
            346 => 
            array (
                'id' => 347,
                'kode_pos' => '99573',
                'nama' => 'Kabupaten Pegunungan Bintang',
                'provinsi_id' => 24,
            ),
            347 => 
            array (
                'id' => 348,
                'kode_pos' => '51161',
                'nama' => 'Kabupaten Pekalongan',
                'provinsi_id' => 10,
            ),
            348 => 
            array (
                'id' => 349,
                'kode_pos' => '51122',
                'nama' => 'Kota Pekalongan',
                'provinsi_id' => 10,
            ),
            349 => 
            array (
                'id' => 350,
                'kode_pos' => '28112',
                'nama' => 'Kota Pekanbaru',
                'provinsi_id' => 26,
            ),
            350 => 
            array (
                'id' => 351,
                'kode_pos' => '28311',
                'nama' => 'Kabupaten Pelalawan',
                'provinsi_id' => 26,
            ),
            351 => 
            array (
                'id' => 352,
                'kode_pos' => '52319',
                'nama' => 'Kabupaten Pemalang',
                'provinsi_id' => 10,
            ),
            352 => 
            array (
                'id' => 353,
                'kode_pos' => '21126',
                'nama' => 'Kota Pematang Siantar',
                'provinsi_id' => 34,
            ),
            353 => 
            array (
                'id' => 354,
                'kode_pos' => '76311',
                'nama' => 'Kabupaten Penajam Paser Utara',
                'provinsi_id' => 15,
            ),
            354 => 
            array (
                'id' => 355,
                'kode_pos' => '35312',
                'nama' => 'Kabupaten Pesawaran',
                'provinsi_id' => 18,
            ),
            355 => 
            array (
                'id' => 356,
                'kode_pos' => '35974',
                'nama' => 'Kabupaten Pesisir Barat',
                'provinsi_id' => 18,
            ),
            356 => 
            array (
                'id' => 357,
                'kode_pos' => '25611',
                'nama' => 'Kabupaten Pesisir Selatan',
                'provinsi_id' => 32,
            ),
            357 => 
            array (
                'id' => 358,
                'kode_pos' => '24116',
                'nama' => 'Kabupaten Pidie',
                'provinsi_id' => 21,
            ),
            358 => 
            array (
                'id' => 359,
                'kode_pos' => '24186',
                'nama' => 'Kabupaten Pidie Jaya',
                'provinsi_id' => 21,
            ),
            359 => 
            array (
                'id' => 360,
                'kode_pos' => '91251',
                'nama' => 'Kabupaten Pinrang',
                'provinsi_id' => 28,
            ),
            360 => 
            array (
                'id' => 361,
                'kode_pos' => '96419',
                'nama' => 'Kabupaten Pohuwato',
                'provinsi_id' => 7,
            ),
            361 => 
            array (
                'id' => 362,
                'kode_pos' => '91311',
                'nama' => 'Kabupaten Polewali Mandar',
                'provinsi_id' => 27,
            ),
            362 => 
            array (
                'id' => 363,
                'kode_pos' => '63411',
                'nama' => 'Kabupaten Ponorogo',
                'provinsi_id' => 11,
            ),
            363 => 
            array (
                'id' => 364,
                'kode_pos' => '78971',
                'nama' => 'Kabupaten Pontianak',
                'provinsi_id' => 12,
            ),
            364 => 
            array (
                'id' => 365,
                'kode_pos' => '78112',
                'nama' => 'Kota Pontianak',
                'provinsi_id' => 12,
            ),
            365 => 
            array (
                'id' => 366,
                'kode_pos' => '94615',
                'nama' => 'Kabupaten Poso',
                'provinsi_id' => 29,
            ),
            366 => 
            array (
                'id' => 367,
                'kode_pos' => '31121',
                'nama' => 'Kota Prabumulih',
                'provinsi_id' => 33,
            ),
            367 => 
            array (
                'id' => 368,
                'kode_pos' => '35719',
                'nama' => 'Kabupaten Pringsewu',
                'provinsi_id' => 18,
            ),
            368 => 
            array (
                'id' => 369,
                'kode_pos' => '67282',
                'nama' => 'Kabupaten Probolinggo',
                'provinsi_id' => 11,
            ),
            369 => 
            array (
                'id' => 370,
                'kode_pos' => '67215',
                'nama' => 'Kota Probolinggo',
                'provinsi_id' => 11,
            ),
            370 => 
            array (
                'id' => 371,
                'kode_pos' => '74811',
                'nama' => 'Kabupaten Pulang Pisau',
                'provinsi_id' => 14,
            ),
            371 => 
            array (
                'id' => 372,
                'kode_pos' => '97771',
                'nama' => 'Kabupaten Pulau Morotai',
                'provinsi_id' => 20,
            ),
            372 => 
            array (
                'id' => 373,
                'kode_pos' => '98981',
                'nama' => 'Kabupaten Puncak',
                'provinsi_id' => 24,
            ),
            373 => 
            array (
                'id' => 374,
                'kode_pos' => '98979',
                'nama' => 'Kabupaten Puncak Jaya',
                'provinsi_id' => 24,
            ),
            374 => 
            array (
                'id' => 375,
                'kode_pos' => '53312',
                'nama' => 'Kabupaten Purbalingga',
                'provinsi_id' => 10,
            ),
            375 => 
            array (
                'id' => 376,
                'kode_pos' => '41119',
                'nama' => 'Kabupaten Purwakarta',
                'provinsi_id' => 9,
            ),
            376 => 
            array (
                'id' => 377,
                'kode_pos' => '54111',
                'nama' => 'Kabupaten Purworejo',
                'provinsi_id' => 10,
            ),
            377 => 
            array (
                'id' => 378,
                'kode_pos' => '98489',
                'nama' => 'Kabupaten Raja Ampat',
                'provinsi_id' => 25,
            ),
            378 => 
            array (
                'id' => 379,
                'kode_pos' => '39112',
                'nama' => 'Kabupaten Rejang Lebong',
                'provinsi_id' => 4,
            ),
            379 => 
            array (
                'id' => 380,
                'kode_pos' => '59219',
                'nama' => 'Kabupaten Rembang',
                'provinsi_id' => 10,
            ),
            380 => 
            array (
                'id' => 381,
                'kode_pos' => '28992',
                'nama' => 'Kabupaten Rokan Hilir',
                'provinsi_id' => 26,
            ),
            381 => 
            array (
                'id' => 382,
                'kode_pos' => '28511',
                'nama' => 'Kabupaten Rokan Hulu',
                'provinsi_id' => 26,
            ),
            382 => 
            array (
                'id' => 383,
                'kode_pos' => '85982',
                'nama' => 'Kabupaten Rote Ndao',
                'provinsi_id' => 23,
            ),
            383 => 
            array (
                'id' => 384,
                'kode_pos' => '23512',
                'nama' => 'Kota Sabang',
                'provinsi_id' => 21,
            ),
            384 => 
            array (
                'id' => 385,
                'kode_pos' => '85391',
                'nama' => 'Kabupaten Sabu Raijua',
                'provinsi_id' => 23,
            ),
            385 => 
            array (
                'id' => 386,
                'kode_pos' => '50711',
                'nama' => 'Kota Salatiga',
                'provinsi_id' => 10,
            ),
            386 => 
            array (
                'id' => 387,
                'kode_pos' => '75133',
                'nama' => 'Kota Samarinda',
                'provinsi_id' => 15,
            ),
            387 => 
            array (
                'id' => 388,
                'kode_pos' => '79453',
                'nama' => 'Kabupaten Sambas',
                'provinsi_id' => 12,
            ),
            388 => 
            array (
                'id' => 389,
                'kode_pos' => '22392',
                'nama' => 'Kabupaten Samosir',
                'provinsi_id' => 34,
            ),
            389 => 
            array (
                'id' => 390,
                'kode_pos' => '69219',
                'nama' => 'Kabupaten Sampang',
                'provinsi_id' => 11,
            ),
            390 => 
            array (
                'id' => 391,
                'kode_pos' => '78557',
                'nama' => 'Kabupaten Sanggau',
                'provinsi_id' => 12,
            ),
            391 => 
            array (
                'id' => 392,
                'kode_pos' => '99373',
                'nama' => 'Kabupaten Sarmi',
                'provinsi_id' => 24,
            ),
            392 => 
            array (
                'id' => 393,
                'kode_pos' => '37419',
                'nama' => 'Kabupaten Sarolangun',
                'provinsi_id' => 8,
            ),
            393 => 
            array (
                'id' => 394,
                'kode_pos' => '27416',
                'nama' => 'Kota Sawah Lunto',
                'provinsi_id' => 32,
            ),
            394 => 
            array (
                'id' => 395,
                'kode_pos' => '79583',
                'nama' => 'Kabupaten Sekadau',
                'provinsi_id' => 12,
            ),
            395 => 
            array (
                'id' => 396,
                'kode_pos' => '92812',
            'nama' => 'Kabupaten Selayar (Kepulauan Selayar)',
                'provinsi_id' => 28,
            ),
            396 => 
            array (
                'id' => 397,
                'kode_pos' => '38811',
                'nama' => 'Kabupaten Seluma',
                'provinsi_id' => 4,
            ),
            397 => 
            array (
                'id' => 398,
                'kode_pos' => '50511',
                'nama' => 'Kabupaten Semarang',
                'provinsi_id' => 10,
            ),
            398 => 
            array (
                'id' => 399,
                'kode_pos' => '50135',
                'nama' => 'Kota Semarang',
                'provinsi_id' => 10,
            ),
            399 => 
            array (
                'id' => 400,
                'kode_pos' => '97561',
                'nama' => 'Kabupaten Seram Bagian Barat',
                'provinsi_id' => 19,
            ),
            400 => 
            array (
                'id' => 401,
                'kode_pos' => '97581',
                'nama' => 'Kabupaten Seram Bagian Timur',
                'provinsi_id' => 19,
            ),
            401 => 
            array (
                'id' => 402,
                'kode_pos' => '42182',
                'nama' => 'Kabupaten Serang',
                'provinsi_id' => 3,
            ),
            402 => 
            array (
                'id' => 403,
                'kode_pos' => '42111',
                'nama' => 'Kota Serang',
                'provinsi_id' => 3,
            ),
            403 => 
            array (
                'id' => 404,
                'kode_pos' => '20915',
                'nama' => 'Kabupaten Serdang Bedagai',
                'provinsi_id' => 34,
            ),
            404 => 
            array (
                'id' => 405,
                'kode_pos' => '74211',
                'nama' => 'Kabupaten Seruyan',
                'provinsi_id' => 14,
            ),
            405 => 
            array (
                'id' => 406,
                'kode_pos' => '28623',
                'nama' => 'Kabupaten Siak',
                'provinsi_id' => 26,
            ),
            406 => 
            array (
                'id' => 407,
                'kode_pos' => '22522',
                'nama' => 'Kota Sibolga',
                'provinsi_id' => 34,
            ),
            407 => 
            array (
                'id' => 408,
                'kode_pos' => '91613',
                'nama' => 'Kabupaten Sidenreng Rappang/Rapang',
                'provinsi_id' => 28,
            ),
            408 => 
            array (
                'id' => 409,
                'kode_pos' => '61219',
                'nama' => 'Kabupaten Sidoarjo',
                'provinsi_id' => 11,
            ),
            409 => 
            array (
                'id' => 410,
                'kode_pos' => '94364',
                'nama' => 'Kabupaten Sigi',
                'provinsi_id' => 29,
            ),
            410 => 
            array (
                'id' => 411,
                'kode_pos' => '27511',
            'nama' => 'Kabupaten Sijunjung (Sawah Lunto Sijunjung)',
                'provinsi_id' => 32,
            ),
            411 => 
            array (
                'id' => 412,
                'kode_pos' => '86121',
                'nama' => 'Kabupaten Sikka',
                'provinsi_id' => 23,
            ),
            412 => 
            array (
                'id' => 413,
                'kode_pos' => '21162',
                'nama' => 'Kabupaten Simalungun',
                'provinsi_id' => 34,
            ),
            413 => 
            array (
                'id' => 414,
                'kode_pos' => '23891',
                'nama' => 'Kabupaten Simeulue',
                'provinsi_id' => 21,
            ),
            414 => 
            array (
                'id' => 415,
                'kode_pos' => '79117',
                'nama' => 'Kota Singkawang',
                'provinsi_id' => 12,
            ),
            415 => 
            array (
                'id' => 416,
                'kode_pos' => '92615',
                'nama' => 'Kabupaten Sinjai',
                'provinsi_id' => 28,
            ),
            416 => 
            array (
                'id' => 417,
                'kode_pos' => '78619',
                'nama' => 'Kabupaten Sintang',
                'provinsi_id' => 12,
            ),
            417 => 
            array (
                'id' => 418,
                'kode_pos' => '68316',
                'nama' => 'Kabupaten Situbondo',
                'provinsi_id' => 11,
            ),
            418 => 
            array (
                'id' => 419,
                'kode_pos' => '55513',
                'nama' => 'Kabupaten Sleman',
                'provinsi_id' => 5,
            ),
            419 => 
            array (
                'id' => 420,
                'kode_pos' => '27365',
                'nama' => 'Kabupaten Solok',
                'provinsi_id' => 32,
            ),
            420 => 
            array (
                'id' => 421,
                'kode_pos' => '27315',
                'nama' => 'Kota Solok',
                'provinsi_id' => 32,
            ),
            421 => 
            array (
                'id' => 422,
                'kode_pos' => '27779',
                'nama' => 'Kabupaten Solok Selatan',
                'provinsi_id' => 32,
            ),
            422 => 
            array (
                'id' => 423,
                'kode_pos' => '90812',
                'nama' => 'Kabupaten Soppeng',
                'provinsi_id' => 28,
            ),
            423 => 
            array (
                'id' => 424,
                'kode_pos' => '98431',
                'nama' => 'Kabupaten Sorong',
                'provinsi_id' => 25,
            ),
            424 => 
            array (
                'id' => 425,
                'kode_pos' => '98411',
                'nama' => 'Kota Sorong',
                'provinsi_id' => 25,
            ),
            425 => 
            array (
                'id' => 426,
                'kode_pos' => '98454',
                'nama' => 'Kabupaten Sorong Selatan',
                'provinsi_id' => 25,
            ),
            426 => 
            array (
                'id' => 427,
                'kode_pos' => '57211',
                'nama' => 'Kabupaten Sragen',
                'provinsi_id' => 10,
            ),
            427 => 
            array (
                'id' => 428,
                'kode_pos' => '41215',
                'nama' => 'Kabupaten Subang',
                'provinsi_id' => 9,
            ),
            428 => 
            array (
                'id' => 429,
                'kode_pos' => '24882',
                'nama' => 'Kota Subulussalam',
                'provinsi_id' => 21,
            ),
            429 => 
            array (
                'id' => 430,
                'kode_pos' => '43311',
                'nama' => 'Kabupaten Sukabumi',
                'provinsi_id' => 9,
            ),
            430 => 
            array (
                'id' => 431,
                'kode_pos' => '43114',
                'nama' => 'Kota Sukabumi',
                'provinsi_id' => 9,
            ),
            431 => 
            array (
                'id' => 432,
                'kode_pos' => '74712',
                'nama' => 'Kabupaten Sukamara',
                'provinsi_id' => 14,
            ),
            432 => 
            array (
                'id' => 433,
                'kode_pos' => '57514',
                'nama' => 'Kabupaten Sukoharjo',
                'provinsi_id' => 10,
            ),
            433 => 
            array (
                'id' => 434,
                'kode_pos' => '87219',
                'nama' => 'Kabupaten Sumba Barat',
                'provinsi_id' => 23,
            ),
            434 => 
            array (
                'id' => 435,
                'kode_pos' => '87453',
                'nama' => 'Kabupaten Sumba Barat Daya',
                'provinsi_id' => 23,
            ),
            435 => 
            array (
                'id' => 436,
                'kode_pos' => '87358',
                'nama' => 'Kabupaten Sumba Tengah',
                'provinsi_id' => 23,
            ),
            436 => 
            array (
                'id' => 437,
                'kode_pos' => '87112',
                'nama' => 'Kabupaten Sumba Timur',
                'provinsi_id' => 23,
            ),
            437 => 
            array (
                'id' => 438,
                'kode_pos' => '84315',
                'nama' => 'Kabupaten Sumbawa',
                'provinsi_id' => 22,
            ),
            438 => 
            array (
                'id' => 439,
                'kode_pos' => '84419',
                'nama' => 'Kabupaten Sumbawa Barat',
                'provinsi_id' => 22,
            ),
            439 => 
            array (
                'id' => 440,
                'kode_pos' => '45326',
                'nama' => 'Kabupaten Sumedang',
                'provinsi_id' => 9,
            ),
            440 => 
            array (
                'id' => 441,
                'kode_pos' => '69413',
                'nama' => 'Kabupaten Sumenep',
                'provinsi_id' => 11,
            ),
            441 => 
            array (
                'id' => 442,
                'kode_pos' => '37113',
                'nama' => 'Kota Sungaipenuh',
                'provinsi_id' => 8,
            ),
            442 => 
            array (
                'id' => 443,
                'kode_pos' => '98164',
                'nama' => 'Kabupaten Supiori',
                'provinsi_id' => 24,
            ),
            443 => 
            array (
                'id' => 444,
                'kode_pos' => '60119',
                'nama' => 'Kota Surabaya',
                'provinsi_id' => 11,
            ),
            444 => 
            array (
                'id' => 445,
                'kode_pos' => '57113',
            'nama' => 'Kota Surakarta (Solo)',
                'provinsi_id' => 10,
            ),
            445 => 
            array (
                'id' => 446,
                'kode_pos' => '71513',
                'nama' => 'Kabupaten Tabalong',
                'provinsi_id' => 13,
            ),
            446 => 
            array (
                'id' => 447,
                'kode_pos' => '82119',
                'nama' => 'Kabupaten Tabanan',
                'provinsi_id' => 1,
            ),
            447 => 
            array (
                'id' => 448,
                'kode_pos' => '92212',
                'nama' => 'Kabupaten Takalar',
                'provinsi_id' => 28,
            ),
            448 => 
            array (
                'id' => 449,
                'kode_pos' => '98475',
                'nama' => 'Kabupaten Tambrauw',
                'provinsi_id' => 25,
            ),
            449 => 
            array (
                'id' => 450,
                'kode_pos' => '77611',
                'nama' => 'Kabupaten Tana Tidung',
                'provinsi_id' => 16,
            ),
            450 => 
            array (
                'id' => 451,
                'kode_pos' => '91819',
                'nama' => 'Kabupaten Tana Toraja',
                'provinsi_id' => 28,
            ),
            451 => 
            array (
                'id' => 452,
                'kode_pos' => '72211',
                'nama' => 'Kabupaten Tanah Bumbu',
                'provinsi_id' => 13,
            ),
            452 => 
            array (
                'id' => 453,
                'kode_pos' => '27211',
                'nama' => 'Kabupaten Tanah Datar',
                'provinsi_id' => 32,
            ),
            453 => 
            array (
                'id' => 454,
                'kode_pos' => '70811',
                'nama' => 'Kabupaten Tanah Laut',
                'provinsi_id' => 13,
            ),
            454 => 
            array (
                'id' => 455,
                'kode_pos' => '15914',
                'nama' => 'Kabupaten Tangerang',
                'provinsi_id' => 3,
            ),
            455 => 
            array (
                'id' => 456,
                'kode_pos' => '15111',
                'nama' => 'Kota Tangerang',
                'provinsi_id' => 3,
            ),
            456 => 
            array (
                'id' => 457,
                'kode_pos' => '15332',
                'nama' => 'Kota Tangerang Selatan',
                'provinsi_id' => 3,
            ),
            457 => 
            array (
                'id' => 458,
                'kode_pos' => '35619',
                'nama' => 'Kabupaten Tanggamus',
                'provinsi_id' => 18,
            ),
            458 => 
            array (
                'id' => 459,
                'kode_pos' => '21321',
                'nama' => 'Kota Tanjung Balai',
                'provinsi_id' => 34,
            ),
            459 => 
            array (
                'id' => 460,
                'kode_pos' => '36513',
                'nama' => 'Kabupaten Tanjung Jabung Barat',
                'provinsi_id' => 8,
            ),
            460 => 
            array (
                'id' => 461,
                'kode_pos' => '36719',
                'nama' => 'Kabupaten Tanjung Jabung Timur',
                'provinsi_id' => 8,
            ),
            461 => 
            array (
                'id' => 462,
                'kode_pos' => '29111',
                'nama' => 'Kota Tanjung Pinang',
                'provinsi_id' => 17,
            ),
            462 => 
            array (
                'id' => 463,
                'kode_pos' => '22742',
                'nama' => 'Kabupaten Tapanuli Selatan',
                'provinsi_id' => 34,
            ),
            463 => 
            array (
                'id' => 464,
                'kode_pos' => '22611',
                'nama' => 'Kabupaten Tapanuli Tengah',
                'provinsi_id' => 34,
            ),
            464 => 
            array (
                'id' => 465,
                'kode_pos' => '22414',
                'nama' => 'Kabupaten Tapanuli Utara',
                'provinsi_id' => 34,
            ),
            465 => 
            array (
                'id' => 466,
                'kode_pos' => '71119',
                'nama' => 'Kabupaten Tapin',
                'provinsi_id' => 13,
            ),
            466 => 
            array (
                'id' => 467,
                'kode_pos' => '77114',
                'nama' => 'Kota Tarakan',
                'provinsi_id' => 16,
            ),
            467 => 
            array (
                'id' => 468,
                'kode_pos' => '46411',
                'nama' => 'Kabupaten Tasikmalaya',
                'provinsi_id' => 9,
            ),
            468 => 
            array (
                'id' => 469,
                'kode_pos' => '46116',
                'nama' => 'Kota Tasikmalaya',
                'provinsi_id' => 9,
            ),
            469 => 
            array (
                'id' => 470,
                'kode_pos' => '20632',
                'nama' => 'Kota Tebing Tinggi',
                'provinsi_id' => 34,
            ),
            470 => 
            array (
                'id' => 471,
                'kode_pos' => '37519',
                'nama' => 'Kabupaten Tebo',
                'provinsi_id' => 8,
            ),
            471 => 
            array (
                'id' => 472,
                'kode_pos' => '52419',
                'nama' => 'Kabupaten Tegal',
                'provinsi_id' => 10,
            ),
            472 => 
            array (
                'id' => 473,
                'kode_pos' => '52114',
                'nama' => 'Kota Tegal',
                'provinsi_id' => 10,
            ),
            473 => 
            array (
                'id' => 474,
                'kode_pos' => '98551',
                'nama' => 'Kabupaten Teluk Bintuni',
                'provinsi_id' => 25,
            ),
            474 => 
            array (
                'id' => 475,
                'kode_pos' => '98591',
                'nama' => 'Kabupaten Teluk Wondama',
                'provinsi_id' => 25,
            ),
            475 => 
            array (
                'id' => 476,
                'kode_pos' => '56212',
                'nama' => 'Kabupaten Temanggung',
                'provinsi_id' => 10,
            ),
            476 => 
            array (
                'id' => 477,
                'kode_pos' => '97714',
                'nama' => 'Kota Ternate',
                'provinsi_id' => 20,
            ),
            477 => 
            array (
                'id' => 478,
                'kode_pos' => '97815',
                'nama' => 'Kota Tidore Kepulauan',
                'provinsi_id' => 20,
            ),
            478 => 
            array (
                'id' => 479,
                'kode_pos' => '85562',
                'nama' => 'Kabupaten Timor Tengah Selatan',
                'provinsi_id' => 23,
            ),
            479 => 
            array (
                'id' => 480,
                'kode_pos' => '85612',
                'nama' => 'Kabupaten Timor Tengah Utara',
                'provinsi_id' => 23,
            ),
            480 => 
            array (
                'id' => 481,
                'kode_pos' => '22316',
                'nama' => 'Kabupaten Toba Samosir',
                'provinsi_id' => 34,
            ),
            481 => 
            array (
                'id' => 482,
                'kode_pos' => '94683',
                'nama' => 'Kabupaten Tojo Una-Una',
                'provinsi_id' => 29,
            ),
            482 => 
            array (
                'id' => 483,
                'kode_pos' => '94542',
                'nama' => 'Kabupaten Toli-Toli',
                'provinsi_id' => 29,
            ),
            483 => 
            array (
                'id' => 484,
                'kode_pos' => '99411',
                'nama' => 'Kabupaten Tolikara',
                'provinsi_id' => 24,
            ),
            484 => 
            array (
                'id' => 485,
                'kode_pos' => '95416',
                'nama' => 'Kota Tomohon',
                'provinsi_id' => 31,
            ),
            485 => 
            array (
                'id' => 486,
                'kode_pos' => '91831',
                'nama' => 'Kabupaten Toraja Utara',
                'provinsi_id' => 28,
            ),
            486 => 
            array (
                'id' => 487,
                'kode_pos' => '66312',
                'nama' => 'Kabupaten Trenggalek',
                'provinsi_id' => 11,
            ),
            487 => 
            array (
                'id' => 488,
                'kode_pos' => '97612',
                'nama' => 'Kota Tual',
                'provinsi_id' => 19,
            ),
            488 => 
            array (
                'id' => 489,
                'kode_pos' => '62319',
                'nama' => 'Kabupaten Tuban',
                'provinsi_id' => 11,
            ),
            489 => 
            array (
                'id' => 490,
                'kode_pos' => '34613',
                'nama' => 'Kabupaten Tulang Bawang',
                'provinsi_id' => 18,
            ),
            490 => 
            array (
                'id' => 491,
                'kode_pos' => '34419',
                'nama' => 'Kabupaten Tulang Bawang Barat',
                'provinsi_id' => 18,
            ),
            491 => 
            array (
                'id' => 492,
                'kode_pos' => '66212',
                'nama' => 'Kabupaten Tulungagung',
                'provinsi_id' => 11,
            ),
            492 => 
            array (
                'id' => 493,
                'kode_pos' => '90911',
                'nama' => 'Kabupaten Wajo',
                'provinsi_id' => 28,
            ),
            493 => 
            array (
                'id' => 494,
                'kode_pos' => '93791',
                'nama' => 'Kabupaten Wakatobi',
                'provinsi_id' => 30,
            ),
            494 => 
            array (
                'id' => 495,
                'kode_pos' => '98269',
                'nama' => 'Kabupaten Waropen',
                'provinsi_id' => 24,
            ),
            495 => 
            array (
                'id' => 496,
                'kode_pos' => '34711',
                'nama' => 'Kabupaten Way Kanan',
                'provinsi_id' => 18,
            ),
            496 => 
            array (
                'id' => 497,
                'kode_pos' => '57619',
                'nama' => 'Kabupaten Wonogiri',
                'provinsi_id' => 10,
            ),
            497 => 
            array (
                'id' => 498,
                'kode_pos' => '56311',
                'nama' => 'Kabupaten Wonosobo',
                'provinsi_id' => 10,
            ),
            498 => 
            array (
                'id' => 499,
                'kode_pos' => '99041',
                'nama' => 'Kabupaten Yahukimo',
                'provinsi_id' => 24,
            ),
            499 => 
            array (
                'id' => 500,
                'kode_pos' => '99481',
                'nama' => 'Kabupaten Yalimo',
                'provinsi_id' => 24,
            ),
        ));
        \DB::table('rajaongkir_kabkot')->insert(array (
            0 => 
            array (
                'id' => 501,
                'kode_pos' => '55222',
                'nama' => 'Kota Yogyakarta',
                'provinsi_id' => 5,
            ),
        ));
        
        
    }
}