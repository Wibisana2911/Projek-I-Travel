<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Wisata;
class HomeController extends Controller
{
	function index(){
		//memanggil view landing page pada folder frontpage
		//disertai dengan variable title yang dapat ditampilkan pada layout
		return view('frontpage.landingpage', ['title' => "Landing Page"]);
   	 }

	 public function Tiket(){
		$Tiket= Tiket::all();
        return view('frontpage.ticketpage' , compact('Tiket'));
	 }
	 public function aboutus(){
		return view('frontpage.aboutus');
	 }
	 public function contactus(){
		return view('frontpage.contactus');
	 }
	 public function formticket(){
		return view('frontpage.orderpage');
	 }

	 public function Wisata(){
		$Wisata= Wisata::all();
		return view('frontpage.wisata', compact('Wisata'));
	 }
	 public function artikel(){
		$Wisata= Wisata::all();
		return view('frontpage.artikel',compact('Wisata'));
	 }
	 public function admin(){
        return view('backpage.admin', ['title' => "admin page"]);
    }
	public function calendar(){
        return view('backpage.calendar', ['title' => "calendar page"]);
    }
	public function tabledata(){
        return view('backpage.tabledata', ['title' => "table data page"]);
    }
    public function formwisata(){
        return view('backpage.formwisata', ['title' => "form wisata page"]);
    }
    public function formtiket(){
        return view('backpage.formtiket', ['title' => "form tiket page"]);
    }

}
