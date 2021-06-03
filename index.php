<?php 
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'debug' => true
]);
$template = $twig->load('index.html');

echo $template->render([
    'prices' => [
        [
            'title' => 'Bayi',
            'price' => 'Rp <b class="big">14</b><b>.900</b>/ bln',
            'price_old' => 'Rp 19.900',
            'user' => '938',
            'best' => false,
            'info' => [
                '<b>0.5X RESOURCE POWER</b>',
                '<b>500 MB</b> Disk Space',
                '<b>Unlimited</b> Bandwidth',
                '<b>Unlimited</b> Databases',
                '<b>1</b> Domain',
                '<b>Instant</b> Backup',
                '<b>Unlimited SSL</b> Gratis Selamanya',
            ],
            'button' => 'Pilih Sekarang'
        ],
        [
            'title' => 'Pelajar',
            'price' => 'Rp <b class="big">23</b><b>.450</b>/ bln',
            'price_old' => 'Rp 46.900',
            'user' => '4.168',
            'best' => false,
            'info' => [
                '<b>1X RESOURCE POWER</b>',
                '<b>Unlimited</b> Disk Space',
                '<b>Unlimited</b> Bandwidth',
                '<b>Unlimited</b> POP3 Email',
                '<b>Unlimited</b> Databases',
                '<b>10</b> Addon Domains',
                '<b>Instant</b> Backup',
                '<b>Domain Gratis</b> Selamanya',
                '<b>Unlimited SSL</b> Gratis Selamanya',
            ],
            'button' => 'Pilih Sekarang'
        ],
        [
            'title' => 'Personal',
            'price' => 'Rp <b class="big">38</b><b>.900</b>/ bln',
            'price_old' => 'Rp 58.900',
            'user' => '10.017',
            'best' => true,
            'info' => [
                '<b>2X RESOURCE POWER</b>',
                '<b>Unlimited</b> Disk Space',
                '<b>Unlimited</b> Bandwidth',
                '<b>Unlimited</b> POP3 Email',
                '<b>Unlimited</b> Databases',
                '<b>Unlimited</b> Addon Domains',
                '<b>Instant</b> Backup',
                '<b>Domain Gratis</b> Selamanya',
                '<b>Unlimited SSL</b> Gratis Selamanya',
                '<b>Private</b> Name Server',
                '<b>SpamAssasin</b> Mail Protection',
            ],
            'button' => 'Pilih Sekarang'
        ],
        [
            'title' => 'Bisnis',
            'price' => 'Rp <b class="big">65</b><b>.900</b>/ bln',
            'price_old' => 'Rp 109.900',
            'user' => '3.552',
            'best' => false,
            'info' => [
                '<b>3X RESOURCE POWER</b>',
                '<b>Unlimited</b> Disk Space',
                '<b>Unlimited</b> Bandwidth',
                '<b>Unlimited</b> POP3 Email',
                '<b>Unlimited</b> Databases',
                '<b>Unlimited</b> Addon Domains',
                '<b>Magic Auto</b> Backup & Restore',
                '<b>Domain Gratis</b> Selamanya',
                '<b>Unlimited SSL</b> Gratis Selamanya',
                '<b>Private</b> Name Server',
                '<b>Prioritas</b> Layanan Support',
                '<div class="text-primary">
                    <span class="mdi mdi-star"></span> 
                    <span class="mdi mdi-star"></span> 
                    <span class="mdi mdi-star"></span> 
                    <span class="mdi mdi-star"></span> 
                    <span class="mdi mdi-star"></span>
                </div>',
                '<b>SpamExpert</b> Pro Mail Protection',
            ],
            'button' => 'Diskon 40%'
        ],
    ]
]);