<?php

use Illuminate\Database\Seeder;
use Food\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
                            ['name' => 'Banana mousse', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Bánh bích quy', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Bánh muffin', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Bánh phô mai', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Bánh plan', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Bánh rán doraemon', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Bánh tiramisu', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Brownie chocolate', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Cupcake', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Tano Bakery', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '3'],
                            ['name' => 'Bánh ép huế', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Bánh tráng trộn', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Bánh tráng trứng', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Bún đậu mắm tôm', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Chân gà chua cay', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Cút lộn xào me', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Khô gà lá chanh', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Nem chua rán', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Phô mai que', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Sushi', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '4'],
                            ['name' => 'Chè bắp', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè bưởi', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè đậu đen', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè hạt sen', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè khúc bạch', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè sữa chua mít', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè sữa đậu đỏ khoai môn', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè thái', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè trôi nước', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Chè vải thạch lá nếp', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '5'],
                            ['name' => 'Hamburger bò', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '6'],
                            ['name' => 'Hamburger gà', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '6'],
                            ['name' => 'Hamburger tôm', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '6'],
                            ['name' => 'Pizza bò', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '6'],
                            ['name' => 'Pizza hải sản', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '6'],
                            ['name' => 'Pizza phô mai', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '6'],
                            ['name' => 'Pizza thịt ba chỉ', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '6'],
                            ['name' => 'Pizza xúc xích', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '6'],
                            ['name' => 'Ốc bươu nhồi thịt', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc bươu nướng muối', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc cà na xào bơ tỏi', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc hương cháy tỏi', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc hương rang muối', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc hương xào bắp bơ', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc hút', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc len xào dừa', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc mỡ xào me', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ốc móng tay nướng mỡ hành', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '7'],
                            ['name' => 'Ba chỉ nướng', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '8'],
                            ['name' => 'Bạch tuộc nướng', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '8'],
                            ['name' => 'Bò cuộn nấm kim châm nướng', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '8'],
                            ['name' => 'Cá kèo nướng sa tế', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '8'],
                            ['name' => 'Chân gà nướng', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '8'],
                            ['name' => 'Mực nướng', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '8'],
                            ['name' => 'Tôm nướng', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '8'],
                            ['name' => 'Cánh gà nướng', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '8'],
                            ['name' => 'Coca', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '9'],
                            ['name' => 'Pepsi', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '9'],
                            ['name' => 'Seven up', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '9'],
                            ['name' => 'Fanta', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '9'],
                            ['name' => 'Redbull', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '9'],
                            ['name' => 'Bí đao', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Cam', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Cà rốt', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Chanh dây', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Chanh tươi', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Dâu tây', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Dưa hấu', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Dưa leo', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Nha đam', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Thơm', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '10'],
                            ['name' => 'Sữa tươi trân châu đường đen', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa bạc hà', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa đá xay', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa đào', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa dâu', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa khoai môn', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa kiwi', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa socola', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa thái xanh', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Trà sữa truyền thống', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '11'],
                            ['name' => 'Aquafina', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '12'],
                            ['name' => 'Đá me', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '12'],
                            ['name' => 'Nếp cẩm', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '12'],
                            ['name' => 'Sâm dứa', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '12'],
                            ['name' => 'Sữa bắp', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '12'],
                            ['name' => 'Sữa chua', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '12'],
                            ['name' => 'Trà chanh', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '12'],
                            ['name' => 'Trà đào', 'description' => NULL, 'price' => '20000', 'quantity' => '20', 'category_id' => '12']
                        );
        
        foreach ($products as $value) {
            Product::create($value);
        }
    }
}
