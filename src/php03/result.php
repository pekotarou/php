<?php

require_once('config/status_codes.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);

$answer_description= htmlspecialchars($_POST['answer_description'], ENT_QUOTES);



$option = htmlspecialchars($_POST['option']??'データなし', ENT_QUOTES);

//echo "オプションは".$option."だよ";
//↑【?? 'データなし'】を入れないと、エラーになる。理由は、php8.1から、htmlspecialcharsがヌルの引数入ってると、ダメになったらしい。なので、もし選択していないで回答ボタンを押した場合は、"データなし"等の文字を入れて、それがoptionだった場合には再度、index.phpを表示するように指示する

//あと、ヘッダーの上にエコー入れて表示させちゃうとif内のheaderが表示されなくなるから要注意
//php エラー htmlspecialchars(): Passing null to parameter #1 ($string) of type string is deprecated



if($option == "データなし"){
    header('Location: index.php');
    exit;
}

$result = $answer_code ===  $option

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
                <?php if ($result): ?>
                <h2 class="result__text--correct">
                    正解
                </h2>
                <?php else: ?>
                <h2 class="result__text--incorrect">
                    不正解
                </h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">
                            ステータスコード
                        </th>
                        <td class="answer-table__text">
                            <?php echo $answer_code; ?>
                            
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">
                            説明
                        </th>
                        <td class="answer-table__text">
                            <?php echo $answer_description; ?>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>