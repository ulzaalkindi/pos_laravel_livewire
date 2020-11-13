<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <h3 class="font-weight-bold">Products</h3>
                    </div>
                    <div class="col-md-9">
                        <input type="text" wire:model="search" class="form-control" placeholder="Search Product...">
                    </div>
                </div>
                <div class="row">
                    @forelse ($products as $product)
                    <div class="col-md-3 mb-3">
                        <div class="card" wire:click="addItem({{ $product->id }})">
                            <div class=" card-body">
                                <img src="{{ asset('storage/images/'.$product->image) }}" alt="gambar produk"
                                    style="width: 100%;height:125px;object-fit:cover">
                                <h6 class="text-center font-weight-bold mt-3 mb-0">{{ $product->name }}</h6>
                                <p class="text-center text-muted mb-0">Rp {{ number_format($product->price,2,',','.') }}
                                </p>
                                <button wire:click="addItem({{ $product->id }})"
                                    class="btn btn-primary btn-sm px-3 mt-0 mr-0 mb-0"
                                    style="position: absolute;top:0;right:0;"><i class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-md-12 text-center text-primary">
                        No Products Found
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 text-center">CART
                    @if(session()->has('error'))
                    {{ session('error') }}
                    @endif </h4>
                <table class="table table-sm table-hovered">
                    <thead class="bg-primary text-white text-center">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr></tr>
                        @forelse ($carts as $index=>$cart)
                        <tr>
                            <td>{{ $index +1 }}
                                <br>
                                <a wire:click.prevent="removeItem('{{ $cart['rowId'] }}')" href="#"
                                    class="badge badge-danger text-white rounded-circle"><i class="fa fa-trash"></i></a>
                            </td>
                            <td> <a href="#" class="font-weight-bold text-dark">{{ $cart['name']}}</a>
                                <br>
                                {{ number_format($cart['pricesingle'],2,',','.') }}
                            </td>
                            <td>
                                <a wire:click.prevent="increaseItem('{{ $cart['rowId'] }}')" href="#"
                                    class="badge badge-primary text-white">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <p class="badge badge-light d-inline">
                                    {{ $cart['qty'] }}
                                </p>
                                <a wire:click.prevent="decreaseItem('{{ $cart['rowId'] }}')" href="#"
                                    class="badge badge-primary text-white">
                                    <i class="fa fa-minus"></i>

                                </a>
                            </td>
                            <td>Rp {{ number_format($cart['price'],2,',','.') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                <h6 class="text-primary">Empty Cart</h6>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-around mt-4 border-bottom">
                    <div class="col">
                        <h6 class="">Sub Total</h6>
                    </div>
                    <div class="col text-right">
                        Rp {{ number_format($summary['sub_total'] ,2,',','.')}}
                    </div>
                </div>
                <div class="row d-flex justify-content-around my-2 border-bottom">
                    <div class="col">
                        <h6 class="">Pajak</h6>
                    </div>
                    <div class="col text-right">
                        Rp {{ number_format($summary['pajak'] ,2,',','.')}}
                    </div>
                </div>
                <div class="row d-flex justify-content-around my-2 border-bottom">
                    <div class="col">
                        <h6 class="font-weight-bold">Total</h6>
                    </div>
                    <div class="col text-right font-weight-bold">
                        Rp {{ number_format($summary['total'] ,2,',','.')}}
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <button wire:click="enableTax" class="btn btn-primary btn-block">
                            ADDTAX
                        </button>
                    </div>
                    <div class="col-6">
                        <button wire:click="disableTax" class="btn btn-info btn-block">NOTax</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button class="btn btn-success px-0 btn-block"> <i class="fa fa-save"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
