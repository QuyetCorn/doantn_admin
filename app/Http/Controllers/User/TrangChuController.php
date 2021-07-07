<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\SupSlide;
use App\Models\ChiTietSP;
use App\Models\LoaiSP;
use App\Models\SanPham;
class TrangChuController extends Controller
{
    public function index() {
        $slide = Slide::all();
        $sup_slide = SupSlide::paginate(2);
        $sanpham = ChiTietSP::All();
        // $sanphammoi = ChiTietSP::where('new',1)->get();
        $sanphamsale = ChiTietSP::where('giam_gia','<>',0)->get();
        return view('user.page.trang-chu.trangchu',compact('slide','sup_slide','sanpham','sanphamsale'));
    }

    public function search(Request $req) {
        $sanpham = ChiTietSP::where('ten_sp','like','%'.$req->key.'%')
                                ->orWhere('gia',$req->key)
                                ->get();
        return view('user.page.trang-chu.search',compact('sanpham'));
    }

    public function chinhsachthanhtoan(){
        return view('user.page.chinh-sach.chinhsachthanhtoan');
    }
    public function chinhsachdoitrabaohanh(){
        return view('user.page.chinh-sach.chinhsachdoitrabaohanh');
    }
}
