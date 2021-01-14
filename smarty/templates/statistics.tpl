{* header *}
{include file="header.tpl"}
{* header *}
    <div class="container">
        <h1 class="text-center mt-5">Статистика</h1>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>Вид спорта</th>
                    <th>Медаль</th>
                    <th>Страна</th>
                    <th>Участники</th>
                </tr>
                {foreach $resultMedalsFromCountry as $stat}
                    <tr>
                        <td>{$stat.sport}</td>
                        <td>{$stat.medal}</td>
                        <td>{$stat.country}</td>
                        <td>{$stat.group_name}</td>
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