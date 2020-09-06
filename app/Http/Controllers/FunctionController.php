<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Feedback;

class FunctionController extends Controller
{
    public static function translateCategory($category)
    {
        if ($category == "Кузов") {
            return "Кузова";
        } elseif ($category == "Рулевое управление") {
            return "Рулевого управления";
        } elseif ($category == "Система охлаждения") {
            return "Системы охлаждения";
        } elseif ($category == "Оптика") {
            return "Оптики";
        } elseif ($category == "Двигатель") {
            return "Двигателя";
        } elseif ($category == "Трансмиссия") {
            return "Трансмиссии";
        } elseif ($category == "Электрика") {
            return "Электрики";
        } elseif ($category == "Салон") {
            return "Салона";
        } else return $category;
    }

    public function about()
    {
        return view('about');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'UserName' => 'required',
            'UserMail' => 'required|email',
            'UserPhone' => 'required|regex:/^(\+375)[0-9]{9}$/',
            'MessageTopic' => 'required',
            'MessageText' => 'required'
        ]);

        $data = array(
            'UserName' => $request->UserName,
            'UserPhone' => $request->UserPhone,
            'UserMail' => $request->UserMail,
            'MessageTopic' => $request->MessageTopic,
            'MessageText' => $request->MessageText
        );

        Mail::to('vvgcarparts@yandex.ru')->send(new Feedback($data));
        return back()->with('success', 'Спасибо, что написали нам!');
    }
}
