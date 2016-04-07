<aside>
    <a href="index.php?r=backend/shop-manaer/logout">退出</a>
</aside>
<section>
    <ul>
        {foreach from=$shops item=shop}
            <li>
                店铺名：{$shop.shop_name}
                法人：{$shop.corporation}
                电话： {$shop.mobile}
                审核状态：{if $shop.is_check eq 0}未审核{elseif $shop.is_check eq 1}审核通过{else}审核不通过{/if}
                认证状态：{if $shop.is_auth eq 0}未认证{elseif $shop.is_check eq 1}认证通过{else}认证不通过{/if}

                <a href="index.php?r=backend/shop-manaer/detail&shop_id={$shop.shop_id}">查看详细</a>


            </li>

        {/foreach}
    </ul>
</section>