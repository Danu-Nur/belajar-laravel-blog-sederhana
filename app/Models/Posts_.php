<?php

namespace App\Models;


class Posts
{
    private static $ulasanProduk = [
        [
            "produk" => "Laptop",
            "slug" => "laptop",
            "ulasan" => "Laptop ini sangat ringan dan memiliki performa yang cepat. Sangat cocok untuk pekerjaan sehari-hari.",
            "rating" => 4.6,
            "pengulas" => "Michelle Williams"
        ],
        [
            "produk" => "Jam Tangan",
            "slug" => "jam_tangan",
            "ulasan" => "Jam tangan ini sangat elegan dan presisi. Desainnya sangat menarik dan berkualitas tinggi.",
            "rating" => 4.7,
            "pengulas" => "Robert Anderson"
        ],
        [
            "produk" => "Kemeja",
            "slug" => "kemeja",
            "ulasan" => "Kemeja ini terbuat dari bahan yang nyaman dan desainnya sangat modis. Saya sangat suka dengan kualitasnya.",
            "rating" => 4.5,
            "pengulas" => "Sophia Thompson"
        ],
        [
            "produk" => "Kacamata",
            "slug" => "kacamata",
            "ulasan" => "Kacamata ini sangat stylish dan memberikan perlindungan maksimal dari sinar matahari. Sangat nyaman digunakan sepanjang hari.",
            "rating" => 4.8,
            "pengulas" => "Daniel Garcia"
        ],
        [
            "produk" => "Headphone",
            "slug" => "headphone",
            "ulasan" => "Headphone ini menghasilkan suara yang jernih dan bass yang kuat. Desainnya juga sangat keren dan nyaman digunakan.",
            "rating" => 4.9,
            "pengulas" => "Emily Rodriguez"
        ],
        [
            "produk" => "Tas Ransel",
            "slug" => "tas_ransel",
            "ulasan" => "Tas ransel ini memiliki banyak kantong yang membuat penyimpanan barang menjadi lebih mudah. Desainnya juga sangat modern.",
            "rating" => 4.7,
            "pengulas" => "William Davis"
        ],
        [
            "produk" => "Perfume",
            "slug" => "perfume",
            "ulasan" => "Parfum ini memiliki aroma yang sangat harum dan tahan lama. Saya mendapatkan banyak pujian saat menggunakannya.",
            "rating" => 4.8,
            "pengulas" => "Olivia Martinez"
        ],
        [
            "produk" => "Speaker Bluetooth",
            "slug" => "speaker_bluetooth",
            "ulasan" => "Speaker Bluetooth ini memiliki suara yang kualitasnya sangat baik dan baterainya tahan lama. Saya sangat puas dengan pembelian ini.",
            "rating" => 4.6,
            "pengulas" => "Benjamin Wilson"
        ],
        [
            "produk" => "Kaos",
            "slug" => "kaos",
            "ulasan" => "Kaos ini sangat nyaman dipakai dan memiliki desain yang unik. Saya sangat suka dengan warna dan kualitasnya.",
            "rating" => 4.5,
            "pengulas" => "Mia Thompson"
        ],
        [
            "produk" => "Tas Laptop",
            "slug" => "tas_laptop",
            "ulasan" => "Tas laptop ini sangat kuat dan memiliki banyak ruang penyimpanan. Bahan yang digunakan juga berkualitas tinggi.",
            "rating" => 4.7,
            "pengulas" => "James Anderson"
        ],
    ];

    public static function all()
    {
        return collect(self::$ulasanProduk);
    }

    public static function find($slug)
    {
        $posts =  static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
