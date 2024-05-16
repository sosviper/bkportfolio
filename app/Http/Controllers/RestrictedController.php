<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Knowledge;
use App\Models\Message;
use App\Models\Service;
use App\Models\User;
use App\Models\WorkingSkill;
use Illuminate\Http\Request;

class RestrictedController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function aboutme(){
        return view('admin.aboutme');

    }
    public function aboutmeSave(Request $request){

        $user = User::find(1);
        $user->facebook_url = $request->facebook_url;
        $user->twitter_url = $request->twitter_url;
        $user->dribbble_url = $request->dribbble_url;
        $user->linkedin_url = $request->linkedin_url;

        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->birthdate = $request->birthdate;

        $user->bio = $request->bio;
        if($request->file()){
            $fileName = time().'_'.$request->cv_url->getClientOriginalName();
            $filepath = $request->file('cv_url')->storeAs('uploads',$fileName,'public');
            $user->url_cv='/storage/'.$filepath;
        }
        $user->save();
        return redirect()->back();


    }
    public function services(){
        $services = Service::all();
        return view('admin.services',['services' => $services]);

    }
    public function servicesCreate(){
        return view('admin.newService');

    }
    public function serviceSave(Request $request){
        $service = new Service;
        $service->title=$request->title;
        $service->description=$request->description;
        $service->color_hex=$request->color_hex;
        if($request->file()){
            $fileName = time().'_'.$request->logo_url->getClientOriginalName();
            $filepath = $request->file('logo_url')->storeAs('uploads',$fileName,'public');
            $service->logo_url='/storage/'.$filepath;
        }
        $service->save();
        return redirect('/admin/services');
    }
    public function servicesEdit(Service $service){

        return view('admin.editService', ['service' => $service]);
        
    }
    public function serviceUpdate(Request $request){
        $service = Service::find($request->service_id);
        $service->title=$request->title;
        $service->description=$request->description;
        $service->color_hex=$request->color_hex;
        if($request->file()){
            $fileName = time().'_'.$request->logo_url->getClientOriginalName();
            $filepath = $request->file('logo_url')->storeAs('uploads',$fileName,'public');
            $service->logo_url='/storage/'.$filepath;
        }
        $service->save();
        return redirect('/admin/services');

    }
    public function servicesDelete(Service $service){
        $service->delete();
        return redirect('/admin/services');

    }


    public function resume(){
        $educations= Education::all();
        $jobs = Job::all();
        $workingSkills = WorkingSkill::all();
        $knows = Knowledge::all();
        return view('admin.resume.index',['educations' => $educations,
                                    'experiences' => Experience::all(),
                                    'jobs'=>$jobs,
                                    'workingSkills'=>$workingSkills,
                                    'knows'=>$knows]);

    }
    public function resumeSave(Request $request){
        
        Education::truncate();
        Experience::truncate();
        WorkingSkill::truncate();
        Knowledge::truncate();
        $colorMain = "#fcf4ff";
        $edu1 = new Education;
        $edu1->title = $request->e1_title;
        $edu1->dates = $request->e1_date;
        $edu1->description = $request->e1_where;
        $edu1->color_hex = $colorMain;

        $edu2 = new Education;
        $edu2->title = $request->e2_title;
        $edu2->dates = $request->e2_date;
        $edu2->description = $request->e2_where;
        $edu2->color_hex = $colorMain;

        $edu3 = new Education;
        $edu3->title = $request->e3_title;
        $edu3->dates = $request->e3_date;
        $edu3->description = $request->e3_where;
        $edu3->color_hex = $colorMain;

        $edu1->save();
        $edu2->save();
        $edu3->save();

        $exp1 = new Experience;
        $exp1->title = $request->j1_title;
        $exp1->dates = $request->j1_date;
        $exp1->description = $request->j1_where;
        $exp1->color_hex = $colorMain;

        $exp2 = new Experience;
        $exp2->title = $request->j2_title;
        $exp2->dates = $request->j2_date;
        $exp2->description = $request->j2_where;
        $exp2->color_hex = $colorMain;

        $exp3 = new Experience;
        $exp3->title = $request->j3_title;
        $exp3->dates = $request->j3_date;
        $exp3->description = $request->j3_where;
        $exp3->color_hex = $colorMain;

        $exp1->save();
        $exp2->save();
        $exp3->save();

        $w1 = new WorkingSkill;
        $w1->title = $request->w1_title;
        $w1->percentage = $request->w1_percentage;

        $w2 = new WorkingSkill;
        $w2->title = $request->w2_title;
        $w2->percentage = $request->w2_percentage;

        $w3 = new WorkingSkill;
        $w3->title = $request->w3_title;
        $w3->percentage = $request->w3_percentage;

        $w4 = new WorkingSkill;
        $w4->title = $request->w4_title;
        $w4->percentage = $request->w4_percentage;

        $w1->save();
        $w2->save();
        $w3->save();
        $w4->save();

        $data = json_decode($request->tags);

        foreach($data as $tag){
           $tagNew = new Knowledge;
           $tagNew->title = $tag->value;
           $tagNew->save();
        }

        return redirect()->back()->withInput();
    }
    public function jobs(){
        
        return view('admin.jobs.index', ['jobs' => Job::all()]);
        
    }
    public function jobsCreate(){
        $categories = array('Video','Web Design','Logo','Graphic Design');
        return view('admin.jobs.create',['categories' => $categories]);

    }
    public function jobsSave(Request $request){
        $job = new Job;
        $job->category = $request->category;
        $job->title = $request->title;
        $job->subcategory = $request->subcategory;
        if($request->file()){
            $fileName = time().'_'.$request->logo_url->getClientOriginalName();
            $filepath = $request->file('logo_url')->storeAs('uploads',$fileName,'public');
            $job->logo_url='/storage/'.$filepath;
        }
       
        $job->color_hex = $request->color_hex;
        $job->project_name = $request->project_name;
        $job->languages = $request->languages;
        $job->client = $request->client;
        $job->preview = $request->preview;
        $job->body = $request->body;
        $job->save();

        return redirect('/admin/jobs');

    }
    public function jobsEdit(Job $job) {
        $categories = array('Video','Web Design','Logo','Graphic Design');

        return view('admin.jobs.edit',['categories' => $categories,'job'=>$job]);

    }
    public function jobsUpdate(Request $request){
        $job = Job::find($request->job_id);
        $job->category = $request->category;
        $job->title = $request->title;
        $job->subcategory = $request->subcategory;
        if($request->file()){
            $fileName = time().'_'.$request->logo_url->getClientOriginalName();
            $filepath = $request->file('logo_url')->storeAs('uploads',$fileName,'public');
            $job->logo_url='/storage/'.$filepath;
        }
       
        $job->color_hex = $request->color_hex;
        $job->project_name = $request->project_name;
        $job->languages = $request->languages;
        $job->client = $request->client;
        $job->preview = $request->preview;
        $job->body = $request->body;
        $job->save();

        return redirect()->back()->withInput();
    }
    public function jobsDelete(Job $job){
        $job->delete();
        return redirect()->back();

    }


    public function blogs(){
        return view('admin.blogs.index', ['blogs' => Blog::all()]);
        
    }
    public function blogsCreate(){
        
        return view('admin.blogs.create');

    }
    public function blogsSave(Request $request){
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->subcategory = $request->subcategory;
        if($request->file()){
            $fileName = time().'_'.$request->logo_url->getClientOriginalName();
            $filepath = $request->file('logo_url')->storeAs('uploads',$fileName,'public');
            $blog->logo_url='/storage/'.$filepath;
        }
       
        $blog->color_hex = $request->color_hex;
        $blog->body = $request->body;
        $blog->save();

        return redirect('/admin/blogs');

    }
    public function blogsEdit(Blog $blog) {

        return view('admin.blogs.edit',['blog'=>$blog]);

    }
    public function blogsUpdate(Request $request){
        $blog = Blog::find($request->blog_id);
        $blog->title = $request->title;
        $blog->subcategory = $request->subcategory;
        if($request->file()){
            $fileName = time().'_'.$request->logo_url->getClientOriginalName();
            $filepath = $request->file('logo_url')->storeAs('uploads',$fileName,'public');
            $blog->logo_url='/storage/'.$filepath;
        }
       
        $blog->color_hex = $request->color_hex;
        $blog->body = $request->body;
        $blog->save();

        return redirect()->back()->withInput();
    }
    public function blogsDelete(Job $job){
        $job->delete();
        return redirect()->back();

    }

    public function msgs(){
        return view('admin.msgs.index',['msgs'=>Message::all()]);

    }
    public function msgsDelete(Message $message){
        $message->delete();
        return redirect()->back();

    }
}
