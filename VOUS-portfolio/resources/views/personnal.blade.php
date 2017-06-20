@extends('templateBase')

@section('contenu')
<main>
    <div class="container">
        <div class="row">
            <div class="general-infos">
                <h3>Lauriane PIERRE</h3>
                <p>Née le 14 janvier 1993</p>
            </div>
        </div>
        <div class="row">
            <h4>Quelques statistiques</h4>
        </div>
        <div class="row">
            <div class="col-xs-6 tea">
                <div class="cate">Thés consommés</div>
            </div>
            <div class="col-xs-6 point-virgule">
                <div class="cate">Points-virgules corrigées</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 tea">
                <div id="tea-contenu"></div>
            </div>
            <div class="col-xs-6 point-virgule">
                <div id="pv-contenu"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 caractere">
                <h4>
                    Caractère
                </h4>
                <div class="carac-contenu">
                    <div class="row">
                        <div class="prag">Pragmatique</div>
                    </div>
                    <div class="row">
                        <div class="listen">A l'écoute</div>
                    </div>
                    <div class="row">
                        <div class="crea">Créative</div>
                    </div>
                    <div class="row">
                        <div class="patient">Patiente</div>
                    </div>
                    <div class="row">
                        <div class="ci">Connaissances inutiles</div>
                    </div>
                    <div class="row">
                        <div class="sour">Souriante</div>
                    </div>
                    <div class="row">
                        <div class="bdm">Jeux de mots nuls</div>
                    </div>
                    <div class="row">
                        <div class="math">Maths</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
(function(){
counter = {
$element : null,
count : 0,
maxCount : 42,
interval : null,
//Initialize
init : function(compteur){
    this.$element = compteur;
    this.run();
    this.interval = window.setInterval("counter.run();", 50);
},
// Run
run : function(){
    if (this.count === this.maxCount){
        window.clearInterval(this.interval);
    }

    this.$element.html(this.count);
    this.count++;
}
};

$.fn.counter = function(){
counter.init(this);
}

$("#tea-contenu").counter();
})();

</script>
@endsection
