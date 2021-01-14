{* header *}
{include file="header.tpl"}
{* header *}
    <div class="container">
        <h1 class="text-center mt-5">Олимпийские игры <br/> Медальный зачет</h1>
        <table class="table shadow mt-5">
            <thead class="thead-dark">
                <tr>
                    <th><a class="text-decoration-none text-white" href="?sort={if $smarty.get.sort == rank_asc}rank_desc{else}rank_asc{/if}">Место</a></th>
                    <th><a class="text-decoration-none text-white" href="?sort={if $smarty.get.sort == country_asc}country_desc{else}country_asc{/if}">Страна</a></th>
                    <th><a class="text-decoration-none text-warning" href="?sort={if $smarty.get.sort == gold_asc}gold_desc{else}gold_asc{/if}">1</a></th>
                    <th><a class="text-decoration-none text-white" href="?sort={if $smarty.get.sort == silver_asc}silver_desc{else}silver_asc{/if}">2</a></th>
                    <th><a class="text-decoration-none text-danger" href="?sort={if $smarty.get.sort == bronze_asc}bronze_desc{else}bronze_asc{/if}">3</a></th>
                    <th><a class="text-decoration-none text-white" href="?sort={if $smarty.get.sort == all_medals_asc}all_medals_desc{else}all_medals_asc{/if}">Все</a></th>
                </tr>
                {foreach $resultSumMedals as $sumMedals}
                    <tr>
                        <td>{$newArray[$sumMedals['country_id']]}</td>
                        <td>{$sumMedals.country}</td>
                        <td><a class="text-decoration-none text-secondary" href="/statistic/index/?index_country={$sumMedals.country_id}&type_medal=1">{$sumMedals.gold}</a></td>
                        <td><a class="text-decoration-none text-secondary" href="/statistic/index/?index_country={$sumMedals.country_id}&type_medal=2">{$sumMedals.silver}</a></td>
                        <td><a class="text-decoration-none text-secondary" href="/statistic/index/?index_country={$sumMedals.country_id}&type_medal=3">{$sumMedals.bronze}</a></td>
                        <td><a class="text-decoration-none text-secondary" href="/statistic/index/?index_country={$sumMedals.country_id}&type_medal=">{$sumMedals.all_medals}</a></td>
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