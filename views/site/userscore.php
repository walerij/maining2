

<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-bitcoin">

        </i>
        &nbsp;Счет
    </div>
    <div class="panel-body">
        <?php
        foreach ($userRecord as $user)
        {
            ?>

           <h4>Пользователь:<strong><?=$user->login;?></strong> </h4>
           <h4>Статус пользователя:<strong> <?=$user->status;?></strong></h4>
           <h4>Счет: <span class="btn btn-info"> <?=$user->score->score;?></span></h4>
           <hr>
           <h4>Транзацкии вывода хешей</h4>
           <table class="table table-bordered table-hover">
                <tr>
                    <th>Дата вывода</th>
                    <th>Сервис вывода</th>
                    <th>Счет</th>
                    <th>Сумма</th>
                </tr>
            <? foreach ($user->score->scoreoutput as $output){?>
                <tr>
                    <td><?=$output->dateoutput; ?></td>
                    <td><?=$output->scoreorg; ?></td>
                    <td><?=$output->scorenumber; ?></td>
                    <td><?=$output->scoresum; ?></td>
                </tr>
               <?}?>
            </table>
             <a class="btn btn-success" href="/site/addoutput/" title="Добавить вывод">
                 Добавить
             </a>
        <?php } ?>
    </div>
</div>
