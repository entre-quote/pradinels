<?php

return function ($page, $pages, $site, $kirby) {
    
  # Grab the data from the default controller
  $shared = $kirby->controller('site' , compact('page', 'pages', 'site', 'kirby'));

  # Fetch and store the content for the different title tag
  $actualites = collection('actualites');
  $cuvees = collection('cuvees');
  $vignes = collection('vignes');
    
  # Return the array containing the data that we want to pass to the template
  return A::merge($shared , compact('actualites', 'cuvees', 'vignes'));

};