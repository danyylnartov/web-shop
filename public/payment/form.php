<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>Через несколько секунд вы будете перенаправлены на страницу оплаты. Нажмите кнопку, если не хотите ждать...</p>

<?php if (!empty($_SESSION['pay'])): ?>
<form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
	<input type="hidden" name="s" value="Ch9xKugi9g" />
	<input type="hidden" name="ik_co_id" value="6162aa4433605d1a0d516565"/>
	<input type="hidden" name="ik_pm_no" value="<?=$_SESSION['payment']['id'];?>"/>
	<input type="hidden" name="ik_am" value="<?=$_SESSION['payment']['sum'];?>"/>
	<input type="hidden" name="ik_cur" value="<?=$_SESSION['payment']['curr'];?>"/>
	<input type="hidden" name="ik_desc" value="Платёж магазину webshop"/>
	<input type="submit" value="Оплатить">
</form>
<?php endif; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
	setTimeout(function () {
	    $('form').submit();
	}, 20000);
</script>

</body>
</html>