<html>
<title>The Mangler Games </title>
<head>
<link rel="stylesheet" type="text/css" href="./CSS/main.css">
<meta name="keywords" content="TheMangler, Mangler, Money, Money Deals, Avoid The Chasms, TheManglerGames, The Mangler Games, Mangler Games, games, education, Education, elementary, high school, Elementary, High School">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body bgcolor="red">
<!-- In order to show the login button -->
<button onclick="document.getElementById('id01').style.display='block'" style="text-align:center;width:200px;font-size:30px;">Server 2 Login</button>
<div id="id01" class="modal">

  <form class="modal-content animate" action="/" method="post">
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="u" autocapitalize="none" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="p" autocapitalize="none" required>
    </div>


  </form>
</div>

<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
                    if (event.target == modal) {
                                                        modal.style.display = "none";
                                                                                        }
}
</script>
</body>
</html>