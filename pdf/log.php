<?php

ini_set("display_errors", 1);

header('Content-Type: application/json; charset=utf-8');

$bots['bots'] = [
  "facebookexternalhit",
  "Semanticbot",
  "serpstatbot",
  "Twitterbot",
  "SemrushBot",
  "bingbot",
  "WhatsApp",
  "BW\/1.1",
  "Applebot",
  "SeznamBot",
  "DataForSeoBot",
  "AhrefsBot",
  "YandexBot",
  "Googlebot-Image",
  "Googlebot",
  "IonCrawl",
  "SemrushBot",
  "help@dataminr.com",
  "Mastodon",
  "craftopi.art",
  "Bytespider",
  "Pleroma 2",
  "Akkoma 3",
  "TelegramBot",
  "BLEXBot",
  "SerendeputyBot",
  "SummalyBot",
  "Summalybot",
  "Friendica",
  "test-bot",
  "my-tiny-bot",
  "thesis-research-bot",
  "LivelapBot",
  "ShortLinkTranslate",
  "TrendsmapResolver",
  "EventMachine HttpClient",
  "linkfluence.com",
  "Python-urllib",
  "ddg_android",
  "DotBot",
  "FlipboardProxy",
  "w3m",
  "LinkPreview",
  "panscient.com",
  "fedistatsCrawler",
  "AwarioBot",
  "Cardyb",
  "Amazonbot",
  "website-datenbank.de",
  "NetBSD alpha",
  "LivelapBot",
  "ImagesiftBot",
  "trendictionbot",
  "MJ12bot",
  "OpenGraph.io",
  "trendictionbot",
  "Yeti",
  "ClaudeBot",
  "Friendly_Crawler",
  "GoogleOther",
  "RottenLinks",
  "enby-town",
  "Barkrowler",
  "python-requests",
  "DuckDuckBot",
  "Iceshrimp",
  "Embedly",
  "Google-Safety",
  "axios",
  "Pleroma;",
  "Bun/",
  "GeedoProductSearch",
  "Turnitin",
  "MagpieRSS",
  "undici",
  "Go-http-client",
  "meta-externalagent",
  "YisouSpider",
  "sindresorhus",
  "Tencent",
  "ShitPissCum",
  "Archiveteam",
  "AdsBot-Google-Mobile",
  "zoominfobot",
  "SEMrush",
  "BacklinksExtendedBot",
  "MojeekBot",
  "app.wafrn.net",
  "butler/v",
  "tinyspeck",
  "Discordbot",
  "Thinkbot",
  "VelenPublicWebCrawler",
  "PetalBot",
  "IbouBot",
  "YaBrowser/",
  "DuckDuckGo/",
  "Baiduspider/",
  "linguee",
  "Timpibot",
  "Claude-SearchBot",
  "python-opengraph-jaywink",
  "intelx.io_bot",
  "AliyunSecBot",
  "Dataprovider.com",
  "aiohttp",
  "req/v3",
  "WebCrawler/",
  "DonutL/",
  "Nutch-",
  "YaSearchBrowser",
  "InfoPath",
];

