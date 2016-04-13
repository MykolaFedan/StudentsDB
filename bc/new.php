<?php
    include 'config.php';
          $connect = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
              if (!$connect) exit ('MySQL Error!');

                            mysqli_set_charset($connect ,"utf8");

                            echo '<form action="/category/shini/" method="get">';

                            $qwery=mysqli_query($connect, 'SELECT id, name,code, type FROM shop_feature ' );

                            while ($label=mysqli_fetch_assoc($qwery))
                             {  
                                echo "<span class='span_$label[code]'>";
                                echo "<label>$label[name]";
                                echo "</label>";
                                echo "<select class='jq-selectbox' name='$label[code]'>";
                                $table="shop_feature_values_{$label['type']}";
                                echo " <option value=''>Вибрать</option>";


                                $qwery2=mysqli_query($connect, "SELECT value, id FROM $table WHERE feature_id = $label[id]" );

                                while ($row=mysqli_fetch_assoc($qwery2)) {
                                    
                                echo " <option value='$row[id]'>$row[value]</option>";
                                }

                                echo "</select>";
                                echo "<br>";

                                echo "</span>";

                             }

                            
                             mysqli_close($connect); 

                                echo "<div class='text_center'>               
                                        <input type='submit' class='btn btn_yellow' value='Подобрать'></div>";

                                echo '</form>';


                            ?>

<script type="text/javascript">
    

    json_object = { };  json_object[$(select).attr('name')] = $('select options').filter(function(opt) { return $(opt).val(); });
</script>