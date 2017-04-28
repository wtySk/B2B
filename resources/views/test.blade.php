<!-- created by wtySk 2017/4/1 14:24-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test things</title>
</head>
<body>
<form action="/test/file-post" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="file">
    <button type="submit">提交</button>
</form>
</body>
</html>