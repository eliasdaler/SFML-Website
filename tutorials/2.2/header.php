<?php

    function doc_link($type, $sfml_class, $doc_class)
    {
        if (!isset($doc_class))
            $doc_class = $sfml_class;

        $doc_class = str_replace("::", "_1_1", $doc_class);
        echo '<a href="../../documentation/2.2/'. $type . 'sf_1_1' . $doc_class . '.php" title="sf::' . $sfml_class . ' documentation"><code>sf::' . $sfml_class . '</code></a>';
    }

    function class_link($sfml_class, $doc_class = null)
    {
        doc_link("class", $sfml_class, $doc_class);
    }

    function struct_link($sfml_struct, $doc_struct = null)
    {
        doc_link("struct", $sfml_struct, $doc_struct);
    }

    $breadcrumbs = array(
        'Learn' => 'learn.php',
        '2.2 Tutorials' => 'tutorials/2.2',
        $title => 'tutorials/2.2/' . $page
    );

    require("../../header.php");
?>
