<?php

use Illuminate\Database\Seeder;
use Food\Image;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = array(
                        ['name' => 'Banana mousse', 'path' => '/public/images/foods/banana-mousse.jpg', 'product_id' => 1],
                        ['name' => 'Bánh bích quy', 'path' => '/public/images/foods/banh-bich-quy.jpg', 'product_id' => 2],
                        ['name' => 'Bánh muffin', 'path' => '/public/images/foods/banh-muffin.jpg', 'product_id' => 3],
                        ['name' => 'Bánh phô mai', 'path' => '/public/images/foods/banh-pho-mai.jpg', 'product_id' => 4],
                        ['name' => 'Bánh plan', 'path' => '/public/images/foods/banh-plan.jpg', 'product_id' => 5],
                        ['name' => 'Bánh rán doraemon', 'path' => '/public/images/foods/banh-ran-doraemon.jpg', 'product_id' => 6],
                        ['name' => 'Bánh tiramisu', 'path' => '/public/images/foods/banh-tiramisu.jpg', 'product_id' => 7],
                        ['name' => 'Brownie chocolate', 'path' => '/public/images/foods/brownie-chocolate.jpg', 'product_id' => 8],
                        ['name' => 'Cupcake', 'path' => '/public/images/foods/cupcake.jpg', 'product_id' => 9],
                        ['name' => 'Tano Bakery', 'path' => '/public/images/foods/tano-bakery.jpg', 'product_id' => 10],
                        ['name' => 'Bánh ép huế', 'path' => '/public/images/foods/banh-ep-hue.jpg', 'product_id' => 11],
                        ['name' => 'Bánh tráng trộn', 'path' => '/public/images/foods/banh-trang-tron.jpg', 'product_id' => 12],
                        ['name' => 'Bánh tráng trứng', 'path' => '/public/images/foods/banh-trang-trung.jpg', 'product_id' => 13],
                        ['name' => 'Bún đậu mắm tôm', 'path' => '/public/images/foods/bun-dau-mam-tom.jpg', 'product_id' => 14],
                        ['name' => 'Chân gà chua cay', 'path' => '/public/images/foods/chan-ga-chua-cay.jpg', 'product_id' => 15],
                        ['name' => 'Cút lộn xào me', 'path' => '/public/images/foods/cut-lon-xao-me.jpg', 'product_id' => 16],
                        ['name' => 'Khô gà lá chanh', 'path' => '/public/images/foods/kho-ga-la-chanh.jpg', 'product_id' => 17],
                        ['name' => 'Nem chua rán', 'path' => '/public/images/foods/nem-chua-ran.jpg', 'product_id' => 18],
                        ['name' => 'Phô mai que', 'path' => '/public/images/foods/pho-mai-que.jpg', 'product_id' => 19],
                        ['name' => 'Sushi', 'path' => '/public/images/foods/sushi.jpg', 'product_id' => 20],
                        ['name' => 'Chè bắp', 'path' => '/public/images/foods/che-bap.jpg', 'product_id' => 21],
                        ['name' => 'Chè bưởi', 'path' => '/public/images/foods/che-buoi.jpg', 'product_id' => 22],
                        ['name' => 'Chè đậu đen', 'path' => '/public/images/foods/che-dau-den.jpg', 'product_id' => 23],
                        ['name' => 'Chè hạt sen', 'path' => '/public/images/foods/che-hat-sen.jpg', 'product_id' => 24],
                        ['name' => 'Chè khúc bạch', 'path' => '/public/images/foods/che-khuc-bach.jpg', 'product_id' => 25],
                        ['name' => 'Chè sữa chua mít', 'path' => '/public/images/foods/che-sua-chua-mit.jpg', 'product_id' => 26],
                        ['name' => 'Chè sữa đậu đỏ khoai môn', 'path' => '/public/images/foods/che-sua-dau-do-khoai-mon.jpg', 'product_id' => 27],
                        ['name' => 'Chè thái', 'path' => '/public/images/foods/che-thai.jpg', 'product_id' => 28],
                        ['name' => 'Chè trôi nước', 'path' => '/public/images/foods/che-troi-nuoc.jpg', 'product_id' => 29],
                        ['name' => 'Chè vải thạch lá nếp', 'path' => '/public/images/foods/che-vai-thach-la-nep.jpg', 'product_id' => 30],
                        ['name' => 'Hamburger bò', 'path' => '/public/images/foods/hamburger-bo.jpg', 'product_id' => 31],
                        ['name' => 'Hamburger gà', 'path' => '/public/images/foods/hamburger-ga.jpg', 'product_id' => 32],
                        ['name' => 'Hamburger tôm', 'path' => '/public/images/foods/hamburger-tom.jpg', 'product_id' => 33],
                        ['name' => 'Pizza bò', 'path' => '/public/images/foods/pizza-bo.jpg', 'product_id' => 34],
                        ['name' => 'Pizza hải sản', 'path' => '/public/images/foods/pizza-hai-san.jpg', 'product_id' => 35],
                        ['name' => 'Pizza phô mai', 'path' => '/public/images/foods/pizza-pho-mai.jpg', 'product_id' => 36],
                        ['name' => 'Pizza thịt ba chỉ', 'path' => '/public/images/foods/pizza-thit-ba-chi.jpg', 'product_id' => 37],
                        ['name' => 'Pizza xúc xích', 'path' => '/public/images/foods/pizza-xuc-xich.jpg', 'product_id' => 38],
                        ['name' => 'Ốc bươu nhồi thịt', 'path' => '/public/images/foods/oc-buou-nhoi-thit.jpg', 'product_id' => 39],
                        ['name' => 'Ốc bươu nướng muối', 'path' => '/public/images/foods/oc-buou-nuong-muoi.jpg', 'product_id' => 40],
                        ['name' => 'Ốc cà na xào bơ tỏi', 'path' => '/public/images/foods/oc-ca-na-xao-bo-toi.jpg', 'product_id' => 41],
                        ['name' => 'Ốc hương cháy tỏi', 'path' => '/public/images/foods/oc-huong-chay-toi.jpg', 'product_id' => 42],
                        ['name' => 'Ốc hương rang muối', 'path' => '/public/images/foods/oc-huong-rang-muoi.jpg', 'product_id' => 43],
                        ['name' => 'Ốc hương xào bắp bơ', 'path' => '/public/images/foods/oc-huong-xao-bap-bo.jpg', 'product_id' => 44],
                        ['name' => 'Ốc hút', 'path' => '/public/images/foods/oc-hut.jpg', 'product_id' => 45],
                        ['name' => 'Ốc len xào dừa', 'path' => '/public/images/foods/oc-len-xao-dua.jpg', 'product_id' => 46],
                        ['name' => 'Ốc mỡ xào me', 'path' => '/public/images/foods/oc-mo-xao-me.jpg', 'product_id' => 47],
                        ['name' => 'Ốc móng tay nướng mỡ hành', 'path' => '/public/images/foods/oc-mong-tay-nuong-mo-hanh.jpg', 'product_id' => 48],
                        ['name' => 'Ba chỉ nướng', 'path' => '/public/images/foods/ba-chi-nuong.jpg', 'product_id' => 49],
                        ['name' => 'Bạch tuộc nướng', 'path' => '/public/images/foods/bach-tuoc-nuong.jpg', 'product_id' => 50],
                        ['name' => 'Bò cuộn nấm kim châm nướng', 'path' => '/public/images/foods/bo-cuon-nam-kim-cham-nuong.jpg', 'product_id' => 51],
                        ['name' => 'Cá kèo nướng sa tế', 'path' => '/public/images/foods/ca-keo-nuong-sa-te.jpg', 'product_id' => 52],
                        ['name' => 'Chân gà nướng', 'path' => '/public/images/foods/chan-ga-nuong.jpg', 'product_id' => 53],
                        ['name' => 'Mực nướng', 'path' => '/public/images/foods/muc-nuong.jpg', 'product_id' => 54],
                        ['name' => 'Tôm nướng', 'path' => '/public/images/foods/tom-nuong.jpg', 'product_id' => 55],
                        ['name' => 'Cánh gà nướng', 'path' => '/public/images/foods/canh-ga-nuong.jpg', 'product_id' => 56],
                        ['name' => 'Coca', 'path' => '/public/images/foods/coca.jpg', 'product_id' => 57],
                        ['name' => 'Pepsi', 'path' => '/public/images/foods/pepsi.jpg', 'product_id' => 58],
                        ['name' => 'Seven up', 'path' => '/public/images/foods/seven-up.jpg', 'product_id' => 59],
                        ['name' => 'Fanta', 'path' => '/public/images/foods/fanta.jpg', 'product_id' => 60],
                        ['name' => 'Redbull', 'path' => '/public/images/foods/redbull.jpg', 'product_id' => 61],
                        ['name' => 'Bí đao', 'path' => '/public/images/foods/bi-dao.jpg', 'product_id' => 62],
                        ['name' => 'Cam', 'path' => '/public/images/foods/cam.jpg', 'product_id' => 63],
                        ['name' => 'Cà rốt', 'path' => '/public/images/foods/ca-rot.jpg', 'product_id' => 64],
                        ['name' => 'Chanh dây', 'path' => '/public/images/foods/chanh-day.jpg', 'product_id' => 65],
                        ['name' => 'Chanh tươi', 'path' => '/public/images/foods/chanh-tuoi.jpg', 'product_id' => 66],
                        ['name' => 'Dâu tây', 'path' => '/public/images/foods/dau-tay.jpg', 'product_id' => 67],
                        ['name' => 'Dưa hấu', 'path' => '/public/images/foods/dua-hau.jpg', 'product_id' => 68],
                        ['name' => 'Dưa leo', 'path' => '/public/images/foods/dua-leo.jpg', 'product_id' => 69],
                        ['name' => 'Nha đam', 'path' => '/public/images/foods/nha-dam.jpg', 'product_id' => 70],
                        ['name' => 'Thơm', 'path' => '/public/images/foods/thom.jpg', 'product_id' => 71],
                        ['name' => 'Sữa tươi trân châu đường đen', 'path' => '/public/images/foods/thom.jpg', 'product_id' => 72],
                        ['name' => 'Trà sữa bạc hà', 'path' => '/public/images/foods/tra-sua-bac-ha.jpg', 'product_id' => 73],
                        ['name' => 'Trà sữa đá xay', 'path' => '/public/images/foods/tra-sua-da-xay.jpg', 'product_id' => 74],
                        ['name' => 'Trà sữa đào', 'path' => '/public/images/foods/tra-sua-dao.jpg', 'product_id' => 75],
                        ['name' => 'Trà sữa dâu', 'path' => '/public/images/foods/tra-sua-dau.jpg', 'product_id' => 76],
                        ['name' => 'Trà sữa khoai môn', 'path' => '/public/images/foods/tra-sua-khoai-mon.jpg', 'product_id' => 77],
                        ['name' => 'Trà sữa kiwi', 'path' => '/public/images/foods/tra-sua-kiwi.jpg', 'product_id' => 78],
                        ['name' => 'Trà sữa socola', 'path' => '/public/images/foods/tra-sua-socola.jpg', 'product_id' => 79],
                        ['name' => 'Trà sữa thái xanh', 'path' => '/public/images/foods/tra-sua-thai-xanh.jpg', 'product_id' => 80],
                        ['name' => 'Trà sữa truyền thống', 'path' => '/public/images/foods/tra-sua-truyen-thong.jpg', 'product_id' => 81],
                        ['name' => 'Aquafina', 'path' => '/public/images/foods/aquafina.jpg', 'product_id' => 82],
                        ['name' => 'Đá me', 'path' => '/public/images/foods/da-me.jpg', 'product_id' => 83],
                        ['name' => 'Nếp cẩm', 'path' => '/public/images/foods/nep-cam.jpg', 'product_id' => 84],
                        ['name' => 'Sâm dứa', 'path' => '/public/images/foods/sam-dua.jpg', 'product_id' => 85],
                        ['name' => 'Sữa bắp', 'path' => '/public/images/foods/sua-bap.jpg', 'product_id' => 86],
                        ['name' => 'Sữa chua', 'path' => '/public/images/foods/sua-chua.jpg', 'product_id' => 87],
                        ['name' => 'Trà chanh', 'path' => '/public/images/foods/tra-chanh.jpg', 'product_id' => 88],
                        ['name' => 'Trà đào', 'path' => '/public/images/foods/tra-dao.jpg', 'product_id' => 89]
                    );
        
        foreach ($images as $value) {
            Image::create($value);
        }
    }
}
