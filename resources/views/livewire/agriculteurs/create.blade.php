<form>
    <div class="form-group">
        <label for="exampleFormControlInput1"> nom d'Agriculteur:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="agr_nom">
        @error('agr_nom') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">prenom d'Agriculteur: </label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="agr_prn" placeholder="Enter prenom">
        @error('agr_prn') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2"> la residence de l'Agriculteur:</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="agr_resid" placeholder="Enter Resid">
        @error('agr_resid') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
