<form action="api/upload.php" method="post" enctype="multipart/form-data">
    更新標題區圖片
    <hr>
    標題區圖片：<input type="file" name="name"><br>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>更新</button><button>重置</button>
</form>