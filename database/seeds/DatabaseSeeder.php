<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([

       		CategorySeeder::class,
            BannerSeeder::class,
            AdminSeeder::class,
            BlogCategorySeeder::class,
            BlogSeeder::class,
            BrandSeeder::class,
            BundleStockSeeder::class,
            BusinessSettingsSeeder::class,
            ChildSubCategorySeeder::class,
            // CiSessionsSeeder::class,
            ContactMessageSeeder::class,
            CouponSeeder::class,
            CurrencySettingsSeeder::class,
            CustomerProductSeeder::class,
            EmailTemplateSeeders::class,
            GeneralSettingSeeder::class,
            LanguageListSeeder::class,
            LanguageSeeder::class,
            LogoSeeder::class,
            MembershipPaymentSeeder::class,
            MembershipSeeder::class,
            PackagePaymentSeeder::class,
            PackageSeeder::class,
            PageSeeder::class,
            PermissionSeeder::class,
            ProductSeeder::class,
            RoleSeeder::class,
            SaleSeeder::class,
            SliderSeeder::class,
            SliderStyleSeeder::class,
            SlidesSeeder::class,
            SocialLinksSeeder::class,
            StockSeeder::class,
            SubCategorySeeder::class,
            SubscribeSeeder::class,
            TablesSeeder::class,
            TicketMessageSeeder::class,
            TicketSeeder::class,
            UiSettingsSeeder::class,
            UserSeeder::class,
            VendorInvoiceSeeder::class,
            VendorSeeder::class,
            WalletLoadSeeder::class,

               
       ]);
    }
}
