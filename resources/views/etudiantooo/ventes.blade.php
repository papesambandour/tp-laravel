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
                <i class="mdi mdi-shopping"></i>
              </span>
            Ventes
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Donnes tous les ventes
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    {{--TITLE END--}}




    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> <label class="badge badge-gradient-danger" >Kaspersky</label></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    Produit
                                </th>
                                <th>
                                    Prix
                                </th>
                                <th>
                                    Nom client
                                </th>
                                <th>
                                    Mail client
                                </th>
                                <th>
                                    Vente
                                </th>
                                <th>
                                    Licence
                                </th>
                                <th>
                                    Date
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>
                                        {{$transaction->name_pr_tr .' '. $transaction->name_pk_tr}}
                                    </td>
                                    <td>
                                        {{$transaction->price_pk_tr}}
                                    </td>
                                    <td >
                                        {{$transaction->name_client}}
                                    </td>
                                    <td>
                                        {{$transaction->email_client}}
                                    </td>
                                    <td>

                                        @if($transaction->state == "success")
                                            <label class="badge badge-gradient-success">
                                               Reussit
                                            </label>

                                        @elseif($transaction->state == "running")
                                            <label class="badge badge-gradient-warning">
                                                En cours
                                            </label>
                                        @elseif($transaction->state == "cancel")
                                            <label class="badge badge-gradient-danger">
                                                Annuler
                                            </label>
                                        @endif

                                    </td>
                                    <td>
                                        @if($transaction->key_send == "success")
                                            <label class="badge badge-gradient-success">
                                                Reussit
                                            </label>

                                        @elseif($transaction->key_send == "running")
                                            <label class="badge badge-gradient-warning">
                                                En cours
                                            </label>
                                        @endif
                                    </td>
                                    <td>
                                        {{$transaction->created_at}}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer pull-right" >
                    {{$transactions->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
