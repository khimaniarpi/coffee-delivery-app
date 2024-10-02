<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Store;
use App\Models\Category;
use App\Models\Menu;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {                                                                                     
         User::factory(10)->create();
         Store::factory(10)->create();

         Category::factory()->Create([
                'category_name' => 'Bestseller',
                'category_img' => 'bestseller.jpg',

        ]); 
        Category::factory()->Create([
                'category_name' => 'Drinks',
                'category_img' => 'drinks.jpg',

        ]); 
        Category::factory()->Create([
                'category_name' => 'Food',
                'category_img' => 'food.jpg',

        ]); 
        Category::factory()->Create([
                'category_name' => 'Coffee At Home',
                'category_img' => 'bestseller.jpg',

        ]); 
        
        //Bestseller
         Menu::factory()->create([
                 'item_name' => 'Java Chip Frappuccino',
                 'description' => 'Mocha sauce and Frappuccino® chips blended with with Frappu',
                 'price' => '388.50',
                 'item_img' => 'java-chip.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);
          Menu::factory()->create([
                 'item_name' => 'Caffe Americano',
                 'description' => 'Rich in flavour, full-bodied espresso with hot water in true.',
                 'price' => '230.50',
                 'item_img' => 'caffe-americano.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);
          Menu::factory()->create([
                 'item_name' => 'Cold Coffee',
                 'description' => 'Our signature rich in flavour espresso blended with delicate...',
                 'price' => '300.75',
                 'item_img' => 'cold-coffee.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);
          Menu::factory()->create([
                 'item_name' => 'Double Chocolate Chip Frappuccino',
                 'description' => 'Rich mocha-flavored sauce meets up with chocolaty chips',
                 'price' => '240.60',
                 'item_img' => 'double-chocolate.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);
          Menu::factory()->create([
                 'item_name' => 'Creamy Spinach and Corn Pocket',
                 'description' => '"A creamy spinach and corn filling encased in a buttery ',
                 'price' => '180.90',
                 'item_img' => 'creamy-spinach.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);
          Menu::factory()->create([
                 'item_name' => 'Cappuccino',
                 'description' => 'Dark, Rich in flavour espresso lies in wait under a smoothed',
                 'price' => '780',
                 'item_img' => 'cappuccino.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);
          Menu::factory()->create([
                 'item_name' => 'Paneer Tikka Sandwich',
                 'description' => 'Marinated tandoori paneer filling, sliced cheese, ',
                 'price' => '300',
                 'item_img' => 'paneer-tikka.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);
          Menu::factory()->create([
                 'item_name' => 'Double Chocolate Chip Cookie',
                 'description' => 'A soft & chewy chocolate cookie topped with chocolate chips',
                 'price' => '600',
                 'item_img' => 'double-chip-cookie.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);
          Menu::factory()->create([
                 'item_name' => 'Tandoori Soya Chapp Wrap',
                 'description' => 'Soft succulent soya chaap in tandoori marinade, cooked.',
                 'price' => '900',
                 'item_img' => 'tandoori-soya.jpg',
                 'store_id' => '1',
                 'category_id' => '1'
         ]);


         //Drinks
         Menu::factory()->create([
                 'item_name' => 'Cookie Creme Latte',
                 'description' => 'Handcrafted espresso from the worlds top 3% Arabica with steamed milk, hints of vanilla, and decadent java chip. Topped with an overload of whipped vanilla topping, mocha dust, crunchy cookie crumbs, and swirls of mocha sauce. The perfect indulgent treat.',
                 'price' => '430',
                 'item_img' => 'cookie-cream-late.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);
         Menu::factory()->create([
                 'item_name' => 'Classic Iced Coffee',
                 'description' => 'Savour our premium coffee made with top 3% Arabica beans in an all new iced avatar. Frothy iced shaken espresso flavoured with brown sugar and topped with milk for a refreshing and chic pick me up drink.',
                 'price' => '236',
                 'item_img' => 'classic-ice-coffee.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);
         Menu::factory()->create([
                 'item_name' => 'Classic Hot Coffee',
                 'description' => 'Savour our premium coffee made with top 3% Arabica beans in an all new avatar. Starbucks Signature espresso paired with condensed milk for an ideal blend of sweetness and caafeine boost',
                 'price' => '157',
                 'item_img' => 'classic-hot-coffee.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);
         Menu::factory()->create([
                 'item_name' => 'Pumpkin Spice Latte',
                 'description' => 'Our signature Pumpkin Spice Latte is back combining handcrafted espresso from the worlds top 3% Arabica, steamed milk flavored with pumpkin spice, topped with whipped vanilla topping, and dusted with pumpkin spice mix to perfectly capture the essence of fall.',
                 'price' => '430',
                 'item_img' => 'pumkin-spice.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);
         Menu::factory()->create([
                 'item_name' => 'Iced Pumpkin Spice Latte',
                 'description' => 'Our signature Pumpkin Spice Latte is back combining handcrafted espresso from the worlds top 3% Arabica, milk flavored with pumpkin spice, topped with whipped vanilla topping, and dusted with pumpkin spice mix to perfectly capture the essence of fall. Served over ice.',
                 'price' => '472',
                 'item_img' => 'iced-pumkin.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);
         Menu::factory()->create([
                 'item_name' => 'Saffron Pistachio Latte',
                 'description' => 'Made from our handcrafted Diwali Blend espresso, a signature blonde roast topped with pistachio-flavored steamed milk and finished off with a delicious Saffron Flavoured cream foam with rose crumbs to reel in those Diwali feels.',
                 'price' => '430',
                 'item_img' => 'saffron-pistachio-latte.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);
         Menu::factory()->create([
                 'item_name' => 'Iced Saffron Pistachio Latte',
                 'description' => 'Made from our handcrafted Diwali Blend espresso, a signature blonde roast topped with pistachio-flavored milk and finished off with a delicious Saffron Flavoured cream foam with rose crumbs to reel in those Diwali feels. Served over ice.',
                 'price' => '472',
                 'item_img' => 'iced-saffron-pistachio.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);
         Menu::factory()->create([
                 'item_name' => 'Iced Velvet Vanilla Latte',
                 'description' => 'Rich in texture, smooth, and creamy latte elevated with vanilla and a dairy twist – Half and half, served over ice.',
                 'price' => '435',
                 'item_img' => 'iced-velvet-vanilla.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);
         Menu::factory()->create([
                 'item_name' => 'White Chocolate Mocha',
                 'description' => 'Our signature espresso meets white chocolate sauce and steamed milk, then is finished off with whipped vanilla topping in this white chocolate delight.',
                 'price' => '351',
                 'item_img' => 'white-chocolate.jpg',
                 'store_id' => '2',
                 'category_id' => '2'
         ]);


        // User::factory()->create([
        //     'first_name' => 'Test User',
        //     'last_name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'phone' => '9765456789',
        // ]);
    }
}
