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
                <i class="mdi mdi-chart-bar"></i>
              </span>
            @if($page == "KPS_AV")
                Statistique  Licences Anti-Virus
            @elseif($page  == "KPS_IS")
                Statistique  Licences Internet Securtity
            @elseif($page == "KPS_TS")
                Statistique Licences Total Securtity
            @endif
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Donnes tous les statistique sur les licenses
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    {{--TITLE END--}}

    {{--STATISTIQUE--}}
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> <label class="badge badge-gradient-danger" >Statistique</label></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th> Produit </th>
                                <th style="text-align: center"> Licences total</th>
                                <th style="text-align: center"> Licences vendus </th>
                                <th style="text-align: center"> Licences restants</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($licencesTotal as $key => $total)
                                <tr>
                                    <td>
                                        {{$total->pack->name_pk}}
                                    </td>
                                    <td style="text-align: center">

                                        <label class="badge badge-gradient-success"><span id="av_trans">{{$total->total}}</span></label>
                                    </td>
                                    <td style="text-align: center">
                                        <label class="badge badge-gradient-primary"><span id="av_trans">
                                                {{isset($licencesVendus[$key]) ? $licencesVendus[$key]->vendu : 0}}
                                         </span></label>
                                    </td>
                                    <td style="text-align: center">
                                        <label class="badge badge-gradient-warning"><span id="av_trans">
                                                {{isset($licencesVendus[$key]) ? $total->total - $licencesVendus[$key]->vendu : $total->total}}
                                         </span></label>
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

    {{--STATISTIQUE--}}


@endsection

@section('js')

@endsection
