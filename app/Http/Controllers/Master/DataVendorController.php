<?php

namespace App\Http\Controllers\Master;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataVendorController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::where("id_role", 4)->get()
        ];

        return view('superadmin.vendor.data_vendor', $data);
    }

    public function viewPDF()
    {
        $pdf = PDF::loadHTML("superadmin.vendor.pdf_vendor");

        return $pdf->stream();
    }

   public function pdf()
   {
        $data = User::where("id_role", 4)->get();

        $pdf = PDF::loadView('superadmin.vendor.print_pdf', ['user' => $data]);

        return $pdf->download("dvendor.pdf");
   }

   public function download($id)
   {
        $data = User::where("id", $id)->where("id_role", 4)->first();

        // return view("superadmin.vendor.pdf_vendor", ["user" => $data]);

        $pdf = PDF::loadView('superadmin.vendor.pdf_vendor', ['user' => $data]);

        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );

        return $pdf->download("Data-vendor.pdf");
   }
}
