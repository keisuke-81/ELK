<form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="img_path">
<input type="submit" value="アップロード">
</form>
