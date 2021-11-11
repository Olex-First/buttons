<?php

namespace App\Http\Controllers;
use App\Http\Requests\ButtonRequest;
use App\Models\Button;
use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function submit(ButtonRequest $req)
    {

        $button = new Button();
        $button->name = $req->input('name');


        $button->save();

        return redirect()->route('home')->with('success', 'It was crated');

    }
    public function allData(){
//        $contact = new Contact();
//        dd ($contact->all());
//        ________________________________
//        $contact = Contact::all();
//        return view('categories/index', compact('categories'));
//        or this short one to write
//        return view('messages', ['data' => Contact::all()]);
        $button = new Button();
        return view('button', [ 'data' => $button->orderBy('id', 'desc')->get( ) ]);
    }
    public function showOneMeal($id){

        $button = new Button();
        return view('one-meal', ['data'=> $button->find($id)] );
    }

    public function deleteMessage($id){
        Button::find($id)->delete();
        return  redirect()->route('home') ->with('success', 'Your meal was deleted!');    }
}
//public function deleteMessage($id){
//    Contact::find($id)->delete();
//    return redirect()->route('contact-data', $id)->with('success', 'Your message is deleted!');    }
