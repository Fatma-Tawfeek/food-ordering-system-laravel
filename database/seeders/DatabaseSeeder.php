<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678')
        ]);

        DB::table('settings')->insert([
            'about_en' => 'There are many variations of passages of Lorem Ipsum available. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Its Lorem Ipsum has been the industrys standard dummy text ever since when an unknown printer took a galley type and scrambled, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since whe an unknown printer took a galley type and scrambled standard dummy.',
            'about_ar' => 'لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.',
            'fb_link' => 'http://www.facebook.com',
            'tw_link' => 'http://www.twitter.com',
            'insta_link' => 'http://www.instagram.com',
            'whatsapp' => '01017389785',
            'headline_en_1' => 'When Food is Seasoned with Love​',
            'headline_en_2' => 'When Food is Seasoned with Love​',
            'headline_en_3' => 'When Food is Seasoned with Love​',
            'headline_ar_1' => 'لما الأكل يكون معمول بحب​',
            'headline_ar_2' => 'لما الأكل يكون معمول بحب​',
            'headline_ar_3' => 'لما الأكل يكون معمول بحب​',
            'desc_en_1' => 'Food taste and smell provoke lovely memories together with family and friends, especially when made  with individual home care that is rarely found in restaurants.​',
            'desc_en_2' => 'Zeem will bring you those memories with premium quality and delicious taste that are seasoned with love, using gourmet healthy and fresh ingredients.​',
            'desc_en_3' => 'As we believe in premium quality and strict hygiene standards, each dish is made by our chef.​ We hope you enjoy Zeem s meals, creating unforgettable memories.​',
            'desc_ar_1' => 'ريحة وطعم الأكل معناها الذكريات الجميلة للمة العيلة و الأصحاب خاصة لما يكون بجمال ونظافة الأكل البيتي.​',
            'desc_ar_2' => 'زيم حيرجعلكم الذكريات دي بطعم الأكل الفريد و المطبوخ بحب بمكونات عالية الجودة وصحية وطازة.​',
            'desc_ar_3' => 'ولأننا بنحرص على معايير الجودة العالية والنظافة في نفس الوقت, الشيف بيعمل كل طبق بنفسه. ياريت تستمتعوا بوجباتنا وتكون جزء من ذكرياتكم الجميلة.​',
            'menu_text_en' => 'To ensure food premium quality and strict hygiene standards, each dish is made by our chef, therefore certain dishes are served on specific days of the week with limited number of orders.​ Order(s) can be only placed online at least one day ahead.​ Our menu is delivered from Thursday to Saturday from 14:00 to 22:00.',
            'menu_text_ar' => 'لضمان جودة الطعام ومعايير النظافة الصارمة ، يقوم طاهينا بإعداد كل طبق ، لذلك يتم تقديم أطباق معينة في أيام محددة من الأسبوع بعدد محدود من الطلبات. يمكن تقديم الطلب (الطلبات) عبر الإنترنت قبل يوم واحد على الأقل. يتم توصيل قائمتنا من الخميس إلى السبت من الساعة 14:00 حتى 22:00.',
            'start_day' => 'Sunday',
            'end_day' => 'Thursday',
            'start_hour' => '09:00',
            'end_hour' => '05:00',
            'tax' => '45873'
            ]);

        DB::table('days')->insert([
            'name' => 'Saturday',
        ]);

        DB::table('days')->insert([
            'name' => 'Sunday',
        ]);

        DB::table('days')->insert([
            'name' => 'Monday',
        ]);

        DB::table('days')->insert([
            'name' => 'Tuesday',
        ]);

        DB::table('days')->insert([
            'name' => 'Wednesday',
        ]);

        DB::table('days')->insert([
            'name' => 'Thursday',
        ]);

        DB::table('days')->insert([
            'name' => 'Friday',
        ]);
    }
}
