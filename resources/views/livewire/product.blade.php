<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="font-weight-bold mb-3">Product List</h2>
                    <table class="table table-bordered table-hovered table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Price</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $index=>$product)
                            <tr>
                                <td width="5%">{{ $index + 1 }}</td>
                                <td>{{ $product->name}}</td>
                                <td width="25%"><img src="{{ asset('storage/images/'.$product->image)?? ''}}"
                                        alt="No Images" class="w-25">
                                </td>
                                <td>{{ $product->description}}</td>
                                <td>{{ $product->qty}}</td>
                                <td>{{ $product->price}}</td>
                                {{-- <td>
                                    <a href="#" class="badge badge-success badge-sm p-1">edit</a>
                                    <a href="#" class="badge badge-danger badge-sm p-1">delete</a>
                                </td> --}}
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="font-weight-bold mb-3"> Create Product</h2>
                    <form wire:submit.prevent="store">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input wire:model="name" type="text" class="form-control">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <div class="custom-file">
                                <input wire:model="image" type="file" class="custom-file-input" id="customFile">
                                <label for="customFile" class="custom-file-label">Choose Image</label>
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            @if ($image)
                            <label class="mt-2">Image Preview</label>
                            <img src="{{ $image->temporaryUrl() }}" class="img-fluid" alt="Preview Image">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea wire:model="description" class="form-control"></textarea>
                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label>Product Qty</label>
                            <input wire:model="qty" type="number" class="form-control">
                            @error('qty') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input wire:model="price" type="number" class="form-control">
                            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3>{{ $name }}</h3>
                    <h3>{{ $image }}</h3>
                    <h3>{{ $description }}</h3>
                    <h3>{{ $qty }}</h3>
                    <h3>{{ $price }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
