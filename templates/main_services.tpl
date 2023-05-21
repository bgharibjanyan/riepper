{extends file="menu.tpl"}
    {block name="poster"}

       {assign var=headline value="Was uns besonders macht "}
{assign var=sHeadline value="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat."}

{assign var=img1 value="./img/serv1.jpg"}
{assign var=img2 value="./img/serv2.jpg"}
{assign var=img3 value="./img/serv3.jpg"}
{assign var=img4 value="./img/serv4.jpg"}


{assign var=name1 value="Qualitätsgarantie"}
{assign var=name2 value="Zuverlässigkeit"}
{assign var=name3 value="Traditionen leben"}
{assign var=name4 value="Regionalität"}

{assign var=desc1 value="Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy.
Eirmod tempor invidunt. Lorem ipsum 
dolor sit amet, consetetur elitr, diam
elitr tempor diam ipsum."}
{assign var=desc2 value="Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy."}
{assign var=desc3 value="Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy."}
{assign var=desc4 value="Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy."}


        {$smarty.block.parent} 

{/block}