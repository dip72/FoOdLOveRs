

<div id="modal-wrapper1" class="modal">

<form class="modal-content animate" action="picture.php" method="post" enctype="multipart/form-data">

<div class="imgcontainer">
<span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
<img src="img/icon.jpg" alt="Avatar" class="avatar">
<h1 style="text-align:center">Update Picture</h1>
</div>

<div class="container">
	 <input type="file" name="image" id="fileToUpload" style="padding: 50px;" >
<!--<input type="password" placeholder="Enter New Password" name="psw2"><br>
<input type="password" placeholder="Renter New Password" name="psw3"><br>-->
<button type="submit" name="submit">Change</button>
</div>

</form>

</div>


<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById(‘modal-wrapper1’);
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = “none”;
}
}
</script>