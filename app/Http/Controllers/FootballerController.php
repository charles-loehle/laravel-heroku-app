<?php

namespace App\Http\Controllers;

use App\Models\Footballer;
use Illuminate\Http\Request;

class FootballerController extends Controller
{
    public function index() {
      $footballers = Footballer::get()->toJson(JSON_PRETTY_PRINT);

      return response($footballers, 200);
    }

    public function show($id = null) {
        $footballer = Footballer::find($id);

        if($footballer) {
          $footballer = $footballer->toJson(JSON_PRETTY_PRINT);

          return response($footballer, 200);
        } else {
          return response()->json([
              'message' => 'Footballer not found'
          ], 404);
        }
    }
}
