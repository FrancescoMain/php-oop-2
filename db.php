<?php

//CATEGORIE
$dogs = new Category (1, "Cani", "Tutto ciò di cui hai bisogno per il tuo cane");
$cats = new Category (2, "Gatti", "Tutto ciò di cui hai bisogno per il tuo gatto");
//PRODOTTI
$palla = new Gioco (1, "Palla di gomma", "Una palla di gomma rimbalzante", 20.99, $dogs, "palla.jpg","Gioco");
$topo = new Gioco(2, "Topo Giocattolo", "Un topo finto", 10.99, $cats, "topo.jpg","Gioco") ;
$crocchette = new Cibo(3, "Crocchette per cani", "Crocchette di media grandezza", 30.99, $dogs, "crocchette.jpg","Cibo","24/12/2022") ;
$latte = new Cibo(4, "Latte per gatti", "Latte per gatti appena nati", 4.99, $cats, "latte.jpg","Cibo","24/01/2022") ;
$cucciaGrande = new Cuccia(5, "Cuccia per cane", "Cuccia per cane taglia grande", 50.99, $dogs, "cucciaXL.jpg", "Cuccia") ;
$cucciaGatto = new Cuccia(6, "Cuccia per gatti", "Cuccia per gatti appena nati", 13.99, $cats, "cucciaS.jpg", "Cuccia") ;
