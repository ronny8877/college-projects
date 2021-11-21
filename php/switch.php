
<?php

echo "Hy i am a bot ,say hi to me  or type help to see all commands       ";
while (1) {
    $text = (string) readline("");



    switch (strtolower($text)) {
        case 'hi':
            echo "Hello dear user! \n";
            break;
        case 'bye':
            echo "Bye! have a great day \n";
            break;
        case 'info':
            echo "I am a bot created by a human \n";
            break;
        case 'help':
            echo "I can help you with the following: \n
            1. Hi \n
            2. Bye \n
            3. Info \n
            4. Help \n" ;
        case "exit":
            exit();
            break;
        default:
            echo "I don't understand you";
            break;

    }
} ?>