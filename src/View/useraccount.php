<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../../public/assets/css/useraccount.css">
</head>

<body>

    <div class="form-container">

        <div class="content">
            <header>
                <h1>Update User Profile</h1>
            </header>
            <img class="user_image" id="user_image" src="profile.jpeg" />
        </div>
        <div class="form-area">
            <div>
                <form id="user-form">
                    <fieldset>
                        <legend>User Information</legend>
                        <div class="form-row">
                            <div class="fields">
                                <label for="first-name">First Name</label>
                                <input type="text" id="first-name" placeholder="First Name">
                            </div>
                            <div class="fields">
                                <label for="last-name">Last Name</label>
                                <input type="text" id="last-name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="fields">
                                <label for="username">Username</label>
                                <input type="text" id="username" placeholder="Username">
                            </div>
                            <div class="fields">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="fields">
                                <label for="email">Address</label>
                                <input type="text" id="address" placeholder="Address">
                            </div>
                            <div class="fields">
                                <label for="photo">Photo</label>
                                <input type="file" id="photo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="fields">
                                <label for="password">Password</label>
                                <input type="password" id="password" placeholder="Confirm your Password">
                                <div class="error-message" id="password_error_message"></div>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="update-btn">Update</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>