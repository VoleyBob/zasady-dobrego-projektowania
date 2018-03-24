<?php
declare(strict_types=1);

/**
 * Ć. 1. DNI TYGODNIA
 * Stwórz metod, która na podstawie liczby 1-7 wyśkwetli nazwę dnia tygodnia jej odpowiadającej
 * Poniedziałe - 1
 * Wtorek - 2
 */


  
// Można lepiej roziązać SWITCHEM 


$getNumber = readline('What is your number? ');
// echo 'Your day of Week is ', $dayOfWeek[$getNumber], PHP_EOL;
echo 'Your day of Week is ', returnNameOfDay($getNumber), PHP_EOL;



function returnNameOfDay($innerNumber): string 
{
        
    $dayOfWeek = [
        1 => 'Poniedziałek',
        2 => 'Wtorek',
        3 => 'Środa',
        4 => 'Czwartek',
        5 => 'Piątek',
        6 => 'Sobota',
        7 => 'Niedziela',
    ];

    return $dayOfWeek[$innerNumber];
};



exit;


do {
    $engagingMessage = readline('[WCIŚNIJ ENTER, ABY RZUCIĆ KOSTKĄ]');
    $playerScore = random_int (1,6);
    $computerScore = random_int (1,6);
    echo 'Player`s score ', $playerScore, ' versus Computer`s score ', $computerScore, PHP_EOL;
    echo 'The WINNER is ', ($playerScore === $computerScore)?'...no one! Dead-heat!':(($playerScore>$computerScore)?'PLAYER!':'COMPUTER!'), PHP_EOL;
} while (true);
