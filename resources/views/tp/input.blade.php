<div>
    <div class="container"> 
        <div class="row justify-content-center mt-5"> 
            <div class="col-md-6"> 
                <h4>Form TP</h4> 
                <form class="border p-4" method="POST" action="{{ $route }}"> 
                    @csrf 
                    @if($method === 'PUT') 
                        @method('PUT') 
                    @endif 
                    <div class="mb-3"> 
                        <label for="title" class="form-label">Title</label> 
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $data->title) }}"> 
                        @error('title') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
                    <div class="mb-3"> 
                        <label for="data" class="form-label">Data</label> 
                        <input type="text" name="data" id="data" class="form-control @error('data') is-invalid @enderror" value="{{ old('data', $data->data) }}"> 
                        @error('data') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
                    <div class="text-center"> 
                        <button type="submit" class="btn btn-success">Submit</button> 
                    </div> 
                </form> 
            </div> 
        </div>
    </div>
</div>
