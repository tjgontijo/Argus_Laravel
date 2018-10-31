<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\CourseReleaseAttachment;
use App\Models\Admin\CourseRelease;
use Illuminate\Support\Facades\Storage;


class CourseReleaseAttachmentController extends Controller
{

    public function __construct(CourseReleaseAttachment $course_release_attachment, CourseRelease $course_release)
    {
        $this->course_release_attachment = $course_release_attachment;
        $this->course_release = $course_release;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $course_release = $this->course_release->find($request->id);
        $course_release_attachments = $this->course_release_attachment->where('course_releases_id', '=' , $course_release->id)->get();
        return view('admin.course_release_attachment.index', compact('course_release_attachments', 'course_release'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Database store
         */
        $course_course_release_attachment = new CourseReleaseAttachment;
        $course_course_release_attachment->name = $request->documento->getClientOriginalName(); 
        $course_course_release_attachment->course_releases_id = $request->courseReleaseId;
        $insert = $course_course_release_attachment->save();

        /**
         * Storage
         */
        $file_storage = 'course_release_attachment/' . $request->courseReleaseId;
        
        $request->documento->storeAs($file_storage , $request->documento->getClientOriginalName());
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $file_show = $this->course_release_attachment->find($id);        
        return response()->download(storage_path('app/public/course_release_attachment/' .$file_show->course_releases_id.'/'. $file_show->name));        
        
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file_show = $this->course_release_attachment->find($id);
        $path = 'app/public/course_release_attachment/'.$file_show->course_releases_id.'/'.$file_show->name;
        unlink(storage_path($path));
        $file_show->delete();
        return redirect()->back();

        
    }
}
