<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product([
        	'imagePath' => "http://images.epiphone.com.s3.amazonaws.com/News/2008/N_SlasgGTPR4.jpg",
        	'title' => "Slash's Guitar",
        	'description' => "Great Guitar",
        	'price' => 1000,
        ]);
        $product->save();

        $product = new App\Product([
        	'imagePath' => "http://www.rareelectricguitar.com/images/upload/Image/DSC_0691(1).jpg",
        	'title' => "Tom's Morello Guitar",
        	'description' => "Great Guitar",
        	'price' => 950,
        ]);
        $product->save();

        $product = new App\Product([
        	'imagePath' => "http://www.michaelschenkerguitars.com/wp-content/uploads/2015/05/36.png",
        	'title' => "Michael Schenker's Guitar",
        	'description' => "Great Guitar",
        	'price' => 850,
        ]);
        $product->save();

        $product = new App\Product([
        	'imagePath' => "http://www.ibanez.com/products/images/sig/pastmodels/JS1_BK.png",
        	'title' => "Joe Satriani's Guitar",
        	'description' => "Great Guitar",
        	'price' => 950,
        ]);
        $product->save();

        $product = new App\Product([
        	'imagePath' => "http://images.lilypix.com/albums/userpics/10010/normal_robb_page_guitar.jpg",
        	'title' => "Jimmy Page's Guitar",
        	'description' => "Great Guitar",
        	'price' => 1500,
        ]);
        $product->save();

    }
}
