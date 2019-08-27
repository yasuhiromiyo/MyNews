<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profiles;


class ProfileController extends Controller
{
    //
    public function add()
      {
          return view('admin.profile.create');
      }

    public function create(Request $request)
      {
                // 以下を追記
      // Varidationを行う
      $this->validate($request, Profiles::$rules);

      $profiles = new Profiles;
      $form = $request->all();

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);

      // データベースに保存する
      $news->fill($form);
      $news->save();

          return redirect('admin/profile/create');
      }

    public function edit(Request $request)
     {
  
      // Profiles Modelからデータを取得する
      $profiles = Profiles::find($request->id);
      if (empty($profiles)) {
        abort(404);    }
            return view('admin.profile.edit');
     }
   
    public function update(Request $request)
     {
               // Validationをかける
      $this->validate($request, Profiles::$rules);
      // profiles Modelからデータを取得する
      $profiles = Profiles::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profiles_form = $request->all();
       unset($profiles_form['_token']);
      // 該当するデータを上書きして保存する
      $profiles->fill($profiles_form)->save();

            return redirect('admin/profile/edit');
     }


}
