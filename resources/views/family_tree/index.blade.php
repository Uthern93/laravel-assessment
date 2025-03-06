<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Tree</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .tree {
            text-align: center;
            display: flex;
            justify-content: center;
        }

        .tree ul {
            padding-top: 20px;
            position: relative;
            display: flex;
            justify-content: center;
        }

        .tree li {
            list-style-type: none;
            position: relative;
            padding: 20px;
            text-align: center;
        }

        /* Styling for connecting lines */
        .tree li::before, .tree li::after {
            content: '';
            position: absolute;
            top: 0;
            width: 50%;
            height: 20px;
            border-top: 2px solid black;
        }

        .tree li::before {
            left: -50%;
        }

        .tree li::after {
            right: -50%;
        }

        .tree li:first-child::before, 
        .tree li:last-child::after {
            display: none;
        }

        .tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 20px;
            border-left: 2px solid black;
        }

        .member-box {
            display: inline-block;
            padding: 10px;
            border-radius: 5px;
            background-color: #cce5ff;
            border: 1px solid #007bff;
            font-weight: bold;
            text-align: center;
            min-width: 150px;
        }

        .member-box small {
            display: block;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Family Tree Chart</h2>
    <div class="tree">
        <ul>
            @include('family_tree.member_node', ['member' => $rootMember, 'memberSales' => $memberSales])
        </ul>
    </div>
</body>
</html>
