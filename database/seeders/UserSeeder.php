<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use App\Models\Userprofile;
use App\Models\RolesPermission;
use App\Models\UserPermission;
use App\Models\UserRole;




class UserSeeder extends Seeder
{
    // use App\Traits\HasPermissionsTrait;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::insert([
            ['name'=>'Kawsar Sikder','email'=>'mdkawsarsikder01@gmail.com','username'=>'kawsar','address'=>'Tongi,Gazipur','image'=>'kawsar.jpg','password'=>bcrypt('111111')]
            
        ]);
        Userprofile::insert([
            'name'=>'Kawsar Sikder','phone'=>'01993302171','dob'=>'2002-08-30','user_id'=>'1','age'=>'21','email'=>'mdkawsarsikder01@gmail.com','username'=>'kawsar','address'=>'Tongi,Gazipur','image'=>'kawsar.jpg','password'=>bcrypt('111111')
        ]);
        Role::insert([
            'name'=>'Admin'
        ]);
        Permission::insert([['name'=>'Create'],['name'=>'Edit'],['name'=>'Delete'],['name'=>'View'],['name'=>'Setting']]);
        RolesPermission::insert([['role_id'=>1,'permission_id'=>1],['role_id'=>1,'permission_id'=>2],['role_id'=>1,'permission_id'=>3],['role_id'=>1,'permission_id'=>4],['role_id'=>1,'permission_id'=>5]]);
        UserPermission::insert([['user_id'=>1,'permission_id'=>1],['user_id'=>1,'permission_id'=>2],['user_id'=>1,'permission_id'=>3],['user_id'=>1,'permission_id'=>4],['user_id'=>1,'permission_id'=>5]]);
        UserRole::insert(['user_id'=>1,'role_id'=>1]);

        // Role::insert([
        //     ['name'=>'Editor','slug'=>'editor'],
        //     ['name'=>'Author','slug'=>'author']
        // ]);
        // Permission::insert([
        //     ['name'=>'Add Post','slug'=>'add-post'],
        //     ['name'=>'Delete Post','slug'=>'delete-post']
        // ]);
    }
}
