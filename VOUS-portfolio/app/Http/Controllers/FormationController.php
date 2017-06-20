<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        return view('formation');
    }

    public static function parcours(){
        $parcours = DB::select("SELECT * FROM parcours ORDER BY years ASC");

        foreach($parcours as $row){
            if(empty($row->travail)){ ?>
                <div class="row">
                    <div class="col-xs-6">
                        <img src="img/star.png" alt="">
                    </div>
                    <div class="col-xs-6">
                        <?php
                            print_r($row->diplome); ?> <br> <?php
                            print_r($row->etablissement); ?> <br> <?php
                            print_r($row->years);
                        ?>
                    </div>
                </div> <?php
            }
            else{ ?>
                <div class="row">
                    <div class="col-xs-6">
                        <img src="img/star.png" alt="">
                    </div>
                    <div class="col-xs-6">
                        <?php
                            print_r($row->travail); ?> <br> <?php
                            print_r($row->entreprise); ?> <br> <?php
                            print_r($row->years);
                        ?>

                    </div>
                </div> <?php
            }
        }
    }
}
