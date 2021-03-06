<?php

$filter = '
<div class="row" >
  <div class="form-group col-md-4">
      <label for="exampleSelect2" class="col-md-4">Thématique</label>
      <div class="col-md-8">
        <select multiple class="form-control"  id="exampleSelect2">
          <option>Culture - artisanat</option>
          <option>Santé - bien-être</option>
          <option>Sociologie - politique</option>
          <option>Spiritualité - croyance</option>
          <option>Consumérisme - alimentation</option>
          <option>Biens, produits, services
        </select>
      </div>
    </div>

    <div class="row">
      <label for="example-date-input" class="col-md-5 col-form-label">Distance (km)</label>
      <div class="col-md-7">
        <input class="form-control" type="number" value=30 id="example-number-input">
      </div>
    </div>
  </div>
</div>
<div style="text-align:center;">
  <input type="button" value="Filtrer" class="btn" style="border-color:#0a6a68; color:#0a6a68; background-color:white;">
</div>
  ';

$navbar = '
            <li><a href="index.php">Accueil</a></li>
            <li class="active"><a href="#">Annonceurs</a></li>
            <li><a href="evenements.php">Evénements</a></li>';

$map = '
<iframe width="100%" height="450px" frameBorder="0" src="https://umap.openstreetmap.fr/fr/map/map-de-la-haute-vallee-de-laude_170442?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe><p><a href="https://umap.openstreetmap.fr/fr/map/map-de-la-haute-vallee-de-laude_170442">Voir en plein écran</a></p>
';

include('layout.php');
