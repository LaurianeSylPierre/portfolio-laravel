<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class CompetencesController extends Controller
{
    public function index()
    {

        $language = Input::all();
        if(Input::has('language')){
            return view('competences', $language);
        }
        else{
            $language = ['language' => ''];
            return view('competences', $language);
        }
    }

    public static function competences(){

        $comp = DB::select("SELECT * FROM languages");

        foreach($comp as $row){ ?>
            <div id="<?php print_r($row->language_id); ?>" class="row <?php print_r($row->language_name); ?>">
                    <div class="square"></div>
                    <a class="link" href="competences?language=<?php print_r($row->language_name); ?>"><?php print_r($row->language_name); ?></a>
                    <img src="img/<?php print_r($row->images); ?>" alt="" class="img-comp">
            </div>
        <?php }
    }

    public static function acquisition(){
        $language = Input::get('language');
        $acq = DB::select('SELECT acquisition_date FROM languages WHERE language_name = :language', ['language' => $language]);

        foreach($acq as $row){ ?>
            <div class="acquisition"><?php print_r($row->acquisition_date); ?></div>
        <?php }
    }

    public static function frameworks(){
        $language = Input::get('language');
        $frameworks = DB::select('SELECT fl_name FROM frameworks_libraries WHERE language = :language', ['language' => $language]);

        foreach($frameworks as $row){?>
            <div class="frameworks"><?php print_r($row->fl_name); ?> </div>
        <?php }
    }
}
