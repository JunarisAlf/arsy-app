<div class="table-responsive">
    <table class="table table-bordered" style="width: max-content">
        <thead>
            <tr>
                <th>Tipe</th>
                <th>Sub-Tipe</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trxTypes as $trxType)
            <tr >
                <td >{{$trxType->cash_flow == 'in' ? 'DEBET' : 'KREDIT'}}</td>
                <td>{{$trxType->name}}</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update({{$trxType->id}}, '{{$trxType->name}}')"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete({{$trxType->id}}, '{{$trxType->name}}')"/>
                </td>
            </tr>
            @endforeach
           
           
        </tbody>
    </table>
</div>
