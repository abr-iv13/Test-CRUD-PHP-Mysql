{* header *}
{include file="header.tpl"}
{* header *}
    <div class="container">
        <h1 class="text-center mt-5">Медали</h1>
        <form method="POST" action="store">
            <select class="custom-select mt-5 shadow-sm" name="select_medal">
                <option selected>Выберите медаль</option>
                    {foreach $resultMedalsTypes as $medalType}
                        <option value={$medalType.id}>{$medalType.name}</option>
                        {foreachelse}
                            Нет данных
                    {/foreach}
            </select>
            <select class="custom-select mt-3 shadow-sm" name="select_country">
                <option selected>Выберите страну</option>
                    {foreach $resultCountres as $country}
                        <option value={$country.id}>{$country.name}</option>
                        {foreachelse}
                            Нет данных
                    {/foreach}
            </select>
            <select class="custom-select mt-3 shadow-sm" name="select_sport">
                <option selected>Выберите вид спорта</option>
                    {foreach $resultSports as $sport}
                        <option value={$sport.id}>{$sport.name}</option>
                        {foreachelse}
                            Нет данных
                    {/foreach}
            </select>
            <select class="custom-select mt-3 shadow-sm" multiple="multiple" name="select_player[]">
                    {foreach $resultPlayers as $player}
                        <option value={$player.id}>{$player.lastname} {$player.firstname} {$player.middlename}</option>
                        {foreachelse}
                            Нет данных
                    {/foreach}
            </select>
            <button type="submit" class="btn btn-secondary mt-4">Добавить</button>
        </form>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Медаль</th>
                    <th>Страна</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Вид спорта</th>
                    <th>Действие</th>
                </tr>
                {foreach $resultQueryAll as $medal}
                    <tr>
                        <td>{$medal.id}</td>
                        <td>{$medal.medal}</td>
                        <td>{$medal.country}</td>
                        <td>{$medal.lastname}</td>
                        <td>{$medal.firstname}</td>
                        <td>{$medal.middlename}</td>
                        <td>{$medal.sport}</td>
                        <td><a href="/medal/delete?delete_medal={$medal.id}" class="btn btn-outline-danger btn-sm">Удалить</a></td>
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