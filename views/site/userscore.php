

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

           <h4>Пользователь:<?=$user->login;?> </h4>
           <h4>Статус пользователя: <?=$user->status;?></h4>
           <h4>Счет: <?=$user->score->score;?></h4>

            <h4>Вывод хешей</h4>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Дата вывода</th>
                    <th>Сервис вывода</th>
                    <th>Счет</th>
                    <th>Сумма</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </table>

        <?php } ?>
    </div>
</div>
