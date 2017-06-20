@extends('templateBase')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="galaxies">
            <div class="row">
                <img src="img/galaxy1.png" alt="galaxy 1 sites" class="col-xs-5">
                <h3 class="col-xs-5"><a href="projects-open?sites">Sites</a></h3>
            </div>
            <div class="row">
                <h3 class="col-xs-5"><a href="projects-open?one_page">One Page</a></h3>
                <img src="img/galaxy2.png" alt="galaxy 2 one page" class="col-xs-5">
            </div>
            <div class="row">
                <img src="img/galaxy4.png" alt="galaxy 3 applications" class="col-xs-5">
                <h3 class="col-xs-5"><a href="projects-open?applications">Applications</a></h3>
            </div>
            <div class="row">
                <h3 class="col-xs-5"><a href="projects-open?divers">Divers</a></h3>
                <img src="img/galaxy3.png" alt="galaxy 4 divers" class="col-xs-5">
            </div>
        </div>
    </div>
</div>
@endsection
