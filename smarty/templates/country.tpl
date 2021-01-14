{* header *}
{include file="header.tpl"}
{* header *}
    <div class="container">
        <h1 class="text-center mt-5">{$wow} </h1>
        <form method="POST" action="store" class="mt-5 mb-3">
            <div class="form-group ">
                <input type="text" class="form-control " name="country" placeholder="Выберите страну ">
            </div>
            <button type="submit" class="btn btn-secondary">Добавить</button>
        </form>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Страна</th>
                    <th>Действие</th>
                </tr>
                    {foreach $resultCountres as $value}
                        <tr>
                            <td>{$value.id}</td>
                            <td>{$value.name}</td>
                            <td><a href="/country/delete?delete_country={$value.id}" class="btn btn-outline-danger btn-sm">Удалить</a></td>
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