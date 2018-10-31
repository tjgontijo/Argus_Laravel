<?php 
use Illuminate\Database\Seeder; 
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
           'ra-list',
           'ra-show',
           'ra-create',
           'ra-edit',
           'ra-delete',
           'unit-list',
           'unit-show',
           'unit-create',
           'unit-edit',
           'unit-delete',
           'unit_teach-list',
           'unit_teach-show',
           'unit_teach-create',
           'unit_teach-edit',
           'unit_teach-delete',
           'course_type-list',
           'course_type-show',
           'course_type-create',
           'course_type-edit',
           'course_type-delete',
           'course-menu',
           'course-list',
           'course-show',
           'course-create',
           'course-edit',
           'course-delete',
           'base-menu',
           'status_release-list',
           'status_release-show',
           'status_release-create',
           'status_release-edit',
           'status_release-delete',
           'course_release-list',
           'course_release-show',
           'course_release-create',
           'course_release-edit',
           'course_release-delete',
           'course_release_attachment-list',
           'course_release_attachment-show',
           'course_release_attachment-create',
           'course_release_attachment-edit',
           'course_release_attachment-delete',
           'permission-menu',
           'permission-list',
           'permission-show',
           'permission-create',
           'permission-edit',
           'permission-delete',
           'request_secretary-menu',
           'request_secretary-list',
           'request_secretary_status_edit',           
           'role-list',
           'role-show',
           'role-create',
           'role-edit',
           'role-delete',
           'user-list',
           'user-show',
           'user-create',
           'user-edit',
           'user-delete',
           'log-show',
           'apmb',
           'caeap',
           'dec',
           'deec',
           
        ];
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
