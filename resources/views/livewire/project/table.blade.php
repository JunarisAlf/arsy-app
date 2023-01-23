<div class="table-responsive">
    <table class="table table-bordered" style="min-width: 550px">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Project.</th>
                <th>Catatan.</th>
                <th style="max-width: 200px">Aksi.</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $index => $project)
                <tr>
                    <td >{{$index+1}}</td>
                    <td>{{$project->name}}</td>
                    <td>
                        {{$project->note == null ? "-" : $project->note }}</td>
                    <td style="max-width: 300px">
                        <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                        wire:click="update({{$project->id}}, '{{$project->name}}')"/>
                        <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt" wire:click="delete({{$project->id}}, '{{$project->name}}')"/>
                            
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
