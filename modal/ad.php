<form action="api/add.php" method="post" enctype="multipart/form-data">
    新增動態文字廣告
    <hr>
    動態文字廣告：<input type="text" name="text"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button>重置</button>
</form>