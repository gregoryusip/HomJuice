<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('outlets')->insert([
            [
                'name' => "Homjuice Healthy Bar Jakarta",
                'slug' => "homjuice-healthy-bar-jakarta",
                'address' => "5, Jl. Panjang No.18, RT.11/RW.11, South Kedoya, Kebonjeruk, West Jakarta City, Jakarta 11520",
                'map' => '<iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8165.784462301502!2d106.76259932495941!3d-6.1762070562766445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7220133840b%3A0xe3325308f7b4fa31!2sHOMJUICE%20HEALTHY%20BAR%20JAKARTA!5e0!3m2!1sid!2sid!4v1635331883048!5m2!1sid!2sid" style="border:0; height: 300px; width: 100%" allowfullscreen="" loading="lazy"></iframe>',
            ],
            [
                'name' => "Homjuice Healthy Hub BSD at Vasaka Nine",
                'slug' => "homjuice-healthy-hub-bsd-at-vasaka-nine",
                'address' => "VLCC Garden Vasaka Nine Apartment, Lengkong Gudang, Kec. Serpong, Kota Tangerang Selatan, Banten 15321",
                'map' => '<iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.768688468759!2d106.66183851471702!3d-6.294100595444605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb730b6f3f77%3A0xf86c0d1c13483695!2sHOMJUICE%20HEALTHY%20HUB%20BSD%20at%20Vasaka%20Nine!5e0!3m2!1sid!2sid!4v1635340388581!5m2!1sid!2sid" style="border:0; height: 300px; width: 100%;" allowfullscreen="" loading="lazy"></iframe>',
            ],
            [
                'name' => "Homjuice Healthy Hub Bintaro at Mirror Mirror",
                'slug' => "homjuice-healthy-hub-bintaro-at-mirror-mirror",
                'address' => "Jl. Bintaro Utama 9 HB 1 No.3, Pd. Pucung, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15229",
                'map' => '<iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8687575873696!2d106.70579641471694!3d-6.280979095453983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fba23f792e79%3A0x8ae3fd34f99851ae!2sHOMJUICE%20HEALTHY%20HUB%20BINTARO%20at%20MIrror%20Mirror!5e0!3m2!1sid!2sid!4v1635340448373!5m2!1sid!2sid" style="border:0; height: 300px; width: 100%;" allowfullscreen="" loading="lazy"></iframe>',
            ],
            [
                'name' => "Homjuice Healthy Hub Kebayoran Baru",
                'slug' => "homjuice-healthy-hub-kebayoran-baru",
                'address' => "Pasar Santa Foodcourt Lantai 1 Blok BKS 039, Kec. Kby. Baru, Daerah Khusus Ibukota Jakarta 12170",
                'map' => '<iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.181566563699!2d106.80977031471686!3d-6.239784995483297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1b6f7fe3feb%3A0xe9990a3be8dce671!2sHOMJUICE%20HEALTHY%20HUB%20KEBAYORAN%20BARU!5e0!3m2!1sid!2sid!4v1635340595977!5m2!1sid!2sid" style="border:0; height: 300px; width: 100%;" allowfullscreen="" loading="lazy"></iframe>',
            ],
            [
                'name' => "Homjuice Healthy Hub Senopati at Mirror Mirror",
                'slug' => "homjuice-healthy-hub-senopati-at-mirror-mirror",
                'address' => "Jl. Kertanegara No.64, Rw. Bar., Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12180",
                'map' => '<iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.227365056288!2d106.8094233147167!3d-6.233730995487609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f19734c96b7d%3A0x17dbb464f0caedfe!2sHOMJUICE%20HEALTHY%20HUB%20SENOPATI%20at%20Mirror%20Mirror!5e0!3m2!1sid!2sid!4v1635340670276!5m2!1sid!2sid" style="border:0; height: 300px; width: 100%;" allowfullscreen="" loading="lazy"></iframe>',
            ],
        ]);
    }
}
