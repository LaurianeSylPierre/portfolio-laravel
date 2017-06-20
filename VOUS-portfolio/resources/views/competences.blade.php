<?php use App\Http\Controllers\CompetencesController; ?>

@extends('templateBase')

@section('contenu')
<div class="row three">
    <div class="col-xs-4 base-infos">Analyser et répondre aux besoins, résoudre les problèmes</div>
    <div class="col-xs-4 base-infos">Créer une navigation fluide et un design efficace</div>
    <div class="col-xs-4 base-infos">Désir d'apprendre toujours plus et de s'améliorer, veille constante</div>
</div>
<div class="row comp-infos">
    <?php
        CompetencesController::competences();
    ?>
    <div class="row complementary-infos">
        <?php
            CompetencesController::acquisition();
            CompetencesController::frameworks();
        ?>
    </div>
</div>
<script>
var complementary = '<?php echo $language?>';
var order = parseInt($('.<?php echo $language?>').attr('id'), 10);

if(complementary != ''){
    $(document).ready(function(){
        $('.complementary-infos').css("display", "block");
        $('.complementary-infos').css("order", order);
        $('.three').css("display", "none");
    });
}
</script>
@endsection
