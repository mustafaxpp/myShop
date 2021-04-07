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
                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" wire:model="password" for="form3Example4">Password</label>
                      <input type="password" id="form3Example4" class="form-control" />
                      @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <!-- Submit button -->
                    <button type="submit" wire:click="save" class="btn btn-primary btn-block mb-4"> Save </button>

                </form>
            </div>
            <div class="col-md-8">
                <h3 class="text-center">
                    <strong>
                           All Users Table
                    </strong>
                </h3>
                <table class="table table-light table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last</th>
                        <th scope="col">Role</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Moustafa</td>
                        <td>Ibrahim</td>
                        <td>@webdeveloper</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Islam</td>
                        <td>kabbary</td>
                        <td>@webdeveloper</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
