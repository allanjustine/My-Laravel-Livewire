<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <livewire:create />
            </div>
            {{-- deleting explore --}}
            <div wire:ignore.self class="modal fade" id="delete-modal-explore" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title title3" id="exampleModalLabel">Are you sure you want to delete this
                                explore?</h5>
                            <button type="button" class="btn btn-outline-secondary rounded-circle" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center text-black ">This deletion can not be undone</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" wire:click="deleted()">
                                Delete Explore
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end deleting explore --}}
            <div class="col-sm-8">
                <h3>Explore List @if (session('message'))
                        <h5 class="alert alert-success text-success text-center">{{ session('message') }}</h5>
                    @endif
                </h3>
                <select name="category" class="form-control" wire:model.lazy="category">
                    <option value="All">All</option>
                    <option value="Nature">Nature</option>
                    <option value="Historical">Historical</option>
                    <option value="Cultural">Cultural</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Food & Drink">Food & Drink</option>
                    <option value="Nightlife">Nightlife</option>
                    <option value="Shopping">Shopping</option>
                </select>
                <table class="table tbl-striped tbl-hovered">
                    <thead>
                        <tr>
                            <th>ID.</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Category</th>
                            <th>Actions</th>
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
                                <td>
                                    <a href="{{ url('edit', ['explore' => $explore->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger" title="Delete" data-toggle="modal"
                                        data-target="#delete-modal-explore"
                                        wire:click="delete({{ $explore->id }})">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        @if ($explores->count() === 0)
                            <td colspan="6" class="text-center">No data found.</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
