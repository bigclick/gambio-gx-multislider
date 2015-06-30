<div id="startpage_slider" class="banner-rotator">
    <ul class="br-slides">
        {foreach item=s from=$items}
        <li data-transition="{$s.transition}"{if $s.layer_link} data-link="{$s.layer_link}" data-target="{$s.layer_link_target}"{/if} style="visibility: hidden;">
            <a href="multislider/uploads/slider/big/{$s.background_image}">
                <img src="multislider/uploads/slider/thumb/{$s.background_image}" title="" alt="">
            </a>
            {if $s.layer !=''}
                {foreach item=l from=$s.layer}
                    <{$l.tag} style="display:none;{$l.style}" data-transition="{$l.transition}" data-transition-out="{$l.transition_out}">
                        {$l.text}
                    </{$l.tag}>
                {/foreach}
            {/if}
        </li>
        {/foreach}
    </ul>
</div>