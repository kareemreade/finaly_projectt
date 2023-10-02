<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Mail\sendMail;
use App\Models\Resume;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sit1Controller extends Controller
{


public function master() {
        $home=Home::find(1);
        return view('sit1.master',compact('home'));
     }


public function Home() {
    $home=Home::find(1);
    return view('sit1.Home',compact('home'));
}






public function About() {
    $home=Home::find(1);
    $about=About::find(1);
    $fact=Fact::find(1);
    $skills=Skill::all();

    return view('sit1.About',compact('home','about','fact','skills'));
}





public function Contact() {
    $home=Home::find(1);
    $contact=Contact::find(1);


    return view('sit1.Contact',compact('home','contact'));
}
////send Eamil function///////////////////////////
    public  static  function sendEmail(Request $request){
                $request->validate([
                    'name_email'=>'required',
                    'email'=>'required',
                    'subject__email'=>'required',
                    'message__email'=>'required',
                ]);

            $name_email=$request->name_email;
            $email=$request->email;
            $subject__email=$request->subject__email;
            $message__email=$request->message__email;
            $data= $request->except('_token');
            Mail::to('kareem1772002@gmail.com')->send(new sendMail($data));
            return back()->with('masg','   ');



        //   return ('sit1.send_mail',compact('name_email','email','subject__email','message__email'));

    }

        public function Resume() {
            $home=Home::find(1);
            $Resume=Resume::find(1);
            $Educations=Education::all();
            $Experiences=Experience::all();



    return view('sit1.Resume',compact('home','Resume','Educations','Experiences'));
}




 public function Portfolio() {
    $home=Home::find(1);
    $Portfolios=Portfolio::all();

    return view('sit1.Portfolio',compact('home','Portfolios'));
 }
 


}
