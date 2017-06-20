@extends('templateBase')

@section('contenu')
            <div class="row" id="categorysname">
                <div class="row">
                    <h2>
                        <a :href="url[<?php if($_GET){echo $_GET['planet'];} else{ echo '0';} ?>].link">
                            {{items[<?php if($_GET){echo $_GET['planet'];} else{ echo '0';} ?>].planet}}
                        </a>
                    </h2>
                </div>
                <ul class="nav-parent">
                    <li id="p1" class="col-xs-12">
                        <a class="link" href="index?planet=0">
                            {{ Html::image('img/planet1.png') }}
                        </a>
                    </li>
                    <li id="p2" class="col-xs-12">
                        <a class="link" href="index?planet=1">
                            {{ Html::image('img/planet2.png') }}
                        </a>
                    </li>
                    <li id="p3" class="col-xs-12">
                        <a class="link" href="index?planet=2">
                            {{ Html::image('img/planet3.png') }}
                        </a>
                    </li>
                    <li id="p4" class="col-xs-12">
                        <a class="link" href="index?planet=3">
                            {{ Html::image('img/planet4.png') }}
                        </a>
                    </li>
                    <li id="p5" class="col-xs-12">
                        <a class="link" href="index?planet=4">
                            {{ Html::image('img/planet5.png') }}
                        </a>
                    </li>
                </ul>
                <div class="row">
                    <div class="description-box">
                        <p>{{explain[<?php if($_GET){echo $_GET['planet'];} else{ echo '0';} ?>].expli}}</p>
                    </div>
                </div>
            </div>
        

<script>
    $(document).ready(function() {
        $(document).on("click", ".link", function(event){
            event.preventDefault();
            var $a = $(this);
            var adresse = $a.attr("href");
            var arr = adresse.split('?')[1];
            $.ajax({
                type : "GET",
                data: arr,
                url: 'index',
                success : function(data){
                    $("#cadre").html(data);
                }
            });
        });
    });

    var vm_infos = new Vue({
        el: '#categorysname',
        data: {
            items: [
                {planet: 'Informations Générales'},
                {planet: 'Réalisations'},
                {planet: 'Compétences'},
                {planet: 'Formation'},
                {planet: 'Contact'},
            ],
            explain: [
                {expli: 'Découvrez qui est Lauriane PIERRE, la créatrice de cette page'},
                {expli: 'Vue sur les diverses créations de sites, applications ou autre réalisés jusqu\'à présent'},
                {expli: 'Les différents langages connus et utilisés'},
                {expli: 'Les formations suivies'},
                {expli: 'Envie d\'envoyer un message ? C\'est ici que ça se passe'},
            ],
            url: [
                {link: 'personnal'},
                {link: 'projects'},
                {link: 'competences'},
                {link: 'formation'},
                {link: 'contact'},
            ],
        },
    });
</script>
@endsection
