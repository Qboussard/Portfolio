<?php

$erreur = array(
    'mail' => FALSE,
    'nom' => FALSE,
    'sujet' => FALSE,
    'message' => FALSE,
    'siteweb' => TRUE);

if (isset($_POST['go']))
{

    if (empty($_POST['message']))
    {
        $message_mail = "Veuillez entrer votre message";
    }
    else
    {
        $erreur['message'] = TRUE;
    }
    if (empty($_POST['sujet']))
    {
        $message_mail = "Veuillez entrer un sujet";
    }
    else
    {
        $erreur['sujet'] = TRUE;
    }
    if (empty($_POST['nom']))
    {
        $message_mail = "Veuillez entrer votre nom";
    }
    else
    {
        $erreur['nom'] = TRUE;
    }
    if (empty($_POST['mail']))
    {
        $message_mail = "Veuillez entrer une adresse mail";
    }
    else
    {
        $erreur['mail'] = TRUE;
    }

    $mailRegex = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
    if (!preg_match($mailRegex, $_POST['mail'])) //verification grâce à la regex que l'adresse mail est valide
    {
        $message_mail = "Veuillez entrer une adresse mail";
    }
    else
    {
        $erreur['mail'] = TRUE;
    }

    if (isset($_COOKIE['mail']))
    {
        $message_mail = "Un mail à déjà été envoyé il y a moins de deux minutes";
    }

    if (!empty($_POST['mail']) && preg_match($mailRegex, $_POST['mail']) && !empty($_POST['nom']) && !empty($_POST['sujet']) && !empty($_POST['message']) && !isset($_COOKIE['mail']))
    {
        if ($_POST['siteweb'] == "") {
            $_POST['siteweb'] = "Aucun site renseigné";
        }
        $message_txt = $_POST['message'] + $_POST['siteweb'];
        $message_html = $_POST['message'];
        $boundary = "-----".md5(rand());
        $sujet = $_POST['sujet'];
        $header = "From: \"coranking\"<".$_POST['mail'].">".$passage_ligne;
        $header.="MIME-Version: 1.0".$passage_ligne;
        $header.="Content-Type: UTF8;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        $message = "Message par : ".$_POST['nom']."\nAdresse : ".$_POST['mail']."\n\nMessage : ".$_POST['message']."\n\nSite Web : ".$_POST['siteweb'];

        setcookie('mail','1',time()+120);
        if (mail("contact@quentinboussard.fr",$sujet,$message,$header)) 
        {
            $message_mail = "Mail bien envoyé";
        }
    }

}
?>
