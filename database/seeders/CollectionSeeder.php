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
                'name' => 'Kongsi Tower',
                'type' => 'tower',
                'description' => 'Celebrate togetherness this Chinese New Year with Kongsi, a delightful snack set perfect for sharing with family and friends.',
                'price' => 339000.00,
                'stock' => 97,
                'image' => 'cny1.png',
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
                'image' => 'cny2.png',
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
                'image' => 'cny3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Chinese New Year',
                'name' => 'Kongkow Bouquet',
                'type' => 'bouquet',
                'description' => 'KrupukKongkow is a snack bouquet perfect for sharing during Chinese New Year gatherings, offering crispy delights for memorable moments.',
                'price' => 284000.00,
                'stock' => 60,
                'image' => 'cny4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Valentine
            [
                'category' => 'Valentine',
                'name' => 'Loves Tower',
                'type' => 'tower',
                'description' => 'Express your love with Loves Tower, a sweet snack set perfect for celebrating Valentine\'s Day.',
                'price' => 365000.00,
                'stock' => 85,
                'image' => 'val1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Valentine',
                'name' => 'Sweet Tower',
                'type' => 'tower',
                'description' => 'Sweet Tower offers a beautiful presentation of sweet snacks to add joy and affection to Valentine\'s moments.',
                'price' => 320000.00,
                'stock' => 70,
                'image' => 'val2.png',
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
                'image' => 'val3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Valentine',
                'name' => 'Baper Bouquet',
                'type' => 'bouquet',
                'description' => 'Baper Bouquet combines sweet and playful snacks that make Valentine\'s Day unforgettable.',
                'price' => 258000.00,
                'stock' => 75,
                'image' => 'val4.png',
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
                'image' => 'eid1.png',
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
                'image' => 'eid2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Ramadhan',
                'name' => 'KueCeria Bouquet',
                'type' => 'bouquet',
                'description' => 'KueCeria Bouquet is a colorful snack bouquet that brings smiles and happiness to Eid festivities.',
                'price' => 268000.00,
                'stock' => 68,
                'image' => 'eid3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Ramadhan',
                'name' => 'Fitri Bouquet',
                'type' => 'bouquet',
                'description' => 'Fitri Bouquet is a cheerful snack set, perfect for sharing sweet moments during Eid gatherings.',
                'price' => 277000.00,
                'stock' => 72,
                'image' => 'eid4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Christmas
            [
                'category' => 'Christmas',
                'name' => 'Natalan Tower',
                'type' => 'tower',
                'description' => 'Bring warmth and joy to Christmas with Natalan Tower, a festive snack collection for holiday celebrations.',
                'price' => 359000.00,
                'stock' => 88,
                'image' => 'chr1.png',
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
                'image' => 'chr2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Christmas',
                'name' => 'Blessings Bouquet',
                'type' => 'bouquet',
                'description' => 'Blessings Bouquet is a crunchy and festive snack set, perfect for adding joy to Christmas gatherings.',
                'price' => 282000.00,
                'stock' => 65,
                'image' => 'chr3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Christmas',
                'name' => 'SnackHoHo Bouquet',
                'type' => 'bouquet',
                'description' => 'SnackHoHo Bouquet brings playful holiday vibes with a mix of sweet and savory treats for Christmas celebrations.',
                'price' => 290000.00,
                'stock' => 70,
                'image' => 'chr4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Birthday
            [
                'category' => 'Birthday',
                'name' => 'Happy Tower',
                'type' => 'tower',
                'description' => 'Celebrate birthdays with Happy Tower, a festive snack set that brings extra joy to special occasions.',
                'price' => 360000.00,
                'stock' => 85,
                'image' => 'bir1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Birthday',
                'name' => 'Party Tower',
                'type' => 'tower',
                'description' => 'Party Tower is a sweet, colorful snack collection perfect for making birthday parties unforgettable.',
                'price' => 310000.00,
                'stock' => 78,
                'image' => 'bir2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Birthday',
                'name' => 'Surprise Bouquet',
                'type' => 'bouquet',
                'description' => 'Surprise Bouquet is a delightful surprise snack bouquet designed to brighten up birthday celebrations.',
                'price' => 277000.00,
                'stock' => 68,
                'image' => 'bir3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Birthday',
                'name' => 'Wishes Bouquet',
                'type' => 'bouquet',
                'description' => 'Wishes Bouquet is a unique birthday snack set that makes candle-blowing moments even sweeter.',
                'price' => 265000.00,
                'stock' => 75,
                'image' => 'bir4.png',
                'layer' => '4',
                'created_at' => now()
            ],

            // Graduation
            [
                'category' => 'Graduation',
                'name' => 'Congrats Tower',
                'type' => 'tower',
                'description' => 'Celebrate graduation day with Congrats Tower, a snack set perfect for marking this special achievement.',
                'price' => 350000.00,
                'stock' => 90,
                'image' => 'gra1.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Graduation',
                'name' => 'Toga Tower',
                'type' => 'tower',
                'description' => 'Toga Tower is a fun, congratulatory snack set that perfectly complements graduation celebrations.',
                'price' => 335000.00,
                'stock' => 82,
                'image' => 'gra2.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Graduation',
                'name' => 'Wisuda Bouquet',
                'type' => 'bouquet',
                'description' => 'Wisuda Bouquet is a beautiful congratulatory snack bouquet to share the happiness of graduation day.',
                'price' => 283000.00,
                'stock' => 72,
                'image' => 'gra3.png',
                'layer' => '4',
                'created_at' => now()
            ],
            [
                'category' => 'Graduation',
                'name' => 'Success Bouquet',
                'type' => 'bouquet',
                'description' => 'Success Bouquet is a snack collection that sends sweet wishes for a successful future after graduation.',
                'price' => 295000.00,
                'stock' => 67,
                'image' => 'gra4.png',
                'layer' => '4',
                'created_at' => now()
            ],
        ]);
    }
}
