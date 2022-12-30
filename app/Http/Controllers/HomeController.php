<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Review;
use App\Models\Wisata;
use App\Models\Harga;
use Illuminate\Support\Facades\Auth ;
class HomeController extends Controller
{
	function index(){
		//memanggil view landing page pada folder frontpage
		//disertai dengan variable title yang dapat ditampilkan pada layout
        $Wisata= Wisata::all();
        $review = Review::all();
		return view('frontpage.landingpage', compact('Wisata','review'), ['title' => "Landing Page"]);
   	 }

	  public function Tiket(){
		$Tiket= Tiket::all();
        $harga= Harga::all();
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
     public function artikel2(){
		$Wisata= Wisata::all();
		return view('frontpage.artikel2',compact('Wisata'));
	 }

     public function artikel3(){
		$Wisata= Wisata::all();
		return view('frontpage.artikel3',compact('Wisata'));
	 }

    //  backpage
	 public function admin(){
        $Wisata= Wisata::all();
        return view('backpage.admin',compact('Wisata'));
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
	public function formedit(){
        return view('backpage.formedit', ['title' => "form edit tiket page"]);
    }
    public function formeditwisata(){
        return view('backpage.formeditwisata', ['title' => "form edit wisata page"]);
    }
    public function createReview(Request $request){
        $review = new Review();
        $review->id_user = Auth::user()->id;
        $review->deskripsi = $request->deskripsi;
        $review->save();
        return redirect()->back();
    }

}
