<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use App\Product;
use App\ProductImage;

class HomeController extends Controller
{
    public function index(){
    	$sliders =Slider::latest()->get();
    	$menuLimit=Menu::where('parent_id',0)->get();
    	return view('content.all_product',compact('sliders','menuLimit'));
    }
    public function introduction(){
        $products=Product::latest()->take(4)->get();
    	$sliders =Slider::latest()->take(1)->get();
    	$menuLimit=Menu::where('parent_id',0)->get();
    	return view('content.introducton.general_introduction',compact('sliders','menuLimit','products'));
    }
	// public function gioi_thieu(){

 //        $sliders =Slider::latest()->get();
 //        $menuLimit=Menu::where('slug',)->get();
	// 	return view('content.introducton.general_introduction',compact('sliders','menuLimit'));
	// }
     public function gioi_thieu_page(){
        
        $menuLimit=Menu::where('parent_id',0)->get();
        $menu_parent=Menu::where('slug','gioi-thieu')->first();
        $menu_childrent=Menu::where('parent_id',$menu_parent->id)->get();
        $sliders =Slider::where('page_id',$menu_parent->id)->first();
        $breadcrumb=array('name'=>$menu_parent);
       // dd($breadcrumb);
         return view('content.introducton.general_introduction',compact('sliders','menuLimit','breadcrumb','menu_parent','menu_childrent'));
       
        
        
    }
    public function gioi_thieu($slug ,Request $request){
        
        $menuLimit=Menu::where('parent_id',0)->get();
        $menu_parent=Menu::where('slug','gioi-thieu')->first();
        $menu_childrent=Menu::where('parent_id',$menu_parent->id)->get();
        $menu_page=Menu::where('slug',$slug)->first();
        $sliders =Slider::where('page_id',$menu_page->id)->first();
        $breadcrumb=array($menu_parent,$menu_page);
        //dd($breadcrumb);
       return view('content.introducton.general_introduction',compact('sliders','menuLimit','breadcrumb','menu_childrent','menu_parent','menu_page'));
       
        
        
    }
   
}
