<form action="api/add.php" method="post" enctype="multipart/form-data">
    新增最新消息資料
    <hr>
    最新消息資料：<textarea name="text" cols="60" rows="10"></textarea><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button>重置</button>
</form>