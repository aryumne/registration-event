<?php

namespace App\Http\Controllers;

use App\Models\User;
use Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect;
use View;
use Rap2hpoutre\FastExcel\FastExcel;

class ReportController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->paginate(10);
        return view('report', ['user' => $user, 'lastLogin' => 1]);
    }

    public function lastLogin()
    {
        $user = User::whereNotNull('last_login')->paginate(10);
        return view('report', ['user' => $user, 'lastLogin' => 0]);
    }

    public function showExport($lastLogin)
    {

        $data = [];

        if ($lastLogin) {
            foreach (User::all() as $val) {
                $tmp = [
                    'First Name' => $val->first_name,
                    'Last Name' => $val->last_name,
                    'Email' => $val->email,
                    'Last Login' => $val->last_login,
                    'Phone' => $val->phone,
                    'Address' => $val->address,
                    'Job Title' => $val->job_title,
                    'Company' => $val->company,
                    'Apakah Sudah Menjadi Seller di Blibli ?' => $val->question1 == 0 ? "Tidak" : "Ya",
                    'Nama Toko' => $val->question1_nama_toko,
                    'Apakah Sudah Berjualan di Platform Ecommerce Lain ?' => $val->question2 == 0 ? "Tidak" : "Ya",
                    'Saat ini Mitra Ecommerce Usaha Bapak/Ibu ?' => $val->question3,
                    'Date' => $val->created_at == null ? null : $val->created_at->format('d M Y')
                ];

                $data[] = $tmp;
            }
        } else {
            foreach (User::all()->whereNotNull('last_login') as $val) {
                $tmp = [
                    'First Name' => $val->first_name,
                    'Last Name' => $val->last_name,
                    'Email' => $val->email,
                    'Last Login' => $val->last_login,
                    'Phone' => $val->phone,
                    'Address' => $val->address,
                    'Job Title' => $val->job_title,
                    'Company' => $val->company,
                    'Apakah Sudah Menjadi Seller di Blibli ?' => $val->question1 == 0 ? "Tidak" : "Ya",
                    'Nama Toko' => $val->question1_nama_toko,
                    'Apakah Sudah Berjualan di Platform Ecommerce Lain ?' => $val->question2 == 0 ? "Tidak" : "Ya",
                    'Saat ini Mitra Ecommerce Usaha Bapak/Ibu ?' => $val->question3,
                    'Date' => $val->created_at == null ? null : $val->created_at->format('d M Y')
                ];

                $data[] = $tmp;
            }
        }
        
        $list = collect($data);


        return (new FastExcel($list))->download('file.xlsx');
    }
}
