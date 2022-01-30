<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
        	'name' => 'LG mobile',
        	'price' => '200',
        	'description' =>'a smart phone with 4gb ram and much more features',
        	'category' => 'mobile',
            'gallery' => 'LG-PHONE-2.jpg',
            'points' => '20',
            'replace_points' => '400'
        	// 'gallery' => 'https://www.bing.com/images/search?view=detailV2&ccid=nZocSF4U&id=2B879B402D21BC3A90051E82C39F8723AB1A0759&thid=OIP.nZocSF4UxzfrJxdhU58fQAHaIq&mediaurl=https%3a%2f%2fwww.falaabi.com%2fwp-content%2fuploads%2f2018%2f07%2fLG-PHONE-2.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.9d9a1c485e14c737eb271761539f1f40%3frik%3dWQcaqyOHn8OCHg%26pid%3dImgRaw%26r%3d0&exph=995&expw=850&q=lg+mobile+images&simid=608015542216569203&FORM=IRPRST&ck=AEAE191876B4EFBFA98491B2E5D8DDED&selectedIndex=0&idpp=overlayview&ajaxhist=0&ajaxserp=0'
        ],
        [
        	'name' => 'Oppo mobile',
        	'price' => '300',
        	'description' =>'a smart phone with 8gb ram and much more features',
        	'category' => 'mobile',
            'gallery' => 'Oppo-PHONE.jpg',
            'points' => '30',
            'replace_points' => '600'
        	// 'gallery' => 'https://www.bing.com/images/search?view=detailV2&ccid=ESEU0WVp&id=32EA0C144473EA79FA8D411664FC7D6339B6D48F&thid=OIP.ESEU0WVp6wpYkweZz9LpxAHaIV&mediaurl=https%3a%2f%2fwww.pakmobizone.pk%2fwp-content%2fuploads%2f2018%2f09%2fOppo-A5-2.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.112114d16569eb0a58930799cfd2e9c4%3frik%3dj9S2OWN9%252fGQWQQ%26pid%3dImgRaw%26r%3d0&exph=702&expw=624&q=Oppo+Mobile&simid=607987371539778866&FORM=IRPRST&ck=B3149804F7941057FDD399ED6AB420F6&selectedIndex=22&ajaxhist=0&ajaxserp=0'
        ],
        [
        	'name' => 'Panasonic tv',
        	'price' => '400',
        	'description' =>'a smart TV with much more features',
        	'category' => 'tv',
            'gallery' => 'Panasonic-TV.jpg',
            'points' => '40',
            'replace_points' => '800'
        	// 'gallery' => 'https://www.bing.com/images/search?view=detailV2&ccid=h90GpZ5J&id=A832C79013ABBAED5074A41FD15A5FFEC94E26FF&thid=OIP.h90GpZ5JAtaLcMU2-v3Z6AHaGd&mediaurl=https%3a%2f%2ftheawesomer.com%2fphotos%2f2010%2f01%2f010710_pana_3.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.87dd06a59e4902d68b70c536fafdd9e8%3frik%3d%252fyZOyf5fWtEfpA%26pid%3dImgRaw%26r%3d0&exph=610&expw=700&q=Panasonic+3D+TV&simid=608031717062705134&FORM=IRPRST&ck=049A9E0AED5DB0C72665ED68EB8A0055&selectedIndex=20&ajaxhist=0&ajaxserp=0'
        ],
        [
        	'name' => 'Sonic tv',
        	'price' => '500',
        	'description' =>'a smart TV with much more features',
        	'category' => 'tv',
            'gallery' => 'Sonic-TV.jpg' ,
            'points' => '50',
            'replace_points' => '1000'
        	// 'gallery' => 'https://www.bing.com/images/search?view=detailV2&ccid=j287V5tz&id=3CC2555B8D8E2A3BF75268711772365B2C767BE5&thid=OIP.j287V5tz0eCCuBzoOQHOawHaFj&mediaurl=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F68%2F64%2F4e%2F68644ed846670cdad52174cfc20e86bf.jpg&cdnurl=https%3A%2F%2Fth.bing.com%2Fth%2Fid%2FR.8f6f3b579b73d1e082b81ce83901ce6b%3Frik%3D5Xt2LFs2chdxaA%26pid%3DImgRaw%26r%3D0&exph=600&expw=800&q=sonic+smart+tv+images&simid=607992126066657132&form=IRPRST&ck=EA594037E75312A672BA4536A4245A7E&selectedindex=0&qpvt=sonic+smart+tv+images&ajaxhist=0&ajaxserp=0&pivotparams=insightsToken%3Dccid_UaGmvGOy*cp_ECC3969882D200352C992176945FC904*mid_BE9322E45001B3B44C228AF30D41629E8D0138C4*simid_608034594691973075*thid_OIP.UaGmvGOyddRvtbU85!_IyBgHaFj&vt=0&sim=11&iss=VSI&ajaxhist=0&ajaxserp=0'
        ],
        [
        	'name' => 'LG fridge',
        	'price' => '700',
        	'description' =>'a fridge with much more features',
        	'category' => 'fridge',
            'gallery' => 'LG-fridge.jpg',
            'points' => '70',
            'replace_points' => '1400'
        	// 'gallery' => 'https://www.bing.com/images/search?view=detailV2&ccid=yTTDo3dZ&id=BD776E2569B35F6B46DF77C433C29F476B191F90&thid=OIP.yTTDo3dZzkTeF0P65-yJsAHaJZ&mediaurl=https%3a%2f%2fwww.harveynorman.com.au%2fblog%2fassets%2fLG-910-Litre-InstaView-Fridge.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.c934c3a37759ce44de1743fae7ec89b0%3frik%3dkB8Za0efwjPEdw%26pid%3dImgRaw%26r%3d0&exph=1528&expw=1204&q=LG+Fridge&simid=607995789658557771&FORM=IRPRST&ck=3C8FD420B211E619A9D21A5170F38994&selectedIndex=1&ajaxhist=0&ajaxserp=0'
        ],
        [
            'name' => 'ASUS ROG',
            'price' => '700',
            'description' =>'Four ASUS ROG Gaming Laptops For Four Types Of Gamers',
            'category' => 'Laptop',
            'gallery' => 'ASUS ROG.jpg',
            'points' => '70',
            'replace_points' => '1400'
        ],
        [
            'name' => 'Asus ROG Zephyrus',
            'price' => '800',
            'description' =>'ASUS ROG Zephyrus Duo 15: Gaming laptop with second-screen',
            'category' => 'Laptop',
            'gallery' => 'Asus ROG Zephyrus.jpg',
            'points' => '80',
            'replace_points' => '1600'
        ],
        [
            'name' => 'Playstation-VR',
            'price' => '900',
            'description' =>'Playstation VR Wallpapers Images Photos Pictures Backgrounds',
            'category' => 'Playstation',
            'gallery' => 'Playstation-VR.jpg',
            'points' => '90',
            'replace_points' => '1800'
        ],
        [
            'name' => 'Nextbase 212 Lite',
            'price' => '400',
            'description' =>'Full 1080p HD In-Car Dash Camera DVR – Night Vision Front Cam – 140° Viewing Angle – Black',
            'category' => 'Camera',
            'gallery' => 'Nextbase 212 Lite.jpg',
            'points' => '40',
            'replace_points' => '800'
        ],
        [
            'name' => 'wireless-headset',
            'price' => '100',
            'description' =>'playstation-gold-wireless-headset-rose-gold-edition-604801.1-500x682',
            'category' => 'Headphone',
            'gallery' => 'wireless-headset.jpg',
            'points' => '10',
            'replace_points' => '200'
        ],
        [
            'name' => 'Tab-A7-LIte',
            'price' => '50',
            'description' =>'Samsung Galaxy Tab A7 Lite',
            'category' => 'Tablet',
            'gallery' => 'Tab-A7-LIte.jpg',
            'points' => '5',
            'replace_points' => '100'
        ]

         ]);
    }
}


