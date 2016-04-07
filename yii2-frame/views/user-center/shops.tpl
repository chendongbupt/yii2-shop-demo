<aside id="menu">
    <a href="index.php?r=user-center">个人信息</a>
    <a href="index.php?r=user-center/shops" class="cur">我的店铺</a>
</aside>
<aside>
    <a href="index.php?r=user-center/logout">退出</a>
</aside>
<section id="section">
    <h2>我的店铺</h2>
    <ul>
        {foreach from=$myshops item=shop}
            <li>
                店铺名：{$shop.shop_name} <br/>
                法人：{$shop.corporation} <br/>
                电话： {$shop.mobile} <br/>
                审核状态：{if $shop.is_check eq 0}未审核{elseif $shop.is_check eq 1}审核通过{else}审核不通过{/if} <br/>
                认证状态：{if $shop.is_auth eq 0}未认证{elseif $shop.is_check eq 1}认证通过{else}认证不通过{/if} <br/>
                上传的资料：
                <img src="{$shop.checkImg}" alt="" width="100"/>
                {if $shop.authImg}<img src="{$shop.authImg}" alt="" width="100"/>{/if}
            </li>

        {/foreach}
    </ul>
    <a href="index.php?r=user-center/apply-shop">申请开店</a>
</section>