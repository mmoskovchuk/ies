<?php

$redirects = [
    /*main menu*/
    ['/studentske-zhyttia/','/not-now', 301],

    /*btn before main menu*/
    ['/kontakty/','/not-now', 301],

    /*slider*/
    ['/kafedra-aerokosmichnoi-heodezii/','/not-now', 301],
    ['/kafedra-tsyvilnoi-ta-promyslovoi-bezpeky/','/not-now', 301],
    ['/kafedra-biotekhnolohii/','/not-now', 301],
    ['/kafedra-ekolohii/','/not-now', 301],
    ['/kafedra-zemleustroiu-ta-kadastru/','/not-now', 301],
    ['/kafedra-khimii-i-khimichnoi-tekhnolohii/','/not-now', 301],


    /*sidebar menu*/
    ['/zahalna-struktura-instytutu/','/not-now', 301],
    ['/dyrektorat/','/not-now', 301],
    //['/konferentsii/','/not-now', 301],
    ['/vchena-rada/','/not-now', 301],
    ['/spetsializovani-vcheni-rady/','/not-now', 301],
    ['/naukovo-metodychno-redaktsiina-rada/','/not-now', 301],
    ['/nashi-dosiahnennia/','/not-now', 301],
    ['/mizhnarodna-diialnist/','/not-now', 301],
];

foreach ($redirects as $rules) {
	if (preg_match($rules[0], $_SERVER['REQUEST_URI'])) {
			wp_redirect(site_url() . $rules[1], $rules[2]);
			exit();
		}
}
