<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => "Green Series",
                'slug' => "green-series",
                'image' => "green-series.jpg",
                'ingredient' => "Bokchoy, Cucumber, Apple, Pineapple",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 30000,
                'is_best_seller' => true,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/green-series-cold-pressed-juice-by-homjuice',
                'shopee_link' => 'https://shopee.co.id/GREEN-SERIES-Cold-Pressed-Juice-%E2%80%A2-250ml-%E2%80%A2-Healthy-Juice-%E2%80%A2-Diet-Sehat-%E2%80%A2-Jus-Sehat-HOMJUICE-i.86862378.1453931432?sp_atk=180c135d-bc83-4fb4-bb70-c2744504752f',
            ],[
                'category_id' => 1,
                'name' => "Yellow Series",
                'slug' => "yellow-series",
                'image' => "yellow-series.jpg",
                'ingredient' => "Pineapple, Apple, Lemon",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 27000,
                'is_best_seller' => false,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/yellow-series-cold-pressed-juice-by-homjuice',
                'shopee_link' => 'https://shopee.co.id/YELLOW-SERIES-Cold-Pressed-Juice-250ml-Pineapple-Apple-Lemon-Healthy-Juice-HOMJUICE-i.86862378.1453944765?sp_atk=da6efa42-8d5b-425e-811e-d5b435ac45bd',
            ],[
                'category_id' => 2,
                'name' => "B'fast Milk",
                'slug' => "b'fast-milk",
                'image' => "breakfast-milk.jpg",
                'ingredient' => "Almond Milk, Cereal, Sea Salt",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 40000,
                'is_best_seller' => true,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/breakfast-milk-by-homjuice-susu-almond-minuman-sehaf',
                'shopee_link' => 'https://shopee.co.id/BREAKFAST-MILK-ALMOND-MILK-CEREAL-SEA-SALT-SUSU-ALMOND-HOMJUICE-i.86862378.5835946923?sp_atk=ca680fcf-ce88-400e-8f7b-252de77fe455',
            ],[
                'category_id' => 2,
                'name' => "Royal Cold Brew",
                'slug' => "royal-cold-brew",
                'image' => "royal-milk.jpg",
                'ingredient' => "Coffee Concentrate, Almond, Dates, Sea Salt",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 45000,
                'is_best_seller' => true,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/royal-milk',
                'shopee_link' => 'https://shopee.co.id/-FAVOURITE-ROYAL-MILK-DATES-ALMOND-MILK-SEA-SALT-250ML-SUSU-ALMOND-HOMJUICE-i.86862378.4233696352?sp_atk=909c6e4d-4bf9-4e09-8d0e-f96c553a9544',
            ],[
                'category_id' => 3,
                'name' => "Pome Sunkist",
                'slug' => "pome-sunkist",
                'image' => "pome-sunkist.jpg",
                'ingredient' => "100% Pomegranate and Sunkist",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 60000,
                'is_best_seller' => false,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/homjuice-pomesunkist-cold-pressed-juice-100-buah-delima-dan-sunkist',
                'shopee_link' => '#',
            ],[
                'category_id' => 3,
                'name' => "Nectarine",
                'slug' => "nectarine",
                'image' => "nectarine.jpg",
                'ingredient' => "Nectarine, Blueberry, Apple",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 35000,
                'is_best_seller' => true,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/nectarine-cold-pressed-juice',
                'shopee_link' => '#',
            ],[
                'category_id' => 4,
                'name' => "Celery Remedy",
                'slug' => "celery-remedy",
                'image' => "celery-remedy.jpg",
                'ingredient' => "Celery Stick, Apple, Pineapple, Lemon",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 30000,
                'is_best_seller' => true,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/celery-remedy-cold-pressed-juice',
                'shopee_link' => 'https://shopee.co.id/Celery-Remedy-Cold-pressed-juice-celery-juice-HOMJUICE-JUS-seledri-JUS-detox-JUS-sehat-i.86862378.8207433961?sp_atk=27ad41ec-94d4-4db4-87ce-3c161281e1bc',
            ],[
                'category_id' => 5,
                'name' => "Ultimate Set",
                'slug' => "ultimate-set",
                'image' => "healthy-set.jpg",
                'ingredient' => "Green Series, Red Series, Orange Series, Yellow Series, Royal Milk",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 140000,
                'is_best_seller' => false,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/ultimate-set-juice-isi-5-pcs-by-homjuice',
                'shopee_link' => 'https://shopee.co.id/PROMO!-ULTIMATE-SET-5-BOTOL-Cold-Pressed-Juice-HOMJUICE-JUICE-SEHAT-JUS-DETOX-JUS-DIET-i.86862378.3433789607?sp_atk=da7e8e46-e777-4d98-afe9-d2866c7e7a7c',
            ],[
                'category_id' => 6,
                'name' => "Cleanse Programme",
                'slug' => "cleanse-programme",
                'image' => "cleanse-set.jpg",
                'ingredient' => "Green Series, Red Series, Orange Series, Yellow Series, Royal Milk, Pomegranate",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 200000,
                'is_best_seller' => true,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/cleanse-by-homjuice',
                'shopee_link' => 'https://shopee.co.id/cleanse-by-homjuice-%E2%80%A2-PAKET-DETOX-JUICE-DETOX-JUS-SEHAT-JUS-DIET-JUICE-DIET-JUS-DETOX-i.86862378.4636705081?sp_atk=33e844a2-c1a3-4c26-acfd-445dce1b0581',
            ],[
                'category_id' => 6,
                'name' => "Let It Glow Programme",
                'slug' => "let-it-glow-programme",
                'image' => "let-it-glow-set.jpg",
                'ingredient' => "Sunkist, Original Milk, Green Series, Pomegranate, Red Series, Nectarine",
                'benefit' => "High in vitamin C, Source of fiber, High in manganese",
                'body' => "A refreshing and aromatic blend of lemongrass and piquant lemon in Tropic Sereh serves as a natural immunity boost, promotes healthy digestion, regulates high blood pressure, burns fat, and helps relax the body.",
                'size' => 250,
                'price' => 210000,
                'is_best_seller' => true,
                'tokopedia_link' => 'https://www.tokopedia.com/homjuice/let-it-glow-by-homjuice',
                'shopee_link' => 'https://shopee.co.id/LET-IT-GLOW-PROGRAM-6-botol-Cold-pressed-Juice-HOMJUICE-i.86862378.7855087818?sp_atk=d8d5f36c-9ce5-45a0-abbb-63b4f647c3f6',
            ]
        ]);
    }
}
