{include "aside.tpl"}

<section id="section" class="col-lg-9">
    <h2 class="bg-info">我的店铺</h2>
    <ul>
        {foreach from=$myshops item=shop}
            <li class="list-group list-group-item">
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
    <a href="/user-center/apply-shop" class="btn btn-info">申请开店</a>
</section>