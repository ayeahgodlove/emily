<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseId = (int) request()->query('course');
        $course = Course::findOrFail($courseId)->first();
        return view('lessons.index')->withLessons($course->lesson)
            ->withCourse($course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lessons.create')->withCourseId(request()->query('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'url' => 'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts',
            'course_id' => 'required|integer',
        ]);

        $data['course_id'] = (int) $request->input('course_id');

        if ($request->hasFile('url')) {
            $name = $request->file('url')->getClientOriginalName();
            $extension = $request->file('url')->extension();
            $filename = time() . $name;
            $destinationPath = 'uploads/videos';
            $data['url'] = $request->file('url')->storeAs($destinationPath, $filename);
        }

        Lesson::create($data);
        session()->flash('success', 'new lesson added');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}