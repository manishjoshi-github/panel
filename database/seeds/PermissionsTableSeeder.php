<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '17',
                'title'      => 'product_management_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '18',
                'title'      => 'product_category_create',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '19',
                'title'      => 'product_category_edit',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '20',
                'title'      => 'product_category_show',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '21',
                'title'      => 'product_category_delete',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '22',
                'title'      => 'product_category_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '23',
                'title'      => 'product_tag_create',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '24',
                'title'      => 'product_tag_edit',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '25',
                'title'      => 'product_tag_show',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '26',
                'title'      => 'product_tag_delete',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '27',
                'title'      => 'product_tag_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '28',
                'title'      => 'product_create',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '29',
                'title'      => 'product_edit',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '30',
                'title'      => 'product_show',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '31',
                'title'      => 'product_delete',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '32',
                'title'      => 'product_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
            [
                'id'         => '33',
                'title'      => 'phycometric_exam_access',
                'created_at' => '2019-09-24 06:40:54',
                'updated_at' => '2019-09-24 06:40:54',
            ],
        ];

        Permission::insert($permissions);
    }
}
