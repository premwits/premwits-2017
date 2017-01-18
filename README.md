# PRE-MWITS GO 2016: The Last Act

Web-based activity game

## Preparing environment
- MySQL 5.7
- PHP 5.5
- Apache 2

NOTE: Please be sure that your php.ini set `short_open_tag = On`

## Installing
- Download files from [GitHub/master](http://github.com/rayriffy/premwits_2016)
- Place these files to your root directory

## About this damn application
### Loging in
Users can login to system by using `login_hash_id` that we stored on `json_dat/account.json`

<br />

``
{
  "account":
  [
    {"name":"Group1","hash":"37bc399481f64fe1a9545b04eb64a622","group_num":1},
    {"name":"Group2","hash":"489a31c39d5483bc28680e9f6ec6602d","group_num":2},
    {"name":"Group3","hash":"78228344f8d34fc4bdb4997a127877ae","group_num":3},
    {"name":"Group4","hash":"bbfb032c2378e99208396aabbde7ad9a","group_num":4},
    {"name":"Group5","hash":"ff9686c0c5262fceec48ab1da7f2179c","group_num":5},
    {"name":"Group6","hash":"eb57871b7024456169c303321bc485a4","group_num":6},
    {"name":"Group7","hash":"ac674c02c64fc698572ebeda827d9491","group_num":7},
    {"name":"Group8","hash":"8bf7b51f16dbdedf8f80c56502d58d62","group_num":8},
    {"name":"Group9","hash":"4c9aefbda59da17f113b45771934d470","group_num":9},
    {"name":"Group10","hash":"5a1ea83590d87eb71f3a211d138c6497","group_num":10},
    {"name":"Group11","hash":"6485f687ee8449ce842339c451f01a61","group_num":11},
    {"name":"Group12","hash":"5926183f0bd4766b09b8da68246bc604","group_num":12},
    {"name":"Group13","hash":"0bc3a6e5cd18ab05e86d93fc1b544cbc","group_num":13},
    {"name":"Group14","hash":"84bdb38764e11099d5c408683664ccfe","group_num":14},
    {"name":"Group15","hash":"1dbfac2a817386c042f7a41e3c1af175","group_num":15},
    {"name":"Group16","hash":"1b2e34cf8ed6285aed2797a87370766f","group_num":16},
    {"name":"Group17","hash":"adfaba94701c92426c65e7535e6756b2","group_num":17},
    {"name":"Group18","hash":"67508078be768fd94e6a04b9a473bb02","group_num":18},
    {"name":"Group19","hash":"20970e80cd392b258c937f4740de7976","group_num":19},
    {"name":"Group20","hash":"b28acb4a7179c1cc331163e25c777c2d","group_num":20}
  ]
}
``

<br />

now we logging in to  system by access ```login/index.php?login_hash_id=$hash```
For example, I want to login as `Group11`. So, my hash is `6485f687ee8449ce842339c451f01a61`. Finally, I can login to system by access ```login/index.php?login_hash_id=6485f687ee8449ce842339c451f01a61```.
And then type your player name and tap `START GAME`
### System
System is a web page that display all about your status like `What is your group number?` `What is your player name?` `What is your phone identity?` `What items do we have?` `What monsters do we have?` etc.
#### ::MORE INFORMATION COMING SOON::
