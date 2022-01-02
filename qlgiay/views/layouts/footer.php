			


	<style>
		.huykhanh{
			width: 100%;
			display:flex;
			align-items: flex-end;
			justify-content:flex-end;
			height:350px;
			/* background-image:linear-gradient( to right ,#0F2027,#203A43,#f64f59 ); */
			background-color:#232323;
		}
		 footer
		{
			position: relative;
			width:100%;
			background: #3587ff;
			min-height: 100px;
			padding: 20px 50px;
			display:flex;
			justify-content: center;
			align-items:center;
			flex-direction: column;
		}
		 footer .social_icon,
		 footer .menu
		{
			position:relative;
			display:flex;
			justify-content:center;
			align-items:center;
			margin: 10px 0;
			flex-wrap:wrap;
		}
		 footer .social_icon li,
		 footer .menu li
		{
			list-style:none;
		}
		 footer .social_icon li a
		{
			font-size:2rem;
			color:white;
			margin: 0 10px;
			display: inline-block;
			transition: 0.5s; 
		}
		 footer .social_icon li a:hover
		{
			transform:translateY(-10px);
		}
		 footer .menu li a
		{
			font-size:1.2rem;
			color:white;
			margin: 0 10px;
			display: inline-block;
			transition: 0.5s; 
			text-decoration:none;
			opacity:0.75;  
			font-weight:500;
		}
		 footer .menu li a:hover
		{
			opacity:1;
			transform: scale(1.2);
			color:black;

		}
		 footer p
		{
				font-size:2rem;
				text-align:center;
				margin: 15px 0 10px 2rem;
				color:white;
				cursor:pointer;
		}
		
		 footer .wave
		{
			position:absolute;
			top: -100px;
			left:0;
			width: 100%;
			height: 100px;
			background: url(images/wave.png);
			background-size:1000px 100px;
		} 
		 footer .wave#wave1
		{
			z-index:1000;
			opacity:1;
			bottom: 0;
			animation: wavewave 2s linear infinite;
		} 
		 footer .wave#wave2
		{
			z-index:999;
			opacity: 0.5;
			bottom: 10px;
			animation: wavewave2 4s linear infinite;
		} 
		 footer .wave#wave3
		{
			z-index:1000;
			opacity:0.2;
			bottom: 15px;
			animation: wavewave 3s linear infinite;
		} 
		 footer .wave#wave4
		{
			z-index:999;
			opacity: 0.7;
			bottom: 20px;
			animation: wavewave2 3s linear infinite;
		} 
		@keyframes wavewave
		{
			0%
			{
				background-position-x:1000px;
			}
			100%
			{
				background-position-x:0px;
			}
		} 
		@keyframes wavewave2
		{
			0%
			{
				background-position-x:0px;
			}
			100%
			{
				background-position-x:1000px;
			}
		} 
						
	</style>
			<div id="tele-down"></div>
			<div class="huykhanh">
                <footer>
                    <div class="waves">
                        <div class="wave" id="wave1"></div>
                        <div class="wave" id="wave2"></div>
                        <div class="wave" id="wave3"></div>
                        <div class="wave" id="wave4"></div>
                    </div>
                    <ul class="social_icon">
                        <li><a href="https://www.facebook.com/ace.khanh" target="_black"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="https://www.youtube.com/watch?v=-_3IS2Di0PY" target="_black"><ion-icon name="logo-youtube"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    </ul>
                    <ul class="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="https://www.facebook.com/ace.khanh" target="_black">FaceBook</a></li>
                        <li><a href="https://www.youtube.com/watch?v=-_3IS2Di0PY" target="_black">Youtube</a></li>
                    </ul>
                    <p> make by huy khanh </p>
                </footer>
            </div>
		
			
			<script src="views/script.js"></script>
		<script src="public/js/jquery-3.5.1.slim.min.js"></script>
		<script src="public/js/popper.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/ckfinder/ckfinder.js"></script>
		<script type="text/javascript">
		
			function BrowseServer()
			{
				var finder = new CKFinder();
				finder.basePath = '../';
				finder.selectActionFunction = function(fileUrl) {
					document.getElementById('HinhAnh').value = fileUrl.substring(fileUrl.lastIndexOf('/') + 1);
				};
				finder.popup();
			}
			
			function BrowseServerAnh()
			{
				var finder = new CKFinder();
				finder.basePath = '../';
				finder.selectActionFunction = function(fileUrl) {
					document.getElementById('Avata').value = fileUrl.substring(fileUrl.lastIndexOf('/') + 1);
				};
				finder.popup();
			}
			
		</script>
	</body>
</html>