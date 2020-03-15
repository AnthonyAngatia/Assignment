<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Spartan&display=swap');

    * {
        font-family: 'Spartan', sans-serif;
    }

    .head {
        /* border: 1px solid red; */
        width: 50%;
        margin: auto;
        text-align: center;
    }

    .form {
        border: 2px solid fuchsia;
        border-radius: 8px;
        max-width: 50%;
        margin: auto;
        /* text-align: center; */
    }

    .form>form>div {
        /* border: 2px solid green; */
        margin: 5px;
    }

    .form>form {
        /* border: 2px solid skyblue; */
        margin: auto;
        margin-top: 1em;
        margin-bottom: 1em;
        width: 40%;
    }

    .button {
        text-align: center;
    }

    .button>button {
        background-color: fuchsia;
        border-radius: 3px;
        width: 10em;
        height: 3em;
        color: snow;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <div class="head">
        <h2>My Basic form</h2>
    </div>
    <div class="form">
        <form action="Quiz_backend.php" method="post">
            <div class="form-control">
                <label for="first_name">FirstName</label><br />
                <input type="text" name="first_name" id="fName" />
            </div>
            <div>
                <label for="last_name">LastName</label><br />
                <input type="text" name="last_name" id="lName" />
            </div>
            <div>
                <p>Please select your gender</p>
                <input type="radio" id="male" name="gender" value="male" />
                <label for="male">Male</label><br />
                <input type="radio" id="female" name="gender" value="female" />
                <label for="female">Female</label><br />
                <input type="radio" id="other" name="gender" value="other" />
                <label for="other">Other</label>
            </div>
            <div>
                <label for="tel_no">TelNo</label><br />
                <input type="text" name="tel_no" id="telNo" />
            </div>
            <div>
                <label for="email">Email</label><br />
                <input type="email" name="email" id="mail" />
            </div>
            <div>
                <p>Tick the Box if you agree with terms and conditions</p>
                <input type="checkbox" name="t&c" id="t&c" />
                <label for="t&c">Agree</label>
            </div>
            <div class="button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="outer">
        <div class="inner"></div>
    </div>
</body>

</html>