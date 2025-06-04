<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Blog;
class ViewController extends Controller
{
    // Function to get meta data based on slug
    private function getMetaData($slug)
    {
        // Convert slug format according to table
        $slug = str_replace('-', '_', $slug); // Convert hyphen to underscore

        $meta = Setting::whereIn('type', [
            "title_{$slug}",
            "description_{$slug}",
            "keywords_{$slug}"
        ])->pluck('value', 'type');

        return [
            'meta_title' => $meta["title_{$slug}"] ?? 'Default Title',
            'meta_description' => $meta["description_{$slug}"] ?? 'Default Description',
            'meta_keywords' => $meta["keywords_{$slug}"] ?? 'Default Keywords',
        ];
    }

    public function index(){
          $meta = $this->getMetaData('home');
        return view('frontend.home', $meta);
    }
    public function about(){
        $meta = $this->getMetaData('about');
        return view('frontend.about', $meta);
    }
    public function blogs(){

        $data = Blog::orderBy('id','desc')->get();
        
        $meta = $this->getMetaData('blogs');
        return view('frontend.blog', compact('meta', 'data'));
    }
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
      
        $recentBlogs = Blog::orderBy('id', 'desc')->where('id', '!=', $blog->id)->take(5)->get();
        $meta = $this->getMetaData('blog');
        return view('frontend.blog_details', compact('blog', 'meta', 'recentBlogs'));
    }
    
    
    public function contact(){
         $meta = $this->getMetaData('Contact');
        return view('frontend.contact', $meta);
    }
    public function faq(){
        $meta = $this->getMetaData('faq');
        return view('frontend.faq', $meta);
    }
    public function homenetworking(){
        $meta = $this->getMetaData('Home_Networking');
        return view('frontend.home-networking', $meta);
    }
    public function digitalmarketing(){
        $meta = $this->getMetaData('Digital_Marketing');
        return view('frontend.digital-marketing', $meta);
    }
    public function emailservices(){
        $meta = $this->getMetaData('Email_Services');
        return view('frontend.email-services', $meta);
    }
    public function anitvirussecuritysoftware(){
        $meta = $this->getMetaData('Antivirus_and_Security_Software_Support');
        return view('frontend.anitvirus-security-software', $meta);
    }
    public function appdevelopment(){
        $meta = $this->getMetaData('App_Development');
        return view('frontend.app-development', $meta);
    }
    public function applemacios(){
        $meta = $this->getMetaData('Apple_Mac_Ios');
        return view('frontend.apple-mac-ios', $meta);
    }
    public function businessservices(){
        $meta = $this->getMetaData('businessservices');
        return view('frontend.business-services', $meta);
    }
    public function computertuneups(){
        $meta = $this->getMetaData('Computer_Tune_Ups');
        return view('frontend.computer-tune-ups', $meta);
    }
    public function databackupsservices(){
        $meta = $this->getMetaData('databackupsservices');
        return view('frontend.data-backups-services', $meta);
    }
    public function internentconectivity(){
        $meta = $this->getMetaData('Internet_Connectivity');
        return view('frontend.internent-conectivity', $meta);
    }
    public function microsoftwindows(){
        $meta = $this->getMetaData('Microsoft_Windows');
        return view('frontend.microsoft-windows', $meta);
    }
    public function printermultifunction(){
        $meta = $this->getMetaData('Printer_Multi_function');
        return view('frontend.printer-multifunction', $meta);
    }
    public function privacypolicy(){
        $meta = $this->getMetaData('privacypolicy');
        return view('frontend.privacy-policy', $meta);
    }
    public function refundpolicy(){
        $meta = $this->getMetaData('refundpolicy');
        return view('frontend.refund-policy', $meta);
    }

    public function terms(){
        $meta = $this->getMetaData('terms');
        return view('frontend.terms', $meta);
    }
    public function thanku(){
        $meta = $this->getMetaData('thanku');
        return view('frontend.thanku', $meta);
    }
    public function programerrorscrashes(){
        $meta = $this->getMetaData('Program_error_crashes');
        return view('frontend.program-errors-crashes',$meta);
    }
    public function smartphonestablet(){
        $meta = $this->getMetaData('Smartphones_Tablet');
        return view('frontend.smartphones-tablet',$meta);
    }
    public function softwareapplication(){
        $meta = $this->getMetaData('Software_application');
        return view('frontend.software-application',$meta);
    }
    public function trainingguidence(){
        $meta = $this->getMetaData('Training_and_Guidance');
        return view('frontend.training-guidence',$meta);
    }
    public function uiuxdesign(){
        $meta = $this->getMetaData('UI/UX_Design');
        return view('frontend.ui-ux-design',$meta);
    }
    public function virusmalwareremoval(){
        $meta = $this->getMetaData('virus_malware_removal');
        return view('frontend.virus-malware-removal',$meta);
    }
    public function webagency(){
        $meta = $this->getMetaData('webagency');
        return view('frontend.web-agency',$meta);
    }
    public function webdevelopment(){
        $meta = $this->getMetaData('Web_Development');
        return view('frontend.web-development',$meta);
    }
    public function wificonnectivity(){
        $meta = $this->getMetaData('Wifi-Connectivity');
        return view('frontend.wifi-connectivity',$meta);
    }
    public function checkout(){
    
        return view('frontend.checkout');
    }
}
