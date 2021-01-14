{* header *}
{include file="header.tpl"}
{* header *}
    <div class="container">
        <h1 class="text-center mt-5">Вид спорта</h1>
        <form method="POST" action="store">
            <div class="form-group mt-5">
                <label for="sport">Вид спорта</label>
                <input type="text" class="form-control" id="sport" placeholder="Вид спорта" name="sport">
                <small class="form-text text-muted"></small>
                <button type="submit" class="btn btn-secondary mt-2">Добавить</button>
            </div>
        </form>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Вид спорта</th>
                    <th>Действие</th>
                </tr>
                    {foreach $resultSports as $sport}
                        <tr>
                            <td>{$sport.id}</td>
                            <td>{$sport.name}</td>
                            <td><a href="/sport/delete?delete_item={$sport.id} " class="btn btn-outline-danger btn-sm">Удалить</a></td>
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