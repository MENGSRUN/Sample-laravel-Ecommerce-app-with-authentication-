<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Lumix G100',
                "price"=>"747.99",
                "description"=>"Panasonic Lumix G100 Mirrorless Camera with 12-32mm Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://static.bhphoto.com/images/multiple_images/images500x500/1592983326_IMG_1375951.jpg",
            ],
            [
                'name' => 'Lumix BGH1',
                "price"=>"1,997.99",
                "description"=>"Panasonic Lumix BGH1 Box Cinema Camera(Body)",
                "category"=>"Cinema Camera",
                "gallery"=>"https://static.bhphoto.com/images/multiple_images/images500x500/1626803141_IMG_1575161.jpg",
            ],
            [
                'name' => 'Lumix S5 II',
                "price"=>"2,297.99",
                "description"=>"Panasonic Lumix S5 II Mirrorless Camera with 20-60mm Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://www.bhphotovideo.com/cdn-cgi/image/format=auto,fit=scale-down,width=500,quality=95/https://www.bhphotovideo.com/images/images500x500/panasonic_dc_s5m2kk_lumix_s5_ii_mirrorless_1672825656_1742429.jpg",
            ],
            [
                'name' => 'Sony a9 II',
                "price"=>"6799.99",
                "description"=>"Sony a9 II Mirrorless Camera 24-70mm f/2.8 GM II Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://static.bhphoto.com/images/multiple_images/images500x500/1653576224_IMG_1262491.jpg",
            ],
            [
                'name' => 'Sony ZV-E10',
                "price"=>"798.00",
                "description"=>"Sony ZV-E10 Mirrorless Camera with 16-50mm Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://www.bhphotovideo.com/cdn-cgi/image/format=auto,fit=scale-down,width=500,quality=95/https://www.bhphotovideo.com/images/images500x500/sony_zv_e10_mirrorless_camera_with_1627386359_1655301.jpg",
            ],
            [
                'name' => 'Sony FX30',
                "price"=>"1,798.00",
                "description"=>"Sony FX30 Digital Cinema Camera (Body)",
                "category"=>"Digital Cinema Camera",
                "gallery"=>"https://www.bhphotovideo.com/cdn-cgi/image/format=auto,fit=scale-down,width=500,quality=95/https://www.bhphotovideo.com/images/images500x500/sony_ilme_fx30_fx30_digital_cinema_camera_1664368534_1729317.jpg",
            ],
            [
                'name' => 'FUJIFILM X-T5',
                "price"=>"2,099.00",
                "description"=>"FUJIFILM X-T5 Mirrorless Camera with 18-55mm Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://static.bhphoto.com/images/multiple_images/images500x500/1667382703_IMG_1861467.jpg",
            ],
            [
                'name' => 'FUJIFILM X-S20',
                "price"=>"1,399.95",
                "description"=>"FUJIFILM X-S20 Mirrorless Camera with 15-45mm Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://static.bhphoto.com/images/multiple_images/images500x500/1684907317_IMG_2000052.jpg",
            ],
            [
                'name' => 'FUJIFILM GFX 100S',
                "price"=>"7,399",
                "description"=>"FUJIFILM GFX 100S Medium Format Mirrorless Camera 45-100mm f/4 R LM OIS WR Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://static.bhphoto.com/images/multiple_images/images500x500/1611737628_IMG_1475871.jpg",
            ],
            [
                'name' => 'Canon EOS R50',
                "price"=>"799.00",
                "description"=>"Canon EOS R50 Mirrorless Camera with 18-45mm Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://www.bhphotovideo.com/cdn-cgi/image/format=auto,fit=scale-down,width=500,quality=95/https://www.bhphotovideo.com/images/images500x500/canon_eos_r50_with_rf_s_1675814425_1748812.jpg",
            ],
            [
                'name' => 'Canon EOS R6 II',
                "price"=>"3,599.00",
                "description"=>"Canon EOS R6 Mark II Mirrorless Camera with 24-105mm f/4 Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://static.bhphoto.com/images/images500x500/1667347825_1733224.jpg",
            ],
            [
                'name' => 'Canon EOS 5D IV',
                "price"=>"3,799.00",
                "description"=>"Canon EOS 5D Mark IV DSLR Camera with 24-105mm f/4L II Lens",
                "category"=>"Mirrorless Camera",
                "gallery"=>"https://www.bhphotovideo.com/cdn-cgi/image/format=auto,fit=scale-down,width=500,quality=95/https://www.bhphotovideo.com/images/images500x500/canon_eos_5d_mark_iv_1561852319_1274706.jpg",
            ],
            ]);
    }
}
