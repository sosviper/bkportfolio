<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Knowledge;
use App\Models\Message;
use App\Models\Service;
use App\Models\WorkingSkill;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index(){
        $services = Service::all();
        $clients = Client::all();
        return view('public.home', ['services'=>$services, 'clients' => $clients]);

    }
    public function resume(){
        $educations = Education::all();
        $experiences = Experience::all();
        $workingSkills = WorkingSkill::all();
        $knoledges = Knowledge::all();
        return view('public.resume', ['educations' => $educations,
                                    'experiences' => $experiences,
                                    'knoledges' => $knoledges,
                                    'workingSkills' => $workingSkills]);

    }
    public function jobs(){
        $jobs = Job::all();
        return view('public.jobs', ['jobs' => $jobs]);

    }
    public function blog(){
        $blogs = Blog::all();
        return view('public.blog', ['blogs' => $blogs]);

    }
    public function contact(){
        return view('public.contact');

    }
    public function contactSend(Request $request){
        $msg = new Message;    
        $msg->name_sender = $request->name;
        $msg->mail_sender = $request->email;
        $msg->body_sender = $request->message;
        $msg->save();
        return redirect()->back()->with('status', 'Mensaje enviado');;

    }
}
