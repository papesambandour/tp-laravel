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
            Licence
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Permet d'ajouter des licences
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    {{--TITLE END--}}

    <div class="row" id="success" style="display: none">
        <div style="padding: 10px;border: #a9e0e4 1px solid;width: 300px;margin: 10px auto" class="text-success text-center">Ajout reussit avec Succes</div>

    </div>
    <div class="row" id="danger" style="display: none">
        <div style="padding: 10px;border: red 1px solid;width: 300px;margin: 10px auto" class="text-danger text-center">Une erreur est survenue</div>

    </div>

    <div class="col-8 grid-margin stretch-card" style="margin: auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Ajout de licence</h4>

                <form class="forms-sample" id="formLicence">

                    <div class="form-group">
                        <label for="produitcode">Produit</label>
                        <select class="form-control" id="produitcode" required>
                            <option value="">---Faite votre choix---</option>
                            @foreach($produits as $produit)
                                <option value="{{$produit->code_pr}}">Kaspersky {{$produit->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="packcode">Pack</label>
                        <select class="form-control" id="packcode" required>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="key">Textarea</label>
                        <textarea class="form-control" id="key" rows="4" required></textarea>
                    </div>
                   <div class="text-center">
                       <button type="submit" class="btn btn-gradient-primary mr-2">Ajouter</button>
                       <button type="reset" id="resetInputKey" class="btn btn-gradient-danger mr-2">Annuler</button>
                   </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('admin/js/scripte/licence.js')}}"></script>

@endsection
