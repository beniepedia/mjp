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
			background: #00c6ff; /* fallback for old browsers */
		  background: -webkit-linear-gradient(to right, #00c6ff, #0072ff); /* Chrome 10-25, Safari 5.1-6 */
		  background: linear-gradient(to right, #00c6ff, #0072ff);
			text-align: center; 
			margin-bottom: 3rem;
			padding-top: 5px;
			text-transform: uppercase;
			box-shadow: 1px 1px 11px 5px rgba(0,0,0,.3);

		}
		#head img{
			width: 50px;
			border-radius: 5px;
			display: inline-block;
		  padding-top: 0.3125rem;
		  padding-bottom: 0.3125rem;
		  margin-right: 1rem;
		  font-size: 1.25rem;
		  white-space: nowrap;
		}
		#judul {
			font-size: 25px;
			font-weight: bold;
			color: white;
			padding-bottom: 5px;
		}

		span {
			font-weight: bold;
			font-style: italic;
		}

		p, #content {
			color: #565656;
			font-size: 16px;
			line-height: 25px;
			margin: 20px;
		}
		#link {
			background: #1e3c72; /* fallback for old browsers */
		  background: -webkit-linear-gradient(to right, #1e3c72, #2a5298); /* Chrome 10-25, Safari 5.1-6 */
		  background: linear-gradient(to right, #1e3c72, #2a5298);
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
			background: #00c6ff; /* fallback for old browsers */
		  background: -webkit-linear-gradient(to right, #00c6ff, #0072ff); /* Chrome 10-25, Safari 5.1-6 */
		  background: linear-gradient(to right, #00c6ff, #0072ff);
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
			color: tomato;

		}

	</style>
</head>
<body>
	<div id="head"><img src="https://id-mjp.com/assets/img/logo.jpg" alt=""><div id="judul">id mj parfume</div></div>
    <p>Hai, <span><?= $nama; ?></span></p>
    <p id="content"><?= $content1; ?></p>
    <center><a href="<?= base_url() . $control . $email .'&token='. urlencode($token) ?>" id="link"><?= $btn ?></a></center>
    <p id="content"><?= $content2; ?></p>
    </div>
    <footer>
    	<div id="not">Terima kasih atas perhatian dan kepercayaan anda.</div>
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