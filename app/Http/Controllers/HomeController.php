<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class HomeController extends Controller
{
    //
    public function test()
    {
        $img = Image::make(public_path('image/bottom_map/huoche_blue.png'))->resize(900,600);
        //始发站
        $startStation = '苏州A';
        $img->text($startStation, 100, 100, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(40);
            $font->color('#FF0000');
        });
        $startStationPY = 'PinYin';
        $img->text($startStationPY, 100, 150, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(40);
            $font->color('#FF0000');
        });
        //到站
        $endStation = '苏州B';
        $img->text($endStation, 500, 100, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(40);
            $font->color('#FF0000');
        });
        $endStationPY = 'PinYin';
        $img->text($endStationPY, 500, 150, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(40);
            $font->color('#FF0000');
        });
        //车次
        $no = 'D1234';
        $img->text($no, 300, 150, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(40);
            $font->color('#FF0000');
        });
        //检票口
        $ticketCheck = '二层7号检票口';
        $img->text($ticketCheck, 500, 30, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(30);
            $font->color('#FF0000');
        });
        //时间
        $dateTime = '2018-05-01 10:10:10';
        $dateTimeCarbon = Carbon::createFromFormat('Y-m-d h:i:s', $dateTime);
        $img->text($dateTimeCarbon->format('Y    m    d    h:i'), 80, 200, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(30);
            $font->color('#FF0000');
        });
        //时间
        $price = '999.99';
        $img->text($price, 80, 250, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(30);
            $font->color('#FF0000');
        });
        //车厢号
        $carNo = 10;
        //座位号
        $seatNo = 10;
        $img->text($carNo.'  '.$seatNo, 550, 200, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(30);
            $font->color('#FF0000');
        });
        //席别
        $seatLevel = '新空调硬座';
        $img->text($seatLevel, 550, 240, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(30);
            $font->color('#FF0000');
        });
        //姓名身份证
        $name = '人姓名';
        $idCard = '3507231990****1234';
        $img->text($idCard . ' ' . $name, 80, 450, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(30);
            $font->color('#FF0000');
        });
        //编号
        $code = '12313131312213';
        //售票地
        $sellAddress = '厦门';
        $img->text($code.'  '.$sellAddress.'售', 80, 550, function ($font) {
            $font->file(public_path('font/msyh.ttf'));
            $font->size(30);
            $font->color('#FF0000');
        });
        return $img->response('png');
    }
}
