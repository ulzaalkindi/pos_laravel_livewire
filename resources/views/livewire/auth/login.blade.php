<div class="container">
    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center font-weight-bold">
                        Login
                    </h2>
                    @if (session()->has('error'))
                    <span class="text-danger text-small">{{ session('error') }}</span>
                    @endif
                    <form wire:submit.prevent="submit" action="">
                        <div class="form-group">
                            <label>Email</label>
                            <input wire:model="form.email" type="text" class="form-control"
                                placeholder="Input your valid email">
                            @error('form.email')
                            <span class="text-danger text-small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input wire:model="form.password" type="password" class="form-control"
                                placeholder="Input your valid password">
                            @error('form.password')
                            <span class="text-danger text-small">{{ $message }}</span>
                            @enderror
                        </div>
                        <a href="/register" class="d-block mb-2"><span class="text-muted">Don't have account ?</span>
                            Register</a>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
