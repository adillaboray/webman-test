<?php

namespace app\Controller;

use support\Request;

class User
{
  public function hello(Request $request)
  {
    $default_name = 'webman';
    $name = $request->get('name', $default_name);

    // return response('hello ' . $name);

    // Return to JSON
    // return json([
    //   'code' => 0,
    //   'message' => 'ok',
    //   'data' => $name
    // ]);

    // Return to view (Blade installed)
      return view('user/hello', ['name' => $name]);
  }
}