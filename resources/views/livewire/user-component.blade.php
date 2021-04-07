<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example1"> Name</label>
                        <input type="text" wire:model="name" id="form3Example1" class="form-control" />
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example3"> Email address</label>
                      <input type="email" wire:model="email" id="form3Example3" class="form-control" />
                      @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                     <!-- Mobile input -->
                     <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example3"> Mobile </label>
                      <input type="number" wire:model="mobile" id="form3Example3" class="form-control" />
                      @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Role input -->
                    <div class="form-outline mb-2">
                    <label class="form-label" for="form3Example3"> Role </label>
                      <select name="role" wire:model="role" id="form3Example3" class="form-control">
                          <option value="">Select User Role</option>
                          <option value="admin">Admin</option>
                          <option value="customer">Customer</option>
                      </select>
                      @error('role') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Submit button -->
                    <button wire:click="save" class="btn btn-primary btn-block mb-4"> Save </button>

                </form>
            </div>
            <div class="col-md-8">
                <h3 class="text-center">
                    <strong>
                           All Users Table
                    </strong>
                </h3>
                <table class="table table-light table-hover text-center">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Role</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse (App\Models\User::all() as $user)
                      <tr>
                        <th>{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        {{-- user mobile --}}
                            @if ($user->mobile)
                            <td>{{$user->mobile}}</td>
                            @else
                            <td class="text-center"> - </td>
                            @endif
                        {{-- user Role --}}
                            @if ($user->role =="admin")
                            <b> <td class="text-danger text-uppercase">{{$user->role}}</td> </b>
                            @else
                            <td class="text-success">{{$user->role}}</td>
                            @endif
                            <td> <a class="btn btn-success btn-sm text-light" wire:click='edit({{$user->id}})' > Edit </a> </td>
                            <td> <a class="btn btn-danger btn-sm text-light" wire:click='delete({{$user->id}})' > X </a> </td>
                      </tr>
                      @empty

                      @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
