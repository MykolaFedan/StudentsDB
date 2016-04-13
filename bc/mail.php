
<?php 
// если была нажата кнопка "Отправить" 
 
        // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменной $_POST['mess'] все аналогично 
        $title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
        
        // $to - кому отправляем 
        $to = 'shalenikolesa@gmail.com'; 
        // $from - от кого 
        $from='info@shina-online.com'; 

        $message = "Ім'я $mess \nТелефон $title"; 
        // функция, которая отправляет наше письмо. 

       if ($mess!=NULL) {
        mail($to, $title, $message, 'From:'.$from); 
       };
        
        



?>