<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hizmet;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Context;

class HomeController extends Controller
{
    public static function menulist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public static function getsetting()
    {
        return Setting::first();
    }
    public function index()
    {
        $setting = Setting::first();
        $slider= Hizmet::select('id','title','image','slug')->limit(4)->get();
        $pricelist= Hizmet::select('id','title','image','price','slug')->limit(4)->get();
        $aboutt=Setting::select('aboutus')->get();
        $ErkekSac=Hizmet::select('id','title','description','price','slug')->where('category_id','5')->limit(3)->get();
        $ErkekSakal=Hizmet::select('id','title','description','price','slug')->where('category_id','7')->limit(3)->get();
        $ErkekBakim=Hizmet::select('id','title','description','price','slug')->where('category_id','8')->limit(3)->get();
        $KadinSac=Hizmet::select('id','title','description','price','slug')->where('category_id','10')->limit(3)->get();
        $KadinBakim=Hizmet::select('id','title','description','price','slug')->where('category_id','11')->limit(3)->get();
        $resim= Hizmet::select('id','title','image','slug')->limit(6)->inRandomOrder()->get();
        #print_r($pricelist);
        #exit();

        $data = [
            'ErkekSac'=>$ErkekSac,
            'resim'=>$resim,
            'ErkekSakal'=>$ErkekSakal,
            'ErkekBakim'=>$ErkekBakim,
            'KadinSac'=>$KadinSac,
            'KadinBakim'=>$KadinBakim,
            'setting'=>$setting,
            'slider'=>$slider,
            'pricelist'=> $pricelist,
            'aboutt'=>$aboutt
        ];
        return view('home.index',$data);
    }



    public function hizmet($id,$slug)
    {
        $data = Hizmet::find($id);
        $datalist = Image::where('hizmet_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.hizmet_detail',['datalist'=>$datalist,'data'=>$data]);
    }

    public function getHizmet(Request $request)
    {
        $search=$request->input('search');

        $count = Hizmet::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data= Hizmet::where('title','like','%'.$search.'%')->first();
            return redirect()->route('hizmet',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('hizmetlist',['search'=>$search]);
        }

    }

    public function hizmetlist($search)
    {
        $datalist= Hizmet::where('title','like','%'.$search.'%')->get();
        return view('home.search_hizmetler',['search'=>$search,'datalist'=>$datalist]);
    }

    public function menuhizmetler($id,$slug)
    {
        $datalist = Hizmet::where('category_id',$id)->get();
        $data = Category::find($id);
        # print_r($data);
        # exit();

        return view('home.menu_hizmetler',['datalist'=>$datalist,'data'=>$data]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function ekip()
    {
        $setting = Setting::first();
        return view('home.ekip',['setting'=>$setting]);
    }
    public function basindabiz()
    {
        $setting = Setting::first();
        return view('home.basindabiz',['setting'=>$setting]);;
    }
    public function iletisim()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('iletisim')->with('success','Mesajınız Gönderildi. Teşekkürler..');
    }


    public function sss()
    {
        return view('home.about');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The Provided credentials do not match our records!' ,
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }

    //
    public function test($id,$name)
    {
       $data['id']=$id;
       $data['name']=$name;
       return view('home.test',$data);
       /*
       echo "Id Number :", $id;
       echo "<br> Name :", $name;
       for($i=1;$i<=$id;$i++)
        {
         echo "<br> $i $name";
        }
       */
    }
}
