<?php

$redirects = [
	['#^/order_now(/.*)?$#','/order', 301],
	['#^/ordermobile(/.*)?$#','/order', 301],
	['#^/tos-php(/.*)?$#','/terms', 301],
	['#^/our-privacy-policy(/.*)?$#','/terms', 301],

	['#^/essay-writing-service(/.*)?$#','/', 301],
	['#^/application-essay-writing-service(/.*)?$#','/', 301],
	['#^/buy-essay(/.*)?$#','/', 301],
	['#^/essay-help(/.*)?$#','/', 301],
	['#^/dissertation-help(/.*)?$#','/', 301],
	['#^/term-paper(/.*)?$#','/', 301],
	['#^/essays-for-sale(/.*)?$#','/', 301],
	['#^/research-paper(/.*)?$#','/', 301],
	['#^/custom-essay(/.*)?$#','/', 301],
    ['#^/anti-fraud-policy(/.*)?$#','/', 301],
    ['#^/about-us(/.*)?$#','/', 301],

	['#^/referral-a(/.*)?$#','/referral-c', 302],
	['#^/referral-b(/.*)?$#','/referral-c', 302],

    //['#^/home-2(/.*)?$#','/', 301],
];

foreach ($redirects as $rules) {
	if (preg_match($rules[0], $_SERVER['REQUEST_URI'])) {
			wp_redirect(site_url() . $rules[1], $rules[2]);
			exit();
		}
}