$bots['ips'] = [
  "127.0.0.1",

  "54.39.104.161", //OVH SAS
  "51.222.42.127", //OVH SAS
  "54.39.103.203", //OVH SAS
  "149.56.25.49", //OVH SAS
  "54.39.50.77", //OVH SAS
  "51.161.115.227", //OVH SAS
  "167.114.1.197", //OVH SAS
  "51.161.117.63", //OVH SAS
  "144.217.74.133", //OVH SAS
  "167.114.173.221", //OVH SAS
  "158.69.27.238", //OVH SAS
  "192.99.44.57", //OVH SAS
  "167.114.101.27", //OVH SAS
  "167.114.101.27", //OVH SAS
  "158.69.27.213", //OVH SAS
  "142.44.136.207", //OVH SAS
  "158.69.124.235", //OVH SAS
  "192.99.62.32", //OVH SAS
  "15.235.114.226", //OVH SAS
  "54.39.243.52", //OVH SAS
  "192.99.19.229", //OVH SAS
  "144.217.255.152", //OVH SAS
  "167.114.159.149", //OVH SAS
  "51.161.115.226", //OVH SAS
  "192.99.101.184", //OVH SAS
  "167.114.119.164", //OVH SAS
  "51.222.42.126", //OVH SAS
  "51.161.84.126", //OVH SAS
  "142.4.217.87", //OVH SAS
  "51.161.84.125", //OVH SAS
  "167.114.1.28", //OVH SAS
  "51.79.77.186", //OVH SAS
  "54.39.107.240", //OVH SAS
  "192.99.232.216", //OVH SAS
  "158.69.125.158", //OVH SAS
  "51.79.99.78", //OVH SAS
  "144.217.252.156", //OVH SAS
  "54.39.48.97", //OVH SAS
  "51.79.77.165", //OVH SAS
  "51.38.135.19", //OVH SAS
  "54.39.107.63", //OVH SAS
  "188.165.87.101", //OVH SAS
  "188.165.87.103", //OVH SAS
  "188.165.87.106", //OVH SAS
  "51.91.18.151", //OVH SAS
  "66.70.240.189", //OVH SAS
  "69.176.89.192", //OVH SAS
  "15.204.224.92", //OVH SAS
  "66.70.240.180", //OVH SAS
  "178.32.72.220", //OVH SAS
  "178.32.212.119", //OVH SAS
  "198.244.133.157", //OVH SAS
  "178.32.72.219", //OVH SAS
  "141.94.77.78", //OVH SAS
  "51.91.255.78", //OVH SAS
  "141.95.54.59", //OVH SAS
  "57.129.139.80", //OVH SAS
  "51.38.187.130", //OVH SAS
  "151.80.133.55", //OVH SAS
  "145.239.89.234", //OVH SAS
  "51.222.167.157", //OVH SAS
  "141.94.76.134", //OVH SAS
  "141.94.78.40", //OVH SAS
  "151.80.133.130", //OVH SAS
  "51.91.255.135", //OVH SAS
  "57.129.139.60", //OVH SAS
  "151.80.133.111", //OVH SAS
  "51.91.250.17", //OVH SAS
  "57.129.81.225", //OVH SAS
  "51.91.254.43", //OVH SAS
  "57.129.81.227", //OVH SAS
  "51.38.187.132", //OVH SAS
  "57.129.81.226", //OVH SAS
  "57.129.81.228", //OVH SAS
  "149.202.53.222", //OVH SAS
  "144.217.135.133", //OVH SAS
  "144.217.135.219", //OVH SAS
  "158.69.23.228", //OVH SAS
  "54.36.232.187", //OVH SAS
  "193.70.81.189", //OVH SAS
  "135.125.237.198", //OVH SAS
  "158.69.120.60", //OVH SAS
  "37.187.5.192", //OVH SAS
  "188.165.200.97", //OVH SAS
  "57.129.81.224", //OVH SAS
  "144.217.135.240", //OVH SAS
  "51.81.211.107", //OVH SAS
  "51.81.210.206", //OVH SAS
  "51.75.24.242", //OVH SAS
  "57.129.15.220", //OVH SAS
  "51.77.211.137", //OVH SAS
  "51.38.112.81", //OVH SAS
  "51.68.137.190", //OVH SAS
  "51.81.209.230", //OVH SAS
  "135.148.139.201", //OVH SAS
  "146.59.19.88", //OVH SAS
  "15.204.231.85", //OVH SAS
  "51.81.210.22", //OVH SAS
  "51.81.32.7", //OVH SAS
  "162.19.253.124", //OVH SAS
  "51.38.129.30", //OVH SAS
  "51.81.209.132", //OVH SAS
  "162.19.253.196", //OVH SAS
  "217.182.73.176", //OVH SAS
  "51.38.125.22", //OVH SAS
  "51.75.23.111", //OVH SAS
  "151.80.133.171", //OVH SAS
  "57.129.69.7", //OVH SAS
  "141.94.79.3", //OVH SAS
  "51.77.211.39", //OVH SAS
  "145.239.68.210", //OVH SAS
  "51.89.164.226", //OVH SAS
  "51.38.187.112", //OVH SAS
  "151.80.133.238", //OVH SAS
  "145.239.83.37", //OVH SAS
  "54.36.108.162", //OVH SAS


  
  "198.46.253.99", //HostPapa
  "198.23.221.50", //HostPapa
  "107.173.94.176", //HostPapa
  "107.174.244.108", //HostPapa
  "104.168.80.184", //HostPapa
  "192.210.184.249", //HostPapa
  "198.23.221.50", //HostPapa
  "198.23.221.51", //HostPapa


  
  "116.202.35.85", //Hetzner Online GmbH
  "116.202.33.240", //Hetzner Online GmbH
  "116.202.33.233", //Hetzner Online GmbH
  "168.119.76.160", //Hetzner Online GmbH
  "168.119.76.212", //Hetzner Online GmbH
  "168.119.76.242", //Hetzner Online GmbH
  "168.119.76.227", //Hetzner Online GmbH
  "168.119.76.151", //Hetzner Online GmbH
  "168.119.76.254", //Hetzner Online GmbH
  "168.119.76.165", //Hetzner Online GmbH
  "144.76.22.143", //Hetzner Online GmbH
  "116.202.35.89", //Hetzner Online GmbH
  "116.202.35.108", //Hetzner Online GmbH
  "176.9.32.135", //Hetzner Online GmbH
  "168.119.76.225", //Hetzner Online GmbH
  "168.119.76.159", //Hetzner Online GmbH
  "168.119.76.216", //Hetzner Online GmbH
  "168.119.76.234", //Hetzner Online GmbH
  "168.119.76.141", //Hetzner Online GmbH
  "168.119.76.224", //Hetzner Online GmbH
  "168.119.76.139", //Hetzner Online GmbH
  "65.21.158.47", //Hetzner Online GmbH
  "135.181.214.38", //Hetzner Online GmbH
  "195.201.111.82", //Hetzner Online GmbH
  "65.108.3.41", //Hetzner Online GmbH
  "65.108.31.118", //Hetzner Online GmbH
  "65.109.155.237", //Hetzner Online GmbH
  "65.21.136.254", //Hetzner Online GmbH
  "49.13.2.198", //Hetzner Online GmbH
  "5.161.204.59", //Hetzner Online GmbH
  "178.156.144.152", //Hetzner Online GmbH
  "5.161.48.222", //Hetzner Online GmbH
  "5.9.50.77", //Hetzner Online GmbH
  "142.132.248.24", //Hetzner Online GmbH
  "178.156.188.178", //Hetzner Online GmbH
  "138.201.205.217", //Hetzner Online GmbH
  "157.90.127.188", //Hetzner Online GmbH
  "5.9.94.125", //Hetzner Online GmbH
  "5.78.26.119", //Hetzner Online GmbH
  "136.243.146.44", //Hetzner Online GmbH
  "157.90.121.74", //Hetzner Online GmbH
  "159.69.111.36", //Hetzner Online GmbH
  "95.216.99.80", //Hetzner Online GmbH
  "65.21.113.195", //Hetzner Online GmbH
  "95.216.23.122", //Hetzner Online GmbH
  "178.156.149.155", //Hetzner Online GmbH
  "157.180.88.64", //Hetzner Online GmbH




  "52.17.217.34", //Amazon
  "34.254.253.69", //Amazon
  "63.32.55.216", //Amazon
  "18.201.90.114", //Amazon 
  "34.241.80.146", //Amazon
  "3.254.66.73", //Amazon
  "34.248.143.69", //Amazon
  "3.234.218.179", //Amazon
  "44.200.47.118", //Amazon
  "35.86.85.67", //Amazon
  "34.220.255.255", //Amazon
  "54.206.127.151", //Amazon
  "15.237.94.92", //Amazon
  "54.156.251.192", //Amazon
  "3.95.179.243", //Amazon
  "18.234.170.112", //Amazon
  "54.71.187.124", //Amazon
  "52.34.76.65", //Amazon
  "52.11.171.106", //Amazon
  "3.134.87.216", //Amazon
  "52.36.125.174", //Amazon
  "44.203.3.0", //Amazon
  "18.220.220.104", // Amazon
  "34.226.249.32", //Amazon
  "3.144.254.141", //Amazon
  "35.94.112.51", //Amazon
  "50.17.18.190", //Amazon
  "3.89.28.55", //Amazon
  "3.85.52.149", //Amazon
  "54.224.122.113", //Amazon
  "54.162.82.1", //Amazon
  "54.209.227.185", //Amazon
  "54.225.57.191", //Amazon
  "54.91.46.214", //Amazon
  "35.153.202.90", //Amazon
  "54.159.75.54", //Amazon
  "52.91.141.251", //Amazon
  "184.72.115.35", //Amazon
  "184.72.121.156", //Amazon
  "18.224.172.121", //Amazon
  "3.22.209.183", //Amazon
  "3.15.6.132", //Amazon
  "34.209.112.47", //Amazon
  "52.33.110.103", //Amazon
  "34.217.136.101", //Amazon
  "35.88.251.172", //Amazon
  "18.216.115.48", //Amazon




  "172.253.192.124", //Google
  "172.253.240.64", //Google
  "66.102.8.38", //Google
  "66.102.6.195", //Google
  "66.102.6.194", //Google
  "66.102.8.129", //Google
  "66.102.8.128", //Google
  "64.233.172.205", //Google
  "74.125.210.98", //Google
  "66.102.8.130", //Google
  "66.102.6.65", //Google
  "35.203.255.103", //Google
  "35.203.255.118", //Google
  "34.82.76.88", //Google
  "34.83.246.238", //Google
  "34.127.116.233", //Google
  "34.127.44.221", //Google
  "34.168.176.99", //Google
  "34.145.25.95", //Google
  "34.82.195.191", //Google
  "35.197.69.215", //Google
  "35.230.63.62", //Google
  "34.82.76.88", //Google
  "35.197.96.25", //Google
  "34.168.74.175", //Google
  "34.82.33.21", //Google
  "34.82.82.71", //Google
  "34.83.61.204", //Google
  "34.82.199.128", //Google
  "35.233.229.143", //Google
  "34.83.45.161", //Google
  "34.168.138.243", //Google
  "34.105.34.194", //Google Other
  "34.82.27.245", //Google Cloud
  "107.178.200.214", //Google Cloud
  "66.249.84.37", //Google Cloud
  "35.199.156.248", //Google
  "35.203.137.203", //Google
  "35.203.169.138", //Google
  "34.82.24.138", //Google
  "34.145.38.93", //Google
  "34.83.137.214", //Google
  "34.168.165.88", //Google
  "35.247.41.57", //Google
  "74.125.210.103", //Google
  "74.125.210.102", //Google
  "34.168.12.15", //Google
  "34.168.186.146", //Google
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
  "35.247.63.215", //Google
  "74.125.212.103", //Google
  "66.249.80.101", //Google
  "34.82.213.222", //Google
  "34.145.13.150", //Google
  "35.197.114.69", //Google
  "34.118.197.113", //Google
  "74.125.210.192", //Google
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
  "35.233.223.105", //Google
  "35.215.115.32", //Google
  "74.125.215.71", //Google
  "34.1.24.54", //Google
  "64.233.172.71", //Google
  "34.82.140.254", //Google
  "34.145.76.84", //Google
  "34.83.106.193", //Google
  "34.105.18.18", //Google
  "35.233.216.255", //Google
  "66.249.80.3", //Google
  "34.169.83.44", //Google
  "34.0.150.110", //Google
  "35.197.122.57", //Google
  "66.102.6.35", //Google
  "34.83.131.14", // Google
  "35.213.195.32", // Google
  "35.247.38.200", // Google
  "34.83.148.172", // Google
  "34.168.135.16", // Google
  "34.169.130.62", // Google
  "34.82.183.219", // Google
  "34.169.61.102", // Google
  "34.82.35.57", // Google
  "34.168.230.122", // Google
  "35.203.157.22", //Google
  "34.145.19.69", //Google
  "35.215.78.40", //Google
  "74.125.210.166", //Google
  "35.230.126.177", //Google
  "74.125.215.1", //Google
  "74.125.210.167", //Google
  "173.194.92.176", //Google
  "172.253.192.240", //Google
  "172.253.192.250", //Google
  "172.253.15.238", //Google
  "34.56.32.154", //Google
  "172.253.15.228", //Google
  "172.253.221.78", //Google
  "35.217.18.157", //Google
  "172.253.192.115", //Google
  "172.253.216.49", //Google
  "74.125.184.190", //Google
  "172.253.216.60", //Google
  "35.227.62.178", //Google
  "172.253.192.244", //Google
  "172.253.15.237", //Google
  "172.253.192.254", //Google
  "34.1.2.13", //Google
  "172.253.192.112", //Google
  "172.253.7.56", //Google
  "172.253.216.55", //Google
  "172.253.234.221", //Google
  "173.194.96.140", //Google
  "172.253.234.252", //Google
  "172.253.216.57", //Google
  "172.253.15.239", //Google
  "172.253.216.63", //Google
  "172.253.234.208", //Google
  "172.253.234.245", //Google
  "172.253.192.122", //Google
  "172.253.7.48", //Google
  "34.175.145.55", //Google
  "34.168.171.29", //Google
  "172.253.15.233", //Google
  "172.253.15.226",  //Google
  "74.125.19.42", //Google
  "172.253.15.232", //Google
  "34.71.254.218", //Google
  "172.253.192.249", //Google
  "74.125.19.40", //Google
  "172.253.234.209", //Google
  "172.253.192.253", //Google
  "34.98.143.67", //Google
  "35.187.132.198", //Google
  "34.98.143.66", //Google
  "34.86.212.119", //Google
  "34.71.214.216", //Google
  "104.197.69.115", //Google
  "34.118.20.166", //Google
  "34.123.170.104", //Google
  "34.118.4.192", //Google
  "35.215.75.138", //Google
  "173.194.92.178", //Google
  "173.194.92.178", //Google
  "172.253.234.223", //Google
  "172.253.192.255", //Google
  "74.125.184.184", //Google
  "173.194.92.192", //Google
  "172.253.15.224", //Google
  "172.253.15.229", //Google
  "35.212.216.222", //Google
  "172.253.15.234", //Google
  "74.125.184.189", //Google
  "74.125.19.33", //Google
  "172.253.234.212", //Google
  "172.253.192.118", //Google
  "34.67.44.78", //Google
  "172.253.216.51", //Google
  "173.194.92.187", //Google
  "34.29.167.121", //Google
  "172.253.234.241", //Google
  "172.253.192.59", //Google
  "172.253.216.48", //Google
  "173.194.92.186", //Google
  "172.253.7.113", //Google
  "172.253.192.127", //Google
  "35.225.25.190", //Google
  "34.72.37.181", //Google
  "35.237.213.251", //Google
  "172.253.192.125", //Google
  "34.41.106.236", //Google
  "34.171.162.249", //Google
  "74.125.151.140", //Google
  "34.72.176.129", //Google
  "173.194.92.180", //Google
  "173.194.92.179", //Google
  "35.237.175.151", //Google
  "34.75.203.59", //Google
  "34.138.4.114", //Google
  "35.243.191.95", //Google
  "34.139.13.97", //Google
  "35.196.120.112", //Google
  "34.138.231.109", //Google
  "34.122.147.229", //Google
  "35.225.169.184", //Google
  "34.34.233.183", //Google
  "35.217.15.251", //Google
  "172.253.15.227", //Google
  "172.253.192.126", //Google
  "35.238.120.35", //Google
  "34.29.151.27", //Google
  "34.96.45.202", //Google
  "34.136.226.255", //Google
  "35.225.147.248", //Google
  "172.253.234.210", //Google
  "172.253.15.225", //Google
  "35.209.202.171", //Google
  "34.56.101.246", //Google
  "34.9.97.148", //Google
  "34.60.188.255", //Google
  "66.249.83.5", //Google
  "66.249.83.6", //Google
  "66.249.93.33", //Google
  "35.239.3.119", //Google
  "74.125.19.44", //Google
  "34.96.45.160", //Google
  "34.58.7.236", //Google
  "34.77.233.146", //Google
  "173.194.92.215", //Google
  "74.125.184.191", //Google
  "104.155.132.119", //Google
  "34.135.163.250", //Google
  "34.116.200.216", //Google
  "35.212.167.137", //Google
  "34.118.18.140", //Google
  "34.63.5.157", //Google
  "34.46.71.73", //Google
  "172.253.15.230", //Google
  "74.125.184.182", //Google
  "34.10.186.196", //Google
  "172.253.216.50", //Google
  "173.194.92.183", //Google
  "172.253.192.56", //Google
  "34.133.45.228", //Google
  "34.1.27.38", //Google
  "34.116.235.204", //Google  
  "35.202.187.7", //Google
  "172.253.192.243", //Google
  "34.169.7.36", //Google
  "136.115.155.249", //Google
  "35.230.15.81", //Google
  "35.184.209.221", //Google
  "34.145.111.104", //Google



  "128.199.15.211", //Digital Ocean
  "207.154.243.139", //Digital Ocean
  "64.226.124.225", //Digital Ocean
  "64.226.107.90", //Digital Ocean
  "207.154.251.79", //Digital Ocean
  "167.99.171.142", //Digital Ocean
  "64.23.128.141", //Digital Ocean
  "138.68.22.173", //Digital Ocean
  "138.197.212.221", //Digital Ocean
  "165.232.158.68", //Digital Ocean
  "167.99.174.172", //Digital Ocean
  "167.99.96.170", //Digital Ocean
  "104.248.85.196", //Digital Ocean
  "167.71.165.183", //Digital Ocean
  "64.23.133.100", //Digital ocean
  "178.62.199.25", //Digital ocean
  "45.55.198.121", //Digital ocean
  "178.62.199.251", //Digital ocean
  "167.99.96.170", //Digital ocean
  "167.99.174.172", //Digital ocean
  "152.42.140.134", //Digital ocean
  "178.62.255.53", //Digital ocean
  "188.166.88.71", //Digital ocean
  "167.99.7.55", //Digital ocean
  "192.241.202.214", //Digital ocean
  "167.172.20.109", //Digital ocean
  "167.172.20.109", //Digital ocean
  "206.189.213.202", //Digital ocean
  "165.227.75.206", //Digital ocean
  "167.99.113.2", //Digital ocean
  "143.198.23.152", //Digital ocean
  "167.71.189.213", //Digital ocean

  
  //"129.226.93.214", //Tecent

  "20.120.134.33", //Microsoft
  "52.247.239.25", //Microsoft
  "20.171.207.7", //Microsoft
  "52.247.239.25", //Microsoft
  "40.80.158.10", //Microsoft
  "172.211.8.166", //Microsoft
  "40.77.167.25", //Microsoft
  


  "195.210.4.1", //Bitdefender SRL
  "99.255.100.228", //projectsdomain.org
  "2a06:98c0:3600::103", //Cloudflare
  "84.201.183.13", //Yandex

  "62.174.208.61", //My IP
  "47.58.171.195", //My IP
  "46.26.127.194", //My IP
  "47.58.174.97", //My IP
  "47.58.165.154", // My IP
  "37.222.82.180", // My IP
  "47.58.168.61", // My IP
  "47.58.173.200", // My IP
  "77.231.12.109", // My IP
  "47.58.167.102", //My IP
  "47.61.251.54", //My IP
  "5.225.20.106", //My IP
  "95.60.100.33", //My IP
  "46.27.198.122", //My IP
  "47.61.137.64", //My IP
  "47.63.206.195", //My IP
  "77.224.181.227", //My IP
  "47.61.132.154",// My IP
  "62.117.142.108",// My IP
  "77.227.41.148", // My IP
  "88.14.30.208", // My IP
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
    if ( !preg_match('('.implode('|',$bots['bots']).')', $fields[$last_key]) && !preg_match('('.implode('|',$bots['ips']).')', $fields[1])) {
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
