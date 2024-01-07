<?php

namespace App\Http\Controllers\Web;

use App\Helpers\CommonHelper;
use App\Helpers\PMailer;
use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use App\Models\EnquiryModel;
use App\Models\HeadersModel;
use App\Models\HomeSliderModel;
use App\Models\PagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{

    // public function menu($menu){
    //     $header = HeadersModel::where('slug',$menu)->first();
    //     if($header){
    //         $data['_title'] = $header->title;
    //         $data['page'] = $header;
    //         return view('web.page',$data);
    //     }else{
    //         return abort(404);
    //     }
    // }

    public function page($menu,$slug){
        $header = HeadersModel::where('slug',$menu)->first();
        if($header){
            $page = PagesModel::where('slug',$slug)->wherein('id',explode(',',$header->page_ids))->where('is_deleted','0')->first();
            if($page){
                $data['_title'] = $page->title;
                $data['page'] = $page;
		        return view('web.page',$data);
            }else{
                return abort(404);
            }
        }else{
            return abort(404);
        }
    }

    public function blogSingle($slug){
        $row = BlogModel::where('is_deleted','0')->where('slug',$slug)->first();
        if($row){
            $data['_title'] = $row->title;
            $data['item']   = $row;
            return view('web.blog-single',$data);
        }else{
            return abort(404);
        }
    }

    public function blog(){
        $data['_title'] = 'Blog';
        $data['list']   = BlogModel::where('is_deleted','0')->orderby('id','desc')->get();
		return view('web.blog',$data);
    }

    public function about(){
        $data['_title'] = 'About Us';
		return view('web.about',$data);
    }

    public function contact(){
        $data['_title'] = 'Contact';
		return view('web.contact',$data);
    }

    public function home(){
        $data['_title'] = 'Home';
        $data['banners'] = HomeSliderModel::orderby('sort','asc')->get();
		return view('web.home',$data);
    }

    public function contactSave(Request $rec){

        EnquiryModel::create([
            'name'  => $rec->name,
            'email'  => $rec->email,
            'message'  => $rec->message
        ]);

        $data['name'] = $rec->name;
        $data['email'] = $rec->email;
        $data['message'] = $rec->message;
        $body = view('emails.inquiry',$data)->render();
        PMailer::send(CommonHelper::getsetting('mail_notification_email'),'Inquiry - '.$rec->subject,$body);

        Session::flash('success', 'Enquiry Sent');
	    return Redirect('contact-us');
    }


    public function howWeOperate(){
        $data['_title'] = 'How we operate';
		return view('web.pages.how-we-operate',$data);
    }

    public function itDataSecurity(){
        $data['_title'] = 'IT & Data Security';
		return view('web.pages.it-and-data-security',$data);
    }
}
