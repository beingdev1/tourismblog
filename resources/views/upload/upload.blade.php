<div class="col-lg-offset-4 col-lg-4">
<label>Select image to upload:</label>

<input type="file" name="image" id="image">
<input type="submit" value="Upload" name="submit">
<input type="hidden" value="{{ csrf_token() }} name="_token">
<br>