<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // laptops
       for ($i=1; $i < 30 ; $i++) {
        product::create([
            'category_id'=> "1",
            'name' => 'laptops'.$i,
            'slug'  => 'laptop-'.$i,
            'details' => [13, 14, 15][array_rand([13, 14, 15])].'inch,'.  [1, 2, 3][array_rand([1, 2, 3])] .'TB SSD, 32GB RAM',
            'price' => rand(149999, 249999),
            'description' => 'Lorem'.$i.'ipsum elit.
               veniam!',

        ]);

    }






    // destops
    for ($i=1; $i < 9 ; $i++) {
        product::create([
            'category_id'=> "2",
            'name' => 'Desktops'.$i,
            'slug'  => 'destop-'.$i,
            'details' => [24, 25, 27][array_rand([24, 25, 27])].'inch,'.  [1, 2, 3][array_rand([1, 2, 3])] .'TB SSD, 32GB RAM',
            'price' => rand(249999, 449999),
            'description' => 'Lorem'.$i.' adipisicing elit.
             veniam!',

        ]);

    }

    // phone
    for ($i=1; $i < 9 ; $i++) {
        product::create([
            'category_id'=> "3",
            'name' => ' Phones'.$i,
            'slug'  => 'phone-'.$i,
            'details' => [16, 32, 64][array_rand([16, 32, 64])].'GB, 5'.  [7, 8, 9][array_rand([7, 8, 9])] .'inch Screen , 4GHz Quad Core',
            'price' => rand(79999, 149999),
            'description' => 'Lorem'.$i.'ipsum elit.
             veniam!',

        ]);

    }
     // Tablets
     for ($i=1; $i < 9 ; $i++) {
        product::create([
            'category_id'=> "4",
            'name' => 'Tablets'.$i,
            'slug'  => 'tablet'.$i,
            'details' => [16, 32, 64][array_rand([16, 32, 64])].'GB ,5'.  [10, 11,12][array_rand([10,11, 12])] .'inch Screen , 4GHz Quad Core',
            'price' => rand(499999, 149999),
            'description' => 'Lorem'.$i.'ipsum elit.
              tenetur  veniam!',

        ]);

    }





     // TV
     for ($i=1; $i < 9 ; $i++) {
        product::create([
            'category_id'=> "5",
            'name' => 'TV'.$i,
            'slug'  => 'tv-'.$i,
            'details' => [46, 50, 60][array_rand([7, 8, 9])].'inch Screen, Smart Tv, 4K'.  [7, 8, 9][array_rand([7, 8, 9])] .'TB SSD, 32GB RAM',
            'price' => rand(79999, 149999),
            'description' => 'Lorem'.$i.'ipsum elit.
              veniam!',

        ]);

    }

     // Camera
     for ($i=1; $i < 9 ; $i++) {
        product::create([
            'category_id'=> "6",
            'name' => ' Camera'.$i,
            'slug'  => 'camera'.$i,
            'details' =>"Full Frame DSLR, with 18-55mm Kit Lens.",
            'price' => rand(79999, 249999),
            'description' => 'Lorem'.$i.'ipsum elit.
              tenetur  veniam!',

        ]);

    }

     // Appliance
     for ($i=1; $i < 9 ; $i++) {
        product::create([
            'category_id'=> "7",
            'name' => 'Appliance'.$i,
            'slug'  => 'appliance-'.$i,
            'details' =>'lorem  harum nihil repellat. veniam!',
            'price' => rand(149999, 149999),
            'description' => 'Lorem'.$i.'ipsum elit.
              repellat.  veniam!',

        ]);

    }




    }
}
