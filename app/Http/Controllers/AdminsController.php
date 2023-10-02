<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Home;
use App\Models\Resume;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminsController extends Controller
{

    public function index() {
        return view('Admin.index');
    }

  /////////////////////////////////profile_page_setting/////////////////////////////

    public function profile() {

        return view('Admin.profile');
    }

    public function profiledata(Request $request) {

        $user = User::find(Auth::id());
        $user->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone' =>$request->phone,
        ]);
       return redirect()->route('admin.profile')->with('masg','Usre Update succful');

}  ///////////////////////////////// end_profile_page_setting/////////////////////////////

///////////////////////////////////////////home_page_setting////////////
        public function Home() {
            $home= Home::find(1);
            return view('Admin.Home',compact('home'));
        }
        public function Home_data(Request $request){
            $home = Home::find(1);
            $iamg_name=$home->imge;
            if($request->hasFile('imge')){
            File::delete(public_path('uplodesHomePage/'.$home->imge));
            $iamg_name=rand().time().$request->file('imge')->getClientOriginalName();
            $request->file('imge')->move(public_path('uplodesHomePage'),$iamg_name);}
            $home->update([
                'title'=>$request->title,
                'imge' =>$iamg_name,
                'experiences'=>$request->experiences,
                'facebook'=>$request->facebook,
                'twiter'=>$request->twiter,
                'skype'=>$request->skype,
                'instagram'=>$request->instagram,
                'linkedin'=>$request->linkedin,
                ]);

              return redirect()->route('admin.index')->with('masg','Home Update succful');
        }
///////////////////////end_home_page_setting/////////////////////////////////////////
///////////////////////start_About_page_setting/////////////////////////////////////////

        public function About(){
            $about= About::find(1);
            return view('Admin.About',compact('about'));
        }
        public function About_data(Request $request){
            $about = About::find(1);
            $iamg_name=$about->imge;
            if($request->hasFile('imge')){
            File::delete(public_path('uplodesAboutPage/'.$about->imge));
            $iamg_name=rand().time().$request->file('imge')->getClientOriginalName();
            $request->file('imge')->move(public_path('uplodesAboutPage'),$iamg_name);}
            $about->update([
                'first_textAbout'=>$request-> first_textAbout,
                'imge' =>$iamg_name,
                'workFields'=>$request-> workFields,
                'text_workFields'=>$request->text_workFields,
                'Birthday'=>$request-> Birthday,
                'Website'=>$request-> Website,
                'Phone'=>$request-> Phone,
                'City'=>$request-> City,
                'Age'=>$request-> Age,
                'Degree'=>$request-> Degree,
                'PhEmailone'=>$request-> PhEmailone,
                'Freelance'=>$request-> Freelance,
                'finaly_text'=>$request-> finaly_text,
                ]);

             return redirect()->route('admin.index')->with('masg','About Update succful');
            }
            /////////////////////////////////end_About_page_setting/////////////////////////////
            /////////////////////////////////start_fact_page_setting/////////////////////////////
            public function Fact(){
                $fact= Fact::find(1);
                return view('Admin.Fact',compact('fact'));
            }

            public function Fact_data(Request $request){
                $fact = Fact::find(1);
                $fact->update([
                  'textFacts'=>$request->textFacts,
                  'Happy_Clients'=>$request->Happy_Clients,
                  'Projects'=>$request->Projects,
                  'Hours_Of_Support'=>$request->Hours_Of_Support,
                  'Hard_Worker'=>$request->Hard_Worker,
                  'text_skils'=>$request->text_skils,


                ]);
             return redirect()->route('admin.index')->with('masg','Fact Update succful');
            }
            /////////////////////////////////end_fact_page_setting/////////////////////////////
            ///////////////////////////////////Start_skill///////////////////////////////////////////
            // skills controller
            ///////////////////////////////////End_skill///////////////////////////////////////////

            public function Resume(){
                $Resume= Resume::find(1);
                return view('Admin.Resume',compact('Resume'));
            }

            public function Resume_data(Request $request){
                $Resume= Resume::find(1);
                $Resume->update([
                  'text_Resume'=>$request->text_Resume,
                  'name'=>$request->name,
                  'text_Summary'=>$request->text_Summary,
                  'address'=>$request->address,
                  'phone'=>$request->phone,
                  'email'=>$request->email,


                ]);
              return redirect()->route('admin.index')->with('masg','Fact Update succful');
            }
       /////////////////////////////////////end Resume/////////////////////////////
       //////////////////////////start Contact////////////////////////////////////

            public function Contact(){
                $Contact= Contact::find(1);
                return view('Admin.Contact',compact('Contact'));
            }

            public function Contact_data(Request $request){
                $Contact= Contact::find(1);
                $Contact->update([
                  'text'=>$request->text,
                  'Location'=>$request->Location,
                  'Email'=>$request->Email,
                  'Call'=>$request->Call,
                ]);
              return redirect()->route('admin.index')->with('masg','Fact Update succful');
            }

         ///////////////////////////////////end Contact////////////////////////////////////










}




