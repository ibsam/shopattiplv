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
             ContactMessageSeeder::class,
             CouponSeeder::class,
             CurrencySettingsSeeder::class,
             EmailTemplateSeeders::class,
             GeneralSettingSeeder::class,
             LanguageListSeeder::class,
             LogoSeeder::class,
             MembershipPaymentSeeder::class,
             MembershipSeeder::class,
             PackagePaymentSeeder::class,
             PackageSeeder::class,
             PageSeeder::class,
             PermissionSeeder::class,
             RoleSeeder::class,
             SaleSeeder::class,
             SliderSeeder::class,
             SliderStyleSeeder::class,
             SlidesSeeder::class,
             SocialLinksSeeder::class,
             StockSeeder::class,
             SubscribeSeeder::class,
             TicketMessageSeeder::class,
             TicketSeeder::class,
             UiSettingsSeeder::class,
             VendorInvoiceSeeder::class,
             VendorSeeder::class,
             WalletLoadSeeder::class,
             ProductVariation::class,
             ProductSpacification::class,
             HomeLayout::class,
             HomeSection::class,
             DataSection::class,


       ]);
    }
}
