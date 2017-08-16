<?php

namespace App\Http\Controllers;


use App\Contact;
use App\Course;
use App\File;
use App\Group;
use App\Http\Middleware\CheckAdmin;
use App\StudentGroup;
use App\Theme;
use Courses;
use App\User;
use App\Navigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin');
    }


//Edit contact information
    public function contact(Request $request){

        $contact = new Contact();

        $contact->address = $request->input('address');
        $contact->administration_contacts = $request->input('contacts');

        if($contact->id == NULL){
            $contact->save();
        }else{
            $contact->update();
        }


        return redirect()->back();


    }

    public function addNewView(){

        $themes['themes'] = Theme::all();

        return view('admin.add_new', $themes);
    }

    public function addNewThemeView(){
        $groups['groups'] = Group::all();
        return view('admin.add_new_theme', $groups);
    }

    //Adds new theme
public function addNewTheme(Request $request){

        $theme = new Theme();


        $theme->group_id = $request->input('course_id');
        $theme->date = $request->input('date');
        $theme->name = $request->input('name');
        $theme->description = $request->input('description');


        $theme->save();

        return redirect()->back();

}


//Unapprove user
    public function unapprove(Request $request, $id){

        $unapprove = User::find($id);

        $unapp = $request->input('unapproved');

        $unapprove->where(['id'=>$id])->update(['status'=>$unapp]);

        return redirect()->back();
    }


//Approve user
    public function approve(Request $request, $id){

        $approve = User::find($id);

        $app = $request->input('approved');

        $approve->where(['id'=>$id])->update(['status'=>$app]);

        return redirect()->back();
    }

    //Theme edit view

    public function themeEditView($id){

        $editTheme['editTheme'] = Theme::find($id);

        return view('admin.edit_theme', $editTheme);
    }

    //Theme edit

    public function editTheme(Request $request, $id){

        $editTheme = Theme::find($id);

        $name = $request->input('name');
        $date = $request->input('date');
        $desc = $request->input('description');

        $editTheme->where(['id'=>$id])->update(['name'=>$name, 'date'=>$date, 'description'=>$desc]);

        return redirect()->back();

    }


    public function contactView(){

        return view('admin.contact_edit');
    }

    //Downloads file

    public function download($file_name = null)
        {
            $path = storage_path().'/'.'app'.'/public'.'/upload/'.$file_name;
            if (file_exists($path)) {
                return Response::download($path);
            }else{

                return redirect()->back();
            }

        }

        //Hide group theme

        public function hide(Request $request, $id){

        $hide = Theme::find($id);

        $hidden = $request->input('hide');

        $hide->where(['id'=>$id])->update(['status'=>$hidden]);

        return redirect()->back();
        }

        //Shows group theme

    public function show(Request $request, $id){

        $show = Theme::find($id);

        $shown = $request->input('show');

        $show->where(['id'=>$id])->update(['status'=>$shown]);

        return redirect()->back();
    }



    //Adding files

    public function insertFiles(Request $request){


        if ($request->hasFile('slides') && $request->hasFile('teaching_files')){

            $theme = $request->input('theme_name');

            $filename = $request->slides->getClientOriginalName();

            $filename2 = $request->teaching_files->getClientOriginalName();

           $request->slides->storeAs('public/upload', $filename);
            $request->teaching_files->storeAs('public/upload', $filename);

           $slides = new File();

           $teaching_files = new File();

           $teaching_files->teaching_files = $filename2;

           $slides->slides = $filename;




            $slides->where(['theme_id'=> $theme])->update(['slides'=>$filename, 'file'=>$filename2]);
        }


        return redirect()->back();
    }


    //Return add new file view

    public function addNewFileView(){

        $themes['themes'] = Theme::all();

        return view('admin.add_new_file', $themes);
    }

    //Return view of group themes

    public function groupThemes($id){

        $themes['themes'] = Group::find($id);



        $files['files'] = Theme::find($id);



        return view('admin.group_themes', $themes, $files);
    }

    public function showHide(Request $request, $id){

            $hide = Theme::find($id);
            $hide->status = $request->input('hide');

                    $hide->update(['status'=>'hidden']);

    return redirect()->back();
    }

    //Detele group function

    public function deleteGroup($id){

        $group = Group::find($id);
        $group->delete();

        return redirect()->back();

    }


        //Group edit function
    public function editGroup(Request $request, $id){

        $group = Group::find($id);



        $group->course_name = $request->input('course_name');
        $group->start_date = $request->input('starting_date');
        $group->end_date = $request->input('ending_date');

        $group->update();

        return redirect('all_groups');

    }

    //Returns view of course edit

    public function editGroupView(){
        $course_name['course_name'] = Course::all();

        return view('admin.edit_group', $course_name);
    }


    //Return view of Group students
    public function groupStudents($id){

        $group['group'] = Group::find($id);



        return view('admin.group_students', $group);
    }

    //Return insert new group view
    public function addNewGroup(){

        $courses['courses'] = Course::all();

        return view('admin.add_new_group', $courses);
    }


    //New group insert function
    public function insertNewGroup(Request $request){
        $group = new Group();

        $group->course_name = $request->input('course_name');

        $group->start_date = $request->input('starting_date');

        $group->end_date = $request->input('ending_date');

        $group->save();

        return redirect()->back();
    }


    //Returns view of all groups
    public function allGroups(){

        $groups['groups'] = Group::all();

        return view('admin.all_groups', $groups);
    }


    //Returns all users view
    public function allUsersView(){

        $users['users'] = User::all();

        return view('admin.view_all_users', $users);
    }

    //Return view of admin panel inbox
    public function inboxView(){

        return view('admin.inbox');
    }


    //Returns view of the course edit

    public function editCourseView($id){

        $course['course'] = Course::find($id);


        return view('admin.edit_course', $course);
    }

    // Course edit function
    public function editCourse(Request $request, $id){

        $courseEdit = Course::find($id);

        $courseEdit->course_name = $request->input('edit_course_name');

        $courseEdit->save();

        return redirect('all_courses');
    }


    // Returns add course view
public function addNewCourse(){

    return view('admin.add_new_course');
}

// Adds course to the database
public function addCourse(Request $request){

    $course = new Course();

    $course->course_name = $request->input('course_name');

    $course->save();

    return redirect('/administration');

}

// Return view of all courses
public function allCourses(){

    $courses['courses'] = Course::all();

    return view('admin/all_courses', $courses);
}

    public function admin(){


        if(Auth::user()->user_role != 'teacher'){
                return redirect('/home');
        }
        return view('admin.administration');
    }

    public function navigation(){

        $navigation['navigation'] = Navigation::all();

    return view('layouts.app', $navigation);
    }

    //Course delete function

    public function deleteCourse($id){

        $course = Course::find($id);

        $course->delete();

        return redirect()->back();

    }


}
