<style>
	.card{
		width:60%;
		margin: 0 auto;
		margin-bottom: 20px;
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    	backdrop-filter: blur(10px);
    	-webkit-backdrop-filter: blur(10px);
    	border-radius: 20px;
   		border:1px solid rgba(255, 255, 255, 0.18);
    	box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
	}
	.center
	{
		text-align:center;
	}
</style>
<div class="card">
	<h4 class="card-header center">Giỏ hàng rỗng</h4>
	<div class="card-body">
		<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
			<i class="fad fa-info-circle"></i> <?php echo $message; ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</div>