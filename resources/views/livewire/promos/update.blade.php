<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar promo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="nombre_promo"></label>
                <input wire:model="nombre_promo" type="text" class="form-control" id="nombre_promo" placeholder="Nombre">@error('nombre_promo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ubicación"></label>
                <input wire:model="ubicación" type="text" class="form-control" id="ubicación" placeholder="Población">@error('ubicación') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            {{-- <div class="form-group">
                <label for="escuela_id"></label>
                <input wire:model="escuela_id" type="text" class="form-control" id="escuela_id" placeholder="Escuela Id">@error('escuela_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}
            <div class="form-group">
                <label for="fecha_de_inicio"></label>
                <input wire:model="fecha_de_inicio" type="text" class="form-control" id="fecha_de_inicio" placeholder="Fecha de inicio">@error('fecha_de_inicio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="duración"></label>
                <input wire:model="duración" type="text" class="form-control" id="duración" placeholder="Duración (h)">@error('duración') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="url"></label>
                <input wire:model="url" type="text" class="form-control" id="url" placeholder="Url">@error('url') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>
