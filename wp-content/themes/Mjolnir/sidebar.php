<aside><div class="categoria"><h3>Categorias</h3><ul> <?php
        $args = array(
            'orderby' => 'name',
            'order' => 'ASC'
        );
        $categories = get_categories($args);
        foreach ($categories as $category) {
            echo '<li><a href="' . get_category_link($category->term_id) .
                '" title="' . sprintf(__("Ver postagens em %s"), $category->name) .
                '" ' . '> -' . $category->name . '</a> ';
        }
        ?> </ul></div></aside>