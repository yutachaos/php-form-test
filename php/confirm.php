<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>フォーム</title>
</head>
<body>
<h1>フォーム</h1>

<form action="" method="post">
    <div>
        名前：<input type="text" name="name" readonly="readonly" value="<? echo $form->getInput('name')->getValue() ?>"/><br/>
        住所：<input type="text" name="address" readonly="readonly" value="<? echo $form->getInput('address')->getValue() ?>"/><br/>
        年齢：<input type="text" name="age" readonly="readonly" value="<? echo $form->getInput('age')->getValue() ?>"/><br/>
        ご意見ご感想：<br/>
        <textarea name="note" rows="8" cols="40" readonly="readonly"><? echo $form->getInput('note')->getValue() ?></textarea><br/>
        <button type="submit" name="button"> 送信</button>
    </div>
</form>

</body>
</html>
