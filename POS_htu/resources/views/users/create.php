<h1>Create User</h1>

<form action="/users/store" method="POST" enctype='multipart/form-data' class="w-50">
    <div class="mb-3">
        <label for="user-image" class="form-label">Profile Image</label>
        <input type="file" class="form-control" id="user-image" name="user_image">
    </div>
    <div class="mb-3">
        <label for="display-name" class="form-label">Display Name</label>
        <input type="text" class="form-control" id="display-name" name="display_name">
    </div>
    <div class="mb-3">
        <label for="user-username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username-name" name="username">
    </div>
    <div class="mb-3">
        <label for="user-role" class="form-label">role</label>
        <input type="text" class="form-control" id="username-role" name="role">
    </div>
    <div class="mb-3">
        <label for="user-email" class="form-label">Email</label>
        <input type="email" class="form-control" id="user-email" name="email">
    </div>

    <div class="mb-3">
        <label for="user-password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password-email" name="password">
    </div>
    <button type="submit" class="btn btn-success mt-4">Create</button>
    <a href="/users" class="btn btn-danger ms-3 mt-4">Cancel</a>
</form>