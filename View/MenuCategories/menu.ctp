<div class="menuCategories index">
    <?php if (isset($subCategories)) {
            foreach ($subCategories as $cat) { 
                echo $this->Html->link($cat['MenuCategory']['title'],array('action'=>'menu',$cat['MenuCategory']['id']));
                echo "<br />";
            }
          } else  {
            echo "<h2>".$category['MenuCategory']['title']."</h2>";
            foreach ($menuItems as $item) {
                echo $item['MenuItem']['title'] . '       ' . $item['MenuItem']['price']."\n";
                 echo "<br />";
                 echo "<br />";
            }  
          }
    ?>
</div>
 