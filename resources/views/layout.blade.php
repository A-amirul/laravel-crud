<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
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
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1000px;
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

table, th, td {
    border: 1px solid #ddd;
}

th, td {
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

input[type="text"],input[type="file"],input[type="number"],
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

body {
            font-family: 'Figtree', sans-serif;
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
        }
        .header ul {
            display: flex;
            gap: 30px;
            list-style: none;
            padding: 2rem;
            margin: 0;
        }
        .header ul li a {
            text-decoration: none;
            color: white;
        }
        .content {
            margin-top: 60px; /* Adjust this value based on your header's height */
            padding: 1rem;
        }
        .navbar-container{
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>

</head>
<body>
   <div class="navbar-container">
    <div class="header">
        <ul>
            <li><a>Home</a></li>
            <li><a>About Us</a></li>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a>Contact Us</a></li>
        </ul>
    </div>
   </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
