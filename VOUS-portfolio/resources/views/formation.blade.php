<?php use App\Http\Controllers\FormationController; ?>

@extends('templateBase')

@section('contenu')
    <?php FormationController::parcours(); ?>
@endsection
