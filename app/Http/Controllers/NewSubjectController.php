<?php


namespace App\Http\Controllers;
use App\NewSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewSubjectController extends Controller
{
    public function index(){

        $subjects = NewSubject::latest()->paginate(10);
        
        return view('backend.newsubject.index',compact('subjects'));
    }

    public function create(){
        return view('backend.newsubject.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255|unique:subjects',
            'subject_code'  => 'required|numeric',
            'description'   => 'required|string|max:255'
        ]);

        NewSubject::create([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name),
            'subject_code'  => $request->subject_code,
            'description'   => $request->description
        ]);

        return redirect()->route('newsubject.index');
    }
    public function edit(NewSubject $subject)
    {

        return view('backend.newsubjects.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewSubject $subject)
    {
        $request->validate([
            'name'          => 'required|string|max:255|unique:subjects,name,'.$subject->id,
            'subject_code'  => 'required|numeric',
            'description'   => 'required|string|max:255'
        ]);

        $subject->update([
            'name'          => $request->name,
            'slug'          => Str::slug($request->name),
            'subject_code'  => $request->subject_code,
            'description'   => $request->description
        ]);

        return redirect()->route('newsubject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewSubject $subject)
    {
        $subject->delete();

        return back();
    }
}
