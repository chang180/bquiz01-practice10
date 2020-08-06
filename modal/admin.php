<form action="api/add.php" method="post" enctype="multipart/form-data">
    新增管理者帳號
    <hr>
    帳號：<input type="text" name="acc"><br>
    密碼：<input type="password" name="pw"><br>
    確認密碼：<input type="password" name="pw2"><br>
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <button>新增</button><button>重置</button>
</form>