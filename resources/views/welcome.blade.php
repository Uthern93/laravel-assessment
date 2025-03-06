<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Family Tree Assessment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: auto;
            margin-top: 10%;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2c3e50;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 18px;
            color: white;
            background: #3498db;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to the Family Tree Assessment</h1>
        <p>Please prepare a form to display the Family Tree Chart base on the following data given. The family chart needs to display the Name, Date Join of the member, Personal Sales and Group Sales. </p>
        <p>Click the button below to view the family tree</p>
        <a href="{{ url('/family-tree') }}" class="btn">Get Started</a>
    </div>

</body>
</html>
