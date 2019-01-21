


@extends('layout-admin')

@section('title')
    Etudiant liste
@endsection
@section('css')

@endsection

@section('content')
    <div class="row">
        @if(isset($add))
            <div class="alert alert-success">
                Ajout reussit avec succes
            </div>
        @endif

            @if(isset($edit))
                <div class="alert alert-success">
                    Etudiant mise a jour  avec reussit
                </div>
            @endif
            @if(isset($delete))
                <div class="alert alert-success">
                    Etudiant suprimer avec sucess
                </div>
            @endif
    </div>
    <div class="row">

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> <a href="{{url('/etudiants/add')}}" class="badge badge-gradient-danger btn" id="item_time">Ajout etudiant</a></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{trans('etudiant.l_name')}}</th>
                                <th>{{trans('etudiant.f_name')}}</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($etudiants as $e)
                                <tr>
                                    <td>{{$e->nom}}</td>
                                    <td>{{$e->prenom}}</td>
                                    <td style="text-align: center">
                                        <a class="btn btn-success btn-sm" href="{{url('/etudiants/show/').'/'.$e->id}}">{{trans('commun.details')}}</a>
                                        <a class="btn btn-warning btn-sm"   href="{{url('/etudiants/edit/').'/'.$e->id}}">{{trans('commun.update')}}</a>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous suprimer l\'etudiant ?')" href="{{url('/etudiants/delete/').'/'.$e->id}}">Suprimmer</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        {{$etudiants->links()}}
    </div>


@endsection

@section('js')
<script>
    setTimeout(function(){$('.alert-success').remove()},3000)
</script>
@endsection

