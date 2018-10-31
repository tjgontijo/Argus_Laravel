<?php


Route::get('/', function () {
	return view('vendor.adminlte.login');
});


Auth::routes();

Route::get('home', 'HomeController@index')->name('admin.home');


$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function() {

	$this->resource('admin/academic_secretary', 'AcademicSecretaryController');

	$this->resource('admin/student_area', 'StudentAreaController');

	$this->resource('admin/dashboard', 'DashboardController');

	$this->resource('admin/ra', 'RaController');

	$this->resource('admin/unit', 'UnitController');

	$this->resource('admin/unitteach', 'UnitTeachController');

	$this->resource('admin/course_type', 'CourseTypeController');

	$this->resource('admin/course', 'CourseController');

	$this->resource('admin/status_release', 'StatusReleaseController');

	$this->resource('admin/course_release', 'CourseReleaseController');	

	$this->resource('admin/user', 'UserController');

	$this->resource('admin/user_profile', 'UserProfileController');

	$this->resource('admin/enroll', 'EnrollController');

	$this->resource('admin/roles','RoleController');

	$this->resource('admin/request_secretaries','RequestSecretaryController');

	$this->resource('admin/permissions','PermissionController');

	$this->resource('admin/course_release_attachment', 'CourseReleaseAttachmentController');

	$this->post('upload_file', 'CourseReleaseAttachmentController@store');
	
	$this->get('admin/enroll_user', 'CourseReleaseController@enroll_user')->name('enroll_user');

});
