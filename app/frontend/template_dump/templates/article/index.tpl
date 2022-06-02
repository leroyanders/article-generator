{extends file='main/base.tpl'}

{block name='body'}
    {block name='articles_by_categories'}
      {include file='article/read.tpl'}
    {/block}
{/block}