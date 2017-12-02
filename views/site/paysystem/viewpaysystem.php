<h3>Платежные системы</h3>
<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-bitcoin">

        </i>
        <i class="glyphicon glyphicon-bitcoin">

        </i>
        <i class="glyphicon glyphicon-bitcoin">

        </i>
         Платежные системы
    </div>
    <div class="panel-body">
       <table class="table table-hover">
           <tr>
               <th>Наименование</th>
               <th>Информация</th>
               <th>Лого</th>
               <th>
               <a class="btn btn-default img-rounded" href="" title="Добавить запись">
                   <i class="glyphicon glyphicon-plus"></i>
               </a>
           </tr>
           <? foreach ($paysystemRecord as $paysystem) {
               ?>
             <tr>
                 <td><?=$paysystem->name;?></td>
                 <td><?=$paysystem->info;?></td>
                 <td><img src="/../<?=$paysystem->link;?>" alt="no"> </td>
                 <td>

                     <a class="btn btn-info" href="" title="Редактировать запись">
                         <i class="glyphicon glyphicon-edit"></i>
                     </a>
                     <a class="btn btn-info" href="" title="Удалить запись">
                         <i class="glyphicon glyphicon-remove"></i>
                     </a>

                 </td>
             </tr>
           <?}
           ?>
       </table>
    </div>
</div>