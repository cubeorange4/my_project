<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index(Request $request){
        $sampleValue = "sample テキストです。";

        $records = DB::connection('mysql')->select("select * from users");

        //$insertResult1 = DB::connection("mysql")->insert("insert into users (email,name,password) values ('email1','name1','pssword1')");
        //$insertResult2 = DB::connection("mysql")->insert("insert into users (email,name,password) values ('email2','name2','pssword2')");
        //$insertResult3 = DB::connection("mysql")->insert("insert into users (email,name,password) values ('email3','name3','pssword3')");

        $deleteResult1 = DB::connection("mysql")->delete("delete from users where id = 1");
        $deleteResult2 = DB::connection("mysql")->delete("delete from users where id = 2");
        $deleteResult3 = DB::connection("mysql")->delete("delete from users where id = 3");
        dd($deleteResult1);

        return view("sample/index", [ "sampleValue" => $sampleValue ]);
    }
}