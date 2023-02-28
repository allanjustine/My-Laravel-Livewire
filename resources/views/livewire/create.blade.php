<div>
    <div class="card border border-light">
        <div class="card-header">
            <h3 class="text-center mt-2">Create Explore Data</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" cols="30" rows="10" wire:model.defer="description"></textarea>
                <label for="descripion">Description</label>
                @error('description')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="location" class="form-control" id="recipient-name" wire:model.defer="location"
                    required="">
                <label for="location">Location</label>
                @error('location')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <select name="category" class="form-select" wire:model.defer="category">
                    <option disabled>Category</option>
                    <option selected hidden="true">Category</option>
                    <option value="Nature">Nature</option>
                    <option value="Historical">Historical</option>
                    <option value="Cultural">Cultural</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Food & Drink">Food & Drink</option>
                    <option value="Nightlife">Nightlife</option>
                    <option value="Shopping">Shopping</option>
                </select>
                <label for="category">Category</label>
                @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addToList()">
                    Add to List
                </button>
            </div>
        </div>
    </div>
</div>
