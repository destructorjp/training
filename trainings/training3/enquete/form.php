<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>�m�F</title>
        <link rel="stylesheet" type="text/css" href="../enquete/php.css">
    </head>
    <body>
        <main>
            <section id="main_confirm">
                <h1>���͓��e</h1>
                <div class="main_confirm_result">
                    <?php
                    $receiveData = $_POST['data'];
                    if($receiveData['Name'] == ''){
                            $receiveData['Name'] = 'Empty';
                        }
                    foreach ($receiveData as $key => $value){
                        echo '<p>'.$key.':</p><p>'.$value.'</p>';
                    }
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>