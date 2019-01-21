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
                <i class="mdi mdi-eye"></i>
              </span>

            @if($page == "KPS_AV")
                Licences Anti-Virus
             @elseif($page  == "KPS_IS")
                Licences Internet Securtity
            @elseif($page == "KPS_TS")
                Licences Total Securtity
            @endif
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Donnes tous les licenses
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
                                    Code licences
                                </th>
                                <th>
                                    Pack licence
                                </th>
                                <th>
                                    Prix
                                </th>
                                <th>
                                    Etat
                                </th>

                                <th>
                                    Date de creation
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($licences as $licence)
                                <tr>
                                    <td>
                                        {{$licence->key}}
                                    </td>
                                    <td>
                                        {{$licence->pack->name_pk}}
                                    </td>
                                    <td>
                                        {{$licence->pack->price_pk}}
                                    </td>

                                    <td>

                                        @if($licence->geted == "1")
                                            <label class="badge badge-gradient-warning">
                                               Vendu
                                            </label>

                                        @elseif($licence->geted == "0")
                                            <label class="badge badge-gradient-success">
                                                Disponible
                                            </label>
                                        @endif

                                    </td>
                                    <td>
                                        {{$licence->created_at}}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer pull-right" >
                    {{$licences->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
