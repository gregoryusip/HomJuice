<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ingredients')->insert([
            [
                'name' => "Apple",
                'slug' => "apple",
                'description' => "Menjaga kesehatan saluran pencernaan, jantung, dan mengurangi resiko diabetes.",
                'image' => "apple.png",
            ],
            [
                'name' => "Avocado",
                'slug' => "avocado",
                'description' => "Menjaga kesehatan jantung dan mata, serta mengontrol tekanan darah.",
                'image' => "avocado.png",
            ],
            [
                'name' => "Banana",
                'slug' => "banana",
                'description' => "Sumber karbohidrat dan Vitamin A, serta memperlancar metabolisme tubuh.",
                'image' => "banana.png",
            ],
            [
                'name' => "Beetroot",
                'slug' => "beetroot",
                'description' => "Menurunkan tekanan darah dan kadar gula darah.",
                'image' => "beetroot.png",
            ],
            [
                'name' => "Blueberry",
                'slug' => "blueberry",
                'description' => "Menjaga kesehatan jantung dan gula darah, serta mencegah penuaan diri.",
                'image' => "blueberry.png",
            ],
            [
                'name' => "Dates",
                'slug' => "dates",
                'description' => "Kaya akan vitamin, mineral,dan serat untuk mencegah masalah jantung dan anemia.",
                'image' => "dates.png",
            ],
            [
                'name' => "Guava",
                'slug' => "guava",
                'description' => "Meningkatkan kekebalan tubuh dan melancarkan sistem pencernaan.",
                'image' => "guava.png",
            ],
            [
                'name' => "Kiwi",
                'slug' => "kiwi",
                'description' => "Menjaga kadar kolesterol dan mencegah resiko anemia.",
                'image' => "kiwi.png",
            ],
            [
                'name' => "Lemon",
                'slug' => "lemon",
                'description' => "Meningkatkan daya tahan tubuh dan menjaga kesehatan kulit.",
                'image' => "lemon.png",
            ],
            [
                'name' => "Lime",
                'slug' => "lime",
                'description' => "Meremajakan kulit dan melancarkan sistem pencernaan.",
                'image' => "lime.png",
            ],
            [
                'name' => "Mango",
                'slug' => "mango",
                'description' => "Meningkatkan kekebalan tubuh dan menjaga kesehatan mata.",
                'image' => "mango.png",
            ],
            [
                'name' => "Melon",
                'slug' => "melon",
                'description' => "Mencegah dehidrasi dan memenuhi kebutuhan gizi ibu hamil.",
                'image' => "melon.png",
            ],
            [
                'name' => "Nectarine",
                'slug' => "nectarine",
                'description' => "Sumber vitamin C dan nutrisi untuk meningkatkan kesehatan kulit.",
                'image' => "nectarine.png",
            ],
            [
                'name' => "Orange",
                'slug' => "orange",
                'description' => "Melancarkan sistem pencernaan dan kekebalan tubuh.",
                'image' => "orange.png",
            ],
            [
                'name' => "Sunkist",
                'slug' => "sunkist",
                'description' => "Melancarkan sistem pencernaan dan kekebalan tubuh.",
                'image' => "sunkist.png",
            ],
            [
                'name' => "Peach",
                'slug' => "peach",
                'description' => "Kaya akan serat untuk melancarkan sistem pencernaan.",
                'image' => "peach.png",
            ],
            [
                'name' => "Pear",
                'slug' => "pear",
                'description' => "Membantu menjaga berat badan dan menurunkan resiko jantung.",
                'image' => "pear.png",
            ],
            [
                'name' => "Pineapple",
                'slug' => "pineapple",
                'description' => "Menjaga kesehatan kulit, jantung, dan mata.",
                'image' => "pineapple.png",
            ],
            [
                'name' => "Pomegranate",
                'slug' => "pomegranate",
                'description' => "Sifat antiinflamasi yang mencegah penyakit jatung, kanker, dan diabetes.",
                'image' => "pomegranate.png",
            ],
            [
                'name' => "Raspberry",
                'slug' => "raspberry",
                'description' => "Kandungan antioksidan yang tinggi untuk kesehatan otak.",
                'image' => "raspberry.png",
            ],
            [
                'name' => "Strawberry",
                'slug' => "strawberry",
                'description' => "Menjaga kesehatan jantung dan mencegah penuaan dini pada kulit.",
                'image' => "strawberry.png",
            ],
            [
                'name' => "Watermelon",
                'slug' => "watermelon",
                'description' => "Menghidrasi tubuh dan menurunkan tekanan darah.",
                'image' => "watermelon.png",
            ],
            [
                'name' => "Bok Choy",
                'slug' => "bok-choy",
                'description' => "Kaya akan mineral, vitamin C, Kalium, Folat, dan vitamin B6.",
                'image' => "bok-choy.png",
            ],
            [
                'name' => "Broccoli",
                'slug' => "broccoli",
                'description' => "Mengandung Kalsium, Fosfor, dan vitamin K yang baik untuk tulang.",
                'image' => "broccoli.png",
            ],
            [
                'name' => "Carrot",
                'slug' => "carrot",
                'description' => "Menjaga kesehatan mata dan mengurangi resiko kanker.",
                'image' => "carrot.png",
            ],
            [
                'name' => "Celery",
                'slug' => "celery",
                'description' => "Menurunkan tekanan darah dan berat badan.",
                'image' => "celery.png",
            ],
            [
                'name' => "Cinnamon",
                'slug' => "cinnamon",
                'description' => "Kaya akan antioksidan untuk menjaga kadar gula darah.",
                'image' => "cinnamon.png",
            ],
            [
                'name' => "Cucumber",
                'slug' => "cucumber",
                'description' => "Mengandung vitamin K untuk kesehatan tulang dan darah.",
                'image' => "cucumber.png",
            ],
            [
                'name' => "Eggplant",
                'slug' => "eggplant",
                'description' => "Mengendalikan kadar kolesterol dan kesehatan kulit.",
                'image' => "eggplant.png",
            ],
            [
                'name' => "Kale",
                'slug' => "kale",
                'description' => "Mencegah penyakit kanker, jantung, dan diabetes.",
                'image' => "kale.png",
            ],
            [
                'name' => "Lemongrass",
                'slug' => "lemongrass",
                'description' => "Menjaga kolesterol dan sebagai detoksifikasi.",
                'image' => "lemongrass.png",
            ],
            [
                'name' => "Parsley",
                'slug' => "parsley",
                'description' => "Mengatur kadar gula darah dan kesehatan ginjal.",
                'image' => "parsley.png",
            ],
            [
                'name' => "Spinach",
                'slug' => "spinach",
                'description' => "Mencegah kanker, anemia, dan diabetes.",
                'image' => "spinach.png",
            ],
            [
                'name' => "Tomato",
                'slug' => "tomato",
                'description' => "Melancarkan pencernaan serta menjaga kesehatan mata dan kulit.",
                'image' => "tomato.png",
            ],
            [
                'name' => "Almond",
                'slug' => "almond",
                'description' => "Menjaga kadar kolesterol, gula darah, dan tekanan darah.",
                'image' => "almond.png",
            ],
            [
                'name' => "Cashew",
                'slug' => "cashew",
                'description' => "Menurunkan kadar kolesterol dan mencegah anemia.",
                'image' => "cashew.png",
            ],
            [
                'name' => "Hazelnut",
                'slug' => "hazelnut",
                'description' => "Mencegah penyakit kanker dan menurunkan kadar gula darah.",
                'image' => "hazelnut.png",
            ],
            [
                'name' => "Chia Seed",
                'slug' => "chia-seed",
                'description' => "Menjaga berat badan dan meningkatkan kesehatan tulang.",
                'image' => "chia-seed.png",
            ],
            [
                'name' => "Coffee Concentrate",
                'slug' => "coffee-concentrate",
                'description' => "Menjaga kesehatan jantung dan organ hati.",
                'image' => "coffee-concentrate.png",
            ],
            [
                'name' => "Coconut",
                'slug' => "coconut",
                'description' => "Mencegah dehidrasi dan meningkatkan stamina tubuh.",
                'image' => "coconut.png",
            ],
            [
                'name' => "Chocolate",
                'slug' => "chocolate",
                'description' => "Mengendalikan nafsu makan dan kesehatan jantung.",
                'image' => "chocolate.png",
            ],
            [
                'name' => "Ginger",
                'slug' => "ginger",
                'description' => "Memperkuat sistem imun tubuh dan mencegah penuaan pada kulit.",
                'image' => "ginger.png",
            ],
            [
                'name' => "Cereal",
                'slug' => "cereal",
                'description' => "Kaya akan serat untuk memperlancar sistem pencernaan.",
                'image' => "cereal.png",
            ],
            [
                'name' => "Honey",
                'slug' => "honey",
                'description' => "Meningkatkan imun tubuh dan menangkal radikal bebas.",
                'image' => "honey.png",
            ],
            [
                'name' => "Aloe Vera",
                'slug' => "aloe-vera",
                'description' => "Menjaga kesehatan kulit dan mengontrol produksi minyak berlebihan.",
                'image' => "aloe-vera.png",
            ],
            [
                'name' => "Oatmeal",
                'slug' => "oatmeal",
                'description' => "Mengandung antioksidan dan zat antiradang yang baik untuk tubuh.",
                'image' => "oatmeal.png",
            ],
            [
                'name' => "Sea Salt",
                'slug' => "sea-salt",
                'description' => "Meningkatkan sistem kekebalan tubuh dan sistem pencernaan.",
                'image' => "sea-salt.png",
            ],
            [
                'name' => "Vanilla",
                'slug' => "vanilla",
                'description' => "Mengontrol sistem sarah dan anti inflamasi.",
                'image' => "vanilla.png",
            ],
            [
                'name' => "Almond Milk",
                'slug' => "almond-milk",
                'description' => "Menjaga kadar kolesterol, gula darah, dan tekanan darah.",
                'image' => "almond-milk.png",
            ],
            [
                'name' => "Fresh Milk",
                'slug' => "fresh-milk",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "fresh-milk.png",
            ],
            [
                'name' => "Green Series",
                'slug' => "green-series",
                'description' => "Mengandung vitamin A, C, K, dan B6, serta kalsium.",
                'image' => "green-series.jpg",
            ],
            [
                'name' => "Red Series",
                'slug' => "red-series",
                'description' => "Mengandung vitamin C dan A, serta zat besi dan kalsium.",
                'image' => "red-series.jpg",
            ],
            [
                'name' => "Orange Series",
                'slug' => "orange-series",
                'description' => "Mengandung vitamin C, rendah kalori, dan kaya akan fiber.",
                'image' => "orange-series.jpg",
            ],
            [
                'name' => "Yellow Series",
                'slug' => "yellow-series",
                'description' => "Mengandung vitamin C, K, dan B6 untuk mengurangi berat badan.",
                'image' => "yellow-series.jpg",
            ],
            [
                'name' => "Original Milk",
                'slug' => "original-milk",
                'description' => "MMengandung vitamin, mineral, dan fiber untuk kesehatan.",
                'image' => "original-milk.jpg",
            ],
            [
                'name' => "B'fast Milk",
                'slug' => "bfast-milk",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "bfast-milk.jpg",
            ],
            [
                'name' => "Royal Milk",
                'slug' => "royal-milk",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "royal-milk.jpg",
            ],
            [
                'name' => "Royal Cold Brew",
                'slug' => "royal-cold-brew",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "royal-cold-brew.jpg",
            ],
            [
                'name' => "Sunkist Orange",
                'slug' => "sunkist-orange",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "sunkist-orange.jpg",
            ],
            [
                'name' => "Pome Sunkist",
                'slug' => "pome-sunkist",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "pome-sunkist.jpg",
            ],
            [
                'name' => "Pomegranate",
                'slug' => "pome-granate",
                'description' => "Mengandung antioksidan untuk menghilangkan radikal bebas.",
                'image' => "pome-granate.jpg",
            ],
            [
                'name' => "Nectarine",
                'slug' => "nect-arine",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "nect-arine.jpg",
            ],
            [
                'name' => "Celery Remedy",
                'slug' => "celery-remedy",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "celery-remedy.jpg",
            ],
            [
                'name' => "New Zealand Kiwi",
                'slug' => "new-zealand-kiwi",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "new-zealand-kiwi.jpg",
            ],
            [
                'name' => "Royal Ginger Milk",
                'slug' => "royal-ginger-milk",
                'description' => "Meningkatkan kesehatan tulang, jantung, dan imun tubuh.",
                'image' => "royal-ginger-milk.jpg",
            ],
        ]);
    }
}
