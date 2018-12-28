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
                        ['name' => 'Banana mousse', 'path' => 'images/foods/banana-mousse.jpg', 'product_id' => 1],
                        ['name' => 'Bánh bích quy', 'path' => 'images/foods/banh-bich-quy.jpg', 'product_id' => 2],
                        ['name' => 'Bánh muffin', 'path' => 'images/foods/banh-muffin.jpg', 'product_id' => 3],
                        ['name' => 'Bánh phô mai', 'path' => 'images/foods/banh-pho-mai.jpg', 'product_id' => 4],
                        ['name' => 'Bánh plan', 'path' => 'images/foods/banh-plan.jpg', 'product_id' => 5],
                        ['name' => 'Bánh rán doraemon', 'path' => 'images/foods/banh-ran-doraemon.jpg', 'product_id' => 6],
                        ['name' => 'Bánh tiramisu', 'path' => 'images/foods/banh-tiramisu.jpg', 'product_id' => 7],
                        ['name' => 'Brownie chocolate', 'path' => 'images/foods/brownie-chocolate.jpg', 'product_id' => 8],
                        ['name' => 'Cupcake', 'path' => 'images/foods/cupcake.jpg', 'product_id' => 9],
                        ['name' => 'Tano Bakery', 'path' => 'images/foods/tano-bakery.jpg', 'product_id' => 10],
                        ['name' => 'Bánh ép huế', 'path' => 'images/foods/banh-ep-hue.jpg', 'product_id' => 11],
                        ['name' => 'Bánh tráng trộn', 'path' => 'images/foods/banh-trang-tron.jpg', 'product_id' => 12],
                        ['name' => 'Bánh tráng trứng', 'path' => 'images/foods/banh-trang-trung.jpg', 'product_id' => 13],
                        ['name' => 'Bún đậu mắm tôm', 'path' => 'images/foods/bun-dau-mam-tom.jpg', 'product_id' => 14],
                        ['name' => 'Chân gà chua cay', 'path' => 'images/foods/chan-ga-chua-cay.jpg', 'product_id' => 15],
                        ['name' => 'Cút lộn xào me', 'path' => 'images/foods/cut-lon-xao-me.jpg', 'product_id' => 16],
                        ['name' => 'Khô gà lá chanh', 'path' => 'images/foods/kho-ga-la-chanh.jpg', 'product_id' => 17],
                        ['name' => 'Nem chua rán', 'path' => 'images/foods/nem-chua-ran.jpg', 'product_id' => 18],
                        ['name' => 'Phô mai que', 'path' => 'images/foods/pho-mai-que.jpg', 'product_id' => 19],
                        ['name' => 'Sushi', 'path' => 'images/foods/sushi.jpg', 'product_id' => 20],
                        ['name' => 'Chè bắp', 'path' => 'images/foods/che-bap.jpg', 'product_id' => 21],
                        ['name' => 'Chè bưởi', 'path' => 'images/foods/che-buoi.jpg', 'product_id' => 22],
                        ['name' => 'Chè đậu đen', 'path' => 'images/foods/che-dau-den.jpg', 'product_id' => 23],
                        ['name' => 'Chè hạt sen', 'path' => 'images/foods/che-hat-sen.jpg', 'product_id' => 24],
                        ['name' => 'Chè khúc bạch', 'path' => 'images/foods/che-khuc-bach.jpg', 'product_id' => 25],
                        ['name' => 'Chè sữa chua mít', 'path' => 'images/foods/che-sua-chua-mit.jpg', 'product_id' => 26],
                        ['name' => 'Chè sữa đậu đỏ khoai môn', 'path' => 'images/foods/che-sua-dau-do-khoai-mon.jpg', 'product_id' => 27],
                        ['name' => 'Chè thái', 'path' => 'images/foods/che-thai.jpg', 'product_id' => 28],
                        ['name' => 'Chè trôi nước', 'path' => 'images/foods/che-troi-nuoc.jpg', 'product_id' => 29],
                        ['name' => 'Chè vải thạch lá nếp', 'path' => 'images/foods/che-vai-thach-la-nep.jpg', 'product_id' => 30],
                        ['name' => 'Hamburger bò', 'path' => 'images/foods/hamburger-bo.jpg', 'product_id' => 31],
                        ['name' => 'Hamburger gà', 'path' => 'images/foods/hamburger-ga.jpg', 'product_id' => 32],
                        ['name' => 'Hamburger tôm', 'path' => 'images/foods/hamburger-tom.jpg', 'product_id' => 33],
                        ['name' => 'Pizza bò', 'path' => 'images/foods/pizza-bo.jpg', 'product_id' => 34],
                        ['name' => 'Pizza hải sản', 'path' => 'images/foods/pizza-hai-san.jpg', 'product_id' => 35],
                        ['name' => 'Pizza phô mai', 'path' => 'images/foods/pizza-pho-mai.jpg', 'product_id' => 36],
                        ['name' => 'Pizza thịt ba chỉ', 'path' => 'images/foods/pizza-thit-ba-chi.jpg', 'product_id' => 37],
                        ['name' => 'Pizza xúc xích', 'path' => 'images/foods/pizza-xuc-xich.jpg', 'product_id' => 38],
                        ['name' => 'Ốc bươu nhồi thịt', 'path' => 'images/foods/oc-buou-nhoi-thit.jpg', 'product_id' => 39],
                        ['name' => 'Ốc bươu nướng muối', 'path' => 'images/foods/oc-buou-nuong-muoi.jpg', 'product_id' => 40],
                        ['name' => 'Ốc cà na xào bơ tỏi', 'path' => 'images/foods/oc-ca-na-xao-bo-toi.jpg', 'product_id' => 41],
                        ['name' => 'Ốc hương cháy tỏi', 'path' => 'images/foods/oc-huong-chay-toi.jpg', 'product_id' => 42],
                        ['name' => 'Ốc hương rang muối', 'path' => 'images/foods/oc-huong-rang-muoi.jpg', 'product_id' => 43],
                        ['name' => 'Ốc hương xào bắp bơ', 'path' => 'images/foods/oc-huong-xao-bap-bo.jpg', 'product_id' => 44],
                        ['name' => 'Ốc hút', 'path' => 'images/foods/oc-hut.jpg', 'product_id' => 45],
                        ['name' => 'Ốc len xào dừa', 'path' => 'images/foods/oc-len-xao-dua.jpg', 'product_id' => 46],
                        ['name' => 'Ốc mỡ xào me', 'path' => 'images/foods/oc-mo-xao-me.jpg', 'product_id' => 47],
                        ['name' => 'Ốc móng tay nướng mỡ hành', 'path' => 'images/foods/oc-mong-tay-nuong-mo-hanh.jpg', 'product_id' => 48],
                        ['name' => 'Ba chỉ nướng', 'path' => 'images/foods/ba-chi-nuong.jpg', 'product_id' => 49],
                        ['name' => 'Bạch tuộc nướng', 'path' => 'images/foods/bach-tuoc-nuong.jpg', 'product_id' => 50],
                        ['name' => 'Bò cuộn nấm kim châm nướng', 'path' => 'images/foods/bo-cuon-nam-kim-cham-nuong.jpg', 'product_id' => 51],
                        ['name' => 'Cá kèo nướng sa tế', 'path' => 'images/foods/ca-keo-nuong-sa-te.jpg', 'product_id' => 52],
                        ['name' => 'Chân gà nướng', 'path' => 'images/foods/chan-ga-nuong.jpg', 'product_id' => 53],
                        ['name' => 'Mực nướng', 'path' => 'images/foods/muc-nuong.jpg', 'product_id' => 54],
                        ['name' => 'Tôm nướng', 'path' => 'images/foods/tom-nuong.jpg', 'product_id' => 55],
                        ['name' => 'Cánh gà nướng', 'path' => 'images/foods/canh-ga-nuong.jpg', 'product_id' => 56],
                        ['name' => 'Coca', 'path' => 'images/foods/coca.jpg', 'product_id' => 57],
                        ['name' => 'Pepsi', 'path' => 'images/foods/pepsi.jpg', 'product_id' => 58],
                        ['name' => 'Seven up', 'path' => 'images/foods/seven-up.jpg', 'product_id' => 59],
                        ['name' => 'Fanta', 'path' => 'images/foods/fanta.jpg', 'product_id' => 60],
                        ['name' => 'Redbull', 'path' => 'images/foods/redbull.jpg', 'product_id' => 61],
                        ['name' => 'Bí đao', 'path' => 'images/foods/bi-dao.jpg', 'product_id' => 62],
                        ['name' => 'Cam', 'path' => 'images/foods/cam.jpg', 'product_id' => 63],
                        ['name' => 'Cà rốt', 'path' => 'images/foods/ca-rot.jpg', 'product_id' => 64],
                        ['name' => 'Chanh dây', 'path' => 'images/foods/chanh-day.jpg', 'product_id' => 65],
                        ['name' => 'Chanh tươi', 'path' => 'images/foods/chanh-tuoi.jpg', 'product_id' => 66],
                        ['name' => 'Dâu tây', 'path' => 'images/foods/dau-tay.jpg', 'product_id' => 67],
                        ['name' => 'Dưa hấu', 'path' => 'images/foods/dua-hau.jpg', 'product_id' => 68],
                        ['name' => 'Dưa leo', 'path' => 'images/foods/dua-leo.jpg', 'product_id' => 69],
                        ['name' => 'Nha đam', 'path' => 'images/foods/nha-dam.jpg', 'product_id' => 70],
                        ['name' => 'Thơm', 'path' => 'images/foods/thom.jpg', 'product_id' => 71],
                        ['name' => 'Sữa tươi trân châu đường đen', 'path' => 'images/foods/thom.jpg', 'product_id' => 72],
                        ['name' => 'Trà sữa bạc hà', 'path' => 'images/foods/tra-sua-bac-ha.jpg', 'product_id' => 73],
                        ['name' => 'Trà sữa đá xay', 'path' => 'images/foods/tra-sua-da-xay.jpg', 'product_id' => 74],
                        ['name' => 'Trà sữa đào', 'path' => 'foods/tra-sua-dao.jpg', 'product_id' => 75],
                        ['name' => 'Trà sữa dâu', 'path' => 'images/foods/tra-sua-dau.jpg', 'product_id' => 76],
                        ['name' => 'Trà sữa khoai môn', 'path' => 'images/foods/tra-sua-khoai-mon.jpg', 'product_id' => 77],
                        ['name' => 'Trà sữa kiwi', 'path' => 'images/foods/tra-sua-kiwi.jpg', 'product_id' => 78],
                        ['name' => 'Trà sữa socola', 'path' => 'images/foods/tra-sua-socola.jpg', 'product_id' => 79],
                        ['name' => 'Trà sữa thái xanh', 'path' => 'images/foods/tra-sua-thai-xanh.jpg', 'product_id' => 80],
                        ['name' => 'Trà sữa truyền thống', 'path' => 'images/foods/tra-sua-truyen-thong.jpg', 'product_id' => 81],
                        ['name' => 'Aquafina', 'path' => 'images/foods/aquafina.jpg', 'product_id' => 82],
                        ['name' => 'Đá me', 'path' => 'images/foods/da-me.jpg', 'product_id' => 83],
                        ['name' => 'Nếp cẩm', 'path' => 'images/foods/nep-cam.jpg', 'product_id' => 84],
                        ['name' => 'Sâm dứa', 'path' => 'images/foods/sam-dua.jpg', 'product_id' => 85],
                        ['name' => 'Sữa bắp', 'path' => 'images/foods/sua-bap.jpg', 'product_id' => 86],
                        ['name' => 'Sữa chua', 'path' => 'images/foods/sua-chua.jpg', 'product_id' => 87],
                        ['name' => 'Trà chanh', 'path' => 'images/foods/tra-chanh.jpg', 'product_id' => 88],
                        ['name' => 'Trà đào', 'path' => 'images/foods/tra-dao.jpg', 'product_id' => 89]
                    );
        
        foreach ($images as $value) {
            Image::create($value);
        }
    }
}
