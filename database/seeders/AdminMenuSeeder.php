<?php

namespace Database\Seeders;

use App\Models\AdminMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminMenu::whereRaw('1=1')->delete();

        $data = [
            [
                'id'    => 1,
                'label' => 'Dashboard',
                'icon'  => 'bx bxs-dashboard',
                'route_name' => 'admin.dashboard',
                'admin_menu_id' => null,
            ],
            // [
            //     'id'    => 2,
            //     'label' => 'Master',
            //     'icon'  => 'bx bx-grid-alt',
            //     'route_name' => null,
            //     'admin_menu_id' => null,
            // ],
            // [
            //     'id'    => 3,
            //     'label' => 'State',
            //     'icon'  => 'bx bx-globe',
            //     'route_name' => 'admin.state.index',
            //     'admin_menu_id' => null
            // ],
            // [
            //     'id'    => 4,
            //     'label' => 'City',
            //     'icon'  => 'bx bx-globe',
            //     'route_name' => 'admin.city.index',
            //     'admin_menu_id' => null,
            // ],
            // [
            //     'id'    => 5,
            //     'label' => 'Country',
            //     'icon'  => 'bx bx-grid-alt',
            //     'route_name' => 'admin.category.index',
            //     'admin_menu_id' => null
            // ],
            [
                'id'    => 6,
                'label' => 'Country',
                'icon'  => 'bx bx-notification',
                'admin_menu_id' => null,
                'route_name' => null, // 'admin.booking.index',
            ],
            [
                'id'    => 7,
                'label' => 'Add New Country',
                'icon'  => 'bx bx-notification',
                'admin_menu_id' => 6,
                'route_name' => null, //'admin.product.create',
            ],
            [
                'id'    => 8,
                'label' => 'Other Details',
                'icon'  => 'bx bx-notification',
                'admin_menu_id' => 6,
                'route_name' => null, // 'admin.product.index',
            ],
            [
                'id'    => 9,
                'label' => 'Institute',
                'icon'  => 'bx bx-notification',
                'admin_menu_id' => 6,
                'route_name' => null, // 'admin.product.index',
            ],
            [
                'id'    => 10,
                'label' => 'Additional Details',
                'icon'  => 'bx bx-notification',
                'admin_menu_id' => 6,
                'route_name' => null, // 'admin.product.index',
            ],
            [
                'id'    => 11,
                'label' => 'Pages',
                'icon'  => 'bx bx-file',
                'route_name' => 'admin.page.index',
                'admin_menu_id' => null,
            ],
            [
                'id'    => 12,
                'label' => 'Testinonials',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => null,
                'route_name' => null //'admin.slider.index',
            ],
            [
                'id'    => 13,
                'label' => 'Faqs',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => null,
                'route_name' => null //'admin.slider.index',
            ],
            [
                'id'    => 14,
                'label' => 'Blogs',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => null,
                'route_name' => null //'admin.slider.index',
            ],
            [
                'id'    => 15,
                'label' => 'Category',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => 14,
                'route_name' => null //'admin.slider.index',
            ],
            [
                'id'    => 16,
                'label' => 'Tags',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => 14,
                'route_name' => null //'admin.slider.index',
            ],
            [
                'id'    => 17,
                'label' => 'Add Blogs',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => 14,
                'route_name' => null //'admin.slider.index',
            ],
            [
                'id'    => 18,
                'label' => 'Visa',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => null,
                'route_name' => null //'admin.slider.index',
            ],
            [
                'id'    => 19,
                'label' => 'Visa Category',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => 18,
                'route_name' => null //'admin.slider.index',
            ],
            [
                'id'    => 20,
                'label' => 'Visa Details',
                'icon'  => 'bx bx-images',
                'admin_menu_id' => 18,
                'route_name' => null //'admin.slider.index',
            ],






            // [
            //     'id'    => 11,
            //     'label' => 'Cities',
            //     'icon'  => 'bx bx-group',
            //     'admin_menu_id' => null,
            //     'route_name' => 'admin.city.index',
            // ],
            // [
            //     'id'    => 12,
            //     'label' => 'Gallery',
            //     'icon'  => 'bx bx-group',
            //     'admin_menu_id' => null,
            //     'route_name' => null, //'admin.city.index',
            // ],
            // [
            //     'id'    => 13,
            //     'label' => 'Image Gallery',
            //     'icon'  => 'bx bx-group',
            //     'admin_menu_id' => 12,
            //     'route_name' => 'admin.gallery.index',
            // ],
            // [
            //     'id'    => 14,
            //     'label' => 'Video Gallery',
            //     'icon'  => 'bx bx-group',
            //     'admin_menu_id' => 12,
            //     'route_name' => 'admin.video.index',
            // ],
            // [

            //     'id'    => 16,
            //     'label' => 'Enquiries',
            //     'icon'  => 'bx bx-notification',
            //     'admin_menu_id' => null,
            //     'route_name' => null, // 'admin.booking.index',
            // ],
            [
                'id'    => 24,
                'label' => 'Logout',
                'icon'  => 'bx bx-power-off',
                'route_name' => 'admin.logout',
                'admin_menu_id' => null,
            ],
        ];

        AdminMenu::insert($data);
    }
}
