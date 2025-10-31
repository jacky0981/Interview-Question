<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="verify_ajax.js"></script>
    <title>MyWave Intertview Question</title>
</head>
<style>
    body {
        font-family: "Segoe UI", sans-serif;
        box-sizing: border-box;
        background: linear-gradient(135deg, #f0f4f8, #d9e4f5);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: #000000d3;
    }

    label {
        font-size: 18px;
        font-weight: 600;
        color: #000000a6;
    }

    input {
        margin-top: 5px;
        border: 1px solid #00000060;
        height: 25px;
        border-radius: 8px;
        padding: 5px;
        outline: none;
        width: 100%;
    }

    input:focus {
        border: 1px solid #0099ffff;
        box-shadow: 0 0 5px #0099ffff;
    }

    .container {
        background: #fff;
        width: 350px;
        padding: 20px 40px;
        margin: 50px auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    button {
        width: 100%;
        height: 40px;
        background-color: rgba(0, 215, 0, 1);
        color: white;
        font-size: 20px;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        transition: all 0.25s ease;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    button:hover {
        background-color: rgba(0, 190, 0, 1);
        cursor: pointer;
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.35);
    }

    #info {
        text-align: center;
    }

    .result {
        display: block;
        width: 100%;
        padding: 5px;
        border-radius: 8px;
        font-weight: 500;
    }

    .result.success {
        background: rgba(0, 255, 0, 0.15);
        color: green;
    }

    .result.error {
        background: rgba(255, 0, 0, 0.25);
        color: red;
    }

    .result,
    .warning {
        animation: fadeIn 0.3s ease-in-out;
    }

    .warning {
        color: red;
        background: rgba(255, 0, 0, 0.25);
        padding: 5px;
        border-radius: 8px;
        font-weight: 500;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body>



    <div class="container">
        <h2>Username Checker</h2>
        <p id="info"></p> <!-- used to display system return meesage -->
        <form method="post" id="checkABC"> <!-- named checkABC so the ajax can get it after clicked the sbumit button -->
            <label for="username">User Name:</label><br>
            <input type="text" id="username" name="username" placeholder="Please Enter Your Name">  <!-- used to let user enter their name -->
            <br><br>
            <button type="submit" value="Submit" id="sbumit">Submit</button> <!-- allow user to click after finished the input then will submit to ajax -->
        </form>


    </div>

</body>

</html>