<h1>Admin Login</h1>
<form action="/admin/auth/process.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input id="secretPassword" type="password" name="password" placeholder="password">
    <input type="checkbox" onclick="myFunction()">Show Password
    <input type="submit" value="submit">
</form>

<script>
function myFunction() {
  var x = document.getElementById("secretPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>