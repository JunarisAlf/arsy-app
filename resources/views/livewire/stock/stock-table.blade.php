<div class="table-responsive">
    <table class="table table-bordered" style="min-width: 800px">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stock</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($stocks as $stock)
            <tr>
                <td>{{$stock->name}}</td>
                <td>{{$stock->category->name}}</td>
                <td>{{$stock->quantity}} {{$stock->unit}}</td>
                <td>{{$stock->note}}</td>
                <td>
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update({{$stock->id}})"/>
                    <x-adminlte-button label="Tambah Stock" theme="info" icon="fas fa-plus"
                    wire:click="updateTotalStock({{$stock->id}}, '{{$stock->name}}')"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete({{$stock->id}}, '{{$stock->name}}')"/>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
