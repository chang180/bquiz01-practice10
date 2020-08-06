<form action="api/add.php" method="post" enctype="multipart/form-data">
    新增動畫圖片
    <hr>
    動畫圖片：<input type="file" name="name"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button>重置</button>
</form>