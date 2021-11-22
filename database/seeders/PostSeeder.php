<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            [
                'blog_category_id' => 2,
                'user_id' => 1,
                'title' => "Manfaat Buah Kiwi untuk Kesehatan Kulit!",
                'slug' => "manfaat-buah-kiwi-untuk-kesehatan-kulit",
                'image' => 'post1.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 1,
                'user_id' => 2,
                'title' => "Kulit Manggis Memiliki Ekstrak yang Berkhasiat",
                'slug' => "kulit-manggis-memiliki-ekstrak-yang-berkhasiat",
                'image' => 'post2.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 3,
                'user_id' => 1,
                'title' => "Cold Pressed dapat Menyembuhkan Banyak Penyakit",
                'slug' => "cold-pressed-dapat-menyembuhkan-banyak-penyakit",
                'image' => 'post3.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 2,
                'user_id' => 2,
                'title' => "Lima Manfaat Almond yang Harus Kamu Ketahui!",
                'slug' => "lima-manfaat-almond-yang-harus-kamu-ketahui",
                'image' => 'post4.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 1,
                'user_id' => 1,
                'title' => "Gejala Tubuh Kekurangan Nutrisi dan Cara Mengatasinya",
                'slug' => "gejala-tubuh-kekurangan-nutrisi-dan-cara-mengatasinya",
                'image' => 'post5.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 1,
                'user_id' => 2,
                'title' => "Sesak Napas Sampai Anxiety Karena GERD",
                'slug' => "sesak-napas-sampai-anxiety-karena-gerd",
                'image' => 'post6.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 3,
                'user_id' => 1,
                'title' => "Mengenal Apa Itu Insomnia dan Cara Mengatasinya",
                'slug' => "mengenal-apa-itu0insomnia-dan-cara-mengatasinya",
                'image' => 'post7.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 2,
                'user_id' => 1,
                'title' => "Tata Cara Melakukan Detox yang Baik dan Benar",
                'slug' => "tata-cara-melakukan-detox-yang-baik-dan-benar",
                'image' => 'post8.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 1,
                'user_id' => 2,
                'title' => "Tanda Hormon Tidak Seimbang dan Cara Mengatasinya",
                'slug' => "tanda-hormon-tidak-seimbang-dan-cara-mengatasinya",
                'image' => 'post9.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 3,
                'user_id' => 2,
                'title' => "Manfaat Rempah Indonesia Pada Minuman Detox",
                'slug' => "manfaat-rempah-indonesia-pada-minuman-detox",
                'image' => 'post10.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
            [
                'blog_category_id' => 1,
                'user_id' => 1,
                'title' => "Lebaran Sehat dan Bahagia Bersama Keluarga Terkasih",
                'slug' => "lebaran-sehat-dan-bahagia-bersama-keluarga-terkasih",
                'image' => 'post11.jpg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta maxime ex voluptas aliquam repellendus possimus fuga tempore ipsam? Laudantium ex minima ipsa porro cupiditate sequi ab, ducimus fuga aliquam dolor fugit perferendis mollitia sed nihil eius minus ipsum maiores tempora qui ad? Quas voluptatibus sapiente a quam dignissimos pariatur dicta!",
            ],
        ]);
    }
}
