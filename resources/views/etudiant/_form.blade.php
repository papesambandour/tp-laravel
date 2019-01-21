@if(isset($etudiant))
    {!! Form::model($etudiant, ['route'=>['updateEtudiant',$etudiant->$id],'method'=>'put']) !!}
 @else

    {!! Form::open($etudiant, ['route'=>'addEtudiant']) !!}
    {!! Form::submit('Enregistrer') !!}

@endif

{!! Form::label("{{trans('etudiant.l_name')}}",trans('etudiant.l_name')) !!}
{!! Form::text("nom") !!}
{!! Form::label("{{trans('etudiant.f_name')}}",trans('etudiant.f_name')) !!}
{!! Form::text("prenomnom") !!}

<button class="btn btn-success btn-sm m-tn-n-sx" type="submit"></button>
{!! Form::close() !!}

