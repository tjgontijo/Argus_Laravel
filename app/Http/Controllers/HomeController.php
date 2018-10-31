<?php

namespace App\Http\Controllers;

use App\Models\Admin\CourseRelease;
use App\Models\Admin\Enroll;
use App\Models\Admin\FunctionEnroll;
use App\Models\Admin\StatusEnroll;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Enroll $enroll, FunctionEnroll $function, StatusEnroll $status, CourseRelease $course_release, User $user)
    {
        $this->middleware('auth');
        $this->enroll = $enroll;
        $this->function = $function;
        $this->status = $status;
        $this->course_release = $course_release;
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $date = new Carbon('now');
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        
        return view('home', compact('date', 'course_releases'));
    }
}
