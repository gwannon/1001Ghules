<?php

header('Content-Type: application/json; charset=utf-8');

$bots = [
  "facebookexternalhit/1.1",
  "Semanticbot/1.0",
  "serpstatbot/2.1",
  "Twitterbot/1.0",
  "SemrushBot/7~bl",
  "bingbot/2.0",
  "WhatsApp/2",
  "BW/1.1",
  "Applebot/0.1",
  "SeznamBot/4.0",
  "DataForSeoBot/1.0",
  "AhrefsBot/7.0",
  "YandexBot/3.0",
  "Googlebot-Image/1.0",
  "Googlebot/2",
  "IonCrawl",
  "SemrushBot/7",
  "help@dataminr.com",
  "BW/1.1",
  "Mastodon/4",
  "Mastodon/3",
  "craftopi.art",
  "Bytespider",
  "Pleroma 2",
  "Akkoma 3",
  "TelegramBot",
  "BLEXBot/1.0",
  "SerendeputyBot",
  "SummalyBot",
  "Friendica",
  "test-bot",
  "my-tiny-bot",
  "thesis-research-bot",
  "LivelapBot",
  "ShortLinkTranslate",
  "TrendsmapResolver",
  "EventMachine HttpClient",
  "linkfluence.com",
  "Python-urllib/3.9",
  "ddg_android",
  "DotBot",
  "FlipboardProxy",
  "w3m/0",
  "LinkPreview/",
  "panscient.com",
  "fedistatsCrawler",
  "AwarioBot",
  "Cardyb/",
  "Amazonbot",
  "website-datenbank.de",
  "NetBSD alpha",
  "LivelapBot/0.2",
  "SummalyBot/2",
  "ImagesiftBot",
  "trendictionbot",
  "MJ12bot",
  "OpenGraph.io",
  "trendictionbot",
  "Yeti/",
  "ClaudeBot",
  "Friendly_Crawler/",
  "GoogleOther",
  "RottenLinks",
  "enby-town",
  "Barkrowler",
  "python-requests",
  "DuckDuckBot",
  "Iceshrimp",
  "Embedly/",
  "Google-Safety",



  "127.0.0.1",
  "54.39.104.161",
  "51.222.42.127",
  "54.39.103.203",
  "149.56.25.49",
  "54.39.50.77",
  "51.161.115.227",
  "167.114.1.197",
  "51.161.117.63",
  "144.217.74.133",
  "167.114.173.221",
  "158.69.27.238",
  "192.99.44.57",
  "167.114.101.27",
  "167.114.101.27",
  "158.69.27.213",
  "142.44.136.207",
  "158.69.124.235",
  "192.99.62.32",
  "15.235.114.226",
  "54.39.243.52",
  "192.99.19.229",
  "144.217.255.152",
  "167.114.159.149",
  "51.161.115.226",
  "192.99.101.184",
  "66.102.8.38",
  "66.102.6.195",
  "66.102.6.194",
  "66.102.8.129",
  "66.102.8.128",
  "64.233.172.205",
  "74.125.210.98",
  "66.102.8.130",
  "66.102.6.65",
  "116.202.35.85",
  "116.202.33.240",
  "116.202.33.233",
  "35.203.255.103",
  "35.203.255.118",
  "167.114.119.164",
  "51.222.42.126",
  "51.161.84.126",
  "142.4.217.87",
  "51.161.84.125",
  "167.114.1.28",
  "51.79.77.186",
  "54.39.107.240",
  "168.119.76.160",
  "168.119.76.212",
  "168.119.76.242",
  "168.119.76.227",
  "168.119.76.151",
  "168.119.76.254",
  "168.119.76.165",
  "144.76.22.143",
  "116.202.35.89",
  "116.202.35.108",
  "176.9.32.135",
  "168.119.76.225",
  "168.119.76.159",
  "168.119.76.216",
  "168.119.76.234",
  "168.119.76.141",
  "34.254.253.69",
  "63.32.55.216",
  "34.82.76.88",
  "34.83.246.238",
  "34.127.116.233",
  "34.127.44.221",
  "34.168.176.99",
  "34.145.25.95",
  "34.82.195.191",
  "35.197.69.215",
  "35.230.63.62",
  "34.82.76.88",
  "35.197.96.25",
  "34.168.74.175",
  "34.82.33.21",
  "34.82.82.71",
  "34.83.61.204",
  "34.82.199.128",
  "35.233.229.143",
  "34.83.45.161",
  "168.119.76.224",
  "34.168.138.243",
  "168.119.76.139",
  "65.21.158.47", //Hetzner Online GmbH
  "192.99.232.216", //OVH Hosting
  "34.105.34.194", //Google Other
  "34.241.80.146", //Amazon
  "34.82.27.245", //Google Cloud
  "107.178.200.214", //Google Cloud
  "66.249.84.37", //Google Cloud
  "18.201.90.114", //Amazon 
  "35.199.156.248", //Google
  "35.203.137.203", //Google
  "35.203.169.138", //Google
  "34.82.24.138", //Google
  "135.181.214.38", //Hetzner Online GmbH
  "34.145.38.93", //Google
  "34.83.137.214", //Google
  "34.168.165.88", //Google
  "35.247.41.57", //Google
  "74.125.210.103", //Google
  "74.125.210.102", //Google
  "3.254.66.73", //Amazon
  "34.168.12.15", //Google
  "158.69.125.158", //OVH Hosting
  "51.79.99.78", //OVH Hosting
  "34.168.186.146", //Google
  "34.248.143.69", //Amazon
  "144.217.252.156", //OVH Hosting
  "34.82.60.8", //Google
  "35.233.134.123", //Google
  "34.127.23.123", //Google
  "35.247.10.37", //Google
  "34.127.19.44", //Google
  "35.233.154.65", //Google
  "35.227.135.60", //Google
  "35.197.102.237", //Google
  "34.82.137.215", //Google
  "35.203.128.192", //Google
  "54.39.48.97", //OVH Hosting
  "35.247.63.215", //Google
  "52.17.217.34", //Amazon
  "74.125.212.103", //Google
  "66.249.80.101", //Google
  "34.82.213.222", //Google
  "34.145.13.150", //Google
  "35.197.114.69", //Google
  "34.118.197.113", //Google
  "74.125.210.192", //Google
  "51.79.77.165", //OVH Hosting
  "34.127.61.12", //Google
  "34.127.61.12", //Google
  "34.83.144.105", //Google
  "34.83.77.146", //Google
  "74.125.210.194", //Google
  "34.82.244.124", //Google
  "35.197.12.137", //Google
  "35.203.252.116", //Google
  "34.168.234.157", //Google
  "35.197.98.142", //Google
  "34.83.160.222", //Google
  "35.230.59.169", //Google
  "54.39.107.63", //OVH Hosting
  "35.233.223.105", //Google

  "62.174.208.61", //My IP
  "47.58.171.195", //My IP
  "46.26.127.194", //My IP
  "47.58.174.97", //My IP
];

if(isset($_REQUEST['bots']) && $_REQUEST['bots'] != '') {
  echo json_encode($bots);
  die;
}

$ips = [];
$json["total"] = 0;
$lines = explode("\n", file_get_contents (__DIR__."/log.txt"));
foreach ($lines as $line) {
  if($line != '') {
    $fields =  explode("|", $line);
    $last_key = array_key_last($fields);
    if ( !preg_match('('.implode('|',$bots).')', $fields[$last_key]) && !preg_match('('.implode('|',$bots).')', $fields[1])) {
      $json["descargas"][] = $fields;
      if(!in_array($fields[1], $ips)) {
        $ips[] = $fields[1];
        $json['total'] ++;
      }
    }
  }
}

$json["descargas"] = array_reverse($json["descargas"]);
echo json_encode($json);