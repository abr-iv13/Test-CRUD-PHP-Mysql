{* header *}
{include file="header.tpl"}
{* header *}
    <div class="container">
        <h1 class="text-center mt-5">Игроки</h1>
        <form method="POST" action="store">
            <div class="form-group mt-3">
                <label for="firstname">Фамилия</label>
                <input type="text" class="form-control" id="firstname" name="add_last_name" placeholder="Фамилия">
                <small class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Имя</label>
                <input type="text" class="form-control" id="exampleInput" name="add_first_name" placeholder="Имя">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Отчество</label>
                <input type="text" class="form-control" id="exampleInput" name="add_middle_name" placeholder="Отчество">
            </div>
            <button type="submit" class="btn btn-secondary">Добавить</button>
        </form>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Действие</th>
                </tr>
                  {foreach $resultPlayers as $palyer}
                        <tr>
                            <td>{$palyer.id}</td>
                            <td>{$palyer.lastname}</td>
                            <td>{$palyer.firstname}</td>
                            <td>{$palyer.middlename}</td>
                            <td><a href="/player/delete?delete={$palyer.id}" class="btn btn-outline-danger btn-sm">Удалить</a></td>
                        </tr>
                        {foreachelse}
                        Нет данных
                    {/foreach}
            </thead>
        </table>
    </div>
 {* Footer *}
 {include file="footer.tpl"}
 {* EndFooter *}