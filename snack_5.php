<!-- Snack 5 -->
<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php 

$parag = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, quam! Porro sint nostrum sapiente nobis excepturi laboriosam eligendi aut dolore eum nulla debitis, ipsa dolores dolorem exercitationem vitae aspernatur unde expedita animi doloribus accusantium molestias mollitia. Excepturi possimus consequuntur temporibus eveniet tempora cum odit, aperiam repudiandae, adipisci sunt id quaerat? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti ut veritatis, error debitis sint minus ad enim doloribus aperiam esse vel ab optio beatae cum. Tenetur aperiam ab quisquam accusamus tempore voluptatum sint aliquid minima laborum, libero ipsam in officiis beatae dolores mollitia reiciendis dolorem repellendus voluptas! Dolores, ipsum nostrum?';

$paragrafi = explode('.', $parag);

for( $i=0; $i < count($paragrafi); $i++){

    $paragrafo = $paragrafi[$i];
    var_dump($paragrafo);
}
?>
