
<div class="jumbotron">
    <h2>Спасибо!</h2>
    <? //foreach ($AddUser as $user) {
    use yii\helpers\Url;

    $url=Url::to(['/site/addscore/', 'id' => $AddUser->id]);
        ?>
        <h3>Новый пользователь зарегистрирован в системе под именем
            <span class="badge"><?=$AddUser->nickname;?></span>  и под логином
            <span class="badge"> <?=$AddUser->login;?></span></h3>
        <h3>Вы можете открыть ему новый счет для hash-ей</h3>
        <h3><a class="btn btn-success" href="<?=$url;?>" >Открыть счет</a></h3>

        <?
   // }?>

</div>


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

