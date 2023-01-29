<div class="table-responsive">
    <table class="table table-bordered mr-2" style="width: max-content">
        <thead>
            <tr>
                <th>Status</th>
                <th>Tujuan</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Catatan</th>
                <th>Waktu</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($alocations as $alocation)
            <tr>
                <td>{{strtoupper($alocation->action)}}</td>
                <td>{{strtoupper($alocation->alocate_to)}}</td>
                <td>{{$alocation->stock?->name}}</td>
                <td>{{$alocation->quantity}} {{$alocation->stock?->unit}}</td>
                <td>{{$alocation->note}}</td>
                <td>{{$alocation->updated_at}}</td>
                {{-- <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update({{$alocation->id}})"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete({{$alocation->id}})"/>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
