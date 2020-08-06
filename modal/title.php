<form action="api/add.php" method="post" enctype="multipart/form-data">
    新增標題區圖片
    <hr>
    標題區圖片：<input type="file" name="name"><br>
    標題替代區文字：<input type="text" name="text"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button>重置</button>
</form>