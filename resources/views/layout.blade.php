<!DOCTYPE html>
<html>

<head>
    <title>CRUD Application</title>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #000;
        }

        .btn:hover {
            opacity: 0.9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        form {
            display: inline;
        }

        /* Form styles */
        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
        }

        button[type="submit"]:hover {
            opacity: 0.9;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #123;
            border-bottom: 1px solid #ccc;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .header ul {
            display: flex;
            gap: 30px;
            list-style: none;
            padding: 1rem;
            margin: 0;
        }

        .header ul li a {
            text-decoration: none;
            color: white;
        }

        .content {
            margin-top: 60px;
            padding: 1rem;
        }

        .navbar-container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Sidebar styles */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            background-color: #343a40;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            box-shadow: 2px 0 12px rgba(0, 0, 0, 0.5);
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 20px;
            color: #f1f1f1;
            display: block;
            transition: 0.3s;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background-color: #495057;
            color: #ffffff;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        .closebtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #343a40;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 15px;
            position: fixed;
            z-index: 1001;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #343a40;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 2px;
            position: fixed;
            z-index: 1001;
        }

        .openbtn {
            display: none;
        }

        .openbtn {
            left: 15px;
            top: 15px;
        }

        .sidebar .closebtn {
            position: absolute;
            top: -19px;
            right: -16px;
            font-size: 30px;
            cursor: pointer;
        }

        .closebtn {
            display: none;
        }

        .openbtn {
            display: block;
        }

        .openbtn:hover,
        .closebtn:hover {
            background-color: #495057;
            display: block;
        }

        /* Mobile styles */
        @media screen and (max-width: 768px) {
            .header ul {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .sidebar {
                width: 200px;
                padding-top: 40px;
            }

            .sidebar a {
                font-size: 18px;
                padding: 10px 15px;
            }

            .container {
                margin: 20px;
                padding: 15px;
            }

            .header {
                padding: 0;
            }

            .navbar-container {
                max-width: 100%;
            }

            .closebtn {
                display: none;
            }

            .openbtn {
                display: block;
            }

            #main {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="navbar-container">
        <div class="header">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a>About Us</a></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a>Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div id="mySidebar" class="sidebar">
        <a class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/" id="dashboardLink">Dashboard</a>
        <a href="{{ route('products.index') }}" id="productsLink">Products</a>
        <a href="{{ route('posts.index') }}" id="postsLink">Posts</a>
        <a href="#" id="servicesLink">Services</a>
        <a href="#" id="clientsLink">Clients</a>
        <a href="#" id="contactLink">Contact</a>
    </div>

    <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>
        <button class="closebtn" onclick="closeNav()">&times;</button>

        <div class="container">
            @yield('content')
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ensure initial visibility
            document.querySelector('.openbtn').style.display = 'none';
            document.querySelector('.closebtn').style.display = 'block';

            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                document.querySelector('.openbtn').style.display = 'none';
                document.querySelector('.closebtn').style.display = 'block';
            }

            // Function to close the sidebar
            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
                document.querySelector('.openbtn').style.display = 'block';
                document.querySelector('.closebtn').style.display = 'none';
            }

            // Attach event listeners to buttons
            document.querySelector('.openbtn').addEventListener('click', openNav);
            document.querySelector('.closebtn').addEventListener('click', closeNav);

            // Highlight the active route
            var path = window.location.pathname;
            var links = document.querySelectorAll('.sidebar a');

            links.forEach(function(link) {
                if (link.getAttribute('href') == path) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>
