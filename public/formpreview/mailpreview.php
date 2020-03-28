<html>
	<head>
		<title>Mail preview</title>
		<link rel="stylesheet" type="text/css" href="niceforms-default.css" media="screen" />
		<script type="text/javascript" src="niceforms.js"></script>
		<style type="text/css">
			* {
				margin: 0px;
				padding: 0px;
			}
			h1 {
				margin-bottom: 10px;
			}
			fieldset, dd {
				width: auto;
			}
			fieldset {
				margin-bottom: 0px;
			}
		</style>
	</head>
	<body>
		<form class="niceform">
			<fieldset>
				<legend>Mail preview</legend>
				<dl>
					<dt>E-Mail:</dt>
					<dd><?= $_GET['name']?> (<?= $_GET['email']?>)</dd>
				</dl>
				<dl>
					<dt>Subject:</dt>
					<dd><?= $_GET['subject'] ?></dd>
				</dl>
				<dl>
					<dt>Text:</dt>
					<dd><?= $_GET['text'] ?></dd>
				</dl>
			</fieldset>
			<fieldset class="action">
				<input type="button" value="Close" onclick="self.parent.tb_remove()" />
			</fieldset>
		</form>
	</body>
</html>