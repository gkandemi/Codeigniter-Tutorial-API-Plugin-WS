<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

		.sortable{
			margin: 0px;
			padding: 0px;
			list-style: none;
			width:300px;
		}

		.sortable li{

			padding: 5px 10px;
			border: 1px dashed #666;
			background-color: #f0f0f0;
			margin-bottom: 3px;

		}




	</style>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<script>

		$(document).ready(function () {

			$( ".sortable" ).sortable();

			$(".sortable").on("sortupdate", function(event, ui){

				var data = $(this).sortable("serialize");

				var url = "http://localhost/siralama_ci/welcome/rankOrder";

				$.post(url,{data:data},function(response){

				})


			})


		})

	</script>
</head>
<body>
	<ul class="sortable">
		<?php foreach($items as $item) { ?>
			<li id="ord-<?php echo $item->id; ?>"><?php echo $item->title; ?></li>
		<?php } ?>

	</ul>


</body>
</html>