<?php
/*
Plugin Name: Cookie Consent (MU)
Description: The most popular solution to the EU cookie law.
Version: 0.1.0
Plugin URI: https://cookieconsent.insites.com/download/
*/

add_action( 'wp_footer', function () {

    // EDIT
    $policy_url = '/cookie-policy/';

    $cookieconsent_template = '
<!-- Cookie Consent by Insites -->
<style scoped>@import url("//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css");</style>
<script async src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>

    // EDIT
    // JavaScript generated by https://cookieconsent.insites.com/download/
    // "href": "%s"

</script>';

    printf( $cookieconsent_template, $policy_url );
}, 51 );
