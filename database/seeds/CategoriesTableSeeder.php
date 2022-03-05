<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;
class CategoryTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
            ['name'=>'LAPTOPS', 'slug'=>'laptops', 'created_at' => $now, 'updated_at'=>$now ],
            ['name'=>'DESTOPS', 'slug'=>'destops', 'created_at' => $now, 'updated_at'=>$now ],
            ['name'=>'MOBILE PHONES', 'slug'=>'mobile-phones', 'created_at' => $now, 'updated_at'=>$now ],
            ['name'=>'TABLETS', 'slug'=>'tablets', 'created_at' => $now, 'updated_at'=>$now ],
            ['name'=>'TVS', 'slug'=>'tvs', 'created_at' => $now, 'updated_at'=>$now ],
            ['name'=>'DIGITAL CAMERAS', 'slug'=>'digital-cameras', 'created_at' => $now, 'updated_at'=>$now ],
            ['name'=>'APPLIANCES', 'slug'=>'appliances', 'created_at' => $now, 'updated_at'=>$now ],
        ]);
    }
}
