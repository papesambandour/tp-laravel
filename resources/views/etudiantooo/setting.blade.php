@extends('layout-admin')

@section('title')
    African Softwares | ADMIN
@endsection
@section('css')

@endsection

@section('content')
    {{--TITLE START--}}
    <div class="page-header">
        <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-key"></i>
              </span>
            Paramettres
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Permet d'ajouter des utilisateur
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    {{--TITLE END--}}

    <div class="row" id="success" style="display: none">
        <div style="padding: 10px;border: #a9e0e4 1px solid;width: 300px;margin: 10px auto" class="text-success text-center">Ajout reussit avec sccues</div>

    </div>
    <div class="row" id="danger" style="display: none">
        <div style="padding: 10px;border: red 1px solid;width: 300px;margin: 10px auto" class="text-danger text-center">Une erreur est survenue</div>

    </div>

    <div class="col-8 grid-margin stretch-card" style="margin: auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Ajout de utilisateur</h4>


            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('admin/js/scripte/licence.js')}}"></script>

@endsection
