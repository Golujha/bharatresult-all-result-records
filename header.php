<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  
<nav class=" shadow-md py-2 bg-white flex items-center w-full justify-between mb-3">
    <div class="px-6 w-full flex flex-wrap items-center justify-between">
        <a href="index.php" class="text-lg">Indian Result</a>
        <ul class="navbar-nav ml-auto lg:flex lg:flex-row">
          <li class="nav-item ">
            <a class="nav-link block pr-2  lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="index.php" data-mdb-ripple="true" data-mdb-ripple-color="light" style="margin-right: 60px;font-size:20px;">Home</a>
          </li>
          <?php  if(isset($_SESSION['admin'])): ?>
            <li class="nav-item mb-2  lg:mb-0">
            <a class="nav-link block pr-2  lg:px-2 py-2 bg-red-600 hover:bg-red-700 focus:text-white text-white rounded-xl transition duration-150 ease-in-out" href="adminlogout.php" data-mdb-ripple="true" data-mdb-ripple-color="light">Logout</a>
          </li>
          <?php else: ?>
          <li class="nav-item ">
            <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="adminlogin.php" data-mdb-ripple="true" data-mdb-ripple-color="light">Login</a>
          </li>
            <?php endif;?>
          
        </ul>
    </div>
  </nav>
  
</body>
</html>



