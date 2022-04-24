<form>
    <div class="form-group">
        <label for="exampleFormControlInput1"> description du Tarif</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter description" wire:model="tar_description">
        @error('tar_description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2"> euro Tarif </label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="tar_ero" placeholder="Enter euro">
        @error('tar_ero') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
