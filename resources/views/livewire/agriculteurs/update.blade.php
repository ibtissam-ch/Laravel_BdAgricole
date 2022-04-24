<form>
    <div class="form-group">
        <input type="hidden" wire:model="id">
        <label for="exampleFormControlInput1">nom d'Agriculteur:</label>
        <input type="text" class="form-control" wire:model="agr_nom" id="exampleFormControlInput1" placeholder="Enter Name">
        @error('agr_nom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">prenom d'Agriculteur:</label>
        <input type="text" class="form-control" wire:model="agr_prn" id="exampleFormControlInput2" placeholder="Enter prenom">
        @error('agr_prn') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">la residence de l'Agriculteur:</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="agr_resid" placeholder="Enter Resid">
        @error('agr_resid') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>
