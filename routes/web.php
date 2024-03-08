<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompiler;

//الدخول على الماستر
route::get('/master',function(){
return view('layeout.master');
});

//الدخول الاساسى
Route::get('/', function () {
return view('index');
});

//الدخول على الصفحة الرئيسية للمشروع
route ::get('/the_main_page',function(){
return view('index');
})->name("main");

//الدخول على لوحة التحكم للمشروع
route::get('/dashboard',function(){
return view('dashboard');
})->name("dash");

//الدخول على نماذج صفحة التحكم
    //عناصر النماذج
    route ::get('/forms_elements',function(){
        return view('forms-elements');
    })->name("form_elements");
    //شكل النماذج
    route ::get('/forms_layouts',function(){
        return view('forms-layouts');
    })->name("forms_layouts");
    //تعديل النماذج
    route ::get('/forms_editors',function(){
        return view('forms-editors');
    })->name("forms_editors");
    //صلاحيات النماذج
    route ::get('/forms_validation',function(){
        return view('forms-validation');
    })->name("forms_validation");

//الدخول على جداول لوحة التحكم
    //الجداول العامة
    route ::get('/tables_general',function(){
        return view('tables-general');
    })->name("tables_general");
    //جداول البينات
    route ::get('/tables_data',function(){
        return view('tables-data');
    })->name("tables_data");

//الدخول على صفحات النسب و التحليلات الاحصائية
    //
    route ::get('/charts_complaints',function(){
        return view('charts-complaints');
    })->name("charts_complaints");
    //
    route ::get('/charts_price',function(){
        return view('charts-price');
    })->name("charts_price");
    //'
    route ::get('/charts_website',function(){
        return view('charts-website');
    })->name("charts_website");

//الدخول على صفحات لوحة التحكم

    // الدخول على الصفحة الشخصية للمستخدم
    route ::get('/my_account',function(){
    return view('users-profile');
    })->name("my-account");

    //الدخول الى الشكاوى
    route ::get('/complaints',function(){
    return view('pages-complaints');
    })->name("complaints");

    //الدخول الى صفحة الاسئلة
    route ::get('/F.A.Q',function(){
    return view('pages-faq');
    })->name("F.A.Q");

    //الدخول الى التواصل
    route ::get('/contact',function(){
    return view('pages-contact');
    })->name("contact");

    //الدخول على صفحة انشاء حساب
    route::get('/creat-account',function(){
    return view('pages-register');
    })->name("creat-account");

    //الدخول على صفحة تسجيل الدخول
    route ::get('/login',function(){
    return view('pages-login');
    })->name("login");

// //الدخول الى الصفحة الشخصية فى لوحة التحكم مع وضع اسم كل شخص حسب الكود الخاص بة
// route::get('/my_account/{id}',function($id){
// $emp=[
// '14736' => 'Nada Khaled Said',
// '22222' => 'Hessain Adel'
// ];
// return view("users-profile",[
// //?? 'User Name'==>معناها لو دخلت كود لمستخدم مش موجود يظهر الرسالة دى
// 'id'=> $emp[$id] ?? 'User Name'
// ]);
// });







