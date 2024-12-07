<x-layin>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="d-flex justify-content-between align-items-center mb-3"> 
            <a href="{{ route('tp.create') }}" class="btn" style="color: #013179">Tambah</a> 
        </div>
        <div class="row g-5">
            @foreach ($tp as $tepeh)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $tepeh->judul }}</h4>
                        <h5>{{ $tepeh->sub_judul }}</h5>
                        <h6>{{ $tepeh->kategori }} <br> {{ $tepeh->created_at }}</h6>
                        <p class="card-text">{{ $tepeh->deskripsi }} <br> {{ $tepeh->deadline }}</p>
                        <a href="{{ route('tp.edit', $tepeh->id) }}" class="btn btn-secondary">Edit</a>
                        <form method="POST" action="{{ route('tp.destroy',$tepeh->id) }}" style="display:inline" onsubmit="return confirm('Delete?')"> 
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button> 
                        </form> 
                    </div>
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</x-layin>
