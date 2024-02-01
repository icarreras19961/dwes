<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>


<div>
	<form class="shadow bg-white rounded p-2" style="width: 20%; margin:auto; margin-top:50px"  action="/student034/dwes/db/reservations/db_reservation_select_all.php" method="POST">
		<div class="form-group">
			<h4>Search:</h4><input class="form-group" type="text" onkeyup="showHint(this.value)" placeholder="Reservation id">
		</div>
		<hr>
		<label><input class="btn btn-primary" type="submit" value="submit" name="submit"></label>
	</form>
	<!-- Ajax Reservations -->
	<h1>Reservations</h1>
	<div id="reservations">
	</div>
</div>

<script>
	function showHint(string) {
		if (string.length == 0) {
			document.getElementById("reservations").innerText = "No se han encontrado resultados";
			return
		} else {
			var conexion = new XMLHttpRequest()
			conexion.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("reservations").innerHTML = this.responseText;
				}
			}
		}

		conexion.open("POST", "/student034/dwes/db/ajax/ajax_reservation_select.php", true)

		conexion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		conexion.send("q="+string)
	}
</script>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>