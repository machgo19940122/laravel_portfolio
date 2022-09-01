<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail; //メール
use App\Mail\RegisterMail; 
use Illuminate\Support\Facades\DB;
use Session;


class ContactsController extends Controller
{
    //会員登録
    public function postcontact(Request $request){  
        // バリデーション
        $this->validate($request,[
            'email' => 'required',
            'name' => 'required',
        ]);

        // DBインサート
        $contact = new Contact([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'comment' => $request->input('comment'),
        ]);

        // 保存
        $contact->save();
      
        Session::flash('flash_message_1', 'お問合せを受け付けました。こちらから折り返しご連絡いたしますので、今暫くお待ちください。');
        return redirect()->route('home');
       

    }

}
