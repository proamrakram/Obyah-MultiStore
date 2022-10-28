<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_items')->insert(
            [
                'id' => 1,
                'package_item_ar' => 'دعم فني',
                'package_item_en' => 'Technical Support',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );

        DB::table('package_items')->insert(
            [
                'id' => 2,
                'package_item_ar' => 'خدمة عملاء',
                'package_item_en' => 'customer service',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );

        DB::table('package_items')->insert(
            [
                'id' => 3,
                'package_item_ar' => 'ادوات تسويقية "محدودة"',
                'package_item_en' => 'Marketing Tools "Limited"',
                'package_item_type' => 'marketing_tools',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 4,
                'package_item_ar' => 'عدد غير محدود من الخدمات الخاصة',
                'package_item_en' => 'Unlimited number of special services',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 5,
                'package_item_ar' => 'عدد غير محدود من المنتجات',
                'package_item_en' => 'Unlimited number of products',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 6,
                'package_item_ar' => 'عدد غير محدود من الطلبات',
                'package_item_en' => 'Unlimited number of orders',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 7,
                'package_item_ar' => 'عدد غير محدود من العملاء',
                'package_item_en' => 'Unlimited number of clients',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 8,
                'package_item_ar' => 'عدد غير محدود من كوبونات التخفيض',
                'package_item_en' => 'Unlimited number of discount coupons',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 9,
                'package_item_ar' => 'تقييمات العملاء',
                'package_item_en' => 'Customer Reviews',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 10,
                'package_item_ar' => 'عرض تصميم ثلاثي الابعاد داخل صالة عرض الأزياء',
                'package_item_en' => 'View a 3D design inside the fashion showroom',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
                'count' => 1,
            ]
        );

        DB::table('package_items')->insert(
            [
                'id' => 11,
                'package_item_ar' => 'مشاركة عمليات البيع و الشراء',
                'package_item_en' => 'Share buying and selling',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 12,
                'package_item_ar' => 'الشراء بسعر الجملة',
                'package_item_en' => 'Buy at wholesale price',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 13,
                'package_item_ar' => 'رفع صور ثلاثية الأبعاد',
                'package_item_en' => '3D photo upload',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 14,
                'package_item_ar' => 'خدمة عملاء خاصة',
                'package_item_en' => 'Special customer service',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 15,
                'package_item_ar' => 'بيع خدمة خاصة للجمهور',
                'package_item_en' => 'Selling a private service to the public',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 16,
                'package_item_ar' => 'محادثات مفتوحة مع العملاء عبر "تشات عبية"',
                'package_item_en' => 'Open conversations with clients via "Obyah Chat"',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 17,
                'package_item_ar' => 'تعيين مستخدم واحد',
                'package_item_en' => 'Assign a single user',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 18,
                'package_item_ar' => 'أدوات تسويقية',
                'package_item_en' => 'Marketing Tools',
                'package_item_type' => 'marketing_tools',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 19,
                'package_item_ar' => 'دعم جميع أنواع المنتجات',
                'package_item_en' => 'Support all kinds of products',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 20,
                'package_item_ar' => 'تقارير',
                'package_item_en' => 'Reports',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 21,
                'package_item_ar' => 'عضوية مجلس عبية للأزياء',
                'package_item_en' => 'Membership of Obayya Fashion Council',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 22,
                'package_item_ar' => 'فريق عمل كامل و تعيين صلاحيات المستخدمين',
                'package_item_en' => 'A full team work and assign users` permissions',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 23,
                'package_item_ar' => 'دعم ضريبة القيمة المضافة',
                'package_item_en' => 'VAT support',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 24,
                'package_item_ar' => 'اضافة خدمة الاعلان والترويج',
                'package_item_en' => 'Add advertising and promotion service',
                'package_item_type' => 'marketing_tools',
                'package_item_status' => 'active',
            ]
        );


        DB::table('package_items')->insert(
            [
                'id' => 25,
                'package_item_ar' => 'sms رسائل',
                'package_item_en' => 'sms Messages',
                'package_item_type' => 'main',
                'package_item_status' => 'active',
            ]
        );


    }
}
