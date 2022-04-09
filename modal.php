

<div id="modal-wrapper" class="modal">

<form class="modal-content animate" action="password.php" method="post">

<div class="imgcontainer">
<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
<img src="img/icon.jpg" alt="Avatar" class="avatar">
<h1 style="text-align:center">Update Password</h1>
</div>

<div class="container">
<input type="password" placeholder="Enter Old Password" name="psw1"><br>
<input type="password" placeholder="Enter New Password" name="psw2"><br>
<input type="password" placeholder="Renter New Password" name="psw3"><br>
<button type="submit">Change</button>
</div>

</form>

</div>


<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById(‘modal-wrapper’);
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = “none”;
}
}
</script>