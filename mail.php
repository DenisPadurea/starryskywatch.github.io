<?php
$recepient = "denis_paduria@mail.ru"; //Почта на которую будут уходить заявки
$sitename = "Aeg"; //Название сайта
//
//
$name = trim($_POST["name"]); //Создаем переменную $name и помещаем в неё значения из поля формы 'name'
$phone = trim($_POST["phone"]); //Создаем переменную $mail и помещаем в неё значения из поля формы 'email'


$message = "\nИмя: $name \nТелефон: $phone \n"; //Создаем шаблон письма
$pagetitle = "Новая заявка с сайта \"$sitename\""; //Задаем тему письма
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
if($message){
    header("Location: thanks.html");  //В случае успешной отправки перенаправляем пользователя на заранее созданную страницу с благодарностью
  }else{  //В случае ошибки выводим такое сообщение:
    echo "Упс, что-то пошло не так.";
  }
?>
