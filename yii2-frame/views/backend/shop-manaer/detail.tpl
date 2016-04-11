<aside>
    <a href="/backend/shop-manaer/shop" class="btn btn-info">返回列表</a>
</aside>

<section class="">
    店铺名：{$shop.shop_name}  <br/>
    法人：{$shop.corporation}  <br/>
    电话： {$shop.mobile} <br/>

    审核材料： <img src="{$shop.checkImg}" alt="" width="200" height="200"/>
    审核状态：{if $shop.is_check eq 0}未审核{elseif $shop.is_check eq 1}审核通过{else}审核不通过{/if}
    操作： {if $shop.is_check neq -1}<a href="###" class="btn btn-danger" data-act="/backend/shop-manaer/check/-1/{$shop.shop_id}">审核不通过</a>{/if}
    {if $shop.is_check neq 1}<a href="###" class="btn btn-success" data-act="/backend/shop-manaer/check/1/{$shop.shop_id}">审核通过</a>{/if}
    <br/>
    认证资料： {if $shop.authImg}<img src="{$shop.authImg}" alt="" width="200" height="200"/>{else}未提交{/if}
    认证状态：{if $shop.is_auth eq 0}未认证{elseif $shop.is_check eq 1}认证通过{else}认证不通过{/if}
    操作： {if $shop.is_auth neq -1}<a href="###" class="btn btn-danger" data-act="/backend/shop-manaer/auth/-1/{$shop.shop_id}">认证不通过</a>{/if}
    {if $shop.is_auth neq 1}<a href="###" class="btn btn-success" data-act="/backend/shop-manaer/auth/1/{$shop.shop_id}">认证通过</a>{/if}

</section>

<script src="/js/backend/detail.js"></script>