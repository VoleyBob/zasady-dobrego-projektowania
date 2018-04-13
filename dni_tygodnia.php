<?php
declare(strict_types=1);

/**
 * Ćwiczenie 1
 * Stwórz metodę, która na podstawie liczby (1-7) wyświetli nazwę tygodnia odpowiadającą tej liczbie:
 * • Poniedziałek dla 1,
 * • Wtorek dla 2,
 * • […],
 * • Niedziela dla 7.
 */

$getNumber = readline('What is your number? ');
echo 'Your day of Week is ', returnNameOfDay($getNumber), PHP_EOL;


// Lepsze rozwiązanie SWITCHEM 

function returnNameOfDay($dayOfWeek): string 
{
    switch($dayOfWeek) {
        case 1: 
            return('Poniedziałek');
        case 2: 
            return('Wtorek');
        case 3: 
            return('Środa');
        case 4: 
            return('Czwartek');
        case 5: 
            return('Piątek');
        case 6: 
            return('Sobota');
        case 7: 
            return('Niedziela');
        default:
            return(PHP_EOL.'Number must be between 1 and 7');;
            break; 
    }
}



exit;



// Moje pierwotne rozwiązanie 

function _returnNameOfDay($innerNumber): string 
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





do {
    $engagingMessage = readline('[WCIŚNIJ ENTER, ABY RZUCIĆ KOSTKĄ]');
    $playerScore = random_int (1,6);
    $computerScore = random_int (1,6);
    echo 'Player`s score ', $playerScore, ' versus Computer`s score ', $computerScore, PHP_EOL;
    echo 'The WINNER is ', ($playerScore === $computerScore)?'...no one! Dead-heat!':(($playerScore>$computerScore)?'PLAYER!':'COMPUTER!'), PHP_EOL;
} while (true);
