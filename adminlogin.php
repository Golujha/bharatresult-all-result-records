<?php include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Login Indian Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include "header.php"; ?>

    <section class=" flex justify-center">
  <div class="p-6 text-gray-800 w-1/2 bg-gray-200">
    <div
      class="flex xl:justify-center lg:justify-between justify-center items-start flex-wrap mt-5 g-6"
    >
      <div class="">
        <form method="post">
          <h1 class="text-3xl my-5 uppercase text-black font-semibold">Admin Login</h1>

          <!-- Email input -->
          <div class="mb-6">
            <input
              type="text"
              name="email"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="exampleFormControlInput2"
              placeholder="Email address"
            />
          </div>

          <!-- Password input -->
          <div class="mb-6">
            <input
              type="password"
              name="password"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="exampleFormControlInput2"
              placeholder="Password"
            />
          </div>

          <div class="flex justify-between items-center mb-6">
            <div class="form-group form-check">
              <input
                type="checkbox"
                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                id="exampleCheck2"
              />
              <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                >Remember me</label
              >
            </div>
            <a href="#!" class="text-gray-800">Forgot password?</a>
          </div>

          <div class="text-center lg:text-left">
            <input
              type="submit"
              value="Login"
              name="login"
              class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
              
            
            <p class="text-sm font-semibold mt-2 pt-1 mb-0">
              Don't have an account?
              <a
                href="#!"
                class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out"
                >Register</a
              >
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<?php 
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = sha1($password);

    $query = mysqli_query($con, "select * from admin where email='$email' AND password='$password'");
    $num = mysqli_num_rows($query);
    if($num > 0){
        $_SESSION['admin'] = $email;
        redirect();
    }
    else{
        alert("incorrect username and password try again");
    }
}
?>