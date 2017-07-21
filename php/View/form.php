<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>フォーム</title>
</head>
<body>
<h3>フォーム</h3>

<form action="" method="post">
    <div>
        名前：<input type="text" name="name"/><br/>
        <p><? echo $form->getInput('name')->getErrors() ?></p>
        住所：<input type="text" name="address"/><br/>
        <p><? echo $form->getInput('address')->getErrors() ?></p>
        年齢：<input type="text" name="age"/><br/>
        <p><? echo $form->getInput('age')->getErrors() ?></p>
        <h5>備考</h5>
        <textarea name="note" rows="8" cols="40"></textarea>
        <div>
            <button type="submit"> 送信</button>
        </div>
    </div>
</form>

</body>
</html>