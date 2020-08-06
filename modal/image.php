<form action="api/add.php" method="post" enctype="multipart/form-data">
    新增校園映像圖片
    <hr>
    校園映像圖片：<input type="file" name="name"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button>重置</button>
</form>