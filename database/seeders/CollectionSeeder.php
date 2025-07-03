<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    public function run()
    {
        Collection::insert([
            // Chinese New Year
            [
                'category' => 'Chinese New Year',
                'name' => 'CemilKongsi Tower',
                'type' => 'tower',
                'description' => 'Celebrate togetherness this Chinese New Year with CemilKongsi, a delightful snack set perfect for sharing with family and friends.',
                'price' => 339000.00,
                'stock' => 97,
                'image' => 'assets/images/cny1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Chinese New Year',
                'name' => 'Snackpao Tower',
                'type' => 'tower',
                'description' => 'Add a burst of excitement to your Imlek festivities with Snackpao, a vibrant tower of snacks combining popular treats and soft bao.',
                'price' => 355000.00,
                'stock' => 90,
                'image' => 'assets/images/cny2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Chinese New Year',
                'name' => 'ChoiSnack Bouquet',
                'type' => 'bouquet',
                'description' => 'ChoiSnack is a snack set that embodies good fortune and prosperity with carefully curated lucky treats.',
                'price' => 269000.00,
                'stock' => 73,
                'image' => 'assets/images/cny3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Chinese New Year',
                'name' => 'KrupukKongkow Bouquet',
                'type' => 'bouquet',
                'description' => 'KrupukKongkow is a snack bouquet perfect for sharing during Chinese New Year gatherings, offering crispy delights for memorable moments.',
                'price' => 284000.00,
                'stock' => 60,
                'image' => 'assets/images/cny4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Valentine
            [
                'category' => 'Valentine',
                'name' => 'CemilSayang Tower',
                'type' => 'tower',
                'description' => 'Express your love with CemilSayang Tower, a sweet snack set perfect for celebrating Valentine\'s Day.',
                'price' => 365000.00,
                'stock' => 85,
                'image' => 'assets/images/valentine1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Valentine',
                'name' => 'ManisManja Tower',
                'type' => 'tower',
                'description' => 'ManisManja Tower offers a beautiful presentation of sweet snacks to add joy and affection to Valentine\'s moments.',
                'price' => 320000.00,
                'stock' => 70,
                'image' => 'assets/images/valentine2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Valentine',
                'name' => 'SnackDear Bouquet',
                'type' => 'bouquet',
                'description' => 'SnackDear is a lovely bouquet filled with delicious treats, perfect for gifting someone special on Valentine\'s Day.',
                'price' => 290000.00,
                'stock' => 65,
                'image' => 'assets/images/valentine3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Valentine',
                'name' => 'NgemilBaper Bouquet',
                'type' => 'bouquet',
                'description' => 'NgemilBaper Bouquet combines sweet and playful snacks that make Valentine\'s Day unforgettable.',
                'price' => 258000.00,
                'stock' => 75,
                'image' => 'assets/images/valentine4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Ramadhan
            [
                'category' => 'Ramadhan',
                'name' => 'CemilRaya Tower',
                'type' => 'tower',
                'description' => 'Celebrate the joy of Eid with CemilRaya Tower, a festive snack collection perfect for family gatherings.',
                'price' => 370000.00,
                'stock' => 95,
                'image' => 'assets/images/eid1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Ramadhan',
                'name' => 'SnackBal Tower',
                'type' => 'tower',
                'description' => 'SnackBal Tower offers a delightful mix of savory and sweet treats, ideal for Ramadan and Eid celebrations.',
                'price' => 345000.00,
                'stock' => 80,
                'image' => 'assets/images/eid2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Ramadhan',
                'name' => 'KueKueCeria Bouquet',
                'type' => 'bouquet',
                'description' => 'KueKueCeria Bouquet is a colorful snack bouquet that brings smiles and happiness to Eid festivities.',
                'price' => 268000.00,
                'stock' => 68,
                'image' => 'assets/images/eid3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Ramadhan',
                'name' => 'NgemilFitri Bouquet',
                'type' => 'bouquet',
                'description' => 'NgemilFitri Bouquet is a cheerful snack set, perfect for sharing sweet moments during Eid gatherings.',
                'price' => 277000.00,
                'stock' => 72,
                'image' => 'assets/images/eid4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Christmas
            [
                'category' => 'Christmas',
                'name' => 'CemilNatalan Tower',
                'type' => 'tower',
                'description' => 'Bring warmth and joy to Christmas with CemilNatalan Tower, a festive snack collection for holiday celebrations.',
                'price' => 359000.00,
                'stock' => 88,
                'image' => 'assets/images/christmas1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Christmas',
                'name' => 'SnackClaus Tower',
                'type' => 'tower',
                'description' => 'SnackClaus Tower is packed with delicious snacks, ready to spread holiday cheer during Christmas.',
                'price' => 332000.00,
                'stock' => 70,
                'image' => 'assets/images/christmas2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Christmas',
                'name' => 'KrupukKrismas Bouquet',
                'type' => 'bouquet',
                'description' => 'KrupukKrismas Bouquet is a crunchy and festive snack set, perfect for adding joy to Christmas gatherings.',
                'price' => 282000.00,
                'stock' => 65,
                'image' => 'assets/images/christmas3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Christmas',
                'name' => 'SnackHoHoHappy Bouquet',
                'type' => 'bouquet',
                'description' => 'SnackHoHoHappy Bouquet brings playful holiday vibes with a mix of sweet and savory treats for Christmas celebrations.',
                'price' => 290000.00,
                'stock' => 70,
                'image' => 'assets/images/christmas4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Birthday
            [
                'category' => 'Birthday',
                'name' => 'CemilUlangTahun Tower',
                'type' => 'tower',
                'description' => 'Celebrate birthdays with CemilUlangTahun Tower, a festive snack set that brings extra joy to special occasions.',
                'price' => 360000.00,
                'stock' => 85,
                'image' => 'assets/images/birthday1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Birthday',
                'name' => 'ManisParty Tower',
                'type' => 'tower',
                'description' => 'ManisParty Tower is a sweet, colorful snack collection perfect for making birthday parties unforgettable.',
                'price' => 310000.00,
                'stock' => 78,
                'image' => 'assets/images/birthday2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Birthday',
                'name' => 'SnackSurprise Bouquet',
                'type' => 'bouquet',
                'description' => 'SnackSurprise Bouquet is a delightful surprise snack bouquet designed to brighten up birthday celebrations.',
                'price' => 277000.00,
                'stock' => 68,
                'image' => 'assets/images/birthday3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Birthday',
                'name' => 'NgemilTiupLilin Bouquet',
                'type' => 'bouquet',
                'description' => 'NgemilTiupLilin Bouquet is a unique birthday snack set that makes candle-blowing moments even sweeter.',
                'price' => 265000.00,
                'stock' => 75,
                'image' => 'assets/images/birthday4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Graduation
            [
                'category' => 'Graduation',
                'name' => 'CemilCongrats Tower',
                'type' => 'tower',
                'description' => 'Celebrate graduation day with CemilCongrats Tower, a snack set perfect for marking this special achievement.',
                'price' => 350000.00,
                'stock' => 90,
                'image' => 'assets/images/graduation1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Graduation',
                'name' => 'SnackToga Tower',
                'type' => 'tower',
                'description' => 'SnackToga Tower is a fun, congratulatory snack set that perfectly complements graduation celebrations.',
                'price' => 335000.00,
                'stock' => 82,
                'image' => 'assets/images/graduation2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Graduation',
                'name' => 'SnackWisuda Bouquet',
                'type' => 'bouquet',
                'description' => 'SnackWisuda Bouquet is a beautiful congratulatory snack bouquet to share the happiness of graduation day.',
                'price' => 283000.00,
                'stock' => 72,
                'image' => 'assets/images/graduation3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Graduation',
                'name' => 'SnackSukses Bouquet',
                'type' => 'bouquet',
                'description' => 'SnackSukses Bouquet is a snack collection that sends sweet wishes for a successful future after graduation.',
                'price' => 295000.00,
                'stock' => 67,
                'image' => 'assets/images/graduation4.png',
                'layer' => '4',
                'created_at' => now()
            ],
        ]);
    }
}
