<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #region Laptop gaming
        DB::table('products')->insert([
            "title" => "Asus TUF Gaming i5 10300H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/1/26/637787904727727554_asus-tuf-gaming-fx506lh-den-2022-dd.jpg",
            "price" => "16490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Acer Nitro Gaming i5 11400H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/12/6/637743874726278183_acer-nitro-gaming-an515-57-56xx-den-dd.jpg",
            "price" => "21490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "MSI GF63 Thin i5 11400H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/1/26/637788084553132269_msi-gf63-thin-den-dd.jpg",
            "price" => "18490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "HP Gaming VICTUS R5 5600H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/9/24/637680814118280665_hp-gaming-victus-16-xam-bac-dd.jpg",
            "price" => "20490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "MSI Gaming Bravo 15 R5 5600H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/3/9/637824255388988299_msi-gaming-bravo-15-b5dx-den-dd.jpg",
            "price" => "16190000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Acer Aspire Gaming R5 5500U",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/18/637728596076020587_acer-aspire-gaming-a715-42g-r1sb-r5-5500u-den-dd.jpg",
            "price" => "17990000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Asus TUF Gaming R7 6800H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/5/25/637890904862675050_asus-tuf-gaming-fa507-den-dd-rtx3050.jpg",
            "price" => "23490000",
            "discount" => "10",
            "description" => "this is description"
        ]);


        DB::table('products')->insert([
            "title" => "HP Gaming VICTUS 16 i5 11400H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/9/24/637680814118280665_hp-gaming-victus-16-xam-bac-dd.jpg",
            "price" => "22990000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Lenovo IdeaPad Gaming 3 R7 5800H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/30/638001263101298131_lenovo-ideapad-gaming-3-15ach6-dd-led-trang.jpg",
            "price" => "20490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Dell Gaming G15 5511 i5 11400H",
            "category_id" => 1,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/12/2/637740434484685599_dell-gaming-g15-5511-xam-dd.jpg",
            "price" => "22490000",
            "discount" => "10",
            "description" => "this is description"
        ]);
        #endregion
        #region Laptop Văn phòng
        DB::table('products')->insert([
            "title" => "HP 240 G8 i5 1135G7",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/6/3/637583197352498860_hp-240-g8-bac-dd.jpg",
            "price" => "14790000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "HP Pavilion 15 i5 1240P",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/12/6/637743874726278183_acer-nitro-gaming-an515-57-56xx-den-dd.jpg",
            "price" => "21490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Lenovo Ideapad 3 i3 1005G1",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/5/16/637883111212313580_lenovo-ideapad-3-i3-1005g1-nk-xam-ddjpg.jpg",
            "price" => "7990000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Lenovo ThinkBook 15 i7 1165G7",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/1/18/637465601998291992_lenovo-thinkbook-15-g2-xam-dd.png",
            "price" => "24590000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "HP Envy 13 i5 1135G7",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/9/18/637360390392454557_hp-envy-13-vang-dd.png",
            "price" => "21190000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Asus Vivobook D515DA R3 3250U",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/3/3/637503832634005581_asus-vivobook-x515-print-bac-dd.jpg",
            "price" => "9490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Asus Vivobook A415EA i3 1125G4",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/8/20/637650927789278219_asus-vivobook-a415-print-bac-dd.jpg",
            "price" => "13590000",
            "discount" => "10",
            "description" => "this is description"
        ]);


        DB::table('products')->insert([
            "title" => "Asus Vivobook Pro N7600ZE i7 12700H",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/19/637991810727336456_asus-vivobook-pro-n7600-bac-dd.jpg",
            "price" => "38990000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Lenovo ThinkPad P15s i5 1135G7",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/8/15/637961812298124660_lenovo-thinkpad-p15s-g2-dd.jpg",
            "price" => "34790000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Lenovo 100e Gen 2 Celeron N4020",
            "category_id" => 2,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/30/637738603461090929_lenovo-100e-gen-2-n4020-win-10-pro-dd.jpg",
            "price" => "7990000",
            "discount" => "10",
            "description" => "this is description"
        ]);
        #endregion
        #region Tai Nghe
        DB::table('products')->insert([
            "title" => "Tai nghe nhét tai ivalue M-13",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/4/14/637224540254050984_anh-dai-dien.jpg",
            "price" => "250000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Tai nghe bluetooth ivalue Y933",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2019/12/17/637121948960271224_HASP-Tainghe-ivalue-00630784-2.jpg",
            "price" => "350000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Tai nghe bluetooth TWS Belkin",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/25/637734475067889592_avt.jpg",
            "price" => "2590000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Tai nghe gaming Sony MDR có mic",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/11/637695674664494745_MDR-ZX110APBCE-01.jpg",
            "price" => "540000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Tai nghe gaming Rapoo VH160 có mic",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/8/637719900945146267_HASP-00774722-dd.jpg",
            "price" => "449000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Tai nghe Bluetooth JBL T115TWSREDAS",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/23/637732744056652714_avt.jpg",
            "price" => "1490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Tai nghe Sony Extra Bass",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/25/637734461429838739_avt.jpg",
            "price" => "199000",
            "discount" => "10",
            "description" => "this is description"
        ]);


        DB::table('products')->insert([
            "title" => "Tai nghe chụp tai Sennheiser HD206",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/25/637734458601534435_avt.jpg",
            "price" => "669000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Tai nghe Beats Fit Pro",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/1/22/637784570363490043_tai-nghe-beats-fit-pro-true-wireless-earbuds-dd.jpg",
            "price" => "4490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Tai nghe bluetooth Rapoo S120",
            "category_id" => 3,
            "thumbnail" => "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/25/637734480259987851_avt.jpg",
            "price" => "450000",
            "discount" => "10",
            "description" => "this is description"
        ]);
        #endregion
        #region Bàn phím
        DB::table('products')->insert([
            "title" => "Bàn phím cơ có dây Dareu EK87 TKL",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/5/_/5.1_lai_1.jpg",
            "price" => "490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Bàn phím Bluetooth Logitech K380",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/3/_/3.1.jpg",
            "price" => "650000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Bàn Phím Cơ Predator Aethon TKL 301",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/b/a/ban_ph_m.png",
            "price" => "2590000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Bàn phím Apple Magic Keyboard 2021 MK2A3",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/3/_/3.1_1.jpg",
            "price" => "2350000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Bàn phím cơ không dây Dareu EK807G TKL",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/5/_/5.2.jpg",
            "price" => "650000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Bàn phím không dây Logitech MX Keys mini",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/c/v/cvvvvvok.jpg",
            "price" => "2490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Bàn phím cơ Rapoo V500SE Rainbow",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/4/2/42_1_52.jpg",
            "price" => "550000",
            "discount" => "10",
            "description" => "this is description"
        ]);


        DB::table('products')->insert([
            "title" => "Bàn phím cơ AKKO 3087 V2 BILIBILI",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/6/_/6.13.jpg",
            "price" => "1490000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Bàn phím cơ AKKO AKKO 3198 V2",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/6/_/6.15.jpg",
            "price" => "1590000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Bàn phím cơ AKKO 3108 V2 Steam Engine",
            "category_id" => 4,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/6/_/6.18.jpg",
            "price" => "1690000",
            "discount" => "10",
            "description" => "this is description"
        ]);


        DB::table('products')->insert([
            "title" => "Chuột không dây Logitech B175",
            "category_id" => 5,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/_/1.3_4.png",
            "price" => "155000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Chuột có dây Logitech G102",
            "category_id" => 5,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/_/1.2_1_5.png",
            "price" => "399000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Chuột không dây Logitech Signature M650 ",
            "category_id" => 5,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/8/_/8.1_l_i.png",
            "price" => "850000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Chuột Apple Magic Mouse 2021 MK2E3",
            "category_id" => 5,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/g/8/g8g8.png",
            "price" => "1890000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Chuột không dây Dareu LM115G",
            "category_id" => 5,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/3/_/3.2_1.png",
            "price" => "150000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Chuột không dây Logitech Pebble M350",
            "category_id" => 5,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/_/1.4_4.png",
            "price" => "599000",
            "discount" => "10",
            "description" => "this is description"
        ]);

        DB::table('products')->insert([
            "title" => "Chuột không dây Logitech MX Master 3",
            "category_id" => 5,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/_/1.15_2.png",
            "price" => "2200000",
            "discount" => "10",
            "description" => "this is description"
        ]);


        DB::table('products')->insert([
            "title" => "Chuột không dây Logitech M590",
            "category_id" => 5,
            "thumbnail" => "https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/_/1.9_2.png",
            "price" => "650000",
            "discount" => "10",
            "description" => "this is description"
        ]);
        #endregion
    }
}
