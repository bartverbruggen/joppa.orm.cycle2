<div class="cycle-slideshow"
    data-cycle-fx="fade"
    data-cycle-pause-on-hover="true"
    data-cycle-speed="200"
    data-cycle-slides="> .slide"
    >
    {foreach $result as $content}
        {if $content->image}
            <div class="slide">{image src=$content->image width=300 height=100 thumbnail="crop"}</div>
        {/if}
    {/foreach}
</div>
