@extends ('adminlte::page')

@section ('title', 'times')

<table id="simple-table" class="table table-bordered">
    <thead>
        <tr><th>ID</th><th>Name</th></tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->city }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@section('js')
<script>
    $(document).ready(function() {
        $('#simple-table').DataTable();
    });
</script>
@endsection