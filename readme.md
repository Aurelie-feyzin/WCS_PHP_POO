# Quête POO

## [Part 1](https://github.com/Aurelie-feyzin/WCS_PHP_POO/releases/tag/part1)
Après le vélo, quand on grandit, on passe à la voiture, et bien dans le challenge, c'est la même chose ! Après la classe vélo, tu dois créer une classe permettant de manipuler un objet voiture. Une voiture doit comporter les propriétés suivantes :

![uml-car](http://images.innoveduc.fr/php_parcours/OOP/uml-car.png "uml car")

**Critères de validation :**

    Le nom de la classe est en anglais et en UpperCamelCase.
    La classe contient toutes les propriétés et méthodes demandées.
    Le nom des propriétés et des méthodes sont en anglais et en camelCase.
    Les visibilités public/private sont correctement définies.
    Sur index.php, il est possible d'instancier autant objet Bicycle et Car que désiré sans provoquer d'erreur.
    Sur index.php, les vélos et voitures avancent et freinent sans erreur.
    Ton code est disponible sur GitHub.

## [Part 2](https://github.com/Aurelie-feyzin/WCS_PHP_POO/releases/tag/part2) 

Créer ta première classe enfant

Après les classes Car et Bicycle, tu dois créer une classe permettant de manipuler un objet camion.

Un camion est un enfant de Vehicle et a des propriétés spécifiques :

    sa capacité de stockage.
    son chargement, qui est initialement à zéro.

La capacité de stockage doit être saisie au moment de l'Instanciation de l'objet, en plus de la couleur, du nombre de sièges et de l'énergie. Il a également une méthode qui permet de savoir s’il est plein ou non. Celle-ci retourne in filling quand il n'est pas plein et full quand il est plein.

    N'oublie pas les getters et les setters !!

**Critères de validation :**

    Le nom de la classe est en anglais et en UpperCamelCase.
    La classe contient toutes les propriétés et méthodes demandées.
    Les noms des propriétés et des méthodes sont en anglais et en camelCase.
    Les visibilités public/private/protected sont correctement définies.
    Sur index.php, il est possible d'instancier autant d’objets Truck que désirés, sans provoquer d'erreur.
    Sur index.php, les camions avancent, freinent et contrôlent leur chargement sans erreur.
    Ton code est disponible sur GitHub.

## [Part 3](https://github.com/Aurelie-feyzin/WCS_PHP_POO/releases/tag/part3)

On the road again

    Créer une classe abstraite HighWay possédant les propriétés suivantes : 
    - currentVehicles (array), 
    - nbLane (int)
    - et maxSpeed (int),
    ainsi que les getters et setters correspondants, dont héritent les classes finales :
    - MotorWay (4 voies, 130km/h), 
    - PedestrianWay (1 voie, 10km/h)
    - et ResidentialWay (2 voies, 50km/h). 
    La classe HighWay possède une méthode abstraite addVehicule() prenant en paramètre un objet de type Vehicle. 
    Chaque classe fille devra implémenter la méthode pour qu’elle ajoute le véhicule au tableau $currentVehicules, uniquement si ce dernier est autorisé sur ce type de voie. 
    Ainsi, pour MotorWay, addVehicule($car) ajoutera bien une voiture au tableau, tandis que addVehicule($bike) ne le fera pas, car il n’est pas possible de rouler en vélo sur une autoroute. 
    Les règles attendues sont les suivantes:
    - motorway : tout type de voiture (et de camion)
    - ResidentialWay : tout type de véhicule
    - PedestrianWay : Bike et Skateboard uniquement

**Critères de validation :**

    Les classes HighWay (abstraites) et MotorWay, PedestrianWay, ResidentialWay (finales) sont toutes les quatres créées, l’héritage et les propriétés/méthodes attendues sont présentes, ainsi que les valeurs par défaut.
    La classe HighWay possède une seule méthode abstraite, addVehicle(), implémentée de manière différente dans chacune de ses classes filles, en fonction des types de véhicules autorisés.

## [Part 4](https://github.com/Aurelie-feyzin/WCS_PHP_POO/releases/tag/part4)
Et la lumière fut !

Créer une interface LightableInterface possédant les méthodes switchOn(), switchOff(), 
qu’implémenteront les véhicules possédant des éclairages comme Car et Bike, mais pas SkateBoard 
(cette dernière est à créer si ce n’est déjà fait). 
Dans la classe Car, switchOn() retourne true et switchOff() false. 
Dans la classe Bike, où une dynamo est utilisée, switchOn() retourne true seulement si la currentSpeed() est >10km/h,
tandis que switchOff() retourne toujours false.

**Critères de validation :**

    L’interface LightableInterface est créée, 
    possède les méthodes switchOn() et switchOff(). 
    L’interface est implémentée correctement, au moins par les classes Car et Bike, mais non implémentée sur SkateBoard.

## Part 5
Evite les traces de pneus

- Crée dans la classe Car un attribut privé de type booléen, représentant l'état du frein à main, hasParkBrake.
- Crée une méthode publique qui change l'état du frein à main setParkBrake().
- Lève une exception dans Car au niveau de la méthode  start(), avec throw(), si le frein à main est actif.
- Capture l'erreur avec try lors de l'appel à la start() sur une instance de Car.
- Si une exception est attrapée dans le bloc catch, gère le cas en modifiant l'état du frein à main.
- Envoie le message “Ma voiture roule comme un donut”, quel que soit le comportement avec finally.

**Critères de validation :**

    L'erreur doit être levée et gérée correctement 
    
