<form action="api/add.php" method="post" enctype="multipart/form-data">
    新增主選單
    <hr>
    選單名稱：<input type="text" name="name"><br>
    連結網址：<input type="text" name="text"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button>重置</button>
</form>