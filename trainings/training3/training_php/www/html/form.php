<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>確認</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>確認画面</h1>
        </div>

        <div class="wrap">
                <?php foreach($_POST['data'] as $key => $item):?>
                <div class="confirmation-item">
                    <div class="confirmation-item-name"><?php echo $key ?></div>
                    <div class="confirmation-item-detail">
                        <?php $str= ""; ?>   
                        <?php if($item==$str){
                                echo "**{$key}が入力されていません**";
                            }else{
                                echo $item;
                            }
                        ?>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
</body>
</html>