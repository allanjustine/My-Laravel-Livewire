<div>
    <div class="container">
        {{-- deleting explore --}}
        <div wire:ignore.self class="modal fade" id="update-modal-explore" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title3" id="exampleModalLabel">Are you sure you want to update this
                        explore?</h5>
                    <button type="button" class="btn btn-outline-secondary rounded-circle" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center text-black ">This update can not be undone</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"  wire:click="editFromList()">
                        Update Explore
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- end deleting explore --}}
        <div class="row">
            <div class="col-sm-4">

                <div class="card border border-light">
                    <div class="card-header">
                        <h3 class="text-center mt-2">Edit Explore Data</h3>
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
                            <button class="btn btn-primary" title="Delete" data-toggle="modal"
                            data-target="#update-modal-explore">
                                Update Explore
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Explore List</h3>
                <table class="table tbl-striped tbl-hovered">
                    <thead>
                        <tr>
                            <th>ID.</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($explores as $explore)
                            <tr>
                                <td>{{ $explore->id }}</td>
                                <td>{{ $explore->name }}</td>
                                <td>{{ $explore->description }}</td>
                                <td>{{ $explore->location }}</td>
                                <td>{{ $explore->category }}</td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
