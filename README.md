# Just Project

In dit project zijn er een aantal zaken die verbeterd of opgelost moeten worden.
Zou jij deze punten op kunnen pakken en het resultaat op willen sturen in een zipje?

## Taken
 * Bij het aanmaken van een gebruiker zijn er nieuwe eisen die we stellen aan een wachtwoord.
   Nu kan je een wachtwoord van 1 karakter invullen wat natuurlijk niet veilig is.
   * Minimaal 16 karakters
   * Minimaal 3 speciale karakters
   * Minimaal 1 hoofdletter
   * Houd ook rekening met het updaten van je wachtwoord bij je gebruikers instelling zodra je ingelogd bent [1].
 * Er is een bug in het systeem dat in de team dropdown [2] de naam van een team niet getoond wordt.
   * De naam van een team moet hier weer getoond worden.
 * We willen een overzicht zien met paginatie van alle gebruikers **binnen** jouw team. Dus niet gebruikers van andere teams
   * Maak een nieuwe pagina aan die via de navigatie te openen is.
   * Ze hoeven alleen getoond te worden met de naam + email adres.
   * Het is niet nodig om een volledige CRUD te maken, alleen het tonen in een tabel is voldoende.
   * Maak een seeder aan waarin in ieder geval 100 gebruikers geseed worden zodat de paginatie goed getest kan worden.

## Project installatie
 * `cp .env.example .env` (en .env juist instellen)
 * `composer install`
 * `npm ci && npm run dev`
 * `php artisan migrate`

## Screenshots

 * [1] ![Screenshot](public/images/Screenshot%202022-04-20%20at%2011.36.48.png)
 * [2] ![Screenshot](public/images/Screenshot%202022-04-20%20at%2011.32.40.png)
