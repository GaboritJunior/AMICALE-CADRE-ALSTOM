<?php

Class ActiviteCreneau2Admin extends Model {
    var $table='activite INNER JOIN creneau activite.ID_ACTIVITE = creneau.ID_ACTIVITE';
    
}
