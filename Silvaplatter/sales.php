<!DOCTYPE html>
<html>
<head>
    <title>Sales Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: auto;
        }

        .card {
            background-color: #f8f9fa;
            padding: 20px;
            margin: 10px;
            width: 250px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card .price {
            font-size: 20px;
            color: #f12a43;
            margin-top: 10px;
        }

        .card .name {
            font-size: 20px;
            color: #333;
            margin-top: 10px;
        }

        .card .button {
            display: block;
            width: 100%;
            height: 50px;
            background-color: #f12a43;
            color: #fff;
            text-align: center;
            line-height: 50px;
            margin-top: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .card .button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="https://via.placeholder.com/250" alt="Product 1">
            <p class="price">$99</p>
            <p class="name">Product 1</p>
            <button class="button">Add to Cart</button>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/250" alt="Product 2">
            <p class="price">$79</p>
            <p class="name">Product 2</p>
            <button class="button">Add to Cart</button>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/250" alt="Product 3">
            <p class="price">$129</p>
            <p class="name">Product 3</p>
            <button class="button">Add to Cart</button>
        </div>
    </div>
</body>
</html>



