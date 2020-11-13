<div class="container">
    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center font-weight-bold">
                        Register
                    </h2>
                    <form wire:submit.prevent="submit" action="">
                        <div class="form-group">
                            <label>Name</label>
                            <input wire:model="form.name" type="text" class="form-control"
                                placeholder="Input your valid name">
                            @error('form.name')
                            <span class="text-danger text-small">{{ $message }}</span>
                            @enderror
                        </div>
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
                        <div class="form-group">
                            <label>Confirmation Password</label>
                            <input wire:model="form.password_confirmation" type="password" class="form-control"
                                placeholder="Repeat password">

                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <a href="/login" class="d-block mt-2"><span class="text-muted">Have account ?</span>
                            Login</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
