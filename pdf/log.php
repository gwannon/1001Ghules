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
  "SERankingBacklinksBot",
  "MetaSr",
  "GeedoShopProductFinder",
  "MixrankBot",
  "OAI-SearchBot",
  "ChatGPT-User",
  "PerplexityBot",
];

$bots['ips'] = [
  "127.0.0.1",

  "43.153.48.240", //Shenzhen
  "43.130.32.245", //Shenzhen
  "43.157.168.43", //Shenzhen
  "43.130.106.18", //Shenzhen
  "43.165.65.180", //Shenzhen
  "43.166.1.243", //Shenzhen
  "43.167.239.66", //Shenzhen
  "43.130.106.18", //Shenzhen
  "43.130.154.56", //Shenzhen
  "43.135.145.73", //Shenzhen
  "43.153.15.51", //Shenzhen
  "43.130.91.95", //Shenzhen
  "43.130.174.37", //Shenzhen
  "43.131.243.61", //Shenzhen
  "43.156.202.34", //Shenzhen
  "43.153.192.98", //Shenzhen
  "43.130.228.73", //Shenzhen
  "43.153.73.200", //Shenzhen
  "43.130.72.40", //Shenzhen
  "43.157.62.101", //Shenzhen
  "43.158.91.71", //Shenzhen
  "43.130.150.80", //Shenzhen
  "43.153.15.51", //Shenzhen
  "43.130.105.21", //Shenzhen
  "101.32.15.141", //Shenzhen
  "43.130.105.21", //Shenzhen
  "43.159.149.56", //Shenzhen
  "43.135.182.95", //Shenzhen
  "43.135.145.73", //Shenzhen
  "43.130.57.46", //Shenzhen
  "47.79.197.27", //Shenzhen
  "47.79.6.175", //Shenzhen
  "43.157.149.188", //Shenzhen
  "43.153.71.12", //Shenzhen
  "43.133.187.11", //Shenzhen
  "43.130.34.74", //Shenzhen
  "43.135.185.59", //Shenzhen
  "43.167.241.46", //Shenzhen
  "43.130.15.147", //Shenzhen
  "43.155.129.131", //Shenzhen
  "43.164.196.57", //Shenzhen
  "43.135.172.89", //Shenzhen
  "43.135.134.127", //Shenzhen
  "43.153.27.244", //Shenzhen
  "43.156.228.27", //Shenzhen
  "43.135.142.37", //Shenzhen
  "43.153.86.78", //Shenzhen
  "43.134.0.156", //Shenzhen
  "43.157.111.230", //Shenzhen
  "43.157.122.183", //Shenzhen
  "43.155.39.204", //Shenzhen
  "43.163.8.133", //Shenzhen
  "43.153.193.115", //Shenzhen
  "43.157.53.115", //Shenzhen
  "43.130.9.111", //Shenzhen
  "43.130.60.195", //Shenzhen
  "43.135.142.37", //Shenzhen
  "43.157.50.58", //Shenzhen
  "43.153.79.218", //Shenzhen
  "43.165.70.220", //Shenzhen
  "43.153.35.128", //Shenzhen
  "43.155.157.239", //Shenzhen
  "43.157.148.38", //Shenzhen
  "43.154.140.188", //Shenzhen
  "43.133.220.37", //Shenzhen
  "43.135.140.225", //Shenzhen
  "101.33.55.204", //Shenzhen
  "43.153.85.46", //Shenzhen
  "43.156.232.190", //Shenzhen
  "43.130.53.252", //Shenzhen
  "43.157.175.122", //Shenzhen
  "43.156.168.214", //Shenzhen
  "43.163.104.54", //Shenzhen
  "43.155.162.41", //Shenzhen
  "43.159.135.203", //Shenzhen
  "43.157.38.131", //Shenzhen
  "43.159.132.207", //Shenzhen
  "43.135.148.92", //Shenzhen
  "43.153.10.83", //Shenzhen
  "43.159.141.150", //Shenzhen
  "43.153.104.196", //Shenzhen
  "43.155.195.141", //Shenzhen
  "43.130.12.43", //Shenzhen
  "43.153.113.127", //Shenzhen
  "43.157.156.190", //Shenzhen
  "43.157.22.109", //Shenzhen
  "43.159.145.153", //Shenzhen
  "43.130.141.193", //Shenzhen
  "43.157.174.69", //Shenzhen
  "43.157.38.228", //Shenzhen
  "43.130.100.35", //Shenzhen
  "43.130.26.3", //Shenzhen
  "43.130.101.151", //Shenzhen
  "43.157.170.13", //Shenzhen
  "43.128.149.102", //Shenzhen
  "43.157.188.74", //Shenzhen
  "43.157.188.74", //Shenzhen
  "43.159.143.187", //Shenzhen
  "43.154.250.181", //Shenzhen
  "43.130.74.193", //Shenzhen
  "43.157.52.37", //Shenzhen
  "43.153.87.54", //Shenzhen
  "43.159.145.149", //Shenzhen
  "43.153.96.79", //Shenzhen
  "43.153.87.54", //Shenzhen
  "43.130.39.254", //Shenzhen
  "43.153.10.13", //Shenzhen
  "43.130.139.136", //Shenzhen
  "43.130.67.6", //Shenzhen
  "43.157.180.116", //Shenzhen
  "43.135.145.117", //Shenzhen
  "43.135.182.43", //Shenzhen
  "43.152.72.244", //Shenzhen
  "43.157.142.101", //Shenzhen
  "43.135.145.117", //Shenzhen
  "43.157.191.20", //Shenzhen
  "43.163.206.70", //Shenzhen
  "43.130.40.120", //Shenzhen
  "43.165.135.242", //Shenzhen
  "43.159.152.184", //Shenzhen
  "43.135.130.202", //Shenzhen
  "43.157.170.126", //Shenzhen
  "43.130.102.223", //Shenzhen
  "43.164.197.224", //Shenzhen
  "43.164.195.17", //Shenzhen
  "43.153.54.138", //Shenzhen
  "43.135.133.241", //Shenzhen
  "43.130.40.120", //Shenzhen
  "223.104.70.79", //Shenzhen
  "43.167.236.228", //Shenzhen
  "43.157.172.39", //Shenzhen
  "43.165.135.242", //Shenzhen
  "43.159.149.216", //Shenzhen
  "43.167.245.18", //Shenzhen
  "43.130.131.18", //Shenzhen
  "43.164.197.177", //Shenzhen
  "43.154.127.188", //Shenzhen
  "43.130.57.76", //Shenzhen
  "43.153.122.30", //Shenzhen
  "43.167.236.228", //Shenzhen
  "43.157.181.189", //Shenzhen
  "43.128.156.124", //Shenzhen
  "43.156.204.134", //Shenzhen
  "43.135.142.7", //Shenzhen
  "43.157.179.227", //Shenzhen
  "43.130.67.33", //Shenzhen
  "43.156.109.53", //Shenzhen
  "43.135.186.135", //Shenzhen
  "43.130.37.243", //Shenzhen
  "43.157.191.20", //Shenzhen
  "43.130.3.120", //Shenzhen
  "43.153.135.208", //Shenzhen
  "43.157.150.69", //Shenzhen
  "43.159.136.201", //Shenzhen
  "43.135.144.126", //Shenzhen
  "43.153.19.83", //Shenzhen
  "43.157.181.189", //Shenzhen
  "43.131.253.14", //Shenzhen
  "43.153.135.208", //Shenzhen
  "43.153.54.14", //Shenzhen
  "43.157.147.3", //Shenzhen
  "43.166.7.113", //Shenzhen
  "43.157.180.116", //Shenzhen
  "43.153.62.161", //Shenzhen
  "43.128.100.220", //Shenzhen
  "43.153.36.110", //Shenzhen
  "43.130.16.140", //Shenzhen
  "43.155.27.244", //Shenzhen
  "43.153.123.3", //Shenzhen
  "43.130.31.17", //Shenzhen
  "43.135.87.236", //Shenzhen
  "43.154.129.169", //Shenzhen
  "43.130.78.203", //Shenzhen
  "43.159.143.139",
  "43.157.98.187",
  "43.153.71.132",






  "45.148.10.159", //Techoff
  "45.148.10.247", //Techoff
  "45.148.10.160", //Techoff
  "195.178.110.108", //Techoff
  "45.148.10.143", //Techoff
  "195.178.110.155", //Techoff
  "195.178.110.131", //Techoff
  "195.178.110.110", //Techoff
  "195.178.110.109", //Techoff
  "45.148.10.203", //Techoff
  "45.148.10.166", //Techoff
  "45.148.10.111", //Techoff
  "93.123.109.116", //Techoff
  "193.32.162.96", //Techoff
  "93.123.109.44", //Techoff
  "195.178.110.199",
  "45.148.10.244",





  "8.160.37.247", //Alibaba
  "8.160.40.118", //Alibaba
  "8.160.40.96", //Alibaba
  "8.160.37.92", //Alibaba
  "8.160.37.149", //Alibaba
  "8.160.37.188", //Alibaba
  "8.160.36.193", //Alibaba
  "8.160.40.84", //Alibaba
  "8.160.38.11", //Alibaba
  "8.160.40.119", //Alibaba
  "8.160.40.100", //Alibaba
  "8.160.40.244", //Alibaba
  "8.160.40.197", //Alibaba
  "8.160.37.128", //Alibaba
  "8.160.38.33", //Alibaba
  "8.160.38.70", //Alibaba
  "8.160.37.27", //Alibaba
  "8.160.37.4", //Alibaba
  "8.160.40.22", //Alibaba
  "8.160.40.219", //Alibaba
  "8.160.37.151", //Alibaba
  "8.160.37.5", //Alibaba
  "8.160.37.175", //Alibaba
  "8.160.40.40", //Alibaba
  "8.160.40.155", //Alibaba
  "8.160.40.215", //Alibaba
  "8.160.36.164", //Alibaba
  "8.160.38.206", //Alibaba
  "47.79.121.231", //Alibaba
  "47.79.203.195", //Alibaba
  "8.218.214.49", //Alibaba
  "47.79.202.64", //Alibaba
  "47.79.202.94", //Alibaba
  "8.160.37.22", //Alibaba
  "8.160.38.84", //Alibaba
  "8.160.36.150", //Alibaba
  "8.218.0.141", //Alibaba
  "8.160.37.208", //Alibaba
  "8.218.0.141", //Alibaba
  "47.243.63.168", //Alibaba
  "47.76.80.31", //Alibaba
  "8.217.72.125", //Alibaba
  "47.76.80.31", //Alibaba
  "47.76.80.31", //Alibaba
  "47.79.201.160", //Alibaba
  "47.79.201.231", //Alibaba
  "8.218.0.141", //Alibaba
  "8.210.204.170", //Alibaba
  "47.76.80.31", //Alibaba
  "8.218.0.141", //Alibaba
  "47.76.80.31", //Alibaba
  "47.79.217.210", //Alibaba
  "47.79.219.227", //Alibaba
  "47.79.216.242", //Alibaba
  "47.79.218.128", //Alibaba
  "47.79.0.217", //Alibaba
  "47.79.196.169", //Alibaba
  "47.79.218.153", //Alibaba
  "47.79.206.10", //Alibaba
  "47.79.214.166", //Alibaba
  "8.160.36.168", //Alibaba
  "47.79.196.41", //Alibaba
  "47.79.218.174", //Alibaba
  "8.160.37.197", //Alibaba
  "8.160.37.70", //Alibaba
  "8.160.38.56", //Alibaba
  "8.160.39.209", //Alibaba
  "8.160.39.210", //Alibaba
  "8.160.38.236", //Alibaba
  "8.160.36.213", //Alibaba
  "8.160.36.224", //Alibaba
  "8.160.38.22", //Alibaba
  "47.79.219.178", //Alibaba
  "47.79.219.172", //Alibaba
  "47.79.219.216", //Alibaba
  "47.79.218.171", //Alibaba
  "47.79.218.242", //Alibaba
  "47.79.219.196", //Alibaba
  "47.79.219.71", //Alibaba
  "47.79.218.213", //Alibaba
  "47.79.218.98", //Alibaba
  "47.79.218.162", //Alibaba
  "47.79.218.236", //Alibaba
  "47.79.219.66", //Alibaba
  "47.79.219.22", //Alibaba
  "47.79.218.110", //Alibaba
  "47.79.218.233", //Alibaba
  "47.79.219.63", //Alibaba
  "47.79.219.27", //Alibaba
  "47.79.219.117", //Alibaba
  "47.79.219.45", //Alibaba
  "47.79.218.205", //Alibaba
  "47.79.219.242", //Alibaba
  "47.79.219.11", //Alibaba
  "47.79.1.223", //Alibaba
  "47.79.118.217", //Alibaba
  "47.79.123.96", //Alibaba
  "47.79.203.231", //Alibaba
  "47.79.0.139", //Alibaba
  "47.79.121.230", //Alibaba
  "47.79.193.60", //Alibaba
  "47.79.123.193", //Alibaba
  "47.79.5.178", //Alibaba
  "47.254.142.180", //Alibaba
  "47.82.11.86", //Alibaba
  "47.79.98.204", //Alibaba
  "47.82.11.96", //Alibaba
  "8.219.180.164", //Alibaba
  "47.79.197.133", //Alibaba
  "47.79.213.31", //Alibaba
  "47.79.197.112", //Alibaba
  "47.79.216.26",
  "47.79.203.11",
  "47.79.200.183",
  "47.79.203.22",
  "47.79.202.120",
  "47.79.213.182",
  "47.79.199.122",
  "47.79.198.236",
  



  

  "104.252.191.165", //EGIHosting
  "104.252.191.222", //EGIHosting
  "104.252.191.114", //EGIHosting
  "104.164.126.245", //EGIHosting
  "104.164.126.131", //EGIHosting
  "104.164.173.167", //EGIHosting
  "104.164.126.80", //EGIHosting
  "104.252.191.125", //EGIHosting
  "104.164.126.127", //EGIHosting
  "104.252.191.244", //EGIHosting
  "104.164.173.84", //EGIHosting
  "104.164.173.56", //EGIHosting
  "104.164.173.171", //EGIHosting
  "104.164.173.123", //EGIHosting
  "104.252.191.112", //EGIHosting
  "104.252.191.9", //EGIHosting
  "104.164.173.99", //EGIHosting
  "104.252.191.162", //EGIHosting
  "104.164.173.12", //EGIHosting
  "104.252.191.65", //EGIHosting
  "104.164.173.193", //EGIHosting
  "104.164.126.190", //EGIHosting
  "45.39.174.60", //EGIHosting
  "104.164.173.23", //EGIHosting
  "104.252.191.142", //EGIHosting
  "104.164.173.53", //EGIHosting
  "104.252.191.183", //EGIHosting
  "104.252.191.4", //EGIHosting
  "104.164.173.181", //EGIHosting
  "104.164.173.13", //EGIHosting






  "73.225.118.110", //Comcast Cable Communications
  "73.5.143.96", //Comcast Cable Communications
  "68.53.182.213", //Comcast Cable Communications
  "73.177.226.129", //Comcast Cable Communications
  "24.245.17.121", //Comcast Cable Communications
  "71.56.153.131", //Comcast Cable Communications
  "73.55.134.83", //Comcast Cable Communications
  "73.37.56.57", //Comcast Cable Communications
  "71.59.26.138", //Comcast Cable Communications
  "73.150.190.46", //Comcast Cable Communications
  "98.43.207.136", //Comcast Cable Communications
  "73.247.144.89", //Comcast Cable Communications
  "73.15.110.238", //Comcast Cable Communications
  "73.170.187.189", //Comcast Cable Communications
  "67.169.23.80", //Comcast Cable Communications
  "71.196.152.243", //Comcast Cable Communications
  "73.153.102.197", //Comcast Cable Communications
  "73.96.70.223", //Comcast Cable Communications
  "24.62.141.174", //Comcast Cable Communications
  "24.22.48.145", //Comcast Cable Communications
  "71.231.83.23", //Comcast Cable Communications
  "174.167.5.106", //Comcast Cable Communications
  "73.197.229.132", //Comcast Cable Communications
  "73.228.102.143", //Comcast Cable Communications
  "98.34.70.74", //Comcast Cable Communications
  "98.210.197.45", //Comcast Cable Communications
  "98.47.113.21", //Comcast Cable Communications
  "174.52.254.98", //Comcast Cable Communications
  "24.131.142.119", //Comcast Cable Communications
  "73.165.113.171", //Comcast Cable Communications
  "76.115.32.184", //Comcast Cable Communications
  "75.74.9.172", //Comcast Cable Communications
  "73.164.160.251", //Comcast Cable Communications
  "73.95.113.132", //Comcast Cable Communications
  "98.193.70.52", //Comcast Cable Communications
  "98.252.51.222", //Comcast Cable Communications
  "67.170.96.196", //Comcast Cable Communications






  "196.251.87.128", //cheapy.host LLC
  "196.251.85.138", //cheapy.host LLC
  "196.251.85.248", //cheapy.host LLC
  "196.251.84.137", //cheapy.host LLC
  "196.251.81.7", //cheapy.host LLC
  "196.251.81.2", //cheapy.host LLC
  "196.251.85.239", //cheapy.host LLC
  "196.251.70.13", //cheapy.host LLC
  "196.251.85.111", //cheapy.host LLC
  "196.251.85.246", //cheapy.host LLC





  "161.123.249.116", //HostRoyale Technologies
  "185.223.56.104", //HostRoyale Technologies
  "213.188.66.115", //HostRoyale Technologies
  "193.19.204.4", //HostRoyale Technologies
  "156.235.66.173", //HostRoyale Technologies
  "121.91.176.156", //HostRoyale Technologies
  "45.138.235.140", //HostRoyale Technologies
  "94.139.224.240", //HostRoyale Technologies
  "188.215.77.118", //HostRoyale Technologies
  "45.149.31.116", //HostRoyale Technologies
  "209.242.212.70", //HostRoyale Technologies
  "94.139.224.218", //HostRoyale Technologies
  "94.139.234.71", //HostRoyale Technologies
  "188.215.76.194", //HostRoyale Technologies
  "45.144.88.236", //HostRoyale Technologies
  "209.242.215.33", //HostRoyale Technologies
  "45.144.90.2", //HostRoyale Technologies
  "45.144.88.169", //HostRoyale Technologies
  "94.139.236.40", //HostRoyale Technologies
  "161.123.147.217", //HostRoyale Technologies
  "161.123.204.237", //HostRoyale Technologies
  "185.201.188.24", //HostRoyale Technologies
  "180.149.229.147", //HostRoyale Technologies
  "209.242.219.34", //HostRoyale Technologies
  "168.205.75.92", //HostRoyale Technologies
  "185.152.39.78", //HostRoyale Technologies
  "45.89.116.171", //HostRoyale Technologies
  "94.139.59.252", //HostRoyale Technologies
  "45.67.6.123", //HostRoyale Technologies
  "45.134.79.95", //HostRoyale Technologies
  "140.174.124.126", //HostRoyale Technologies
  "160.224.70.140", //HostRoyale Technologies




  "154.28.229.215", //QuickPacket
  "154.28.229.100", //QuickPacket
  "154.28.229.158", //QuickPacket
  "154.28.229.64", //QuickPacket
  "154.28.229.242", //QuickPacket
  "154.28.229.7", //QuickPacket
  "154.28.229.43", //QuickPacket
  "154.28.229.154", //QuickPacket
  "154.28.229.203", //QuickPacket
  "104.153.81.197", //QuickPacket
  "154.28.229.155", //QuickPacket
  "104.153.81.161", //QuickPacket
  "154.30.97.86", //QuickPacket
  "154.30.97.84", //QuickPacket
  "154.30.97.206", //QuickPacket
  "154.30.96.244", //QuickPacket
  "154.30.99.245", //QuickPacket
  "154.28.229.245", //QuickPacket
  "154.28.229.44", //QuickPacket
  "154.28.229.148", //QuickPacket



  


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
  "51.75.18.6", //OVH SAS
  "51.77.211.229", //OVH SAS
  "57.129.69.52", //OVH SAS
  "51.77.210.64", //OVH SAS
  "51.77.211.191", //OVH SAS
  "51.68.143.45", //OVH SAS
  "51.38.225.46", //OVH SAS
  "198.50.212.160", //OVH SAS
  "51.89.204.82", //OVH SAS
  "146.59.126.232", //OVH SAS
  "57.129.2.8", //OVH SAS
  "54.37.19.39", //OVH SAS
  "79.137.26.213",
  "54.37.255.38",





  
  "198.46.253.99", //HostPapa
  "198.23.221.50", //HostPapa
  "107.173.94.176", //HostPapa
  "107.174.244.108", //HostPapa
  "104.168.80.184", //HostPapa
  "192.210.184.249", //HostPapa
  "198.23.221.50", //HostPapa
  "198.23.221.51", //HostPapa
  "23.229.104.2", //HostPapa
  "107.172.195.16", //HostPapa
  "198.12.69.93", //HostPapa
  "107.172.195.106", //HostPapa
  "107.172.195.246", //HostPapa
  "107.172.195.60", //HostPapa
  "107.172.195.222", //HostPapa
  "107.172.195.108", //HostPapa
  "107.172.195.119", //HostPapa
  "107.172.195.124", //HostPapa
  "107.172.195.33", //HostPapa
  "192.210.150.198", //HostPapa
  "192.210.150.196", //HostPapa
  "23.229.104.2", //HostPapa
  "192.210.150.198", //HostPapa
  "107.172.195.148", //HostPapa
  "107.173.224.64", //HostPapa
  "107.172.195.169", //HostPapa
  "107.172.195.8", //HostPapa
  "23.229.104.2", //HostPapa
  "107.172.195.129", //HostPapa
  "107.172.195.126", //HostPapa
  "107.172.195.9", //HostPapa
  "107.172.195.50", //HostPapa
  "38.152.155.73", //HostPapa
  "38.152.180.154", //HostPapa
  "172.245.92.92", //HostPapa
  "107.175.55.35", //HostPapa




  
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
  "37.27.51.139", //Hetzner Online GmbH
  "5.161.70.196", //Hetzner Online GmbH
  "5.161.237.244", //Hetzner Online GmbH
  "178.156.178.119", //Hetzner Online GmbH
  "95.217.133.12", //Hetzner Online GmbH
  "178.156.218.163", //Hetzner Online GmbH
  "148.251.108.25", //Hetzner Online GmbH
  "5.161.219.16", //Hetzner Online GmbH






  "180.97.39.28", //China Telecom
  "36.155.132.160", //China Mobile
  "49.7.150.239", //China Telecom
  "106.38.188.234", //China Telecom
  "220.181.90.201", //China Telecom
  "220.181.90.229", //China Telecom
  "49.7.150.16", //China Telecom
  "106.38.188.168", //China Telecom
  "49.7.149.205", //China Telecom
  "49.7.149.190", //China Telecom
  "106.38.180.229", //China Telecom




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
  "18.222.219.244",  //Amazon
  "54.209.60.63", //Amazon
  "140.179.165.204", //Amazon
  "34.212.242.46", //Amazon
  "52.88.23.78", //Amazon
  "3.78.178.37", //Amazon
  "18.246.161.112", //Amazon
  "34.221.50.184", //Amazon







  "116.204.77.237", //Huawei
  "116.204.7.15", //Huawei
  "116.204.99.59", //Huawei
  "116.204.102.28", //Huawei
  "121.37.99.73", //Huawei
  "116.204.98.102", //Huawei
  "116.204.73.141", //Huawei
  "113.44.105.92", //Huawei
  "116.204.72.11", //Huawei
  "116.204.19.71", //Huawei
  "121.37.100.105", //Huawei
  "1.92.219.184", //Huawei
  "121.37.101.80", //Huawei
  "116.204.30.197", //Huawei
  "116.204.69.190", //Huawei
  "121.37.99.182", //Huawei
  "116.204.9.84", //Huawei
  "116.204.98.61", //Huawei
  "116.204.109.34", //Huawei
  "202.76.176.170", //Huawei
  "202.76.165.163", //Huawei
  "119.8.114.234", //Huawei
  "122.8.179.0", //Huawei
  "111.119.206.157", //Huawei
  "119.13.88.72", //Huawei
  "94.74.99.251", //Huawei
  "188.239.11.72", //Huawei
  "110.238.104.127", //Huawei
  "202.76.164.175", //Huawei
  "146.174.182.131", //Huawei
  "146.174.173.69", //Huawei
  "146.174.175.65", //Huawei
  "146.174.166.243", //Huawei
  "146.174.190.21", //Huawei
  "146.174.183.90", //Huawei
  "146.174.166.234", //Huawei
  "146.174.190.28", //Huawei
  "146.174.185.9", //Huawei
  "146.174.166.223", //Huawei
  "146.174.180.225", //Huawei
  "146.174.180.127", //Huawei
  "146.174.165.191", //Huawei
  "146.174.189.46", //Huawei
  "146.174.164.98", //Huawei
  "146.174.177.123", //Huawei
  "146.174.177.246", //Huawei
  "146.174.180.211", //Huawei
  "146.174.180.164", //Huawei
  "146.174.190.195", //Huawei
  "202.76.160.145", //Huawei
  "146.174.181.168", //Huawei
  "146.174.177.127", //Huawei
  "146.174.172.139", //Huawei
  "146.174.183.116", //Huawei
  "146.174.189.101", //Huawei
  "146.174.167.210", //Huawei
  "46.250.169.72", //Huawei
  "146.174.164.62", //Huawei
  "146.174.165.93", //Huawei
  "202.76.167.181", //Huawei
  "146.174.184.55", //Huawei
  "202.76.166.99", //Huawei
  "146.174.174.133", //Huawei
  "202.76.167.137", //Huawei
  "146.174.184.213", //Huawei
  "146.174.172.181", //Huawei
  "202.76.166.6", //Huawei
  "202.76.164.128", //Huawei
  "124.243.191.77", //Huawei
  "122.8.186.87", //Huawei
  "159.138.99.167", //Huawei
  "119.12.173.131", //Huawei
  "166.108.239.109", //Huawei
  "124.243.149.196", //Huawei
  "188.239.46.50", //Huawei
  "113.44.110.9", //Huawei
  "116.204.123.112", //Huawei
  "1.92.222.154", //Huawei
  "116.204.101.196", //Huawei
  "1.92.195.92", //Huawei
  "121.37.118.66", //Huawei
  "116.204.6.71", //Huawei
  "116.204.66.123", //Huawei
  "116.204.99.102", //Huawei
  "116.204.33.204", //Huawei
  "121.37.97.239", //Huawei
  "116.204.115.182", //Huawei
  "1.92.223.13", //Huawei
  "116.204.107.13", //Huawei
  "113.44.115.28", //Huawei
  "113.44.110.217", //Huawei
  "116.204.34.64", //Huawei
  "116.204.37.221", //Huawei
  "121.37.95.246", //Huawei
  "116.204.70.50", //Huawei
  "1.92.200.229", //Huawei
  "116.204.118.24", //Huawei
  "116.204.99.3", //Huawei
  "116.204.117.170", //Huawei






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
  "172.253.192.113", //Google
  "173.194.92.189", //Google
  "172.253.15.231", //Google LLC
  "172.253.192.120", //Google LLC
  "172.253.216.62", //Google LLC
  "172.253.192.121", //Google LLC
  "172.253.192.241", //Google LLC
  "66.249.84.229", //Google LLC
  "34.133.201.46", //Google LLC
  "64.233.172.196", //Google LLC
  "172.253.216.52", //Google LLC
  "34.172.215.228", //Google LLC
  "34.28.133.161", //Google LLC
  "34.96.47.219",






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
  "104.131.188.228", //Digital Ocean
  "162.243.184.81", //Digital Ocean
  "159.203.96.207", //Digital Ocean
  "159.203.130.117", //Digital Ocean
  "45.55.48.136", //Digital Ocean
  "138.197.12.167", //Digital Ocean
  "104.131.164.108", //Digital Ocean
  "165.227.89.105", //Digital Ocean
  "104.248.17.176", //Digital Ocean
  "138.197.83.91", //Digital Ocean
  "104.131.189.132", //Digital Ocean
  



  "129.226.93.214", //Tencent
  "170.106.143.6", //Tencent
  "170.106.11.6", //Tencent
  "162.62.231.139", //Tencent
  "162.62.213.165", //Tencent
  "162.62.231.139", //Tencent
  "170.106.143.6", //Tencent
  "170.106.180.246", //Tencent
  "49.51.141.76", //Tencent
  "49.51.253.26", //Tencent
  "43.131.45.213", //Tencent
  "49.51.39.209", //Tencent
  "150.109.230.210", //Tencent
  "43.166.128.86", //Tencent
  "129.226.213.145", //Tencent
  "43.134.141.244", //Tencent
  "43.166.130.123", //Tencent
  "43.166.242.189", //Tencent
  "43.131.45.213", //Tencent
  "43.166.142.76", //Tencent
  "124.156.225.181", //Tencent
  "49.51.183.84", //Tencent
  "162.62.213.187", //Tencent
  "43.133.91.48", //Tencent
  "43.166.128.187", //Tencent
  "170.106.82.209", //Tencent
  "43.159.148.221", //Tencent
  "43.159.143.190", //Tencent
  "170.106.180.153", //Tencent
  "43.130.14.245", //Tencent
  "43.130.111.40", //Tencent
  "43.135.145.77", //Tencent
  "43.130.139.177", //Tencent
  "162.62.132.25", //Tencent
  "170.106.187.106", //Tencent
  "170.106.163.84", //Tencent
  "43.135.133.194", //Tencent
  "43.135.135.57", //Tencent
  "49.51.180.2", //Tencent
  "49.51.132.100", //Tencent
  "43.159.128.155", //Tencent
  "43.156.156.96", //Tencent
  "162.62.132.25", //Tencent
  "101.33.81.73", //Tencent
  "49.51.183.75", //Tencent
  "43.159.152.4", //Tencent
  "43.130.71.237", //Tencent
  "43.157.153.236", //Tencent
  "43.164.197.209", //Tencent
  "43.165.65.75", //Tencent
  "150.109.46.88", //Tencent
  "170.106.72.178", //Tencent
  "43.167.157.80", //Tencent
  "43.153.49.151", //Tencent
  "43.165.67.57", //Tencent
  "150.109.46.88", //Tencent
  "43.153.119.119", //Tencent
  "43.135.138.128", //Tencent
  "101.32.49.171", //Tencent
  "49.51.52.250", //Tencent
  "170.106.180.139", //Tencent
  "43.166.136.153", //Tencent
  "49.51.178.45", //Tencent
  "170.106.180.139", //Tencent
  "43.166.136.24", //Tencent
  "49.51.33.159", //Tencent
  "43.130.72.177", //Tencent
  "43.155.188.157", //Tencent
  "43.135.36.201", //Tencent
  "43.157.95.131", //Tencent
  "49.51.183.220", //Tencent
  "43.166.239.145", //Tencent
  "43.131.39.179", //Tencent
  "49.51.73.183", //Tencent
  "124.156.226.179", //Tencent
  "43.166.238.12", //Tencent
  "170.106.147.63", //Tencent
  "49.51.72.236", //Tencent
  "49.51.73.183", //Tencent
  "43.166.226.186", //Tencent
  "49.51.253.83", //Tencent
  "49.51.203.164", //Tencent
  "170.106.197.109", //Tencent
  "170.106.37.134", //Tencent
  "170.106.161.78", //Tencent
  "43.131.26.226", //Tencent
  "170.106.65.93", //Tencent
  "170.106.165.186", //Tencent
  "170.106.113.159", //Tencent
  "170.106.15.3", //Tencent
  "49.51.196.42", //Tencent
  "170.106.84.136", //Tencent
  "49.51.245.241", //Tencent
  "170.106.140.110", //Tencent
  "49.51.47.100", //Tencent
  "119.28.89.249", //Tencent
  "170.106.11.141", //Tencent
  "170.106.15.3", //Tencent
  "170.106.110.146", //Tencent
  "170.106.113.235", //Tencent
  "170.106.73.216", //Tencent
  "170.106.35.187", //Tencent
  "49.51.183.15", //Tencent
  "49.51.38.193", //Tencent
  "170.106.163.48", //Tencent
  "119.28.140.106", //Tencent
  "43.166.247.155", //Tencent
  "43.166.251.233", //Tencent
  "43.131.32.36", //Tencent
  "43.166.255.122", //Tencent
  "43.166.240.231", //Tencent
  "101.33.80.42", //Tencent
  "43.157.5.192", //Tencent
  "43.166.244.251", //Tencent
  "150.109.119.38", //Tencent
  "43.166.136.202", //Tencent
  "43.166.226.57", //Tencent
  "43.166.250.187", //Tencent
  "170.106.179.68", //Tencent
  "43.157.95.239", //Tencent
  "43.166.251.233", //Tencent
  "43.166.253.94", //Tencent
  "43.166.244.192", //Tencent
  "43.153.62.161", //Tencent
  "43.130.116.87", //Tencent
  "43.159.138.217", //Tencent
  "43.135.183.82", //Tencent
  "170.106.35.153", //Tencent
  "101.32.208.70", //Tencent
  "43.153.58.28", //Tencent
  "170.106.167.214", //Tencent
  "43.157.158.178", //Tencent
  "170.106.72.93", //Tencent
  "43.166.134.47", //Tencent
  "43.153.74.75", //Tencent
  "43.159.128.237", //Tencent
  "43.167.232.38", //Tencent
  "43.155.140.157", //Tencent
  "43.173.1.57", //Tencent
  "43.134.186.61", //Tencent
  "43.131.23.154", //Tencent
  "170.106.165.76", //Tencent
  "49.51.233.46", //Tencent
  "43.166.247.82", //Tencent
  "43.166.255.102", //Tencent
  "43.153.7.191", //Tencent
  "43.137.44.245", //Tencent
  "1.14.1.251", //Tencent
  "81.70.43.134", //Tencent
  "129.211.222.187", //Tencent
  "139.186.87.234", //Tencent
  "148.70.105.99", //Tencent
  "132.232.210.59", //Tencent
  "1.14.22.141", //Tencent
  "94.191.30.115", //Tencent
  "1.14.14.121", //Tencent
  "119.29.219.99", //Tencent
  "119.45.184.213", //Tencent
  "101.35.251.230", //Tencent
  "118.24.16.211", //Tencent
  "81.70.182.68", //Tencent
  "43.138.151.195", //Tencent
  "129.28.184.78", //Tencent
  "139.186.76.68", //Tencent
  "43.136.122.133", //Tencent
  "42.193.50.239", //Tencent
  "139.186.232.45", //Tencent
  "43.143.244.137", //Tencent
  "118.195.223.238", //Tencent
  "123.207.201.66", //Tencent
  "94.191.7.122", //Tencent
  "49.232.128.109", //Tencent
  "119.45.101.114", //Tencent
  "122.152.222.76", //Tencent
  "129.211.0.223", //Tencent
  "111.230.96.209", //Tencent
  "43.138.103.36", //Tencent
  "124.223.6.19", //Tencent
  "82.156.237.80", //Tencent
  "42.193.108.181", //Tencent
  "101.43.190.74", //Tencent
  "43.131.4.40", //Tencent
  "146.56.226.111", //Tencent
  "119.28.224.111", //Tencent
  "43.166.136.65", //Tencent
  "43.156.43.119", //Tencent
  "43.167.162.70", //Tencent
  "43.167.217.209", //Tencent
  "43.157.88.5", //Tencent
  "129.226.146.84", //Tencent
  "43.154.109.84", //Tencent
  "162.62.135.64", //Tencent
  "62.234.52.231", //Tencent
  "101.32.33.206", //Tencent
  "1.14.2.220", //Tencent
  "150.109.197.39", //Tencent
  "43.167.206.79", //Tencent
  "148.70.67.190", //Tencent
  "43.131.49.234", //Tencent
  "119.29.73.252", //Tencent
  "129.226.90.89", //Tencent
  "119.45.205.36", //Tencent
  "129.226.58.232", //Tencent
  "43.163.106.18", //Tencent
  "150.109.110.104", //Tencent
  "43.157.111.248", //Tencent
  "43.131.13.128", //Tencent
  "43.155.71.183", //Tencent
  "43.128.87.64", //Tencent
  "119.45.212.253", //Tencent
  "162.62.209.248", //Tencent
  "43.163.83.249", //Tencent
  "119.28.4.161", //Tencent
  "43.131.16.244", //Tencent
  "43.153.219.175", //Tencent
  "43.156.163.134", //Tencent
  "43.128.55.10", //Tencent
  "43.156.175.134", //Tencent
  "132.232.154.116", //Tencent
  "43.166.239.33", //Tencent
  "162.62.62.40", //Tencent
  "43.153.192.130", //Tencent
  "170.106.108.91", //Tencent
  "162.62.126.88", //Tencent
  "43.166.233.251", //Tencent
  "43.153.194.164", //Tencent
  "119.45.71.238", //Tencent
  "119.28.130.44", //Tencent
  "118.24.84.212", //Tencent
  "118.24.32.134", //Tencent
  "129.226.209.217", //Tencent
  "119.45.174.195", //Tencent
  "119.45.162.40", //Tencent
  "43.143.175.10", //Tencent
  "118.24.61.30", //Tencent
  "119.45.63.63", //Tencent
  "94.191.46.66", //Tencent
  "43.136.217.73", //Tencent
  "43.139.55.198", //Tencent
  "43.157.22.57", //Tencent
  "49.51.204.74", //Tencent
  "43.159.152.187", //Tencent
  "43.173.1.69", //Tencent
  "43.153.76.247", //Tencent
  "43.130.102.7", //Tencent
  "43.155.26.193", //Tencent
  "170.106.192.208", //Tencent
  "43.130.3.122", //Tencent
  "170.106.193.108", //Tencent
  "170.106.107.87", //Tencent
  "43.166.224.244", //Tencent
  "49.51.252.146", //Tencent
  "43.166.237.57", //Tencent
  "43.166.132.142", //Tencent
  "43.153.67.21", //Tencent
  "43.157.67.70", //Tencent
  "119.28.177.175", //Tencent
  "43.130.47.33", //Tencent
  "43.153.102.138", //Tencent
  "43.166.246.180", //Tencent
  "43.128.67.187", //Tencent
  "49.51.36.179", //Tencent
  "43.159.128.247", //Tencent
  "43.165.189.206", //Tencent
  "43.152.72.247", //Tencent
  "43.166.131.228", //Tencent
  "43.133.69.37", //Tencent
  "43.166.129.247", //Tencent
  "43.130.16.212", //Tencent
  "43.153.123.4", //Tencent
  "43.128.100.220", //Tencent
  "170.106.148.137", //Tencent
  "43.135.211.148", //Tencent
  "43.166.134.114", //Tencent
  "43.132.214.228", //Tencent
  "129.226.174.80", //Tencent
  "124.156.157.91", //Tencent
  "49.51.195.195", //Tencent
  "43.131.36.84", //Tencent
  "49.51.72.76",
  "49.51.166.228",




  "23.106.201.146", //Leaseweb
  "172.241.235.234", //Leaseweb
  "23.80.157.86", //Leaseweb
  "23.19.216.136", //Leaseweb
  "23.82.104.87", //Leaseweb
  "23.82.106.181", //Leaseweb
  "23.81.62.180", //Leaseweb
  "23.81.62.147", //Leaseweb
  "23.83.81.2", //Leaseweb
  "46.165.193.216", //Leaseweb
  "23.81.61.123", //Leaseweb
  "23.105.0.154", //Leaseweb
  "172.241.186.140", //Leaseweb
  "23.81.63.219", //Leaseweb
  "23.81.62.209", //Leaseweb
  "23.106.28.123", //Leaseweb
  "23.80.146.235", //Leaseweb
  "23.81.49.243", //Leaseweb
  "212.95.54.78", //Leaseweb
  "23.82.186.47", //Leaseweb
  "23.81.67.112", //Leaseweb
  "23.106.24.48", //Leaseweb
  "23.106.22.9", //Leaseweb
  "23.80.164.4", //Leaseweb
  "23.80.148.106", //Leaseweb
  "23.106.193.224", //Leaseweb
  "23.82.81.142", //Leaseweb
  "136.0.180.39", //Leaseweb
  "142.111.161.189", //Leaseweb
  "23.80.141.104", //Leaseweb
  "23.80.141.210", //Leaseweb




  "93.152.210.197", //cyberzonehub.com
  "93.152.210.204", //cyberzonehub.com
  "93.152.210.187", //cyberzonehub.com





  "172.225.246.33", //Akamai
  "172.225.251.25", //Akamai
  "172.226.116.21", //Akamai
  "172.104.243.155", //Akamai
  "172.233.93.156", //Akamai





  "20.120.134.33", //Microsoft
  "52.247.239.25", //Microsoft
  "20.171.207.7", //Microsoft
  "52.247.239.25", //Microsoft
  "40.80.158.10", //Microsoft
  "172.211.8.166", //Microsoft
  "40.77.167.25", //Microsoft
  "40.82.178.254", //Microsoft
  




  "195.210.4.1", //Bitdefender SRL
  "99.255.100.228", //projectsdomain.org
  "2a06:98c0:3600::103", //Cloudflare
  "84.201.183.13", //Yandex
  "141.98.11.115", //UAB Host Baltic





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
  "77.228.188.177",
  "95.62.216.89",
  "89.7.230.164",
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
