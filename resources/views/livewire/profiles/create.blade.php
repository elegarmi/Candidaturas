<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nuevo perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input wire:model="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input wire:model="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input wire:model="password" type="password" class="form-control" id="password" placeholder="Password">@error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="teléfono">Teléfono</label>
                        <input wire:model="teléfono" type="text" class="form-control" id="teléfono" placeholder="Teléfono">@error('teléfono') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="puesto">Puesto</label>
                        <input wire:model="puesto" type="text" class="form-control" id="puesto" placeholder="Puesto">@error('puesto') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="role"></label>
                        <input wire:model="role" type="text" class="form-control" id="role" placeholder="Role">@error('role') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="schools-select">Escoger rol</label>
                        <select wire:model="role" class="form-control form-select" name="role" aria-label="Roles select">
                            <option selected disabled>Rol</option>
                            @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="escuela">Escuela</label>
                        <input wire:model="escuela" type="text" class="form-control" id="escuela" placeholder="Escuela">@error('escuela') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="schools-select">Escoger escuela</label>
                        <select wire:model="escuela_id" class="form-control form-select" name="escuela_id" aria-label="Schools select">
                            <option selected disabled>Escuela</option>
                            @foreach($schools as $school)
                            <option value="{{$school->id}}">{{$school->nombre_escuela}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="promo">Promo</label>
                        <input wire:model="promo" type="text" class="form-control" id="promo" placeholder="Promo">@error('promo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="promos-select">Escoger promo</label>
                        <select wire:model="promo" class="form-control form-select" name="promo" aria-label="Promos select">
                            <option selected disabled>Promo</option>
                            @foreach($promos as $promo)
                            <option value="{{$promo->id}}">{{$promo->nombre_promo}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="imagen"></label>
                        <input wire:model="imagen" type="text" class="form-control" id="imagen" placeholder="Imagen">@error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input wire:model="imagen" type="file" class="form-control" id="imagen" name="image" placeholder="Imagen" required>@error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
