// ========================
// templates/user.php
// ========================


<form method="POST" action="/apps/filelistfinder/user/submit" enctype="multipart/form-data">
<h2>File List Search</h2>
<textarea name="filelist" rows="10" cols="80" placeholder="Enter filenames here, one per line..."></textarea>
<br><br>
<label for="fileupload">Or upload a file list (.csv, .txt, .xlsx):</label>
<input type="file" name="fileupload">
<br><br>
<button type="submit">Submit</button>
</form>
<?php if (!empty($_['status'])) echo "<p>Status: {$_['status']}</p>"; ?>
