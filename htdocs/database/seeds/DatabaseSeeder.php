<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        for($i=0;$i<10;$i++)
        {
        	\App\Product::create(
        		['slug'			=>'product-number-'.$i,
        		 'name'			=>'product number '.$i,
        		 'description'	=>'description product '.$i,
        		 'price' 		=>1.4*$i,
        		 'url_image_1'	=>'images/pi13.jpg',
        		 'url_image_2'	=>'images/pi13.jpg',
        		 'url_image_3'	=>'images/pi13.jpg',
        		 'url_image_4'	=>'images/pi13.jpg',
        		 'url_image_5'	=>'images/pi13.jpg',
        		 ]
        		);
        }

    }
}
