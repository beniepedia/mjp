<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Codeigniter mail templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
    <style type="text/css">
    	body{
			font-family: Arial;
			margin:0;
    	}
		#head {
			margin-top: 0;
			background-color: #565656;
			text-align: center; 
			margin-bottom: 3rem;
			padding-top: 5px;
			text-transform: uppercase;
			box-shadow: 1px 1px 11px 5px rgba(0,0,0,.3);

		}
		#head img{
			width: 50px;
			border-radius: 5px;
		}
		#head span{
			font-size: 25px;
			font-weight: bold;
			color: white;
			position: relative;
			left: 20px;
			top: -13px;
		}
		p, #content {
			color: #565656;
			font-size: 16px;
			line-height: 25px;
			margin: 20px;
		}
		#link {
			background-color: #008CBA;
			border: none;
			color:white;
			font-size: 15px;
			padding: 10px 20px;
			text-decoration: none;
			border-radius: 5px;
			display: inline-block;
			text-align: center; 

		}

		footer {
			background-color: #565656;
			padding: 10px;
		}
		#not {
			color: white;
			font-size: 13px;
			padding: 5px;
			text-align: center;
		
		}
		#addr ul{
			list-style: none;
			line-height: 1.2rem;
			font-size: .7rem;
			color: white;
			margin: 0;
			padding: 0;

		}

		#addr li {
			margin: 0;
			padding: 0;
			line-height: 1.5;
			text-align: center;
		}

		#addr li a {
			padding-left: 15px;

		}

	</style>
</head>
<body>
	<div id="head"><img src="https://id-mjp.com/assets/img/logo.jpg" alt=""><span>id mj parfume</span></div>
    <p>Hai, <?= $nama; ?></p>
    <p id="content"><?= $content1; ?></p>
    <center><a href="<?= base_url() . 'auth/verify?email=' . $email .'&token='. urlencode($token) ?>" id="link">Aktivasi Sekarang</a></center>
    <p id="content"><?= $content2; ?></p>
    </div>
    <footer>
    	<div id="not">Terima kasih atas kepercayaan anda kepada kami.</div>
    	<hr>
    	<div id="addr">
    		<ul>
    			<li>
    				Gg. Keluarga No.1B, Tj. Sari, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20135
    			</li>
    			<li>
    				Telp : +62822-8866-9090
    			</li>
    			<li>
    				Email : admin@id-mjp.com
    			</li>
    		</ul>
    	</div>
    </footer>
</body>
</html>