<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Formpreview Example</title>
		<script type="text/javascript" src="jquery/jquery-latest.pack.js"></script>
		<script type="text/javascript" src="jquery/thickbox-compressed.js"></script>
		<link rel="stylesheet" href="jquery/thickbox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="formpreview.js"></script>
		<link rel="stylesheet" type="text/css" href="niceforms-default.css" media="screen" />
		<script type="text/javascript" src="niceforms.js"></script>
		<style type="text/css">
			fieldset, dd {
				width: auto;
			}
		</style>
	</head>
	<body>
		<form id="mailsend" action="mailsend.php" class="niceform">
			<fieldset>
				<legend>Send a mail</legend>
				<dl>
					<dt><label for="name">Name:</label></dt>
					<dd><input type="text" id="name" name="name" /></dd>
				</dl>
				<dl>
					<dt><label for="name">E-Mail:</label></dt>
					<dd><input type="text" id="email" name="email" /></dd>
				</dl>
				<dl>
					<dt><label for="name">Subject:</label></dt>
					<dd><input type="text" id="subject" name="subject" /></dd>
				</dl>
				<dl>
					<dt><label for="name">Text:</label></dt>
					<dd><textarea id="text" name="text" rows="5" cols="60"></textarea></dd>
				</dl>
			</fieldset>
			<fieldset class="action">
				<input type="button" value="Preview" id="previewbutton" class="thickbox" alt="#TB_inline?width=400&height=250&inlineId=mailpreview&modal=true" />
				<script type="text/javascript">
					$('#previewbutton').click(function(){
						formPreview('mailsend', 'mailpreview.php', 'mailpreviewiframe');
					});
				</script>
				<input type="submit" value="Send!" />
			</fieldset>
		</form>
		<div id="mailpreview" style="display: none;">
			<iframe name="mailpreviewiframe" style="border: 0; width: 400px; height: 245px;"></iframe>
		</div>
	</body>
</html>