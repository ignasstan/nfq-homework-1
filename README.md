# nfq-homework-1

Pirmoje funkcijoje sudedame visas reikšmes, int'as 3, float'as 2.2 
ir stringas '1'. Stringas konvertuojamas į int'ą ir sudėjus gauname float'ą 6.2

Antroje funkcijoje nurodome kad bus grąžintas int'as todėl bendra suma float'as 6.2 
paverčiamas į int'ą ir gaunam 6

Trečioje funkcijoje nurodome kad bus grąžintas int'as ir funkcijos parametrai bus int'ai.
Prieš sudedant visus parametrus paverčiam int'ais, float'as 2.2 virsta int'u 2, todėl gaunam 6

Ketvirtoje funkcijoje tas pats kaip trečioje, tik 'declare(strict_types=1)' direktyva nurodo jog 
parametrai negali būti kito tipo nei nurodyta. Šiuo atveju ne visi parametrai yra int'ai.
Dėl to metama klaida.