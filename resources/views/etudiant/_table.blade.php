<table>
    <tr>
        <th>{{trans('etudiant.l_name')}}</th>
        <th>{{trans('etudiant.f_name')}}</th>
        <th>Action</th>
    </tr>
    @foreach($etudiants as $e)
        <th>{{$e->nom}}</th>
        <th>{{$e->prenom}}</th>
        <th>
            <button href="{{route('showEtudiant'.$e->id)}}">{{trans('commun.details')}}</button>
            <button href="{{route('editEtudiant'.$e->id)}}">{{trans('commun.update')}}</button>
        </th>
    @endforeach
</table>
