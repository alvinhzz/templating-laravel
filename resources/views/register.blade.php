<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>

    <h1>Create New Account!</h1>

    <h3>Sign Up Here</h3>

    <form action="/welcome" method="POST">

        @csrf

        <label for="firstName">First Name : </label> <br> <br>
        <input type="text" name="firstName"> <br> <br>

        <label for="lastName">Last Name : </label> <br> <br>
        <input type="text" name="lastName"> <br> <br>

        <label for="gender">Gender :</label> <br> <br>
        <input type="radio" name="gender" value="Male">
        <label for="gender">Male</label> <br>
        <input type="radio" name="gender" value="Female">
        <label for="gender">Female</label> <br>
        <input type="radio" name="gender" value="Other">
        <label for="gender">Other</label> <br> <br>

        <label for="nation">Nationality :</label> <br> <br>
        <select name="nation">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapore">Singapore</option>
            <option value="Malaysia">Malaysia</option>
            <option value="England">England</option>
        </select> <br> <br>

        <label for="lang">Language Spoken :</label> <br><br>
        <input type="checkbox" name="lang[]" value="Bahasa Indonesia">
        <label for="lang1">Bahasa Indonesia</label> <br>
        <input type="checkbox" name="lang[]" value="English">
        <label for="lang2">English</label> <br>
        <input type="checkbox" name="lang[]" value="Other">
        <label for="lang3">Other</label> <br> <br>

        <label for="bio">Bio :</label> <br> <br>
        <textarea name="bio" cols="30" rows="10"></textarea>

        <br><input type="submit" value="Submit">

    </form>

</body>

</html>