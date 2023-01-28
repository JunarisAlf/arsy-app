<div class="table-responsive">
    <table class="table table-bordered" style="max-width: 550px">
        <thead>
            <tr>
                <th>Kategori Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td><x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update({{$category->id}}, '{{$category->name}}')"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt" 
                    wire:click="delete({{$category->id}}, '{{$category->name}}')"/>
                </td>
            </tr>
            @endforeach
           
            
        </tbody>
    </table>
</div>
