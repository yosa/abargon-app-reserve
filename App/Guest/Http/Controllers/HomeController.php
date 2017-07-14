<?php

namespace App\Guest\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Guest\Logics\HomeLogic;
use App\Guest\Logics\DetailLogic;
use App\Drive\Logics\Files\Images\ResizeLogic;

/**
 * Home controller
 *
 * @author Luis Josafat Heredia Contreras
 */
class HomeController extends Controller
{
    
    public function index(HomeLogic $logic)
    {
        return view('guest', $logic->init());
    }
    
    public function detail($id, DetailLogic $logic)
    {
        $result = $logic->init($id);
        
        if( !$result) {
            return redirect('/')
                ->withErrors([
                    [
                        'message'=>'El evento no existe o acaba de ser eliminado'
                    ]
                ]);
        }
        
        return view('detail', $result);
    }
    
    public function photo($id, $width, $height, ResizeLogic $logic)
    {        
        $fileConfig = $logic->init($id, $width, $height);        
        if( !$fileConfig) {
            return response()->data(false);
        }        
        return response()->file($fileConfig['path'], $fileConfig['headers']);        
    }
    
}
